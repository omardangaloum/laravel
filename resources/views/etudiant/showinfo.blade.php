


@extends('../layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:white !important;">Details de L'etudiant</div>

                <div class="card-body">
                  

                
                    Nom : {{$etudiant->nom}}
					Prenom : {{$etudiant->prenom}}
                      <br> <br> <br>
                     
                     
              </div>
            </div>
        </div>
    </div>
     <br/>
    <div class="row justify-content-center">
          <div class="col-md-8 ">
          <a href="{{route('home')}}" style="color:white !important;">Retour</a>
          </div>
          </div>
</div>
@endsection
