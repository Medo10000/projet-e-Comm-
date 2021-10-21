<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">E-comm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link " aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link">Orders</a>
                </li>
            </ul>
            <form action="/search" class="d-flex">
                <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="nav navbar-nav ml-auto">
                <li><a href="/cartlist">carte({{ $total }})</a></li>
                @if (Session::has('user'))
                    <li class="dropdown" style="margin-left: 15px;">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li style="margin-left: 15px;"><a href="/logout">Se déconnecter</a></li>
                        </ul>
                    </li>
                @else
                    <li style="margin-left: 15px;"><a href="/login">S'identifier</a></li>
                    <li style="margin-left: 15px;"><a href="/register">S'inscrire</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
