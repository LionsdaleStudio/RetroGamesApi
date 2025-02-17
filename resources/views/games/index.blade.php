@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($games as $game)
        <div class="col-3 mb-3">
            <div class="card">
                <img class="card-img-top" style="max-height:13rem !important" src="{{ asset('storage/img/'.$game->picture) }}" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title text-truncate">{{$game->name}}</h4>
                    <p class="card-text text-truncate">{{$game->description}}</p>
                    <div class="row">
                        <div class="col-4"><a href="" class="btn btn-info w-100">Details</a></div>
                        <div class="col-4"> <a href="" class="btn btn-warning w-100">Edit</a></div>
                        <div class="col-4">
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger w-100 text-dark">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
