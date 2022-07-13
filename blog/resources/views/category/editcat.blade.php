<!DOCTYPE html>
<html>

<head>
</head>

<body>

    <?php
    // echo __('messages.greeting');
    ?>

    <form method="post" action={{route('update',['category'=>$category])}}>
        @csrf
        شماره:<input type="text" name="id" value="{{$category->id}}"><br>
         نام دسته: <input type="text" name="title" value="{{$category->title}}"><br>
       
        <input type="submit" value="ثبت تغییرات">

    </form>
</body>

</html>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif