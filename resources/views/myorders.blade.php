@extends('master')
@section('content')
    <!-- CONTAINER CUSTOM-PRODUCT  -->
    <div>
        <div class="trending-wrapper">
            <h2>Mes commandes</h3>
                @foreach ($orders as $item)
                    <div class="row searched-items cart-list-divider">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-img" src="{{ $item->gallery }}">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <h3>Nom: {{ $item->name }}</h3>
                            <h6>Adresse: {{ $item->address }}</h6>
                            <h6>Statut du paiement: {{ $item->payment_status }}</h6>
                            <h6>Méthode de paiement: {{ $item->payment_method }}</h6>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection
