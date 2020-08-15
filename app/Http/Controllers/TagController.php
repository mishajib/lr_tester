<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function index()
    {
        return view('tag');
    }

    public function store(Request $request)
    {
        foreach ( $request->tags as $tag ) {
            Tag::firstOrCreate([
                                   'name' => $tag,
                                   'slug' => $tag,
                               ]);
        }
        dd(Tag::whereIn('name', $request->tags)->get());
        return 'ok';
    }
}
