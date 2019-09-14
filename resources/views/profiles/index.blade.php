@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img
                    src="{{$user->profile->profileImage()}}"
                    alt=""
                    class="p-5 rounded-circle w-100"
                    >
            </div>
            <div class="col-9 py-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center">
                        <div class="h4">{{$user->userName}}</div>
                        <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                    </div>
                    @can('update', $user->profile)
                        <a href="/p/create">Add New Post</a>
                    @endcan
                </div>
                @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan
                <div class="pt-3 d-flex">
                    <div class="pr-3"><strong>{{$user->posts->count()}}</strong> posts</div>
                    <div class="pr-3"><strong> {{$user->profile->followers->count()}}</strong> followers</div>
                    <div class="pr-3"><strong>{{$user->following->count()}}</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold"> {{$user->profile->title}}</div>
                <div class=""> {{$user->profile->description}}</div>
                <div class=""> {{$user->profile->url}}</div>
            </div>
        </div>
        <div class="row">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{$post->id}}">
                        <img class="w-100" src="/storage/{{$post->image}}">
                    </a>
                </div>
                @endforeach
        </div>
    </div>
@endsection

