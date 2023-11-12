@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TODOS Edit</div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="title" class="form-control" value="{{$todos->title}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea type="description" cols='5' rows='5' class="form-control" disabled>{{$todos->description}}</textarea>
                        </div>
                        <div class="mb-3 form-check" style="padding-left:0px;">
                            <a href="{{ route('todos.index') }}" class="inner btn btn-sm btn-info">Back</a>

                            <!-- <a href="{{ route('todos.index') }}" class="inner btn btn-sm btn-info">Complete</a> -->

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
