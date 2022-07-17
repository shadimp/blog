

@extends('layouts.mylayout')

@section('content')

<p style="direction:rtl">{{ Auth::user()->name }}<?php echo __('messages.greetingadmin'); ?></p>
<br>

@endsection