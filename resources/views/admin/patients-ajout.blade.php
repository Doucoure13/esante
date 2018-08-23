@extends('layouts_Dash/masters')

@section('contenu')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Enregistrement Patient</h2>
            <small class="text-muted">Bienvenue à CheickAn Hospital</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card" style="margin-bottom: 130px;">
					<div class="header">
						<h2>Informations personnelles du patient</h2>
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
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="code" class="form-control" placeholder="Code patient">
                                        </div>
                                    </div>
                                </div> </br>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="prenom" class="form-control" placeholder="Prenom">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" placeholder="Nom de Famille">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="contact" class="form-control" placeholder="Contacts">
                                        </div>
                                    </div>
                                </div>
                         
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="birth"class="datepicker form-control" placeholder="Date de naissance">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="lieu" class="form-control" placeholder="Lieu d'habitation">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="fonction" class="form-control" placeholder="Fonction">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group drop-custum">
                                        <select  name="sexe"class="form-control show-tick">
                                            <option value="">-- Sexe --</option>
                                            <option value="0">Masculin</option>
                                            <option value="1">Feminin</option>
                                        </select>
                                    </div>
                                </div>                            
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="assurance" class="form-control" placeholder="Assurance">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group drop-custum">
                                        <select  name="sexe"class="form-control show-tick">
                                            <option value="">-- Objet --</option>
                                            <option value="0">Consultation</option>
                                            <option value="1">Rendez-Vous</option>
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
                                 <div class="col-lg-6 col-md-6 col-sm-12">                               
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datetimepicker form-control" placeholder="Veuillez choisir la date et l'heure ...">
                                    </div>
                                </div>                               
                            </div>    
                            </div>
                            <div class="row clearfix">                            
                                <div class="col-xs-12">
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

@endsection