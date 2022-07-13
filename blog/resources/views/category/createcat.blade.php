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