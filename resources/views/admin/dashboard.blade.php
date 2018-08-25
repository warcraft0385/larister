@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Catgory 0</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Material 0</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Guests 0</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Today guests 0</span></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<a class="btn btn-block btn-default" href="#">Create category</a>
			<a class="list-group-item" href="#">
				<h4 class="list-group-item-heading">Category first</h4>
				<p class="list-group-item-text">Number category</p>
			</a>
		</div>
		<div class="col-sm-6">
			<a class="btn btn-block btn-default" href="#">Create material</a>
			<a class="list-group-item" href="#">
				<h4 class="list-group-item-heading">Material first</h4>
				<p class="list-group-item-text">Number material</p>
			</a>
		</div>
</div>
@endsection