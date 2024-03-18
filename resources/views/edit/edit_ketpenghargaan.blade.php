<!DOCTYPE html>
<!--
    Template Name: Icewall - HTML Admin Dashboard Template
    Author: Left4code
    Website: http://www.left4code.com/
    Contact: muhammadrizki@left4code.com
    Purchase: https://themeforest.net/user/left4code/portfolio
    Renew Support: https://themeforest.net/user/left4code/portfolio
    License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<!-- BEGIN: Head -->
<meta charset="utf-8">
<link href="{{asset('dashboards/dist/images/logo.svg')}}" rel="shortcut icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
<meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="LEFT4CODE">
<title>Penghargaan- Si Beka</title>
<!-- BEGIN: CSS Assets-->
<link rel="stylesheet" href="{{asset('dashboards/dist/css/app.css')}}" />
<head>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="main">
    <!-- BEGIN: Mobile Menu -->
    @include('template.mobile')
    <!-- END: Mobile Menu -->
    
    
    <!-- BEGIN: Top Bar -->
    @include('template.topbar')
    <!-- END: Top Bar -->
    <div class="wrapper">
        <div class="wrapper-box">
            <!-- BEGIN: Side Menu -->
            @include('template.sidebar')
            
            
            <div class="content">
                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Edit Penghargaan
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-12">
                        <!-- BEGIN: Form Layout -->
                        <form action="/ketpenghargaan/{{ $ket->id_kategori_penghargaan }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Penghargaan</label>
                                <input type="text" name="kategori_penghargaan" class="form-control" value="{{ $ket->kategori_penghargaan}}">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Deskripsi Penghargaan</label>
                                <input type="text" name="deskripsi_penghargaan" class="form-control" value="{{ $ket->deskripsi_penghargaan}}">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Point</label>
                                <input type="point" name="point" class="form-control" value="{{ $ket->point }}">
                            </div>
                           
                            <input type="submit" name="submit" class="btn btn-info" value="Update">
                            
                        </form>
                        <!-- END: Form Layout -->
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
        @include('sweetalert::alert')
        
        @include('template.scricpt')
    </div> 
    <!-- END: JS Assets-->
    </html>