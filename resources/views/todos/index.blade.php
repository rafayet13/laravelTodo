@extends('layouts.main')
@section('content')
    <h2> all todos list </h2>
    @foreach($todo_lists as $list)
        <h4> {{ link_to_route('todos.show', $list->name, [$list->id]) }} </h4>
        <ul class="no-bullet button-group">
            <li>
                {{ link_to_route('todos.edit', 'edit', [$list->id], ['class' => 'tiny button']) }}
            </li>
            <li>
                {{ Form::model($list, ['route' => ['todos.destroy', $list->id], 'method' => 'DELETE'] ) }}
                    {{ Form::button('destroy', ['type' => 'submit', 'class' => 'tiny alert button']) }}
                {{ Form::close() }}
            </li>
        </ul>
    @endforeach

    {{ link_to_route('todos.create', 'create new list', null, ['class' => 'success button']) }}

@stop