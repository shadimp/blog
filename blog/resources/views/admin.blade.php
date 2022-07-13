

@extends('layouts.mylayout')

@section('content')

<?php echo __('messages.greetingadmin'); ?>{{ Auth::user()->name }}
<br>

@endsection