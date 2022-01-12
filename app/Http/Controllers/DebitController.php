<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Debit;

class DebitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data = Debit::get();
        $jml = Debit::select('total')->sum('total');
        // dd($jml);
        return view('debit.index', ['data' => $data, 'seluruh'=>$jml]);
    }

    public function add(Request $request){
        try {
            $nama = $request->input('nama_debit');
            $user = $request->input('user');
            $debit_by = $request->input('debit_by');
            $total = intval($request->input('total'));
            $desc = $request->input('desc');
            $tgl = date('Y-m-d');

            $data = [
                'tgl' => $tgl,
                'nama_debit' => $nama,
                'debit_by' => $debit_by,
                'user' => $user,
                'total' => $total,
                'keterangan' => $desc
            ];
            // dd($data);
            Debit::create($data);
            return redirect('/debit')->with(['success' => 'Berhasil Menambahkan Debit']);
        } catch (\Throwable $th) {
            // dd("gagal memasukan data");
            return redirect('/debit')->with(['failed' => 'Gagal Menambahkan Debit, data yang anda masukan tidak valid']);
        }
    }

    public function delete($id){
        Debit::where(['id' => $id])->delete();
        return redirect('/debit');
    }
}
