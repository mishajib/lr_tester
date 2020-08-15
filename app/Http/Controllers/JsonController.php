<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JsonController extends Controller
{
    public function index()
    {
        $response = Http::get('https://mishajib.com/json/sections');
//        $data     = json_decode($response->json());
////        dd($data[0]);
////        dd($data);
//        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
//            "userId" => "10",
//            "title"  => "Test title",
//            "body"   => "alkfasdlfjlkasdjfl;aksdjflloremaklfadsklfasjdlfjasdfa",
//        ]);
//        $data = json_decode($post->body());
        dd($response->json());
    }
}
