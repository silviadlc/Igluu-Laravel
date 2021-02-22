@extends('layouts.app')
@section('content')
<h3 class="font-bold m-8 text-3xl text-gray-900 leading-tight"">Crea un nou post</h3>
<div class="px-20 py-6">
    <form action="/post" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <textarea name="text" class="form-textarea mt-1 block w-80" rows="5" placeholder="Write something here."></textarea>
        <br><br>
        <input type="file" name="image">
        <br><br>
        <x-button class="bg-green-500 shadow font-bold text-white hover:text-green-500">Envia</x-button>
    </form>
</div>
@endsection

