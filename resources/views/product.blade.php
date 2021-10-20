@extends('master')
@section('content')
    <!-- CONTAINER CUSTOM-PRODUCT  -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($products as $item)
                <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                    <a href="detail/{{$item['id']}}">
                        <img class="slider-img" src="{{ $item['gallery'] }}">
                        <div class="carousel-caption">
                            <h3>{{ $item['name'] }}</h3>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="trending-wrapper">
        <h3>Produits tendance</h3>
        @foreach ($products as $item)
        <a href="detail/{{$item['id']}}">
            <div class="trending-item">
                <img class="trending-img" src="{{ $item['gallery'] }}">
                <div class="trending-caption">
                    <h3>{{ $item['name'] }}</h3>
                </div>
            </div>
        </a>
        @endforeach
    </div>
@endsection
