@extends('layouts_Dash/masters')
@section('contenu')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Vérification patient</h2>
            <small class="text-muted">Bienvenue à CheickAn Hospital</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card" style="margin-bottom: 160px;">
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
                    <form action="patient-formulaire"  method="post">
                        {{ csrf_field() }}
    					<div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="code" class="form-control" placeholder="code patient">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12" style="margin-top: 50px;">
                                    <button type="submit" class="btn btn-raised g-bg-cyan"><a href="{{url('/fiche-patient')}}">Valider</a></button>
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