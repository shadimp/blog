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
        شماره ردیف خبر: <input type="text" name="id" value="{{$content->id}}"><br>
        شماره دسته خبری: <input type="text" name="catid" value="{{$content->catid}}"><br>
        عنوان خبر: <input type="text" name="newstitle" value="{{$content->newstitle}}"><br>
        خلاصه خبر: <input type="text" name="summery" value="{{$content->summery}}"><br>
        متن کامل خبر: <input type="text" name="fullcontent" value="{{$content->fullcontent}}"><br>

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