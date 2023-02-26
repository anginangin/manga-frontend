<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function image(Request $request)
    {
        $url = json_decode($request->data);
        $tujuan_upload = $url->storage;
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $nama_icon = $url->nama_icon;
            $icon->move($tujuan_upload, $nama_icon);

            $fileLama = $tujuan_upload . '/' . $url->url_icon;
            if (file_exists($fileLama)) {
                unlink($fileLama);
            }
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $nama_file = $url->nama_logo;
            $logo->move($tujuan_upload, $nama_file);

            $fileLama = $tujuan_upload . '/' . $url->url_logo;
            if (file_exists($fileLama)) {
                unlink($fileLama);
            }
        }
    }
}
