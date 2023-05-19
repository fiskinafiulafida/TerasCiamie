@extends('layouts/main')

@section('header')
<h1 class="site-heading text-center text-faded d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">A Free Bootstrap Business Theme</span>
    <span class="site-heading-lower">Business Casual</span>
</h1>
@endsection

@section('navbar')
<a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.html">Home</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.html">About</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.html">Products</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.html">Store</a></li>
    </ul>
    <ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-9"><a class="nav-link text-uppercase" href="/login">Login</a></li>
    </ul>
</div>
@endsection

@section('container')
<div class="intro">
    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ ('Style/assets/img/intro.jpg')}}" alt="..." />
    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Fresh Coffee</span>
            <span class="section-heading-lower">Worth Drinking</span>
        </h2>
        <p class="mb-3">Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!</p>
        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">Visit Us Today!</a></div>
    </div>
</div>
@endsection

@section('container2')
<div class="row">
    <div class="col-xl-9 mx-auto">
        <div class="cta-inner bg-faded text-center rounded">
            <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Our Promise</span>
                <span class="section-heading-lower">To You</span>
            </h2>
            <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
        </div>
    </div>
</div>
@endsection

@section('footer')
<div class="container">
    <p class="m-0 small">Copyright &copy; Teras Ciamie 2023</p>
</div>
@endsection