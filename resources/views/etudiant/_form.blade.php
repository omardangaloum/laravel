
@if(isset($etudiant))

{!! Form::model ($etudiant , ['route' => ['updateEtudiant' , $etudiant->id ] , 'method' => 'put']) !!}
@else
{!! Form::open (['route' => 'addEtudiant']) !!}

@endif

{!! Form::label("{{ trans('etudiant.nom') }}" , 'Nom : ') !!}
{!! Form::text('nom') !!}
{!! Form::label("{{trans('etudiant.prenom')}}" , 'Prenom : ') !!}
{!! Form::text('prenom') !!}

<button type="submit" class="btn btn-sm btn-primary m-t-n-xs">

Enregistrer

</button>


<br>
<br>






<p class="bg-danger text-white"   >  {{ $errors->first('nom') }} {{ $errors->first('prenom') }} </p>



{!! Form::close() !!}
