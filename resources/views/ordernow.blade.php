@extends('master')
@section('content')
    <!-- CONTAINER CUSTOM-PRODUCT  -->
<div>
    <div class="trending-wrapper">
        <table class="table">
            <tbody>
              <tr>
                <td><b>Montant</b></td>
                <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td><b>Tax</b></td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td><b>Montant total</b></td>
                <td>$ {{$total + 10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <textarea type="text" class="form-control" name="address" placeholder="Entrer votre adresse"></textarea>
                </div>
                <div class="form-group">
                  <label for="payment"><b>Méthode de payment</b></label><br>
                  <input type="radio" value="cash" name="payment"><span>Payment en ligne</span><br>
                  <input type="radio"value="cash" name="payment"><span>Payment EMI</span><br>
                  <input type="radio"value="cash" name="payment"><span>Payment à la livraison</span><br><br>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
              </form>
        </div>
    </div>
</div>
@endsection
