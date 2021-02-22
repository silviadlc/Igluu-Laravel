<h1 style="padding: 20;">Hello world!</h1>
<div style="align-items: center; width:100%; display: grid; grid-template-columns: auto auto auto auto auto;">
@foreach ($posts as $post)
    <div class="post" style="text-align: center;">
        <p style="font-weight: bold; font-size: 20px">{{ $post->text }}</p>
        <img src="data:image/png;base64,{{$post->image}}" style="max-width: 300px">
        <div style="">
            <p>By: {{$post->user->name}}</p>
            <form action="post/{{$post->id}}" method="post">
                {{ csrf_field() }}
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Elimina</button>
            </form>
        </div>
    </div>
@endforeach
</div>

