@extends('layout.admin') 
@section('content')
<div class="page-header">
    <div class="page-header-content">
        <div >
            <h4 class="">
                <i class="icon-home position-left"></i>
                <span class="text-semibold">Daftar Komoditas</span></h4>
            <a class="heading-elements-toggle">
                <i class="icon-more"></i>
            </a>
        </div>
        <div class="heading-elements">
            <ul class="breadcrumb position-right">
                <li>
                <a href="{{route('komoditas.index')}}">Home</a>
                </li>
                <li>
                <a href="">Komoditas</a>
                </li>
                <li class="active">Daftar Komoditas</li>
            </ul>
        </div>
    </div>
    <!-- /header content -->
</div>
<div class="content">
    <div class="panel panel-flat  border-top-lg border-top-primary">
        <div class="panel-body">
            <div class="col-lg-12">
                INI CONTENT
            </div>
        </div>
    </div>
</div>
@endsection