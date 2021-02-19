<h3>Crea un nou post</h3>

<form action="/post" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
    <textarea name="text" rows="10" cols="50">Write something here</textarea>
    <br><br>
    <input type="file" name="image">
    <br><br>
    <input type="submit">
</form>