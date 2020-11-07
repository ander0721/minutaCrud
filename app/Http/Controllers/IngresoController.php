<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Ingreso;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Ingreso::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->make(true);
        }
      
        return view('ingreso');
    }
    


    
    
    
}