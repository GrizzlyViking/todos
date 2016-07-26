@extends('layouts.standard')

@section('content')
    <div class="row animated bounceInRight">
        <div class="col-sm-12 col-md-6 col-md-offset-3">
            <div class="h3">Update todo</div>
            {!! Form::model($todo, ['route' => ['todos.update', $todo->id], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Todo Title']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('completed_by', 'Deadline') !!}
                {!! Form::text('completed_by', null, ['class' => 'form-control', 'placeholder' => 'Deadline']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('author', 'Author') !!}
                {!! Form::select('author', $authors, 1, ['class' => 'form-control']) !!}
            </div>


            {!! Form::submit('Update', ['class' => 'btn btn-success pull-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection