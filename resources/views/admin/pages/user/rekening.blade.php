@extends('layouts.admin')

@section('title', 'Rekening Bank')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <x-content>
        <x-slot name="modul">
            <h1>Kelola Rekening</h1>
        </x-slot>

        <form action="{{ route('admin.user.bank.manage') }}" enctype="multipart/form-data" method="post"
              class="needs-validation" novalidate onkeydown="return event.key !== 'Enter';">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="section-title mt-0">Informasi Rekening</div>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label>Nama Pemilik</label>
                            <input type="text" id="name" class="form-control" name="name" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label>No. Rekening</label>
                            <input type="text" id="account_id" class="form-control" name="account_id" required>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Bank</label>
                        <select class="form-control" id="bank_code" name="bank_code" required>
                            <option selected disabled hidden value="">Pilih Bank</option>
                            <option value="014-BCA">BCA</option>
                        </select>
                        <div class="invalid-feedback"></div>
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
