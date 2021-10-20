@extends('master')
@section('content')
    <!-- CONTAINER CUSTOM-PRODUCT  -->
<div>
    <div class="filter col-10">
        <a href="#">filter</a>
    </div>
    <div class="trending-wrapper">
        <h2>Produits cherchés</h3>
        @foreach ($products as $item)
        <a href="detail/{{$item['id']}}">
            <div class="trending-item">
                <img class="trending-img" src="{{ $item['gallery'] }}">
                <div class="trending-caption">
                    <h3>{{ $item['name'] }}</h3>
                    <h6>{{ $item['description'] }}</h3>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
