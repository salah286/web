<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function remove($index)
    {
        // تحقق من وجود السلة في الجلسة
        if (session()->has('cart')) {
            $cart = session('cart');

            // إزالة العنصر من السلة
            unset($cart[$index]);

            // إعادة تعيين السلة في الجلسة
            session(['cart' => array_values($cart)]); // إعادة تعيين الفهارس

            // إعادة توجيه إلى صفحة السلة مع رسالة
            return redirect()->back()->with('success', 'Item removed from cart.');
        }

        return redirect()->back()->with('error', 'Cart is empty.');
    }
}
