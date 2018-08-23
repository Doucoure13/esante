@extends('layouts_Dash/masters')

@section('contenu')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Toutes les secretaires</h2>
            <small class="text-muted">Bienvenue à CheickAn Hospital</small>
        </div>
        <div class="row clearfix">
            @foreach($secretaires as $secretaire)
            @isset($secretaire)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body"> 
                        <div class="member-card verified">                            
                            <div class="thumb-xl member-thumb">
                                <img src="http://via.placeholder.com/130x130" class="img-thumbnail rounded-circle" alt="profile-image">                               
                            </div>

                            <div class="">
                                <p class="text-muted"><strong>Code: </strong> {{$secretaire->code_secretaire}}</p>
                                <h4 class="m-b-5 m-t-20">Secr. {{$secretaire->nom_secretaire}} {{$secretaire->prenom_secretaire}}</h4>
                                <p class="text-muted">{{$secretaire->domicile}}</p>                           
                            <p class="text-muted">{{$secretaire->contact_secretaire}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endisset
            @endforeach
        </div>
        @empty($secretaire)
            <h4 style="margin-top: 200px; margin-bottom: 200px; text-align: center;">Il n'y a pas de secretaires enregistrées</h4>
        @endempty
        <div class="row clearfix">
            <div class="col-sm-12 text-center">
                <a href="{{url('/secretaire-ajout/create')}}" class="btn btn-raised g-bg-cyan">Ajouter une secretaire</a>
            </div>
        </div>
    </div>
</section>
@stop