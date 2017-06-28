@extends('layout.master')

@section ('title' , 'Editar Author')

@section ('content')

	<div class="mdl-cell mdl-cell--12-col"> <h2>Editar Author</h2> </div>

	{{ Form::model($author, ['method' => 'PATCH', 'action' => ['UserController@update', $author->id]]) }}
		<div class="mdl-cell mdl-cell--12-col">
			{{Form::label('name' , 'Name: ')  }}
			{{Form::text('name') }}
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			{{Form::label('username' , 'User name: ')  }}
			{{Form::text('username') }}
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			{{Form::label('email' , 'Email: ')  }}
			{{Form::text('email') }}
		</div>
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			{{Form::label('about' , 'About: ') }}
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			{{Form::textarea('about') }}
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			{{Form::submit('Enviar!',array('class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent')) }}
		</div>

	{{ Form::close() }}


@endsection


