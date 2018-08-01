@extends('../layout')

@section('content')

      <div class="container">

          <div class="row justify-content-center">

                <div class="col-md-8 ">

                    <div class="card">

                        <div class="card-header">
                          {{ trans('etudiant.titremodification')}}
                        </div>

                        <div class="card-body">

                          @if(session('status'))

                          <div class="alert alert-success">
                              {{session('status')}}
                          </div>

                          @endif
                          @include('etudiant._form')

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
