@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Courses |
                    <a href="{{ route('courses.create') }}" class="btn btn-default">New</a>
                </div>
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
                    @foreach($courses as $course)
                        <div class="col-md-2">
                            <div class="panel panel-{{ bootstrap_message() }}">
                                <div class="panel-heading">
                                    <a href="{{route('courses.edit',['courses' => $course->id])}}">
                                        {{ $course->title }}
                                    </a>
                                </div>
                                <div class="panel-body">
                                    {{ str_limit($course->description,20) }}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
