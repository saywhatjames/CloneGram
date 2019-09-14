@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="py-2">
            <div class="row ">
                <div class="col-6 offset-3">
                    <div class="py-2 px-3" style="border: 1px solid #e6e6e6; background-color: white" >
                        <img src="{{$post->user->profile->profileImage()}}"
                             alt=""
                             class="w-100 rounded-circle"
                             style="max-width: 35px;">

                        <span class="font-weight-bold pl-3 border-dark">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{$post->user->userName}}</span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 offset-3">
                    <a href="/profile/{{$post->user->id}}">
                        <img src="/storage/{{$post->image}}" class="w-100">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="p-2" style="border: 1px solid #e6e6e6; background-color: white">
                        <p>
                            <span class="font-weight-bold pr-2">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{$post->user->userName}}</span>
                            </a>
                        </span>
                            <span>{{$post->caption}}</span>
                        </p>
                    </div>
                </div>
            </div>
            </div>
        @endforeach
    </div>
@endsection

