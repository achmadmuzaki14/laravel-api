{{-- {{ dd($data) }} --}}
@extends('layouts.base')

@section('content')
<div class="page-inner mt--5">
    <div class="row">
        <div class="col-md-12 ">
        <div class="card">
            <div class="card-header card-info">
                <div class="card-title">Detail Profile</div>
            </div>
            <div class="card-body pl-4">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="nis">Nama</label>
                        <p style="color: slategrey">{{ Auth::user()->name }}</p>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nis">Email</label>
                        <p style="color: slategrey">
                            {{ Auth::user()->email }}</p>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nis">Alamat</label>
                        <p style="color: slategrey">
                            {{ $data->address }} </p>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nis">No Handphone</label>
                        <p style="color: slategrey">
                            {{ $data->phone_number}} </p>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nis">Jenis Kelamin</label>
                        <p style="color: slategrey">{{ $data->gender}}</p>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nis">Tanggal Lahir</label>
                        <p style="color: slategrey">{{ $data->dob}}</p>
                    </div>
                    <br>
                    <div class="form-group col-md-12">
                        <a type="button" href="{{ route('profile.index') }}"
                            class="ml-2 btn btn-warning btn-rounded">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection