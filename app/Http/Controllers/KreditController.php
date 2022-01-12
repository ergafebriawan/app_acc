<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kredit;

class KreditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data = Kredit::get();
        return view('kredit.index', ['data' => $data]);
    }

    public function add(Request $request){
        try {
            $nama = $request->input('nama_kredit');
            $user = $request->input('user');
            $jumlah = intval($request->input('jumlah'));
            $harga = intval($request->input('harga'));
            $total = $jumlah*$harga;
            $desc = $request->input('desc');

            $data = [
                'nama_kredit' => $nama,
                'user' => $user,
                'jumlah' => $jumlah,
                'harga' => $harga,
                'total' => $total,
                'keterangan' => $desc
            ];
            // dd($data);
            Kredit::create($data);
            return redirect('/kredit');
        } catch (\Throwable $th) {
            return redirect('/kredit');
        }
    }

    public function delete($id){
        Kredit::where(['id' => $id])->delete();
        return redirect('/kredit');
    }
}
