@extends('master')
@section('content')
<!-- CONTAINER CUSTOM-LOGIN  -->
<div class="container custom-login">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto">
            <form action='register' method="POST">
                @csrf
                <div class="mb-3 form-group">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Entrer votre nom">
                  </div>
                <div class="mb-3 form-group">
                  <label for="email" class="form-label">Adresse Email</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 form-group">
                  <label for="password" class="form-label">Mot de passe</label>
                  <input type="password" class="form-control" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">S'identifier</button>
              </form>
        </div>
    </div>
</div>
@endsection
