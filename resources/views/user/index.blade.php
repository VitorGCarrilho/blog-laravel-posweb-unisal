<!-- Three Line List with secondary info and action -->

@extends('layout.master')

@section ('title' , 'Lista de Autores')

@section ('content')

<div class="mdl-cell mdl-cell--12-col">
	<h2>Lista de autores </h2>
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
				{{ link_to_action('UserController@edit','Edit', $author->id,array('class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent')) }}
			</span>
		</li>
	</ul>
</div>
@endforeach


@endsection