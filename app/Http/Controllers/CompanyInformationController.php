<?php

namespace App\Http\Controllers;

use App\Models\CompanyInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyInformationController extends Controller
{
    public function index()
    {
        return view('crud.informasi-perusahaan.index');
    }

    public function addData(Request $request)
    {
        // validation
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'alamat' => 'required',
            'telephone' => 'required',
            'deskripsi' => 'required',
        ]);

        // response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $info = new CompanyInformation();
        $info->nama_perusahaan = $request->nama;
        $info->visi = $request->visi;
        $info->misi = $request->misi;
        $info->alamat = $request->alamat;
        $info->telephone = $request->telephone;
        $info->deskripsi = $request->deskripsi;
        $info->save();

        return response()->json([
            'success' => true,
            'message' => 'Data informasi perusahaan berhasil di tambahkan ke dalam database',
        ], 201);
    }
}
