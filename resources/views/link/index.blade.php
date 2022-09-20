@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
           @foreach($links as $link)
            <div class="col">
                <div class="card shadow-sm">

                    <img class="center-block" style="width: 50%;display: block;margin-left: auto;margin-right: auto;" src="{{asset('img/laravel.svg')}}" alt="" />
                    <div class="card-body">
                        <a style="text-decoration: none !important" href="{{$link->resource_url}}" target="_blank"> <h5 class="card-text">{{$link->title}}</h5></a>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <br />
                                <h6>{{$link->author}}</h6>
                            </div>
                            <small class="text-muted">{{$link->updated_at}}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {!! $links->links("pagination::bootstrap-4") !!}
            </div>
        </div>
    </div>
@endsection
