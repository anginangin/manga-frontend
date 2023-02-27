<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($slug)
    {
        $page = Page::where(['slug' => $slug, 'status' => 0])->firstOrFail();
        return view('pages', compact('page'));
    }
}
