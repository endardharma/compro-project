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

    public function listData(Request $request)
    {
        $columns = [
            0 => 'id',
            1 => 'nama_perusahaan',
            2 => 'visi',
            3 => 'misi',
            4 => 'alamat',
            5 => 'telephone',
            6 => 'deskripsi',
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        $search = $request->input('search')['value'];

        // hitung keseluruhan
        $hitung = CompanyInformation::count();

        $info = CompanyInformation::where(function ($q) use ($search) { 
            if ($search != null)
            {
                return $q->where('nama_perusahaan', 'LIKE', '%'.$search.'%')->orWhere('id', 'LIKE', '%'.$search.'%');
            }
        })
        ->orderby($orderColumn, $dir)
        ->skip($start)
        ->take($limit)
        ->get();

        $data = array();
        foreach($info as $f)
        {
            $item['no'] = $f->id;
            $item['nama'] = $f->nama_perusahaan;
            $item['visi'] = $f->visi;
            $item['misi'] = $f->misi;
            $item['alamat'] = $f->alamat;
            $item['telephone'] = $f->telephone;
            $item['deskripsi'] = $f->deskripsi;
            $data[] = $item;
        }

        return response()->json([
            'draw' => $request->draw,
            'recordsTotal' => $hitung,
            'recordsFiltered' => $hitung,
            'data' => $data,
        ], 200);
    }

    public function updateData(Request $request, $id)
    {
        $find = CompanyInformation::where('id', $id)->first();
        // dd($find);

        if ($find)
        {
            $request->nama_perusahaan != null ? $find->nama_perusahaan = $request->nama_perusahaan : true;
            $request->visi != null ? $find->visi = $request->visi : true;
            $request->misi != null ? $find->misi = $request->misi : true;
            $request->alamat != null ? $find->alamat = $request->alamat : true;
            $request-> telephone != null ? $find->telephone = $request->telephone : true;
            $request->deskripsi != null ? $find->deskripsi = $request->deskripsi : true;

            $find->save();
            // dd($find);

            return response()->json([
                'success' => true,
                'message' => 'Berhasil meng-update data informasi perusahaan',
            ], 201);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal melakukan update data informasi perusahaan',
            ], 400);
        }

    }
}
