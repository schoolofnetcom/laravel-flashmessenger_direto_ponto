@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Update a Course</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{ Form::model($course, ['route' => ['courses.update', $course->id], 'method' => 'put', 'class' => 'form-horizontal']) }}
                    <div class="form-group">
                        <label class="col-md-4 control-label">Title</label>
                        <div class="col-md-6">
                            {{ Form::text('title', null, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Description</label>
                        <div class="col-md-6">
                            {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
