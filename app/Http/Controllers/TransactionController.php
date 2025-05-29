<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function index()
    {
        // Mengambil data transaction dari model transaction
        $transactions = Transaction::with('user','book')->get();

        if ($transactions->IsEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!",
            ],200);
        }

        // Mengirim data transaction ke view 'genres.index'
        return response()->json([
            "succes" => true,
            "message" => "Get All Resource",
            "data" => $transactions
        ], 200);
    }

    public function store(Request $request) {
       // 1. validator dan cek validator
       $validator = Validator::make(request()->all(), [
        'book_id' => 'required|exists:books,id',
        'quantity' => 'required|integer|min:1'
    ]);
    
    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'validation error',
            'data' => $validator->errors()
        ], 422);
    }
    // 2. generate order number -> inique | ORD-0003
    $uniqueCode = "ORD" . strtoupper(uniqid());
    
    // 3. ambil user yang sedang login & cek login ( apakah ada data user? )
    $user = auth('api')->user();

    if (!$user) {
        return response()->json([
            'success' => false,
            'message' => 'Unauthorized'
        ],401);
    }

    // 4. mencari data buku dari request
    $book = Book::find($request->book_id);

    // 5. cek stock buku
    if ($book->stock < $request->quantity) {
        return response()->json([
            'success' => false,
            'message' => 'Stock barang tidak cukup'
        ],400);
    }

    // 6. hitung total harga = proce * quantity
    $totalAmount = $book->price * $request->quantity;

    // 7. kurangi stock buku (update)
    $book->stock -= $request->quantity;
    $book->save();

    // 8. simpan data
    $transaction = Transaction::create([
        'order_number' => $uniqueCode,
        'customer_id' => $user->id,
        'book_id' => $request->book_id,
        'total_amount' => $totalAmount
    ]);
    return response()->json([
        "success" => true,
        "message" => "Transaction create successfully!",
        "data" => $transaction
    ],201);
    }

    public function show(string $id) {
        $transaction = Transaction::with('user', 'book')->find($id);

        if(!$transaction) {
            return response()->json([
                "success" => false,
                "message" => 'Resource not found'
            ],404);
        }    
        return response()->json([
            "success" => true,
            "message" => 'Get detail resource',
            "data" => $transaction
        ]);
    }

    public function update(Request $request, $id) {
    $transaction = Transaction::with('user', 'book')->find($id);

    if (!$transaction) {
        return response()->json([
            'success' => false,
            'message' => 'Transaction not found'
        ], 404);
    }

    $validator = Validator::make($request->all(), [
        'book_id' => 'exists:books,id',
        'quantity' => 'integer|min:1'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Validation error',
            'data' => $validator->errors()
        ], 422);
    }

    // Optional: perbarui buku jika diperlukan
    if ($request->has('book_id')) {
        $transaction->book_id = $request->book_id;
    }

    //  hitung ulang total jika quantity diperbarui
    if ($request->has('quantity')) {
        $book = Book::find($transaction->book_id);
        if (!$book || $book->stock < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Stock tidak cukup atau buku tidak ditemukan'
            ], 400);
        }

        $transaction->total_amount = $book->price * $request->quantity;
        $book->stock -= ($request->quantity - 1); // asumsi: pengurangan dari 1 item
        $book->save();
    }

    $transaction->save();

    return response()->json([
        'success' => true,
        'message' => 'Transaction updated successfully',
        'data' => $transaction
    ], 200);
    }

public function destroy($id) {
    $transaction = Transaction::with('user', 'book')->find($id);

    if (!$transaction) {
        return response()->json([
            'success' => false,
            'message' => 'Transaction not found'
        ], 404);
    }

    $transaction->delete();

    return response()->json([
        'success' => true,
        'message' => 'Transaction deleted successfully'
    ], 200);
    }

}
