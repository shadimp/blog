


@foreach($category as $t)

<!-- <a href="/todo/{{$t->id}}/delete"> delete</a> -->
<?php
echo $t->id . $t->title . "<br>";
?>

@endforeach

