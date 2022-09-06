@extends('layouts.admin')

@section('title', 'Dashboard')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <x-content>
        <x-slot name="modul">
            <h1>Dashboard</h1>
        </x-slot>

        <div aria-label="body">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-coins"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Transaksi</h4>
                            </div>
                            <div class="card-body">
                                59
                            </div>
                        </div>
                    </div>
                </div>
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
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Transaksi</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Produk</th>
                                        <th>Pembeli</th>
                                        <th>Komisi</th>
                                        <th>Tanggal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Preset II
                                        </td>
                                        <td>
                                            Yusa
                                        </td>
                                        <td>
                                            Rp20.000
                                        </td>
                                        <td>
                                            September 1, 2022
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="text-center pt-1 pb-1">
                                    // pagination
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Aktivitas</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled list-unstyled-border">
                                <li class="media">
                                    <img class="mr-3 rounded-circle" width="50"
                                         src="../assets/img/avatar/avatar-1.png" alt="avatar">
                                    <div class="media-body">
                                        <div class="float-right text-primary">Baru Saja</div>
                                        <div class="media-title">Yusa</div>
                                        <span
                                            class="text-small text-muted">Yusa baru saja mengunjungi galerimu</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center pt-1 pb-1">
                                // pagination
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-content>

@endsection
