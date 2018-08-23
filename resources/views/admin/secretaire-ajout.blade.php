@extends('layouts_Dash/masters')
@section('contenu')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Ajouter un secretaire</h2>
            <small class="text-muted">Bienvenue à CheickAn Hospital</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Renseignez les champs ci-dessous:</h2>
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
                        <form method="post" action="{{action('SecretaireControlleur@store')}}" >
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="header">
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
                                    <div class="body">
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="prenom_secretaire" type="text" class="form-control" placeholder="Prenom">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="nom_secretaire" type="text" class="form-control" placeholder="Nom de Famille">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="date_naiss_secretaire" type="text" class="datepicker form-control" placeholder="Date de naissance ex: aaaa/mm/jj">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group drop-custum">
                                                    <select name="sexe_secretaire" class="form-control show-tick">
                                                        <option value="">-- Genre --</option>
                                                        <option value="M">Masculin</option>
                                                        <option value="F">Feminin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="code_secretaire" type="text" class="form-control" placeholder="Code secretaire">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="contact_secretaire" type="text" class="form-control" placeholder="Contacts">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="email_secretaire" type="text" class="form-control" placeholder="Entrez le Mail">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="domicile" type="text" class="form-control" placeholder="Le Domicile">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                            <div class="form-group drop-custum">
                                                <select name="status_secretaire" class="form-control show-tick">
                                                    <option value="">-- Status --</option>
                                                    <option value="1">Actif</option>
                                                    <option value="0">Inactif</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="dz-message">
                                                        <h3>Telecharger image de profil.</h3>
                                                        </div>
                                                    <div class="fallback">
                                                        <input name="photo" name="file" type="file" multiple />
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Informations sur le compte du médecin <small>Ici le texte de Description...</small> </h2>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Autre action</a></li>
                                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="body">
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="email_conn" type="text" class="form-control" placeholder="E-Mail de connexion">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="mdp_secretaire" type="text" class="form-control" placeholder="Mot de passe">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-raised g-bg-cyan">Enregistrer</button>
                            <button type="submit" class="btn btn-raised">Annuler</button>
                        </div>
                    </form>
				</div>
			</div>
		</div>
    </div>
</section>

@stop