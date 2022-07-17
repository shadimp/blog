
@foreach($s2 as $t)

<img src="{{asset('photos/'."$t->imagepath")}}"  height="100" width="100">
<h4> <a href="/content/{{$t->id}}/details"> <?php echo $t->newstitle ?></a></h4>
<?php
echo  $t->summery;
?>

<br><br><br>
@endforeach