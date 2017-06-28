@extends('layout.master')

@section('title' , 'Exibindo Usuário')

@section('sidebar')

@parent


@endsection

@section('content')
	<div class="mdl-cell mdl-cell--6-col">
		<ul class="demo-list-three mdl-list">
			<li class="mdl-list__item mdl-list__item--three-line">
				<span class="mdl-list__item-primary-content">
					<i class="material-icons mdl-list__item-avatar">person</i>
					<span>{{ $author->name }} </span><br/>
					<span>{{ $author->email }} </span>
					<span class="mdl-list__item-text-body">
						{{ $author->about }} 
					</span>
				</span>
			</li>
		</ul>

		<span class="mdl-list__item-secondary-content">
			{{ link_to_action('EntryController@edit','Edit', $author->id,array('class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent')) }}
		</span>
	</div>
	<div class="mdl-cell mdl-cell--6-col">
		<h3>{{ $author->name }}'s Post list</h3>
		<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
			<thead>
			    <tr>
			      <th>Post ID</th>
			      <th>Title</th>
			      <th>Date</th>
			    </tr>
			</thead>
		@foreach ($posts as $post)		  
			  <tbody>
			    <tr>
			      <td>
			      	{{ link_to_action('EntryController@show','+', $post->id ,array('class' => 'mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored')) }}
			      </td>
			      <td>{{$post->title}}</td>
			      <td>{{$post->created_at}}</td>
			    </tr>
			
		@endforeach
		</table>
	</div>
		
@endsection

