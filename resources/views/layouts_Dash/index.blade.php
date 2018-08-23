@extends('layouts_Dash/masters')

@section('contenu')

	<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Tableau de bord</h2>
        </div>
        
        <div class="row clearfix" style="margin: 0 auto;">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-blue"></i> </div>
                    <div class="content">
                        <div class="text">Nouveau Patient</div>
                        <div class="number">27</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                    <div class="content">
                        <div class="text">OPD Patient</div>
                        <div class="number">12</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-bug col-blush"></i> </div>
                    <div class="content">
                        <div class="text">Les opérations d'aujourd'hui</div>
                        <div class="number">05</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> Liste des Nouveaux patients </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Une autre action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Quelque chose d'autre ici</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Prénom</th>
                                <th>Nom de famille</th>
                                <th>Nom d'utilisateur</th>
                                <th>Maladies</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Virginia </td>
                                <td>Rose</td>
                                <td>@Rose</td>
                                <td><span class="label label-danger">Fièvre</span> </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Julie </td>
                                <td>Gaylord</td>
                                <td>@Julie </td>
                                <td><span class="label label-info">Cancer</span> </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Jacqueline </td>
                                <td>Woods</td>
                                <td>@Woods</td>
                                <td><span class="label label-warning">Lakva</span> </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Jonathan </td>
                                <td>Lewis</td>
                                <td>@Jonathan </td>
                                <td><span class="label label-success">Dentaire</span> </td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Margaret </td>
                                <td>Griffin</td>
                                <td>@Margaret </td>
                                <td><span class="label label-info">Cancer</span> </td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>Joseph </td>
                                <td>Hunter</td>
                                <td>@Hunter</td>
                                <td><span class="label label-success">Dentaire</span> </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection