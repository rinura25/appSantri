<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Putri;
use DB;

class PutriController extends Controller
{

    public function index(Request $request){

        if($request->has('search')){
            $putri = Putri::where('nama_santri','LIKE', '%' .$request->search.'%')->paginate(20);
        }else{
        $putri = Putri::paginate(20);
        }
        return view('putri.index', compact('putri'));
    }

    public function create(){
        return view('putri.create');
    }

    public function store(Request $request){
        $request->validate(
            [
                'nama_santri' => 'required',
                'nama_orang_tua' => 'required',
                'ttl' => 'required',
                'alamat' => 'required',
                'tahun_ajaran' => 'required',
                'kk' => 'image|file'
            ],
            
            [
                'nama_santri.required' => 'Nama Santri Harus Diisi',
                'nama_orang_tua.required' => 'Nama Orang Tua Harus Diisi',
                'ttl.required' => 'Tanggal Lahir Harus Diisi',
                'alamat.required' => 'Alamat Harus Diisi',
                'tahun_ajaran.required' => 'Tahun Ajaran Harus Diisi',
                'kk.required' => 'KK Harus Diisi'
            ]
        );

        DB::table('putri')->insert(
            [
                'nama_santri' => $request['nama_santri'],
                'nama_orang_tua' => $request['nama_orang_tua'],
                'alamat' => $request['alamat'],
                'ttl' => $request['ttl'],
                'tahun_ajaran' => $request['tahun_ajaran'],
                'kk' => $request['kk']
            ]
        );
    
        if($request->file('kk')){
            $request->file('kk')->store('post-images');
        }
        
        
        return redirect('/putri');
    }

    public function show($id){
        $putri = DB::table('putri')->where('id', $id)->first();
        return view('putri.show', compact('putri'));
    }

    public function edit($id){
        $putri = DB::table('putri')->where('id', $id)->first();

        return view('putri.edit', compact('putri'));
    }

    public function update($id, Request $request){
        $request->validate(
            [
                'nama_santri' => 'required',
                'nama_orang_tua' => 'required',
                'ttl' => 'required',
                'alamat' => 'required',
                'tahun_ajaran' => 'required',
                'kk' => 'required'
            ],
            [
                'nama_santri.required' => 'Nama Santri Harus Diisi',
                'nama_orang_tua.required' => 'Nama Orang Tua Harus Diisi',
                'ttl.required' => 'Tanggal Lahir Harus Diisi',
                'alamat.required' => 'Alamat Harus Diisi',
                'tahun_ajaran.required' => 'Tahun Ajaran Harus Diisi',
                'kk.required' => 'KK Harus Diisi'
            ]
        );

        DB::table('putri')->where('id', $id)
            ->update(
                [
                    'nama_santri' => $request['nama_santri'],
                    'nama_orang_tua' => $request['nama_orang_tua'],
                    'alamat' => $request['alamat'],
                    'ttl' => $request['ttl'],
                    'tahun_ajaran' => $request['tahun_ajaran'],
                    'kk' => $request['kk']
                ]
            );
        
        return redirect('/putri');
    }

    public function destroy($id){
        DB::table('putri')->where('id', '=', $id)->delete();
        return redirect('/putri');
    }

    
}
