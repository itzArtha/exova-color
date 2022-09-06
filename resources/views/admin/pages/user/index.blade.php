@extends('layouts.admin')

@section('title', 'Profil')

@section('css')

@endsection

@section('js')

@endsection

@section('content')

    <x-content>
        <x-slot name="modul">
            <h1>Profil</h1>
        </x-slot>

        <!-- Main Content -->
        <section class="section">
            <div class="section-body">
                <h2 class="section-title">Selamat Datang, Ujang!</h2>
                <p class="section-lead">
                    Kamu bisa mengubah data diri kamu jadi orang bermuka 2 disini.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="card profile-widget">
                            <div class="profile-widget-header">
                                <img alt="image" src="https://ui-avatars.com/api/?name=John+Doe"
                                     class="rounded-circle profile-widget-picture">
                                <div class="profile-widget-items">
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Galeri</div>
                                        <div class="profile-widget-item-value">187</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Followers</div>
                                        <div class="profile-widget-item-value">6,8K</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Terjual</div>
                                        <div class="profile-widget-item-value">2,1K</div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-widget-description">
                                <div class="text-primary">
                                    @ujangmamang
                                </div>
                                <div class="profile-widget-name">Ujang Maman
                                    <div class="text-muted d-inline font-weight-normal">
                                        <div class="slash"></div>
                                        Influencer
                                    </div>
                                </div>
                                Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is
                                not a fictional character but an original hero in my family, a hero for his children
                                and for his wife. So, I use the name as a user in this template. Not a tribute, I'm
                                just bored with <b>'John Doe'</b>.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="card">
                            <form method="post" class="needs-validation" novalidate="">
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <input id="name" type="text" class="form-control" name="name" required
                                               autofocus>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="username">Username</label>
                                            <input id="username" type="text" class="form-control" name="username"
                                                   required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="phone">No. Telepon</label>
                                            <input id="phone" type="text" class="form-control" name="phone">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label>Bio</label>
                                            <textarea class="form-control">Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </x-content>

@endsection
