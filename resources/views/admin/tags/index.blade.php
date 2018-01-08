@extends('layouts.app')


@section('content')
    
	<div class="panel panel-default">
		<div class="panel-heading">Tags</div>
		<div class="panel-body">
			<table class= "table table-hover">
				<thead>
					<th>
						Tag name
					</th>
					
					<th>
						Edit
					</th>
						
					<th>
						Delete
					</th>
				</thead>
				
				<tbody>
					
					@if($tags->count() > 0)
						@foreach($tags as $tag)
							<tr>
								<td>
									{{ $tag->tag }}
								</td>
								<td>
									<a href="{{ route('tag.edit', ['id' => $tag->id ]) }}" class="btn btn-xs btn-info"></a>
										<span class="glyphicon glyphicon-pencil"></span>
								</td>
								<td>
									<a href="{{ route('tag.destroy', ['id' => $tag->id ]) }}" class="btn btn-xs btn-danger"></a>
										<span class="glyphicon glyphicon-trash"></span>
								</td>
							</tr>
						@endforeach
					@else
						<tr> 
							<th colspan="5" class="text-center">No Tags yet</th>
						</tr>
					@endif
				
				</tbody>
			
			</table>
		</div>
    </div>
@endsection