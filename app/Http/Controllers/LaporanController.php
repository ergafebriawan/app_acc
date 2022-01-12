<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Debit;
use App\Models\Kredit;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data = Debit::get();
        return view('laporan.index', ['data' => $data]);
    }

    public function hapus($id){
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
