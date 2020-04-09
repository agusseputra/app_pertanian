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
            <div class="col-lg-6">
                <blockquote class=" col-md-12 ">
                        <b>Biodata</b>
                    </blockquote>
                    <div class=" col-lg-12 form-group">
                        <div class="col-md-4  no-margin">
                            Nama
                        </div>
                        <div class="col-md-8  no-margin">
                            Ketut Agus Seputra
                        </div>
                    </div>
                    <div class=" col-lg-12 form-group">
                        <div class="col-md-4  no-margin">
                            NIM
                        </div>
                        <div class="col-md-8  no-margin">
                            NIM
                        </div>
                    </div>
                    <div class=" col-lg-12 form-group">
                        <div class="col-md-4  no-margin">
                            Program Studi
                        </div>
                        <div class="col-md-8  no-margin">
                            Manajemen Informatika
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                <blockquote class=" col-md-12 ">
                        <b>Studi Kasus</b>
                    </blockquote>
                    <div class=" col-lg-12 form-group">
                        <div class="col-md-2  no-margin">
                            Judul
                        </div>
                        <div class="col-md-10  no-margin">
                            Sistem Manajemen Peroduk Pertanian (SIProtani)
                        </div>
                    </div>
                    <div class=" col-lg-12 form-group">
                        <div class="col-md-2  no-margin">
                            Pennjelasan
                        </div>
                        <div class="col-md-10  no-margin">
                            SIProtani merupakan sebuah ide untuk memanajemen produk pertanian terpadu mulai tingkat desa hingga kabupaten.
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="col-lg-12">
        <a href="{{route('komoditas.create')}}">Tambah Data</a>
            <table class="table table-bordered">
                <thead>
                    <tr><th>#</th><th>Nama</th><th>Keterangan</th><th>Status</th><th>Aksi</th></tr>
                </thead>
                <tbody>
                    @foreach ($komoditas as $in=>$val )
                <tr><td>{{($in+1)}}</td><td>{{$val->nama_komoditas}}</td><td>{{$val->keterangan}}</td><td>{{$val->status}}</td>
                <td>
                <a href="{{route('komoditas.edit',$val->id_komoditas)}}">update</a> 
                <form action="{{route('komoditas.destroy',$val->id_komoditas)}}" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit">delete</button>
                </form>   
                </td></tr>
                    @endforeach
                </tbody>
            </table>
            {{$komoditas->links()}}
        </div>
        </div>
    </div>
</div>
@endsection