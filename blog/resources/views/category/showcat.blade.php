<!DOCTYPE html>
<html>

<head>
    <style>
        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

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

        .mytable {
            direction: rtl;
            background-color: white;
            padding: 20px;
            width: 4 0%;
        }

        .column {
            float: left;
            width: 50%;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div>
        <form method="post" action={{route('add')}} class="form1">
            @csrf
            نام دسته: <input type="tile" name="title">
            <input type="submit">
        </form>
    </div>
    <br><br>
    <table border="1" class="mytable">
        <thead>
            <th>شماره</th>
            <th>نام دسته خبر</th>
            <th>ویرایش</th>
            <td>حذف</td>
        </thead>
        <tbody>
            @foreach($category as $t)
            <tr>
                <td> <?php echo $t->id; ?> </td>
                <td> <?php echo  $t->title; ?> </td>
                <td><a href="/category/{{$t->id}}/edit"> edit</a></td>
                <td><a href="/category/{{$t->id}}/delete"> delete</a></td>
            </tr>
            @endforeach
        </tbody>
</body>

</html>