<!DOCTYPE html>
<html>

<body>
    <form method="post" action={{route('add-content')}}>
        @csrf

        شماره دسته خبری: <input type="text" name="catid"><br>
        عنوان خبر: <input type="text" name="newstitle"><br>
        خلاصه خبر: <input type="text" name="summery"><br>
        متن کامل خبر: <input type="text" name="fullcontent"><br>

        <input type="submit">

    </form>
    <br><br>

    <form method="post" action="{{ route('image-store') }}" enctype="multipart/form-data">
        @csrf
        شماره دسته خبری: <input type="text" name="id"><br>

        <label>
            <h4>Add image</h4>
        </label>
        <input type="file"  required name="image">
        <div>
            <button type="submit" >Add</button>
        </div>

    </form>
</body>

</html>
@foreach($content as $t)

<?php
echo $t->catid . $t->newstitle;
?>
<a href="/content/{{$t->id}}/edit"> edit</a>
<a href="/content/{{$t->id}}/delete"> delete</a>
<br>
@endforeach