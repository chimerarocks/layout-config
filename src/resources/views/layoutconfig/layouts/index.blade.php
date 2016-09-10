@extends('layouts.app')

@section('content')

	<div class="container">
		<h3>Layouts</h3>
		<a href="{{route('admin.layouts.create')}}">Create</a>
		<br><br>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@forelse($layouts as $layout)
				<tr>
					<td>{{$layout->name}}</td>
					<td><a href="{{route('admin.layouts.edit', ['id' => $layout->id])}}">Update</a></td>
				@empty
					<td colspan="4"> Nenhum layout registrado </td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>

@endsection