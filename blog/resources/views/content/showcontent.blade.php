<!DOCTYPE html>
<html>

<head>
    <title>متن خبر</title>
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
            width: 100%;
        }

        .column {
            float: left;
            width: 50%;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="column">
        <form method="post" action={{route('add-content')}} class="form1">
            @csrf

            <label> شماره دسته خبری:</label> <br><input type="text" name="catid"><br>
            <label> عنوان خبر:</label> <br><textarea type="text" name="newstitle" rows="1" cols="90"></textarea><br>
            <label> خلاصه خبر: </label><br><textarea type="textarea" name="summery" rows="4" cols="90"></textarea><br>
            <label> متن کامل خبر: </label><br><textarea type="textarea" name="fullcontent" rows="4" cols="90"></textarea><br>
            <input type="submit" value="ذخیره">

        </form>
    </div>
    <br><br>
    <div>
        <div class="column">
            <form method="post" action="{{ route('image-store') }}" enctype="multipart/form-data" class="form1">
                @csrf
                شماره خبر: <input type="text" name="id"><br>

                <label>
                    <h4>انتخاب عکس</h4>
                </label>
                <input type="file" required name="image">
                <div>
                    <input type="submit" value="بارگزاری عکس">
                </div>

            </form>
        </div>
    </div>
    <table border="1" class="mytable">
        <thead>

            <th>شماره خبر</th>
            <th>شماره دسته خبر</th>
            <th> عنوان خبر</th>
            <th> خلاصه خبر</th>
            <th> متن خبر</th>
            <th>ویرایش</th>
            <th>حذف</th>
        </thead>
        <tbody>
            @foreach($content as $t)
            <tr>
                <td> <?php echo $t->id; ?></td>
                <td> <?php echo $t->catid; ?></td>
                <td> <?php echo $t->newstitle; ?></td>
                <td> <?php echo  $t->summery; ?></td>
                <td> <?php echo  $t->fullcontent; ?></td>
                <td><a href="/content/{{$t->id}}/edit"> edit</a></td>
                <td><a href="/content/{{$t->id}}/delete"> delete</a></td>
            </tr>
            <br>
            @endforeach
        </tbody>
    </table>
</body>

</html>