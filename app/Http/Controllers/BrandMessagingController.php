<?php

namespace App\Http\Controllers;

use App\Models\BrandMessaging;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandMessagingController extends Controller
{
    public function index()
    {
        return view('crud.brand-messagings.index');
    }

    public function addData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'content_footer' => 'required',
        ]);

        // response error validation
        if ($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }

        $addBrandMessagings = new BrandMessaging();
        $addBrandMessagings->title = $request->title;
        $addBrandMessagings->content = $request->content;
        $addBrandMessagings->content_footer = $request->content_footer;

        $addBrandMessagings->save();

        return response()->json([
            'success' => true,
            'message' => 'Data brand messaging berhasil ditambahkan ke dalam database',
        ], 201);
    }

    public function listData(Request $request)
    {
        $columns = [
            0 => 'id',
            1 => 'judul_brand',
            2 => 'content_brand',
            3 => 'content_footer',
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        $search = $request->input('search')['value'];

        // hitung keseluruhan
        $hitung = BrandMessaging::count();

        $brandmassageing = BrandMessaging::where(function ($q) use ($search) {
            if ($search != null)
            {
                return $q->where('title', 'LIKE', '%'.$search.'%')->orWhere('content', 'LIKE', '%'.$search.'%')->orWhere('content_footer', 'LIKE', '%'.$search.'%');
            }
        })
        ->orderby($orderColumn, $dir)
        ->skip($start)
        ->take($limit)
        ->get();

        $data = array();
        foreach($brandmassageing as $b)
        {
            $item['id'] = $b->id;
            $item['judul_brand'] = $b->title;
            $item['content_brand'] = $b->content;
            $item['content_footer'] = $b->content_footer;
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
        $find = BrandMessaging::where('id', $id)->first();

        if ($find)
        {
            $request->judul_brand != null ? $find->title = $request->judul_brand : true;
            $request->content_brand != null ? $find->content = $request->content_brand : true;
            $request->content_footer != null ? $find->content_footer = $request->content_footer : true;

            $find->save();

            return response()->json([
                'success' => true,
                'message' => 'Data brand messaging berhasil di ubah ke dalam database',
            ], 201);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal melakukan update data brand messaging',
            ], 400);
        }
    }

    public function deleteData($id)
    {
        $hapus = BrandMessaging::where('id', $id)->delete();

        if ($hapus)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data brand messagings berhasil di hapus dari database',
            ], 201);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus data informasi perusahaan',
            ], 400);
        }
    }

    public function updateSelection(Request $request)
    {
        $id = $request->input('id');
        // dd($id);

        // set all is_selected to false
        BrandMessaging::query()->update(['is_selected' => false]);

        // update selection data
        BrandMessaging::where('id', $id)->update(['is_selected' => true]);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil di update',
        ], 201);
    }

    public function getSelectedData(Request $request)
    {
        $selectedData = BrandMessaging::where('is_selected', true)->first();
        return response()->json($selectedData);
    }
    
}
