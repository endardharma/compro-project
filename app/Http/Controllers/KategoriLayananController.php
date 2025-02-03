<?php

namespace App\Http\Controllers;

use App\Models\AboutCompany;
use App\Models\InformasiPerusahaan;
use App\Models\KategoriLayanan;
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
            $item['name'] = $c->nama_perusahaan;
            $data[] = $item;
        }

        return response()->json([
            'data' => $data,
        ], 200);
    }

    // public function addData(Request $request)
    // {
    //     // validation
    //     $validator = Validator::make($request->all(), [
    //         'nama_perusahaan_id' => 'required',
    //         'nama_kategori' => 'required',
    //         'deskripsi' => 'required',
    //         'action_invitation' => 'required',
    //         'images' => 'required|images|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     // simpan gambar ke storage dan dapatkan pathnya
    //     // $imagesPath = $request->file('images')->store('images', 'public');

    //     // images check
    //     if ($request->hasFIle('images') && $request->file('images')->isValid()) 
    //     {
    //         // get extension file
    //         $extension = $request->file('images')->getClientOriginalName();

    //         // get unique name file and timestamp or UUID
    //         $newFileName = pathinfo($request->file('images')->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $extension;

    //         // save images to starage and get the path
    //         $imagesPath = $request->file('images')->storeAs('images', $newFileName, 'public');
            
    //         // save data to database
    //         $tambahKategori = new KategoriLayanan();
    //         $tambahKategori->perusahaan_id = $request->nama_perusahaan_id;
    //         $tambahKategori->nama_kategori = $request->nama_kategori;
    //         $tambahKategori->deskripsi = $request->deskripsi;
    //         $tambahKategori->action_invitation = $request->action_invitation;
    //         $tambahKategori->images = $imagesPath;
    //         $tambahKategori->save();
    
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Data tentang perusahaan berhasil di tambahkan ke dalam database',
    //         ], 201);

    //     }
    //     else
    //     {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'File gambar tidak valid',
    //         ], 400);
    //     }
        
    //     // // response error validation
    //     // if ($validator->fails()) {
    //     //     return response()->json($validator->errors(), 400);
    //     // }

        
    // }

    public function addData(Request $request) 
    { 
        $validator = Validator::make($request->all(), [
            'nama_perusahaan_id' => 'required', 
            'nama_kategori' => 'required', 
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
            // $nama_perusahaan = $request->nama_perusahaan_id;
            // $nama_kategori = $request->nama_kategori;
            // $newFileName = 'kategori_layanan_' . str_replace(' ', '_', $nama_perusahaan) . '_' . str_replace(' ', '_', $nama_kategori) . '.' . $extension;
            $cekImage = $request->file('images');
            $imageName = $cekImage->getClientOriginalName();
            
            // Simpan gambar ke storage dan dapatkan path-nya 
            $path = $request->file('images')->storeAs('images/kategori_layanan/', $imageName, 'public'); 

            // Simpan data ke basis data 
            $kategoriLayanan = new KategoriLayanan; 
            $kategoriLayanan->perusahaan_id = $request->nama_perusahaan_id; 
            $kategoriLayanan->nama_kategori = $request->nama_kategori; 
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
            2 => 'nama_kategori',
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
                return $q->where('nama_perusahaan_id', 'LIKE', '%'.$search.'%')->orWhere('id', 'LIKE', '%'.$search.'%')->orWhere('nama_kategori', 'LIKE', '%'.$search.'%');
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
            $item['nama_kategori'] = $k->nama_kategori;
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
            $find->nama_kategori != null ? $find->nama_kategori = $request->nama_kategori: true ;
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
    
}
