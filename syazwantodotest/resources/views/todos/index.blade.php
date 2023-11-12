@extends('layouts.app')

@section('styles')
<style>
    #outer
    {
    width:auto;
    text-align: center;
    }
    .inner{
        display: inline-block;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TODO LIST</div>

                <div class="card-body">

                    @if(Session::has('alert-success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('alert-success')}}
                        </div>
                    @endif
                    <a href="{{ route('todos.create') }}" class="inner btn btn-sm btn-info" style="background-color: #008CBA;color:white;">Create New Todo</a><br>
                    
                    @if(count($todos) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                            <!-- <th scope="col">No</th> -->
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todos as $todo)
                            <tr>
                                <!-- <th scope="row">1</th> -->
                                <td>{{$todo->title}}</td>
                                <td>{{$todo->description}}</td>
                                <td>
                                    @if($todo->completed == 1)
                                       Completed
                                    @else
                                       Not Completed
                                    @endif
                                </td>
                                <td id="outor">
                                    <a href="{{ route('todos.edit',$todo->id) }}" class="inner btn btn-sm btn-success">Edit</a>
                                    <a href="{{ route('todos.view',$todo->id) }}" class="inner btn btn-sm btn-info">View</a>
                                    <form method="post" action="{{ route('todos.delete') }}" class="inner">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$todo->id}}">
                                        <input type="submit" class="btn btn-sm btn-danger" value="Delete">

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <h4> No Todo data yet</h4>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
