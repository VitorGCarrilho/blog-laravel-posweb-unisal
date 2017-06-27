@extends('layout.master')

@section ('title' , 'Criando entrada no blog')

@section ('content')

	<div class="mdl-cell mdl-cell--12-col"> <h2>Criando Entrada no Blog</h2> </div>

	{{ Form::model($post, ['method' => 'PATCH', 'action' => ['EntryController@update', $post->id]]) }}

		<div class="mdl-cell mdl-cell--12-col">
			{{Form::label('title' , 'Titulo do Post: ')  }}
			{{Form::text('title') }}
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			{{Form::label('is_private' , 'Post Privado?') }}
			{{Form::checkbox('is_private') }}
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			{{Form :: label ('tag','Tag: ')}}
			{{Form :: text ('tag')}}
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			{{Form::label('content' , 'Conteúdo: ') }}
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			{{Form::textarea('content') }}
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			{{Form::submit('Enviar!',array('class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent')) }}
		</div>

	{{ Form::close() }}


@endsection


