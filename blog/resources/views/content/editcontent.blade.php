<!DOCTYPE html>
<html>

<head>
</head>

<body>

    <?php
    // echo __('messages.greeting');
    ?>
    <form method="post" action={{route('content-update',['content'=>$content])}}>
        @csrf
        <label>شماره ردیف خبر: </label><br><input type="text" name="id" value="{{$content->id}}"><br>
        <label>شماره دسته خبری:</label><br> <input type="text" name="catid" value="{{$content->catid}}"><br>
        <label>عنوان خبر: </label><br><textarea type="text" name="newstitle"  rows="1" cols="90">{{$content->newstitle}}</textarea><br>
        <label>خلاصه خبر: </label><br><textarea type="text" name="summery" rows="4" cols="90">{{{$content->summery}}}</textarea><br>
        <label>متن کامل خبر:</label><br> <textarea type="text" name="fullcontent"  rows="4" cols="90">{{$content->fullcontent}}</textarea><br>

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