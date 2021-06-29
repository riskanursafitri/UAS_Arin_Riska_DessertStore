@extends('template.user')

@section('title')
    Keranjang
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/user/userkeranjang.css') }}">
@endsection

@section('content')
    
<div class="container">
    @if ($cart != null)
    {{-- {{dd($cart, Session::get('cart'))}} --}}
    @for ($i = 0; $i < sizeof($cart->items); $i++)
    <div class="card">
        <div class="col">
            <div class="title">{{$cart->items[$i]->benda->name}}</div>
            <div class="type">
                {{$cart->items[$i]->benda->category}}
            </div>
            <div class="option">
                {{$cart->items[$i]->desc}}
            </div>
            <div class="qty">
                QTY : {{$cart->items[$i]->qty}}
            </div>
        </div>
        <div class="col right">
            <a href="/delete/chart/{{$i}}" class="btn btn-delete">
                Hapus Pesanan ini
            </a>
            <div class="subtotal">
                Rp. {{$cart->items[$i]->price}} * {{$cart->items[$i]->qty}}
            </div>
            <div class="total">
                Rp. {{$cart->items[$i]->subtotal}}
            </div>
        </div>
    </div>
    @endfor
    <a style="text-decoration: none;" href="/confirmation" class="btn btn-checkout">
        Checkout
    </a>
    @else
    <h1 style="align-self: center; margin: 50px 0;">keranjang anda masih kosong</h1>
    @endif
    
</div>

@endsection