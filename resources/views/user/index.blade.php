<!-- Three Line List with secondary info and action -->

@extends('layout.master')

@section ('title' , 'Lista de Autores')

@section ('content')

<div class="mdl-cell mdl-cell--12-col">
	<h2>Author(User)'s List </h2>
	<h4>Add Author</h4>
	{{ link_to_action('UserController@create','+', null,array('class' => 'mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored')) }}
	
</div>

@foreach ($authors as $author) 
<div class="mdl-cell mdl-cell--12-col">
	<ul class="demo-list-three mdl-list">
		<li class="mdl-list__item mdl-list__item--three-line">
			<span class="mdl-list__item-primary-content">
				<i class="material-icons mdl-list__item-avatar">person</i>
				<span>{{ $author->name }} </span>
				<span class="mdl-list__item-text-body">
					{{ $author->about }} 
				</span>
			</span>
			<span class="mdl-list__item-secondary-content">
				{{ link_to_action('UserController@show','See', $author ,array('class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent')) }}

			</span>
			<span class="mdl-list__item-secondary-content">
				{{ link_to_action('UserController@edit','Edit', $author->id ,array('class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent')) }}
			</span>
			<span class="mdl-list__item-secondary-content">
				{{ Form::model($author, ['method' => 'DELETE', 'action' => ['UserController@destroy', $author->id]]) }}
			    	{{Form::submit('Delete',array('class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent')) }}
			    {{ Form::close() }}
			</span>

		</li>
	</ul>
</div>
@endforeach


@endsection