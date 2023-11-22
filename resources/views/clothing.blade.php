@extends('layouts.nav')

@section('clothing')
    <div class="clothing">
        <p class="clothtext">CLOTHES YOU MAY LIKE <3</p>
    </div>

    <div class="clotheoverall">
        <p>SHOP YOUR LOOK! ENJOY 10 % DISCOUNT WITH OUR COUPONS.</p>
    </div>

    <div class="products">
        <div class="row">
            <!-- Product 1 -->
            <div class="product">
                <img src="{{ asset('images/romper.jpg') }}" alt="Product 1" class="product-image">
                <p class="product-name">TINDAHAN WHITE ROMPER</p>
                <p class="product-price">Php 500.00</p>

            </div>

            <!-- Product 2 -->
            <div class="product">
                <img src="{{ asset('images/dress.jpg') }}" alt="Product 2" class="product-image">
                <p class="product-name">TINDAHAN SHIRTWAIST DRESS</p>
                <p class="product-price">Php 899.00</p>  
            </div>

            <!-- Product 3 -->
            <div class="product">
                <img src="{{ asset('images/swimsuit.png') }}" alt="Product 3" class="product-image">
                <p class="product-name">TINDAHAN SWIMSUIT</p>
                <p class="product-price">Php 899.00</p>  

            </div>

            <!-- Product 4 -->
            <div class="product">
                <img src="{{ asset('images/pink.jpg') }}" alt="Product 4" class="product-image">
                <p class="product-name"> TINDAHAN BABY PINK SLEEVELESS DRESS</p>
                <p class="product-price">Php 650.00</p>
            </div>
        </div>

        <div class="row">
            <!-- Product 5 -->
            <div class="product">
                <img src="{{ asset('images/skirtcamo.jpg') }}" alt="Product 5" class="product-image">
                <p class="product-name"> TINDAHAN CAMOUFLAGE MINISKIRT</p>
                <p class="product-price">Php 499.00</p>
            </div>

            <!-- Product 6 -->
            <div class="product">
                <img src="{{ asset('images/whitetop.jpg') }}" alt="Product 6" class="product-image">
                <p class="product-name"> TINDAHAN WHITE CROP TOP</p>
                <p class="product-price">Php 190.00</p>
            </div>

            <!-- Product 7 -->
            <div class="product">
                <img src="{{ asset('images/skort.jpg') }}" alt="Product 7" class="product-image">
                <p class="product-name"> TINDAHAN SKORT OVERLAP</p>
                <p class="product-price">Php 550.00</p>
            </div>

            <!-- Product 8 -->
            <div class="product">
                <img src="{{ asset('images/puffsleeve.jpg') }}" alt="Product 8" class="product-image">
                <p class="product-name"> TINDAHAN BABY PINK PUFFSLEEVE DRESS</p>
                <p class="product-price">Php 1150.00</p>
            </div>
        </div>
    </div>
@endsection
