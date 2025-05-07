@extends('Layout.master')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Shopping Cart</h1>
    
    @if(session('cart') && count(session('cart')) > 0)
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $index => $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>${{ number_format($item['price'], 2) }}</td>
                        <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $index) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr class="table-primary">
                    <td colspan="3" class="text-right"><strong>Total:</strong></td>
                    <td colspan="2">${{ number_format(array_sum(array_map(function($item) {
                        return $item['price'] * $item['quantity'];
                    }, session('cart'))), 2) }}</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="{{ route('vali') }}" class="btn btn-warning btn-lg">Confirm</a>
        </div>
    @else
        <p class="text-center">Your cart is empty.</p>
    @endif
</div>
@endsection
