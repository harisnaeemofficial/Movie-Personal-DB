@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Movie</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

					{!! Form::open(['method' => 'POST', 'route' => 'post_movie', 'class' => 'form-horizontal']) !!}

					    <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
					        {!! Form::label('namelabel', 'Movie Name:') !!}
					        {!! Form::text('movie_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
					        <small class="text-danger">{{ $errors->first('movie_name') }}</small>
					    </div>

					    <div class="btn-group pull-right">
					        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
					        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
					    </div>
					{!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
