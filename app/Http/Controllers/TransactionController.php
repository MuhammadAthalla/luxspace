<?php

namespace App\Http\Controllers;

use App\Models\transactionItems;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {

            $query = Transactions::query();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {

                    return
                        '<a href="' . route('dashboard.transaction.show', $item->id) . '" class="bg-pink-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 rounded shadow-lg" >show</a>

                <a href="' . route('dashboard.transaction.edit', $item->id) . '" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-lg" >Edit</a>
                
                
                ';
                })->editColumn('price', function ($item) {
                    return number_format($item->total_price);
                })->rawColumns(['action'])->make();
        }
        return view('pages.dashboard.transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transactions $transaction)
    {
        if (request()->ajax()) {

            $query = transactionItems::with('product')->where('transaction_id',$transaction->id);
            return DataTables::of($query)
                ->editColumn('product.price', function ($item) {
                    return number_format($item->product->price);
                })->make();
        }
        return view('pages.dashboard.transaction.show',compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transactions $transaction)
    {
        return view('pages.dashboard.transaction.edit',compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
