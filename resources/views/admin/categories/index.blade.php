@extends('layouts.app')


@section('content')
    
	<div class="panel panel-default">
		<div class="panel-heading">Categories</div>
		<div class="panel-body">
			<table class= "table table-hover">
				<thead>
					<th>
						Category name
					</th>
					
					<th>
						Edit
					</th>
						
					<th>
						Delete
					</th>
				</thead>
				
				<tbody>
					@if($categories->count() > 0)
						@foreach($categories as $category)
							<tr>
								<td>
									{{ $category->name }}
								</td>
								<td>
									<a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-xs btn-info"></a>
										<span class="glyphicon glyphicon-pencil"></span>
								</td>
								<td>
									<a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-xs btn-danger"></a>
										<span class="glyphicon glyphicon-trash"></span>
								</td>
							</tr>
						@endforeach
					@else
						<tr> 
							<th colspan="5" class="text-center">No Categories yet</th>
						</tr>
					@endif
				
				</tbody>
			
			</table>
		</div>
    </div>
@endsection