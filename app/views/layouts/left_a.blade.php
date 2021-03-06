<?php
/**
 * Layout with narrow left sidebar, wide middle sidebar (content) and additional right sidebar
 */
?>
@extends('layouts.main')

@section('main_container')
<div class="row">
	<div id="sidebar" class="col-md-3">
		@yield('sidebar')
	</div>
	<div id="content" class="col-md-6">
		@yield('content')
	</div>
	<div id="a_sidebar" class="col-md-3">
		@yield('a_sidebar')
	</div>
</div>
@stop