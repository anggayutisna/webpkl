<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;

class FrontendController extends Controller
{
    public function latest()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->take(3)->get();
        $response = [
            'success' => true,
            'data' => $artikel,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function all()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->take(4)->get();
        $response = [
            'success' => true,
            'data' => $artikel,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
