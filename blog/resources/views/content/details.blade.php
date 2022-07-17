
@foreach($content as $t)

<img src="{{asset('photos/'."$t->imagepath")}}"  height="100" width="100">
<h3>  <?php echo $t->newstitle ?></h3>
<h4><?php echo  $t->summery;?><br></h4>
<?php echo  $t->fullcontent;?>


@endforeach