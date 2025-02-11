<?php

namespace App\Http\Controllers;

use App\Models\TipeKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\String\TruncateMode;

class TipeKategoriController extends Controller
{
    public function index()
    {
        return view('crud.tipe-kategori.index');
    }

    public function listData(Request $request)
    {
        $columns = [
            0 => 'id',
            1 => 'nama_kategori',
            2 => 'code_icon',
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        $search = $request->input('search')['value'];
        
        // hitung keseluruhan
        $hitung = TipeKategori::count();

        $tipeKategori = TipeKategori::where(function($q) use ($search) {
            if ($search != null)
            {
                return $q->where('nama_kategori', 'LIKE', '%'.$search.'%')->orWhere('id', 'LIKE', '%'.$search.'%');
            }
        })
        ->orderby($orderColumn, $dir)
        ->skip($start)
        ->take($limit)
        ->get();

        $data = array();
        foreach($tipeKategori as $t)
        {
            $item['id'] = $t->id;
            $item['nama_kategori'] = $t->nama_tipe_kategori;
            $item['code_icon'] = $t->code_icon;
            $data[] = $item;
        }

        return response()->json([
            'draw' => $request->draw,
            'recordsTotal' => $hitung,
            'recordsFiltered' => $hitung,
            'data' => $data,
        ], 201);
    }

    public function addData(Request $request)
    {
        // validation using Validatior
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required',
            'code_icon' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }

        $tipeKategori = new TipeKategori();
        $tipeKategori->nama_tipe_kategori = $request->nama_kategori;
        $tipeKategori->code_icon = $request->code_icon;
        $tipeKategori->save();

        return response()->json([
            'success' => true,
            'message' => 'Data tipe kategori layanan berhasil di tambahkan ke dalam database',
        ], 201);
    }
    
    public function updateData(Request $request, $id)
    {
        $find = TipeKategori::where('id', $id)->first();

        if ($find)
        {
            $request->nama_kategori != null ? $find->nama_tipe_kategori = $request->nama_kategori : true;
            $request->code_icon != null ? $find->code_icon = $request->code_icon : true;

            $find->save();

            return response()->json([
                'success' => true,
                'message' => 'Data tipe kategori layanan berhasil di ubah ke dalam database',
            ], 201);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal melakukan update data tipe kategori layanan',
            ], 400);
        }
    }
    
    public function deleteData($id)
    {
        $hapus = TipeKategori::where('id', $id)->delete();

        if ($hapus)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data tipe kategori berhasil di hapus dari database',
            ], 201);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus data tipe kategori',
            ], 400);
        }
    }

    public function getListData()
    {
        $kategoris = TipeKategori::all();
        return response()->json([
            'success' => true,
            'data' => $kategoris,
        ], 200);
    }
}
