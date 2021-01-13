<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokumenController extends Controller
{
    public function createDokumen(Request $request){
        $this->validate($request,[
            'id_user' => 'required',
            'nama_lengkap' => 'required',
            'tgl_lahir' => 'required',
            'pl' => 'required',
            'alamat' => 'required',
            'rtrw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'agama' => 'required',
            'nikah' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            'pengiriman' => 'required',
        ]);

        Dokumen::create([
            'id_user' => $request->id_user,
            'nama_lengkap' => $request->nama_lengkap,
            'tgl_lahir' => $request->tgl_lahir,
            'pl' => $request->pl,
            'alamat' => $request->alamat,
            'rtrw' => $request->rtrw,
            'kelurahan' => $request->kelurahan,
            'kecamatan'=> $request->kecamatan,
            'agama' => $request->agama,
            'nikah' => $request->nikah,
            'pekerjaan' => $request->pekerjaan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'pasfoto' => $request->pasfoto,
            'kk' => $request->kk,
            'surat_pengantar' => $request->surat_pengantar,
            'pengiriman' => $request->pengiriman,
        ]);

        return redirect()->back()->with('success', 'Pengajuan dokumen anda telah berhasil dibuat');
    }

    public function statusDokumenPelanggan(){
        $id = Auth::user()->id;
        $status = Dokumen::where('id_user', $id)->get();
        return view ('client/statusktp', ['status' => $status]);
    }

    public function deleteDokumen($id){
        $hapus = Dokumen::find($id);
        $hapus->delete();
        return redirect()->back()->with('success', 'Pengajuan dokumen telah berhasil dibatalkan');
    }
}
