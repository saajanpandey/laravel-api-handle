<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function index()
    {
        $datas = json_decode(file_get_contents('https://anime-facts-rest-api.herokuapp.com/api/v1'), true);
        return view('list', compact('datas'));
    }

    public function store()
    {

        $res = Http::get('https://anime-facts-rest-api.herokuapp.com/api/v1');
        $contents = json_decode($res->getBody()->getContents(), true);
        $datas = $contents['data'];
        foreach ($datas as $data) {
            $anime = new Anime();
            $anime->name = $data['anime_name'];
            $anime->image = $data['anime_img'];
            $anime->save();
        }

        return redirect()->to('/');
    }
}
