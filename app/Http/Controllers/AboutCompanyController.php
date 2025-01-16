<?php

namespace App\Http\Controllers;

use App\Models\AboutCompany;
use App\Models\CompanyInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutCompanyController extends Controller
{
    public function index()
    {
        return view('crud.tentang-perusahaan.index');
    }

    public function supportCompanyInformation()
    {
        $companyName = CompanyInformation::all();
        $data = array();

        foreach ($companyName as $c)
        {
            $item['id'] = $c->id;
            $item['name'] = $c->nama_perusahaan;
            $data[] = $item;
        }

        return response()->json([
            'data' => $data,
        ], 200);
    }

    public function addData(Request $request)
    {
        // validation
        $validator = Validator::make($request->all(), [
            'company_information_id' => 'required',
            'deskripsi' => 'required',
            'kategori_usaha' => 'required',
            'deskripsi_akhir' => 'required',
        ]);

        // response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $about = new AboutCompany();
        $about->company_information_id = $request->company_name_id;
        $about->deskripsi = $request->deskripsi_perusahaan;
        $about->kategori_usaha = $request->kategori_usaha;
        $about->deskripsi_akhir = $request->deskripsi_akhir_perusahaan;
        $about->save();

        return response()->json([
            'success' => true,
            'message' => 'Data tentang perusahaan berhasil di tambahkan ke dalam database',
        ], 201);
    }
}
