@extends('layouts.app')
@section('content')
<h3 style="padding: 20px;">Crea un nou post</h3>
<div style="padding: 20px; width:100%;">
    <form action="/post" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <textarea name="text" rows="10" cols="50">Write something here</textarea>
        <br><br>
        <input type="file" name="image">
        <br><br>
        <button type="button" class="btn btn-success">Envia</button>
    </form>
</div>
@endsection

