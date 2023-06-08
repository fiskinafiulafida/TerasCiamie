@extends('layouts/main')

@section('header')
<h1 class="site-heading text-center text-faded d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">A Free Bootstrap Business Theme</span>
    <span class="site-heading-lower">Business Casual</span>
</h1>
@endsection

@section('navbar')
<a class="navbar-brand text-uppercase fw-bold d-lg-none" href="/">Start Bootstrap</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/">Home</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/about">About</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/products">Products</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/store">Store</a></li>
    </ul>
    <ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-9"><a class="nav-link text-uppercase" href="/login">Login</a></li>
    </ul>
</div>
@endsection

@section('container')
<div class="container">
    <div class="product-item">
        <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ms-auto rounded">
                <h2 class="section-heading mb-0">
                    <span class="section-heading-upper">Blended to Perfection</span>
                    <span class="section-heading-lower">Coffees & Teas</span>
                </h2>
            </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ asset('Style/assets/img/products-01.jpg')}}" alt="..." />
        <div class="product-item-description d-flex me-auto">
            <div class="bg-faded p-5 rounded">
                <p class="mb-0">We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<div class="container">
    <p class="m-0 small">Copyright &copy; Teras Ciamie 2023</p>
</div>
@endsection