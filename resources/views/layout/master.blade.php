<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-indigo.min.css" /> 
    </head>
    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">@yield('title')</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        {{link_to_action('EntryController@index','Posts', 'posts' ,array('class' => 'mdl-navigation__link'))}}
        <a class="mdl-navigation__link">{{link_to_action('UserController@index', 'Autores', 'autores', array('class' => 'mdl-navigation__link'))}}</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
    <div class="container">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--1-col"></div>            
            <div class="mdl-cell mdl-cell--10-col">
                <div class="mdl-grid">
                    @yield('content')
                </div>
            </div>
            <div class="mdl-cell mdl-cell--1-col"></div>
        </div>
    </div>
    </div>
  </main>
</div>
        

        
        
    </body>
</html>
