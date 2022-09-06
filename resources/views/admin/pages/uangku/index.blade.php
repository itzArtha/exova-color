@extends('layouts.admin')

@section('title', 'Uangku')

@section('css')

@endsection

@section('js')

@endsection

@section('content')

    <x-content>
        <x-slot name="modul">
            <h1>Uangku</h1>
        </x-slot>

        <div aria-label="body">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Saldo Sekarang</h4>
                            </div>
                            <div class="card-body">
                                $187,13
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Komisi</h4>
                            </div>
                            <div class="card-body">
                                $187,13
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-piggy-bank"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Saldo Ditarik</h4>
                            </div>
                            <div class="card-body">
                                59
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12">
                @include('admin.pages.uangku.partials.table-penarikan')
            </div>
            <div class="col-md-6 col-sm-12">
                @include('admin.pages.uangku.partials.table-pemasukan')
            </div>
        </div>

        <div class="fixed-bottom d-flex justify-content-center" style="bottom: 20px">
            <button class="btn btn-primary">
                Tarik Uangku
            </button>
        </div>
    </x-content>

@endsection
