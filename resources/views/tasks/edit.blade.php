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
                                <h4 class="card-title">Edit Task</h4>
                            </div>
                            <div class="card-body table-full-width table-responsive">
                                <div class="card-body">
                                    <form action="{{ url('tasks/'.$task->id) }}" method="put">
                                        @csrf
                                        @if(session('success'))
                                            <div class="alert alert-success">{{ session('success') }}</div>
                                        @endif
                                        @if($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-8 pr-1">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="title" placeholder="title" value="{{$task->title}}" required >
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 pr-1">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea type="text" class="form-control" placeholder="Description" name="description" required >
                                                        {{$task->description}}
                                                    </textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
