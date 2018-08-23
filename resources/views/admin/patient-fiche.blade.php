@extends('layouts_Dash/masters')
@section('contenu')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Fiche d'identification ancien patient</h2>
            <small class="text-muted">Bienvenue à CheickAn Hospital</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card" style="margin-bottom: 210px;">
					<div class="header">
						<h2>Information Relative au patient</h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>

					<form action="patients-ajout-admin" method="post">
                         {{ csrf_field() }}
    					<div class="body">
                            <div class="row clearfix">
                            	<div class="col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Code patient: </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Nom: </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                           <label>Prenoms: </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Contacts: </label>
                                        </div>
                                    </div>
                                </div>
                               <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                          <label>Date de naissance: </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Lieu d'habitation</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">                            
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group drop-custum">
                                       <label>Sexe: </label>
                                    </div>
                                </div>
                                 <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group drop-custum">
                                       <label>Fonction: </label>
                                    </div>
                                </div>
                                 <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group drop-custum">
                                       <label>Assurance: </label>
                                    </div>
                                </div>                                

                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" name="birth" placeholder="Date du jour">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group drop-custum">
                                        <select class="form-control show-tick" name="objet">
                                            <option value="">Objet de la visite</option>
                                            <option value="0">Resultat examen</option>
                                            <option value="1">Consultation</option>
                                            <option value="2">Rendez-vous</option>
                                        </select>
                                    </div>
                                </div>
                               <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group drop-custum">
                                        <select  name="sexe"class="form-control show-tick">
                                            <option value="">-- Docteur --</option>
                                            <option value="0">Docteur 1</option>
                                            <option value="1">Docteur 2</option>
                                            <option value="1">Docteur 3</option>
                                        </select>
                                    </div>
                                </div> 
                                </div>
                           
                                <div class="col-xs-12" style="margin-top: 100px;">
                                    <button type="submit" class="btn btn-raised g-bg-cyan">Enregistrer</button>
                                    <button type="submit" class="btn btn-raised">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
		</div>
   </div>
</section>
@stop