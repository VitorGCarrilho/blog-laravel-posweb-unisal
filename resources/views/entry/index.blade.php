
@extends('layout.master')

@section ('title' , 'Lista de Posts')

@section ('content')

<h2>Lista de Posts </h2>

<div class="mdl-cell mdl-cell--12-col">
	{{ link_to_action('EntryController@create', 'Criar novo Post', 'newpost',array('class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent')) }}
</div>

@foreach ($posts as $post)
	<div class="mdl-cell mdl-cell--4-col"> 
		<div class="demo-card-square mdl-card mdl-shadow--2dp">
		  <div class="mdl-card__title mdl-card--expand">
		    <h2 class="mdl-card__title-text">{{ $post->title }}</h2>
		  </div>
		  <div class="mdl-card__supporting-text">
		  	
		    {{ $post->content }}
		    <br/>
		    <p>Author:
		    <?
		    	 $authors = \App\Author::find($post->author_id);
		    	 echo  $authors->name;
		    ?>
		    </p>
		  </div>
		  <div class="mdl-card__actions mdl-card--border">
		    {{link_to_action('EntryController@show','View', $post->id,array('class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect') )}}
		    {{link_to_action('EntryController@edit','Edit', $post->id,array('class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect') )}}	
		    {{ Form::model($post, ['method' => 'DELETE', 'action' => ['EntryController@destroy', $post->id]]) }}
		    	{{Form::submit('Delete',array('class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect')) }}
		    {{ Form::close() }}

		  </div>
		</div>
	</div>
@endforeach


@endsection