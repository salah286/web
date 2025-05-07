<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CartController;

Route::get('/', function () {



    $save= DB::table('category')->get();
    return view('welcome',['category'=>$save]);
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/team', function () {
    return view('team');
});
Route::get('/cart', function () {
    $cart = session()->get('cart', []); // استرجاع العناصر من السلة
    return view('cart', compact('cart')); // تمرير السلة إلى العرض
});

Route::get('/shopsinglepage/{catid}', function ($catid) {
   
    $item = DB::table('heart')->where('id', $catid)->first();

    if (!$item) {
       
        abort(404); 
    }

   
    return view('shopsingle', compact('item')); 
});



Route::get('/product/{catid?}', function ($catid=null) {
    
    if($catid==null){
        $save=DB::table('heart')->get();
    }
else{
    $save=DB::table('heart')->where('category_id',$catid)->get();
}
    return view('product',['heart'=> $save]);
});



Route::post('/add-to-cart', function (Request $request) {
    $itemId = $request->input('item_id');
    $quantity = $request->input('quantity', 1); // القيمة الافتراضية 1

    // بجيب المنتج من قاعدة البيانات 
    $item = DB::table('heart')->where('id', $itemId)->first();

    if ($item) {
    // بجيب الحاجه اللي ف السله 
        $cart = session()->get('cart', []);

        //  لو العنصر كان موجود ف السله يضيف عليه 1
        if (isset($cart[$itemId])) {
            $cart[$itemId]['quantity'] += $quantity; // الكميه بتزيد
        } else {
            // بضيف العنصر لو مشموجود في السله
            $cart[$itemId] = [
                "name" => $item->name,
                "quantity" => $quantity,
                "price" => $item->price,
                "photo" => $item->photo,
            ];
        }

        session()->put('cart', $cart); // عشان التخزين في السله 
        session()->flash('success', 'Item added to cart!'); //  رسالة نجاح الاضافه 
    }

    return redirect('/cart'); // يسرجعني للسله
});


// Route لحذف عنصر من السلة
Route::post('/cart/remove/{index}', [CartController::class, 'remove'])->name('cart.remove');
use App\Http\Controllers\CheckoutController;

// Route للدفع
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
use App\Http\Controllers\ShopController;

// Route للمتجر
Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::get('/vali', [CheckoutController::class, 'index'])->name('vali');
