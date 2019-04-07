<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<h1>Contact book</h1>
<a href="{{URL::to('/')}}" class="btn btn-success">Home</a> 
<a href="{{ URL::to('/insert-data') }}" class="btn btn-primary">Add New</a> <br>


<table class="table table-border">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Actions</th>
	</tr>
	@foreach($data as $row)
	<tr>
		<td>{{ $row->id }}</td>
		<td>{{ $row->name }} </td>
		<td>{{ $row->email }}</td>
		<td>{{ $row->phone }}</td>
		<td>
			<a href="{{URL::to('/edit-data/'.$row->id)}}" class="btn btn-info">Edit</a>
			<a href="{{URL::to('/delete-data/'.$row->id)}}" class="btn btn-danger">Delete</a>
			<a href="{{URL::to('/view-data/'.$row->id)}}" class="btn btn-primary">View</a>
		</td>

	</tr>
	@endforeach
</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>