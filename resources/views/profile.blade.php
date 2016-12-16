@extends('softadmin::master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ config('softadmin.assets_path') }}/css/ga-embed.css">
    <style>
        .user-email {
            font-size: .85rem;
            margin-bottom: 1.5em;
        }
    </style>
@stop

@section('content')
    <div style="background-size:cover; background: url({{ Softadmin::image( Softadmin::setting('admin_bg_image'), config('softadmin.assets_path') . '/images/bg.jpg') }}) center center;position:absolute; top:0; left:0; width:100%; height:300px;"></div>
    <div style="height:160px; display:block; width:100%"></div>
    <div style="position:relative; z-index:9; text-align:center;">
        <img src="{{ Softadmin::image( Auth::user()->avatar ) }}" class="avatar"
             style="border-radius:50%; width:150px; height:150px; border:5px solid #fff;"
             alt="{{ Auth::user()->name }} avatar">
        <h4>{{ ucwords(Auth::user()->name) }}</h4>
        <div class="user-email text-muted">{{ ucwords(Auth::user()->email) }}</div>
        <p>{{ Auth::user()->bio }}</p>
        <a href="{{ route('softadmin.users.edit', Auth::user()->id) }}" class="btn btn-primary">Edit My Profile</a>
    </div>
@stop
