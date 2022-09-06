@extends('layouts.admin')

@section('title', 'Galeri')

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chocolat/0.4.21/js/jquery.chocolat.min.js" integrity="sha512-IxBgnEaYWj8ZJiVC3wmW7Uhkry1QSu2XvyuzA+ZQwEP2lpd45t7X9djRAkpn5M/Xuh7sxx7jY1Ch+EzxmPo+xQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')

    <x-content>
        <x-slot name="modul">
            <h1>Galeri</h1>
        </x-slot>

        <div>
            <div class="card">
                <div class="card-body">
                    <div class="section-title mt-0">Galeri</div>
                    <p class="section-lead">Dimanapun kapanpun harus menawan ygy.</p>

                    <div class="gallery gallery-md">
                        <div class="gallery-item" data-image="https://assets-gerra.s3.ap-southeast-1.amazonaws.com/organizations/150/events/SRClpdy7IA2gyS2pxnkLrnCaDhTonUJCGsbhQj7H.jpg" data-title="Image 1"></div>
                        <div class="gallery-item gallery-more" data-image="../assets/img/news/img08.jpg" data-title="Image 12">
                            <div>+2</div>
                        </div>
                        <div class="gallery-item gallery-hide" data-image="../assets/img/news/img01.jpg" data-title="Image 9"></div>
                    </div>
                </div>
            </div>
        </div>
    </x-content>

@endsection
