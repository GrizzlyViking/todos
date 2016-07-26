@extends('layouts.standard')

@section('content')
    <div class="h3">Todos</div>
    <table class="table table-striped table-hover animated bounceInLeft">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Deadline</th>
        </tr>
        </thead>
        <tbody>
        @foreach($todos as $row)
            <tr data-id="{{ $row->id }}">
                <td>{{ $row->title }}</td>
                <td>{{ $row->description }}</td>
                <td>{{ $row->completed_by }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{!! route('todos.create') !!}"><button class="btn btn-default">Create new todo</button></a>
@endsection

@section('scripts')
    @parent
    <script>
        $(document).ready(function () {
            $('tbody tr').on('click', function(e){
                window.location.replace('/todos/' + $(this).data('id') + '/edit');
            });
        });
    </script>
@endsection