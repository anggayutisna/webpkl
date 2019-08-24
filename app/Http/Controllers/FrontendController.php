<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\Tag;

class FrontendController extends Controller
{
    public function index()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->get();

        return view('/', compact('artikel'));
    }

    public function allblog(Request $request)
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->paginate(3);

        $cari = $request->cari;

        if ($cari) {
            $artikel = Artikel::where('judul', 'LIKE', "%$cari%")->paginate(4);
        }
        return view('frontend.mag.index', compact('artikel'));
    }

    public function blogall(Artikel $artikel)
    {
        $artikel = Artikel::where('slug', $artikel->slug)->get();
        return view('frontend.mag.single', compact('artikel'));
    }

    public function blogcat(Kategori $cat)
    {
        $artikel = $cat->artikel()->latest()->paginate(5);
        return view('frontend.mag.kategori', compact('artikel', 'cat'));
    }

    public function blogtag(Tag $tag)
    {
        $artikel = $tag->artikel()->latest()->paginate(5);
        return view('frontend.mag.index', compact('artikel', 'tag'));
    }
}
