<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Putra;
use DB;

class PutraController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $putra = Putra::where('nama_santri','LIKE', '%' .$request->search.'%')->paginate(20);
        }else{
        $putra = Putra::paginate(20);
        }
        return view('putra.index', compact('putra'));
    }

    public function create(){
        return view('putra.create');
    }

    public function store(Request $request){
        $request->validate(
            [
                'nama_santri' => 'required',
                'nama_orang_tua' => 'required',
                'ttl' => 'required',
                'alamat' => 'required',
                'tahun_ajaran' => 'required',
            ],
            [
                'nama_santri.required' => 'Nama Santri Harus Diisi',
                'nama_orang_tua.required' => 'Nama Orang Tua Harus Diisi',
                'ttl.required' => 'Tanggal Lahir Harus Diisi',
                'alamat.required' => 'Alamat Harus Diisi',
                'tahun_ajaran.required' => 'Tahun Ajaran Harus Diisi',
            ]
        );

        DB::table('putra')->insert(
            [
                'nama_santri' => $request['nama_santri'],
                'nama_orang_tua' => $request['nama_orang_tua'],
                'alamat' => $request['alamat'],
                'ttl' => $request['ttl'],
                'tahun_ajaran' => $request['tahun_ajaran'],
            ]
        );

        return redirect('/putra');
    }

    public function show($id){
        $putra = DB::table('putra')->where('id', $id)->first();
        return view('putra.show', compact('putra'));
    }

    public function edit($id){
        $putra = DB::table('putra')->where('id', $id)->first();

        return view('putra.edit', compact('putra'));
    }

    public function update($id, Request $request){
        $request->validate(
            [
                'nama_santri' => 'required',
                'nama_orang_tua' => 'required',
                'ttl' => 'required',
                'alamat' => 'required',
                'tahun_ajaran' => 'required',
            ],
            [
                'nama_santri.required' => 'Nama Santri Harus Diisi',
                'nama_orang_tua.required' => 'Nama Orang Tua Harus Diisi',
                'ttl.required' => 'Tanggal Lahir Harus Diisi',
                'alamat.required' => 'Alamat Harus Diisi',
                'tahun_ajaran.required' => 'Tahun Ajaran Harus Diisi',
            ]
        );

        DB::table('putra')->where('id', $id)
            ->update(
                [
                    'nama_santri' => $request['nama_santri'],
                    'nama_orang_tua' => $request['nama_orang_tua'],
                    'alamat' => $request['alamat'],
                    'ttl' => $request['ttl'],
                    'tahun_ajaran' => $request['tahun_ajaran'],
                ]
            );
        
        return redirect('/putra');
    }

    public function destroy($id){
        DB::table('putra')->where('id', '=', $id)->delete();
        return redirect('/putra');
    }
}
