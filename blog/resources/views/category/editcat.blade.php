<!DOCTYPE html>
<html>

<head>
    <style>
        .form1 {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 30%;
        }

        * {
            box-sizing: border-box;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div>
        <form method="post" action={{route('update',['category'=>$category])}} class="form1">
            @csrf
            <label>شماره:</label><br><input type="text" name="id" value="{{$category->id}}"><br>
            <label>نام دسته: </label><br><input type="text" name="title" value="{{$category->title}}"><br>
            <br>
            <input type="submit" value="ثبت تغییرات">

        </form>
    </div>
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