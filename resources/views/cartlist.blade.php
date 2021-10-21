@extends('master')
@section('content')
    <!-- CONTAINER CUSTOM-PRODUCT  -->
<div>
    <div class="trending-wrapper">
        <h2>Produits cherchés</h3>
        <br><br><a class="btn btn-success" href="/ordernow">Commander maintenant</a> <br><br>
        @foreach ($products as $item)
        <div class="row searched-items cart-list-divider">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{ $item->gallery }}">
                </a>
            </div>
            <div class="col-sm-3">
                <h3>{{ $item->name }}</h3>
                <h6>{{ $item->description }}</h3>
            </div>
            <div class="col-sm-4">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Supprimer de la carte</a>
            </div>
        </div>
        @endforeach
        <br><a class="btn btn-success" href="">Acheter maintenant</a><br><br><br>
    </div>
</div>
@endsection
