<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller{
    public function lista(){
        $produtos = DB::select('select * from produtos');
        return view('listagem');
    }
}