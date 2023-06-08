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

@section('container2')
<img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{ asset('Style/assets/img/about.jpg')}}" alt="..." />
<div class="about-heading-content">
    @forelse ($abouts as $abouts)
    <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">{{ $abouts->deskripsi }}</span>
                    <span class="section-heading-lower">{{ $abouts->nama_about }}</span>
                </h2>
                <p>{{ $abouts->keterangan }}</p>
            </div>
        </div>
        @empty
    </div>
    @endforelse
</div>
@endsection

@section('footer')
<div class="container">
    <p class="m-0 small">Copyright &copy; Teras Ciamie 2023</p>
</div>
@endsection