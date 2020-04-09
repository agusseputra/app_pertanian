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
                <li class="active">Input Komoditas</li>
            </ul>
        </div>
    </div>
    <!-- /header content -->
</div>
<div class="content">
    <div class="panel panel-flat  border-top-lg border-top-primary">
    <form action="{{(isset($komoditas))?route('komoditas.update',$komoditas->id_komoditas):route('komoditas.store')}}" method="POST">
        @csrf
        @if(isset($komoditas))?@method('PUT')@endif
        <div class="panel-body">
                <div class="form-group">
                        <label class="control-label col-lg-2">Nama Komoditas</label>
                        <div class="col-lg-10">
                        <input type="text" value="{{(isset($komoditas))?$komoditas->nama_komoditas:old('nama_komoditas')}}" name="nama_komoditas" class="form-control">
                            @error('nama_komoditas')<small style="color:red">{{$message}}</small>@enderror
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="control-label col-lg-2">Keterangan</label>
                            <div class="col-lg-10">
                                <input type="text" value="{{(isset($komoditas))?$komoditas->keterangan:old('keterangan')}}" name="keterangan" class="form-control">
                                @error('keterangan')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-lg-2">Status</label>
                                <div class="col-lg-10">
                                    <select name="status" class="form-control">
                                        <option value="Y">Y</option>
                                        <option value="N">N</option>
                                    </select>
                                    @error('status')<small style="color:red">{{$message}}</small>@enderror
                                </div>
                            </div>
                    <div class="form-group">
                        <button type="submit">SIMPAN</button>
                    </div>
        </div>
    </form>
    </div>
</div>
@endsection