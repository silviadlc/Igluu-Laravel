@extends('layouts.app')
@section('content')

<h1 class="font-bold m-8 text-3xl text-gray-900 leading-tight">Hello world!</h1>
<div class="px-20">
    <div class="flex flex flex-wrap -mx-2">
    @foreach ($posts as $post)
        <div class="w-1/5 items-center">
            <img class="shadow rounded w-80" src="data:image/png;base64,{{$post->image}}">
            <div class="px-2 py-4">
                <div class="font-bold text-xl mb-2">{{ $post->text }}</div>
                <div class="flex space-x-40">
                    <p class="text-gray-700 text-base">By: {{$post->user->name}}</p>
                    <form action="post/{{$post->id}}" method="post">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button class="inline-block bg-red-500 hover:bg-white rounded-full px-5 py-1 shadow text-sm font-bold text-white hover:text-red-500 mr-2 mb-2" type="submit">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection
