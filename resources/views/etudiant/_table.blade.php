

<table class="table table-bordered">

    <tr>
      <th>
       {{ trans('etudiant.nom')}}
      </th>
      <th>
        {{ trans('etudiant.prenom')}}
      </th>
      <th>Action</th>
    </tr>

    @foreach ($etudiants as $etudiant)

    <tr>
      <th>{{$etudiant->nom}}</th>
      <th>{{$etudiant->prenom}}</th>
      <th>
       
        <a type="button" href="{{route('showEtudiant' , $etudiant->id)}}"
         class="btn btn-primary">{{ trans('Supprimer')}}</a>

        <a  type="button" href="{{route('editEtudiant' , $etudiant->id)}}"
         class="btn btn-omzo" > {{ trans('Modifier')}}</a>

          <a  type="button" href="{{route('showinfoEtudiant' , $etudiant->id)}}"
         class="btn btn-shuu" > {{ trans('Details')}} </a>

      </th>
    </tr>
    @endforeach

</table>
