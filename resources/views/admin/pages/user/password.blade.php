@extends('layouts.admin')

@section('title', 'Ubah Password')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <x-content>
        <x-slot name="modul">
            <h1>Ubah Password</h1>
        </x-slot>

        <form action="{{ route('admin.user.update') }}" enctype="multipart/form-data" method="post"
              class="needs-validation" novalidate onkeydown="return event.key !== 'Enter';">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="section-title mt-0">Informasi Password</div>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label>Password</label>
                            <input type="text" id="password" class="form-control" name="password" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label>Konfirmasi Password</label>
                            <input type="text" class="form-control" name="password_confirmation" required>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="mx-1">
                    <a href="{{ url()->previous() }}" class="btn border bg-white" type="button">Kembali</a>
                </div>
                <div class="mx-1">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </x-content>
@endsection
