<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buku::orderBy('judul','asc')->get();
        return response()->json([
            'status'=>true,
            'message'=>'Data ditemukan',
            'data'=>$data
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataBuku = new Buku;

        $rules =[
            'judul'=>'required',
            'pengarang'=>'required',
            'tanggal_publikasi'=>'required |date'
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return response()->json([
                'status'=>false,
                'message'=>'Gagal memasukkan data',
                'data'=>$validator->errors()
            ]);
        }

        $dataBuku->judul = $request->judul;
        $dataBuku->pengarang = $request->pengarang;
        $dataBuku->tanggal_publikasi = $request->tanggal_publikasi;

        $post = $dataBuku->save();

        return response()->json([
            'status'=>true,
            'message'=>'Sukses memasukkan data'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Buku::find($id);
        if ($data) {
            return response([
                'status'=>true,
                'message'=>"Data ditemukan",
                'data'=>$data 
            ],200);
        }else {
            return response()->json([
                'status'=>false,
                'message' =>'Data tidak ditemukan'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataBuku = Buku::find($id);
        if (empty($dataBuku)) {
            return response()->json([
                'status'=>false,
                'message'=>'Data tidak ditemukan'
            ],404);
        }

        $rules =[
            'judul'=>'required',
            'pengarang'=>'required',
            'tanggal_publikasi'=>'required |date'
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return response()->json([
                'status'=>false,
                'message'=>'Gagal melakukan update data',
                'data'=>$validator->errors()
            ]);
        }

        $dataBuku->judul = $request->judul;
        $dataBuku->pengarang = $request->pengarang;
        $dataBuku->tanggal_publikasi = $request->tanggal_publikasi;

        $post = $dataBuku->save();

        return response()->json([
            'status'=>true,
            'message'=>'Sukses melakukan update data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataBuku = Buku::find($id);
        if (empty($dataBuku)) {
            return response()->json([
                'status'=>false,
                'message'=>'Data tidak ditemukan'
            ],404);
        }

        $post = $dataBuku->delete();

        return response()->json([
            'status'=>true,
            'message'=>'Sukses melakukan delete data'
        ]);
    }
}
