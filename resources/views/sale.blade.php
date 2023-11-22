@extends('layouts.nav')

@section('sale')
<div class = "sale">
             <p class = "saletext">SALE!! </p>
        </div>
@endsection

@section('category')
<div class="categories">
    <h3 class = "category-title">Categories</h3>
    <ul>
        <li class="category">TROUSERS </li>
        <li class="category">TOPS</li>
        <li class="category">DRESSES</li>
        <li class="category">GOWNS</li>
        <li class="category">SHOES</li>
        <li class="category" id="custom-made">CUSTOM MADE</li>
    </ul>
</div> 
@endsection

@section('salepic')
<div class="products">
    <div class="product">
        <img src="{{ asset('images/romper.jpg') }}"  alt="Product 1">
        <p class="product-name">TINDAHAN WHITE ROMPER</p>
        <p class="product-price-sale">Php 500.00</p>
    </div>

    <div class="product">
        <img src="{{ asset('images/trouser.jpg') }}" alt="Product 2">
        <p class="product-name"> TINDAHAN OLIVE GREEN TROUSER</p>
        <p class="product-price-sale">Php 650.00</p>
    </div>

    <div class="product">
        <img src="{{ asset('images/dress.jpg') }}" alt="Product 3">
        <p class="product-name">TINDAHAN SHIRTWAIST DRESS</p>
        <p class="product-price-sale">Php 899.00</p>   
    </div>
    
</div>

@endsection
