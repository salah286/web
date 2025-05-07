@extends('Layout.master')

@section('content')
<div class="container p-2 ">
    <div class="row mt-2">
        @foreach ($heart as $item)
        <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            <span class="onsale">{{$item->quantity}}</span>
            <a href="/shopsinglepage/{{$item->id}}">
                <img src="{{ url($item->photo) }}" alt="Image" class="img-fluid" style="height: 250px; object-fit: cover;">
            </a>
            <h3 class="text-dark"><a href="shop-single.html">{{ $item->name }}</a></h3>
            <p class="price">{{ $item->price }}$</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
