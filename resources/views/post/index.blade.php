<h1>Hello world!</h1>
<div style="width:100%; display: flex">
@foreach ($posts as $post)
    <div class="post" style="padding: 20px">
        <p>{{ $post->text }}</p>
        <img src="data:image/png;base64,{{$post->image}}" style="max-width:200px">
        <p>By: {{$post->user->name}}</p>
        <form action="post/{{$post->id}}" method="post">
            {{ csrf_field() }}
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Elimina</button>
        </form>
    </div>
@endforeach
</div>

