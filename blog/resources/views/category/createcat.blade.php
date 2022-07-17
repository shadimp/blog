<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div>
        <form method="post" action={{route('add')}}  style="width:30%">
            @csrf           
           نام دسته: <input type="tile" name="title">            
            <input type="submit" >
        </form>
        </div>
    </body>
</html>