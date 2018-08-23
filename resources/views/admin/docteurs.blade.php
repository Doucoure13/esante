@extends('layouts_Dash/masters')

@section('contenu')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Tous les medecins</h2>
            <small class="text-muted">Bienvenue à CheickAn Hospital</small>
        </div>
        <div class="row clearfix">
            @foreach($docteurs as $docteur)
            @isset($docteur)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body"> 
                        <div class="member-card verified">                            
                            <div class="thumb-xl member-thumb">
                                <img src="http://via.placeholder.com/130x130" class="img-thumbnail rounded-circle" alt="profile-image">                               
                            </div>

                            <div class="">
                                <p class="text-muted"><strong>Code: </strong> {{$docteur->code_medecin}}</p>
                                <h4 class="m-b-5 m-t-20">Dr. {{$docteur->nom_medecin}} {{$docteur->prenom_medecin}}</h4>
                                <p class="text-muted">{{$docteur->specialite_medecin}}<span></p>
                                <p class="text-muted">{{$docteur->domicile}}</p>                           
                            <p class="text-muted">{{$docteur->contact_medecin}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endisset
            @endforeach
        </div>
        @empty($docteur)
            <h4 style="margin-top: 200px; margin-bottom: 200px; text-align: center;">Il n'y a pas de medecins enregistrées</h4>
        @endempty
        <div class="row clearfix">
            <div class="col-sm-12 text-center">
                <a href="{{url('/docteurs-ajout/create')}}" class="btn btn-raised g-bg-cyan">Ajouter un medecin</a>
            </div>
        </div>
    </div>
</section>
@stop