<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSaleRequest;
use App\Models\Category;
use App\Models\Sale;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class SaleController extends Controller
{
    /*
    public function __construct() {
        $this->middleware('auth');
    }
*/
    /**
     * Display a listing of the resource.
     */
    public function index() /*Encargado de pintar la vista*/ 
    {
        //
        $sales = Sale::leftJoin('categories', 'sales.category_id', 'categories.id')
                ->select('sales.id', 'sales.name', 'categories.name as category_name', 'sales.fecha', 'sales.cantidad', 'sales.total', 'sales.is_status')
                ->orderBy('id', 'DESC')
                ->paginate(1); //genera una página si supera los 10 registros

       // dd($sales);

        return view('dashboard.sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $sale = new Sale();

        return view('dashboard.sales.create', compact('sale', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaleRequest $request)
    {
        //dd($request->validated());


        Sale::create($request->validated());
        return back()->with('status', 'La venta se ha creado satisfactoriamente');
      
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale )
    {
        //
        $categories = Category::all(); 
        return view('dashboard.sales.edit', compact('sale', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSaleRequest $request, Sale $sale)
    {
        
        $sale->update($request->validated());
        return back()->with('status', 'La venta se ha actualizado satisfactoriamente');   
        //dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {

        $sale->delete();
        return back()->with('status', 'La venta se ha eliminado satisfactoriamente');  
       // dd($id);
    }
}
