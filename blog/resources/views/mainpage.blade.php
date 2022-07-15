@foreach($s2 as $t)


<img src="{{asset('photos/'."$t->imagepath")}}"  height="100" width="100">
<?php

echo $t->newstitle ."<br>";
echo  $t->summery;
// echo $t->imagepath;
?>

<br><br><br>
@endforeach