@extends('layout.app')
@section('title', 'Главная страница')
@section('content')

@include('partials.header')

<div class="h-screen bg-sky-200 grid grid-cols-1 md:grid-cols-3 gap-x-2 gap-y-2">

    @foreach ($posts as $post)      
    
        @include('posts.partials.item', ["post" => $post])

    @endforeach

</div>
@endsection
