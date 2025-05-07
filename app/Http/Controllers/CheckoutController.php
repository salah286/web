<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // هنا يمكنك إضافة منطق لعرض صفحة الدفع، مثل استعراض تفاصيل السلة
        return view('checkout'); // تأكد من وجود ملف checkout.blade.php في مجلد views
    }
}
