<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finance;
use App\Models\Quotation;
use App\Models\Product;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotations = Quotation::all();
        $finance = Finance::all();
        return view('dashboard/finance', ['finance' => $finance,], ['quotations' => $quotations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quotations = Quotation::all();
        $products = Product::all();
        return view('dashboard/finance/create', ['quotations' => $quotations], ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Finance::create($request->except('_token'));
        return redirect()
            ->route('finance.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $finance = Finance::findOrFail($id);
        return view('finance.show', [
            'finance' => $finance
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::all();
        $finance = Finance::findOrFail($id);
        return view('dashboard.finance.edit', ['finance' => $finance], ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $finance = Finance::findOrFail($id);
        $finance->update($request->except(['_token', '_method']));
        return redirect()
            ->route('finance.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Finance::destroy($id);
        return redirect()->intended('dashboard/finance');
    }
}
