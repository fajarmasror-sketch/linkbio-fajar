<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkBioController extends Controller
{
    public function index()
    {
        $data = [
            'nama_toko' => 'FAJAR',
            'sub_banner' => 'LINK BIO GUA NICH',
            'sosmed' => [
                'ig' => 'https://www.instagram.com/pjjar_05?igsh=ZTJ4dWh6a3E2Yjg5',
                'tiktok' => 'https://tiktok.com/@fjjar15',
                'wa' => 'https://wa.me/6283137656525',
            ],

        ];

        return view('linkbio', $data);
    }
}