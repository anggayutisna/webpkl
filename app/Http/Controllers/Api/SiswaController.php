<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Validator;
use App\user;
use App\Siswa;
use Illuminate\Http\Request;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::all();
        if (!$siswa) {
            $response = [
                'success' =>false,
                'data' => 'Empty',
                'massage' =>'siswa tidak di temukan'
            ];
            return response()->json($response,404);
        }
        $response = [
                'success' =>true,
                'data' => $siswa,
                'massage' =>'berhasil.'
            ];
            return response()->json($response,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1. tampung semua inputan ke $inputan
          $input = $request->all();
        //2. buat validasi di tampung ke $validator
        $validator = Validator::make($input,[
            'nama' => 'required' 
        ]);
        //3. cek validasi
        if ($validator->fails()) {
            $response = [
              'success' =>false,
                'data' => 'validator error',
                'massage' =>$validator->error()
            ];
            return response()->json($response,500);   

        }
        //4. buat fungsi untuk menghandle semua inputan ->
        //dimasukan ke table
        $siswa = siswa::create($input);
       //5.menampilkan response
          $response = [
                'success' =>true,
                'data' => $siswa,
                'massage' =>'berhasil ditambahkan.'
            ];
            //6.tampilkan berhasil
            return response() ->json($response,200);
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $siswa = siswa::find($id);
        if (!$siswa) {
            $response = [
                'success' =>false,
                'data' => 'gagal menampilkan',
                'massage' =>'siswa tidak di temukan'
            ];
            return response()->json($response,404);
        }
        $response = [
                'success' =>true,
                'data' => $siswa,
                'massage' =>'berhasil menampilkan.'
            ];
            return response()->json($response,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
          $siswa = siswa::find($id);
          $input = $request->all();
            if (!$siswa) {
            $response = [
                'success' =>false,
                'data' => 'Empty',
                'massage' =>'siswa tidak di temukan'
            ];
            return response() ->json($response,404);
        }
         $validator = Validator::make($input,[
            'nama' => 'required' 
        ]);
        
        if ($validator->fails()) {
            $response = [
              'success' =>false,
                'data' => 'validator error',
                'massage' =>$validator->error()
            ];
            return response()->json($response,500);   

        }
        $siswa->nama = $input['nama'];
        $siswa->save();
        $response = [
                'success' =>true,
                'data' => $siswa,
                'massage' =>'berhasil merubah.'
            ];
            return response()->json($response,200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = siswa::find($id);
          if (!$siswa) {
            $response = [
                'success' =>false,
                'data' => 'gagal hapus',
                'massage' =>'siswa tidak di temukan'
            ];
            return response() ->json($response,404);
        }
           $siswa->delete();
             $response = [
                'success' =>true,
                'data' => $siswa,
                'massage' =>'berhasil. menghapus'
            ];
            return response()->json($response,200);
    }
}
