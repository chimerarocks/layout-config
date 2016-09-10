@extends('layouts.app')

@section('content')

	<div class="container">
		<h3>Create Layout</h3>

		{!! Form::open(['method' => 'layout', 'route' => ['admin.layouts.store'], 'files' => true]) !!}

		<div class="form-group">
			{!! Form::label('Name', 'Name:') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Layout', 'Layout:') !!}
			{!! Form::file('layout', ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Submit', ['class' => 'form-control']) !!}
		</div>

		{!! Form::close() !!}

	</div>

@endsection