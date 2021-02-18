@extends('layouts.app')

@section('content')
<!-- Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row justify-content-center">
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
                <div class="card mx-auto custom-card" id="prova">
                    <div class="row post-header col-12 py-2 px-3">
                        <div class="col-6 float-left "><h4>Post One</h4></div>
                        <div class="col-6 float-right text-right post-number"><h4><i class="fa fa-ellipsis-v"></i></h4></div>
                    </div>
                    <img class="card-img" src="https://cdn.mos.cms.futurecdn.net/huWFavoNm5ECK8UL23DG6N-970-80.jpg.webp" alt="Card image cap">
                    <div class="card-body px-3">
                        <div class="col-2 float-left text-left">
                            <i class="fa fa-heart"></i>
                            <p class="card-title"> Likes</p>
                        </div>
                        <div class="col-2 float-left text-left">
                            <i class="fa fa-telegram"></i>
                        </div>
                    </div>
                    <div class="row px-3 pb-3">
                        <p class="card-text">Life doesn't get easier or more forgiving, we get stronger and more resilient.</p>
                    </div>
                    <div class="row post-header px-3 pb-3">
                        <div class="col-10 float-left text-left">Comment...</div>
                    </div>       
                </div>

        </div>
    </div>
</div>
@endsection
