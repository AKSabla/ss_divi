@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Products</h2>
    <div class="row">
        @foreach ($products as $product)
        <div class='col-4'>
        <div class="card">
            <img class="card-img-top"src="{{ asset ('bird.jpg')}}"alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text </p>
            </div>
            <div class="card-body">
                <a href="#" class="card-link">Add to cart</a>
            </div>
        </div>
        </div>
        @endforeach
    </div>
</div>
@endsection


*/<!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->