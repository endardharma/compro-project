<?php

namespace App\Http\Controllers;

use App\Models\AboutCompany;
use App\Models\InformasiPerusahaan;
use App\Models\KategoriLayanan;
use App\Models\SelectedKategoriLayanan;
use App\Models\TipeKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\fileExists;

class KategoriLayananController extends Controller
{
    public function index()
    {
        return view('crud.kategori-layanan.index');
    }

    public function supportInformasiPerusahaan()
    {
        $namaPerusahaan = InformasiPerusahaan::all();
        $data = array();
        
        foreach ($namaPerusahaan as $c)
        {
            $item['id'] = $c->id;
            $item['nama_perusahaan'] = $c->nama_perusahaan;
            $data[] = $item;
        }
        
        return response()->json([
            'data' => $data,
        ], 200);
    }

    public function supportNamaKategoriId()
    {
        $namaKategori = TipeKategori::all();
        $data = array();
        
        foreach ($namaKategori as $n)
        {
            $item['id'] = $n->id;
            $item['nama_tipe_kategori'] = $n->nama_tipe_kategori;
            $data[] = $item;
        }

        return response([
            'data' => $data,
        ], 200);
    }

    public function addData(Request $request) 
    { 
        $validator = Validator::make($request->all(), [
            'nama_perusahaan_id' => 'required', 
            'nama_kategori_id' => 'required', 
            'deskripsi' => 'required', 
            'action_invitation' => 'required', 
            'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]); 

        // response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
        // Cek apakah file images ada dan valid 
        if ($request->hasFile('images') && $request->file('images')->isValid()) 
        { 
            // Dapatkan ekstensi file 
            $extension = $request->file('images')->getClientOriginalExtension(); 

            // membuat nama file
            $cekImage = $request->file('images');
            $imageName = $cekImage->getClientOriginalName();
            
            // Simpan gambar ke storage dan dapatkan path-nya 
            $path = $request->file('images')->storeAs('images/kategori_layanan/', $imageName, 'public'); 

            // Simpan data ke basis data 
            $kategoriLayanan = new KategoriLayanan; 
            $kategoriLayanan->perusahaan_id = $request->nama_perusahaan_id; 
            $kategoriLayanan->tipe_kategori_id = $request->nama_kategori_id; 
            $kategoriLayanan->deskripsi = $request->deskripsi; 
            $kategoriLayanan->action_invitation = $request->action_invitation; 
            $kategoriLayanan->images = $path; 
            $kategoriLayanan->save();   

            return response()->json([
                'message' => 'Data kategori layanan berhasil ditambahkan ke dalam database'
            ], 200); 
        } 
        else 
        { 
            return response()->json([
                'message' => 'File gambar tidak valid atau tidak ada.'
            ], 400);
        }
    }

    public function listData(Request $request)
    {
        $columns = [
            0 => 'id',
            1 => 'nama_perusahaan_id',
            2 => 'nama_kategori_id',
            3 => 'deskripsi', 
            4 => 'action_invitation',
            5 => 'images',
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        $search = $request->input('search')['value'];

        // hitung keseluruhan
        $hitung = KategoriLayanan::count();

        $kategori = KategoriLayanan::where(function ($q) use ($search) {
            if ($search != null)
            {
                return $q->where('nama_perusahaan_id', 'LIKE', '%'.$search.'%')->orWhere('id', 'LIKE', '%'.$search.'%')->orWhere('nama_kategori_id', 'LIKE', '%'.$search.'%');
            }
        })
        ->orderby($orderColumn, $dir)
        ->skip($start)
        ->take($limit)
        ->get();

        $data = array();
        foreach ($kategori as $k)
        {
            $item['id'] = $k->id;
            $item['perusahaa_id'] = $k->perusahaan_id;
            $item['nama_perusahaan_id'] = $k->informasiPerusahaan->nama_perusahaan ?? '';
            $item['tipe_kategori_id'] = $k->tipe_kategori_id;
            $item['nama_kategori_id'] = $k->tipeKategori->nama_tipe_kategori ?? '';
            $item['deskripsi'] = $k->deskripsi;
            $item['action_invitation'] = $k->action_invitation;
            $item['images'] = $k->images;
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
        $find = KategoriLayanan::where('id', $id)->first();

        if ($find)
        {
            $find->perusahaan_id != null ? $find->perusahaan_id = $request->perusahaan_id: true ;
            $find->tipe_kategori_id != null ? $find->tipe_kategori_id = $request->tipe_kategori_id: true ;
            $find->deskripsi != null ? $find->deskripsi = $request->deskripsi: true ;
            $find->action_invitation != null ? $find->action_invitation = $request->action_invitation: true ;

            if ($request->hasFile('images') && $request->file('images')->isValid())
            {
                
                // hps gambar lama jika ada
                if ($find->images)
                {
                    $oldImagePath = public_path('storage/' . $find->images);
                    if (file_exists($oldImagePath))
                    {
                        unlink($oldImagePath);
                    }
                }

                $cekImage = $request->file('images');
                // $nama_perusahaan = $request->input('nama_perusahaan');
                // $nama_kategori = $request->input('nama_kategori');
                // $imageName = 'kategori_layanan_' . str_replace(' ', '_', $nama_perusahaan) . '_' . str_replace(' ', '_', $nama_kategori) . '.' . $cekImage->extension();
                $imageName = $cekImage->getClientOriginalName();
                $destinationPath = 'public/storage/images/kategori_layanan';

                // memastikan ditektori penyimpanan data, jika tidak buat direktori tersebut
                $storagePath = storage_path('compro-project/' . $destinationPath);
                

                if (!file_exists($storagePath))
                {
                    mkdir($storagePath, 0755, true);
                }

                // simpan file menggunakan storeAs
                // $filePath = $cekImage->storeAs($destinationPath, $imageName);
                $filePath = $request->file('images')->storeAs('images/kategori_layanan/', $imageName, 'public'); 
                
                // dd('file diterima: ' . $request->file('images')->getClientOriginalName());
                // dd($filePath);

                $find->images = ('images/kategori_layanan/' . $imageName);
            }

            $find->save();

            return response()->json([
                'success' => true,
                'message' => 'Data informasi kategori layanan berhasil di ubah ke dalam database',
            ], 201);

        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Gagal melakukan update data kategori layanan',
            ], 400);
        }
    }

    public function deleteData($id)
    {
        $delete = KategoriLayanan::where('id', $id)->delete();
        if ($delete)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data kategori layanan berhasil di hapus dari database',
            ], 201);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus data kategori layanan',
            ], 400);
        }
    }

    // update get selection data for kategori layanan
    // public function updateSelection(Request $request)
    // {

    //     $ids = $request->input('ids'); // mengambil array ID dari request

    //     if (is_null($ids) || !is_array($ids)) 
    //     {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Invalid data received'
    //         ], 400);
    //     }
        
    //     // hapus semua data yang ada di table selected_kategori_layanan
    //     SelectedKategoriLayanan::truncate();

    //     // tambahkan dat abaru ke table selected_kategori_layanan
    //     foreach ($ids as $id)
    //     {
    //         $kategoriLayanan = kategoriLayanan::find($id);
        
    //         if ($kategoriLayanan)
    //         {
    //             SelectedKategoriLayanan::create([
    //                 'kategori_layanan_id' => $kategoriLayanan->id,
    //                 'perusahaan_id' => $kategoriLayanan->perusahaan_id,
    //                 'tipe_kategori_id' =>$kategoriLayanan->tipe_kategori_id,
    //             ]);
    //         }
    //     }

    //     $updateData = SelectedKategoriLayanan::whereIn('kategori_layanan_id', $ids)->get();

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Data landing-page bagian kategori-layanan berhasil di update'
    //     ], 201);
        
    // }

    public function updateSelection(Request $request)
    {
        // mengambil array ID dari request
        $ids = $request->input('ids');

        if (is_null ($ids) || !is_array($ids))
        {
            return response()->json([
                'success' => false,
                'message' => 'Invalid data received'
            ], 400);
        }

        // hapus data yg ada berdasarkan tipe_kategori_id
        $kategoriLayananList = KategoriLayanan::whereIn('id', $ids)->get();

        foreach ($kategoriLayananList as $kategoriLayanan)
        {
            SelectedKategoriLayanan::where('tipe_kategori_id', $kategoriLayanan->tipe_kategori_id)->delete();
        }

        // tambahkan data baru ke tabel selected_kategori_layanan
        foreach ($ids as $id)
        {
            $kategoriLayanan = KategoriLayanan::find($id);

            if ($kategoriLayanan)
            {
                SelectedKategoriLayanan::create([
                    'kategori_layanan_id' => $kategoriLayanan->id,
                    'perusahaan_id' => $kategoriLayanan->perusahaan_id,
                    'tipe_kategori_id' => $kategoriLayanan->tipe_kategori_id,
                ]);
            }
        }

        // data di perbarui
        $updateData = SelectedKategoriLayanan::whereIn('kategori_layanan_id', $ids)->get();

        return response()->json([
            'success' => true,
            'message' => 'Data landing-page bagian kategori-layanan berhasil di update'
        ], 201);
    }

    // get selection data for tipe kategori
    // public function getSelectedData(Request $request)
    // {
    //     $selectedData = KategoriLayanan::where('is_selected', true)->first();
    //     $selectedData = KategoriLayanan::with('tipeKategori')
    //     ->where('is_selected', true)
    //     ->get()
    //     ->filter(function ($kategori) {
    //         return $kategori->tipe_kategori_id === $kategori->tipeKategori->id;
    //     })
    //     ->values();
    // }
    
    public function getSelectedData(Request $request)
    {
        $selectedData = SelectedKategoriLayanan::with('kategoriLayanan.tipeKategori')
            ->get()
            ->groupBy('kategoriLayanan.tipe_kategori_id')
            ->map(function ($group) {
                return $group->pluck('kategoriLayanan');
            });
        

        return response()->json(['data' => $selectedData], 200);
    }
}
