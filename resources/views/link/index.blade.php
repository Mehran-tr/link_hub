@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
           @foreach($links as $link)
            <div class="col" >
                <div class="card shadow-sm" >

                    <img class="center-block" style="width: 50%;display: block;margin-left: auto;margin-right: auto;" src="{{asset('img/laravel.svg')}}" alt="" />
                    <div class="card-body">
                        <a style="text-decoration: none !important" href="{{$link->resource_url}}" target="_blank" rel="nofollow"> <h6 class="card-text">{{$link->title}}</h6></a>
                                <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <br />
                                <p>Author: {{$link->author}}</p>
                            </div>
                            <small class="text-muted">Total view :10</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br>
            <div class="d-flex justify-content-center center-block">
                {!! $links->links("pagination::bootstrap-4") !!}
            </div>
    </div>
@endsection
