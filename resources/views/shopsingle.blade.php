@extends('Layout.master')

@section('content')
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0">
                <a href="/">Home</a>
                <span class="mx-2 mb-0">/</span>
                <a href="/heart">Store</a>
                <span class="mx-2 mb-0">/</span>
                <strong class="text-black">{{ $item->name }}</strong>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mr-auto">
                <div class="border text-center">
                    <img src="{{ asset($item->photo) }}" alt="{{ $item->name }}" class="img-fluid p-5">
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="text-black">{{ $item->name }}</h2>
                <h2> السعر <strong class="text-primary h4"> ${{ number_format($item->price, 2) }}</strong></h2>
                <p class="text-black"> الكمية المتوفرة = {{$item->quantity}}</p>
                <div class="mb-5">
                    <div class="input-group mb-3" style="max-width: 220px;">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" aria-label="Quantity" id="quantity-input">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                    </div>
                </div>
                <form action="{{ url('/add-to-cart') }}" method="POST">
                    @csrf <!-- تأكد من إضافة CSRF token -->
                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                    <input type="hidden" name="quantity" value="1" id="quantity-input">
                    <button type="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</button>
                </form>
                
                
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const quantityInput = document.getElementById('quantity-input');
        const btnMinus = document.querySelector('.js-btn-minus');
        const btnPlus = document.querySelector('.js-btn-plus');

        btnMinus.addEventListener('click', function () {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });

        btnPlus.addEventListener('click', function () {
            let currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
        });
    });
</script>

@endsection
