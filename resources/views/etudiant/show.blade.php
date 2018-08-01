@extends('layouts.app')

@section('content')


<body>
   <a href="{{ URL::action('EtudiantController@index') }}">Retour à la liste</a>
   <h1>{{ $post->title }}</h1>
   <p>{{ $post->content }}</p>
   <i>{{ $post->user->name }} {{ $post->user->firstname }}</i>
   <p>
      <a href="{{ URL::action('EtudiantController@edit', $post->id) }}" class="button">Editer</a>
      {{ Form::model(
               $post, [ 
                  'url' => URL::action('EtudiantController@delete', $post ),
                  'method' => 'DELETE'
               ]
         )
      }}
      {{ Form::submit('Delete', ['class' => 'button']) }}
      {{ Form::close() }}
   </p>
</body>


@endsection