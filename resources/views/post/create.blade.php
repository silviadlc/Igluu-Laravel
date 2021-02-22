@extends('layouts.app')
@section('content')
<h3 class="font-bold m-8 text-3xl text-gray-900 leading-tight"">Crea un nou post</h3>
<div style="padding: 20px; width:100%;">
    <form action="/post" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <textarea name="text" rows="10" cols="50">Write something here</textarea>
        <br><br>
        <input type="file" name="image">
        <br><br>
        <button class="inline-block bg-green-500 hover:bg-white rounded-full px-5 py-1 shadow text-sm font-bold text-white hover:text-green-500 mr-2 mb-2" type="submit">Envia</button>
    </form>
</div>
@endsection

