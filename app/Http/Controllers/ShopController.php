<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        // هنا يمكنك إضافة منطق لاستعراض المنتجات في المتجر
        return view('product'); // تأكد من وجود ملف shop.blade.php في مجلد views
    }
}
