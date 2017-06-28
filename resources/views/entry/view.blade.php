<!-- Three Line List with secondary info and action -->

@extends('layout.master')

@section ('title' , 'Lista de Autores')

@section ('content')

<div class="mdl-cell mdl-cell--12-col">
	<h2>{{$post->title}}</h2>
</div>

<div class="mdl-cell mdl-cell--12-col">
	<ul class="demo-list-three mdl-list">
		<li class="mdl-list__item mdl-list__item--three-line">
			<span class="mdl-list__item-primary-content">
				<span> {{$post->content}} </span>
				<span class="mdl-list__item-text-body">
					{{$author->name}}
				</span>
			</span>
			<span class="mdl-list__item-secondary-content">
				
			</span>
		</li>
	</ul>
</div>


@endsection