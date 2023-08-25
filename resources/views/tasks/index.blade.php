@extends('layouts.app')

@section('content')
    <div class="main-panel">
        @include('layouts.includes.navbar')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-header ">
                                <h4 class="card-title">Tasks List</h4>
                                <a href="{{url('tasks/create')}}" >Create Task</a>
                            </div>
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tasks as $task)
                                        <tr>
                                            <td>{{ $task->id }}</td>
                                            <td>{{ $task->title }}</td>
                                            <td>{{ $task->description }}</td>
                                            <td>{{ $task->created_at }}</td>
                                            <td>{{ $task->updated_at }}</td>
                                            <td><a href="{{url('tasks/'.$task->id.'/edit')}}">Edit</a> </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{ $tasks->links() }}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
