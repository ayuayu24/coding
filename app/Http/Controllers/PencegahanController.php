<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

use App\Pencegahan;
use App\PencegahanModel;
use App\Exports\PencegahanExport;
use App\Http\Controllers\Controller;

use Maatwebsite\Excel\Facades\Excel;



class PencegahanController extends Controller
{
    public function index()
    {
        $data_pencegahan = DB::table('pencegahan')->get();

        //return $data_pencegahan;
        return view('pencegahan.data_pencegahan', ['data_pencegahan' => $data_pencegahan]);
    }

    public function add()
    {
        return view('pencegahan.form_pencegahan');
    }

    public function store(Request $request)
    {
        $kategori_pencegahan    = $request->input('kategori_pencegahan');
        $nama_pengawas          = $request->input('nama_pengawas');
        $kabupaten              = $request->input('kabupaten');
        $kecamatan              = $request->input('kecamatan');
        $jabatan                = $request->input('jabatan');
        $sasaran_pencegahan     = $request->input('sasaran_pencegahan');
        $tanggal_pencegahan     = $request->input('tanggal_pencegahan');
        $waktu_pencegahan       = $request->input('waktu_pencegahan');
        $tempat_pencegahan      = $request->input('tempat_pencegahan');
        $uraian_pencegahan      = $request->input('uraian_pencegahan');
        $nama_file              = $request->input('nama_file');
        $file_pencegahan        = $request->file('file_pencegahan')->store('file_pencegahan');
        $file_pendukung         = $request->file('file_pendukung')->store('file_pendukung');

        $data = array('kategori_pencegahan'=>$kategori_pencegahan, 'nama_pengawas'=>$nama_pengawas, 'kabupaten'=>$kabupaten, 'kecamatan'=>$kecamatan, 'jabatan'=>$jabatan, 'sasaran_pencegahan'=>$sasaran_pencegahan, 'tanggal_pencegahan'=>$tanggal_pencegahan, 'waktu_pencegahan'=>$waktu_pencegahan, 'tempat_pencegahan'=>$tempat_pencegahan, 'uraian_pencegahan'=>$uraian_pencegahan, 'nama_file'=>$nama_file, 'file_pencegahan'=>$file_pencegahan, 'file_pendukung'=>$file_pendukung);

        DB::table('pencegahan')->insert($data);

        return redirect('pencegahan/data');
    }

    public function delete($id_pencegahan)
    {
        DB::table('pencegahan')->where('id_pencegahan', $id_pencegahan)->delete();
        return redirect('pencegahan/data');
    }

    public function edit($id_pencegahan)
    {
        $data_pencegahan = DB::table('pencegahan')->where('id_pencegahan', $id_pencegahan)->first();
        return view('pencegahan.edit_pencegahan',compact('data_pencegahan'));
    }

    public function editProsess(Request $request, $id_pencegahan)
    {
        DB::table('pencegahan')->where('id_pencegahan', $id_pencegahan)
            ->update([
                'kategori_pencegahan'    => $request->input('kategori_pencegahan'),
                'nama_pengawas'          => $request->input('nama_pengawas'),
                'kabupaten'              => $request->input('kabupaten'),
                'kecamatan'              => $request->input('kecamatan'),
                'jabatan'                => $request->input('jabatan'),
                'sasaran_pencegahan'     => $request->input('sasaran_pencegahan'),
                'tanggal_pencegahan'     => $request->input('tanggal_pencegahan'),
                'waktu_pencegahan'       => $request->input('waktu_pencegahan'),
                'tempat_pencegahan'      => $request->input('tempat_pencegahan'),
                'uraian_pencegahan'      => $request->input('uraian_pencegahan'),
                'nama_file'              => $request->input('nama_file'),
                'file_pencegahan'        => $request->file('file_pencegahan'),
                'file_pendukung'         => $request->file('file_pendukung')
            ]);
        return redirect('pencegahan/data');
    }

    public function cetakPencegahan($id_pencegahan)
    {
        $data_pencegahan = DB::table('pencegahan')->where('id_pencegahan', $id_pencegahan)->get();
        return view('pencegahan.cetak_pencegahan', compact('data_pencegahan'));
    }

    public function pencegahanexport(){
        return Excel::download(new PencegahanExport,'pencegahan.xlsx');
    }
}
