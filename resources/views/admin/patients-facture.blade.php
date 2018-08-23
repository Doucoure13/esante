@extends('/layouts/masters2')

@section('contenu')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Facture du patient</h2>
            <small class="text-muted">Bienvenue à CheickAn Hospital</small>
        </div>
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2> Detail de Facture</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Imprimer des factures</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li><a href="javascript:void(0);">Exporter vers XLS</a></li>
                                        <li><a href="javascript:void(0);">Exporter au format CSV</a></li>
                                        <li><a href="javascript:void(0);">Exporter vers XML</a></li>                                    
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-4 col-sm-4">
                                    <h4><img src="assets/images/logo-placeholder.jpg" width="70" alt="velonic"></h4>                                                
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h4>Facture d'achat # <br>
                                        <strong>2015-04-5654667546</strong>
                                    </h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <address>
                                        <strong>Twitter, Inc.</strong><br>
                                        795 Folsom Ave, Suite 546<br>
                                        San Francisco, CA 54656<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-34636
                                    </address>
                                </div>
                                <div class="col-md-6 col-sm-6 text-right">
                                    <p><strong>Date de commande: </strong> 30 Juillet 2018</p>
                                    <p class="m-t-10"><strong>Statut de la commande: </strong> <span class="badge bg-orange">en attendant</span></p>
                                    <p class="m-t-10"><strong>numéro de commande: </strong> #123456</p>
                                </div>
                            </div>
                            <div class="mt-40"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                            <thead>
                                                <tr><th>#</th>
                                                <th>Article</th>
                                                <th>Description</th>
                                                <th>Quantité</th>
                                                <th>Coût unitaire</th>
                                                <th>Total</th>
                                            </tr></thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>LCD</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>1</td>
                                                    <td>$380</td>
                                                    <td>$380</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Mobile</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>5</td>
                                                    <td>$50</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>LED</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>2</td>
                                                    <td>$500</td>
                                                    <td>$1000</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>LCD</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>3</td>
                                                    <td>$300</td>
                                                    <td>$900</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Mobile</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>5</td>
                                                    <td>$80</td>
                                                    <td>$400</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row" style="border-radius: 0px;">
                                <div class="col-md-12 text-right">
                                    <p class="text-right"><b>Total:</b> 2930.00</p>
                                    <p class="text-right">Remise: 12.9%</p>
                                    <p class="text-right">T.V.A.: 12.9%</p>
                                    <hr>
                                    <h3 class="text-right">USD 2930.00</h3>
                                </div>
                            </div>
                            <hr>
                            <div class="hidden-print col-md-12 text-right">
                                <a href="javascript:window.print()" class="btn btn-raised btn-success"><i class="zmdi zmdi-print"></i></a>
                                <a href="javascript:void(0);" class="btn btn-raised btn-default">Valider</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>


@endsection