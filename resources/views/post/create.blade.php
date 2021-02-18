<form action="/post" method="post">
{{ csrf_field() }}

    <textarea name="text" rows="10" cols="50">Write something here</textarea>
    <br><br>
    <input type="submit">
</form>