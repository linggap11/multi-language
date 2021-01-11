<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class LocalizationController extends Controller
{
    public function switch ($lang = '') {
        request()->session()->put('locale', $lang);

        return redirect()->back();
    }

    public function switchWithPackage($lang = 'en') {
        $tr = new GoogleTranslate($lang);  
        $text = "Framework adalah sebuah kerangka program yang digunakan untuk membantu developer untuk mengembangkan kode secara konsisten. Dengan adanya framework developer bisa mengurangi jumlah bug pada aplikasi yang dibuat. Karena, fungsi dan variabel yang sudah tersedia di dalam komponen framework. Dalam artikel ini, Anda akan mempelajari lebih dalam pengertian dan fungsi framework. Tak hanya itu, Anda pun akan diajak mengenal jenis jenis framework yang sering digunakan. Yuk, simak artikel ini sampai selesai.";
        $result =  $tr->translate($text);

        return view('translate_page', ['result' => $result, 'text' => $text, 'lang' => $lang]);  
    }
}
