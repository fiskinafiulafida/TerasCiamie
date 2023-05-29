@extends('layouts/mainAdmin')

@section('title', 'Edit Menu')

@section('sidebar')
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Teras Ciamie<sup> Admin</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="/menu">
            <i class="fas fa-fw fa-cog"></i>
            <span>Menu</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/transaksi">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
@endsection

@section('topbar')
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                <img class="img-profile rounded-circle" src="{{ asset('StyleAdmin/img/undraw_profile.svg') }}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
@endsection

@section('header')
<h6 class="m-0 font-weight-bold text-primary">Edit Data Menu</h6>
@endsection

@section('body')
<div>
    <form method="POST" enctype="multipart/form-data" action="{{ route('menu.update',$menu->id_menu) }}">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Menu</label>
                <input type="nama_menu" class="form-control" name="nama_menu" id="nama_menu" value="{{ old( 'nama_menu', $menu->nama_menu) }}" required autofocus>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Harga</label>
                <input type="harga" class="form-control" name="harga" id="harga" value="{{ old( 'harga', $menu->harga) }}" required autofocus>
            </div>

            <div class="form-floating mb-3">
                <label for="floatingTextareaDisabled" class="form-label">Deskripsi</label>
                <input type="deskripsi" class="form-control" name="deskripsi" id="deskripsi" value="{{ old( 'deskripsi', $menu->deskripsi) }}" required autofocus></textarea>
            </div>

            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" class="form-control" id="menu" name="image" value="{{ old( 'image', $menu->image) }}" required autofocus>
                <img src="{{ asset('storage/'.$menu->image) }}" height="150px" width="150px">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('footer')
<div class="container my-auto">
    <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2023</span>
    </div>
</div>
@endsection