@extends('layouts.app')

@section('content')
<div class="container">
	<br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Edit Todo</h2>
    	</div>
    	<div class="col-md-6">
    		<div class="float-right">
    			<a href="{{ route('todo.index') }}" class="btn btn-primary">Back</a>
    		</div>
    	</div>
    	<br>
        <div class="col-md-12">
        	@if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-error" role="alert">
                    {{ session('error') }}
                </div>
            @endif
			<form action="{{ route('todo.update', ['todo' => $todo->id]) }}" method="POST">
				@csrf
                @method('PUT')
				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" class="form-control" id="title" name="title" value="{{ $todo->title }}">
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea name="description" class="form-control" id="description" rows="5">{{ $todo->description }}</textarea>
				</div>
				<div class="form-group">
				<label for="status">Select todo status</label>
				<select class="form-control" id="status" name="status">
					<option value="pending" @if ($todo->status == 'pending') selected @endif>Pending</option>
					<option value="completed" @if ($todo->status == 'completed') selected @endif>Completed</option>
				</select>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
    </div>
</div>
@endsection