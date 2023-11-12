@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TODOS Edit</div>

                <div class="card-body">
                    <form method="post" action="{{ route('todos.update') }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" class="form-control" value="{{$todos->id}}">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="title" name="title" class="form-control" value="{{$todos->title}}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea type="description" name="description" cols='5' rows='5' class="form-control" required>{{$todos->description}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <!-- <option disabled selected>Select Option</option> -->
                                @if($todos->completed == 1)
                                    <option value="0">Not Completed</option>
                                    <option value="1" selected>Completed</option>
                                @else
                                    <option value="0" selected>Not Completed</option>
                                    <option value="1">Completed</option>
                                @endif
                               
                            </select>
                        </div>
                        <a href="{{ route('todos.index') }}" class="inner btn btn-sm btn-info">Back</a>
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
