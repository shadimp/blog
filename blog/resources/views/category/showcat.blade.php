
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form method="post" action={{route('add')}}>
            @csrf
            <!-- شماره:<input type="text" name="id"><br> -->
           نام دسته: <input type="tile" name="title"><br>
            
            <input type="submit" >

        </form>
    </body>
</html>

@foreach($category as $t)

<?php
echo $t->id . $t->title ;
?>
<a href="/category/{{$t->id}}/edit"> edit</a>
<a href="/category/{{$t->id}}/delete"> delete</a>
<br>
@endforeach

