@extends('/layouts/masters2')

@section('contenu')

<section class="content profile-page">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Profil du patient</h2>
            <small class="text-muted">Bienvenue à CheickAn Hospital</small>
        </div>        
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class=" card patient-profile">
                    <img src="assets/images/image-1.jpg" class="img-fluid" alt="">                              
                </div>
                <div class="card">
                    <div class="header">
                        <h2>A propos du Patient</h2>
                    </div>
                    <div class="body">
                        <strong>Nom</strong>
                        <p>Nana Kiaribia Sorel Julien</p>
                        <strong>Fonction</strong>
                        <p>UI UX Design</p>
                        <strong>Email</strong>
                        <p>will.smith@info.com</p>
                        <strong>Contact</strong>
                        <p>+123 456 789</p>
                        <hr>
                        <strong>Addresse</strong>
                        <address>85 Bay Drive, New Port Richey, FL 34653</address>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body"> 
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active"data-toggle="tab"  href="#report">Biographie</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">Chronologie</a></li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="report">                               
                            <div class="wrap-reset">
                                <div class="mypost-list">
                                    <div class="post-box">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                    </div>
                                    <hr>
                                    <div class="post-box">
                                        <h4>General Report</h4>                                        
                                        <div class="body p-l-0 p-r-0">
                                            <ul class="list-unstyled">
                                                <li>Tension artérielle
                                                    <div>Tension artérielle</div>
                                                    <div class="progress m-b-20">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (succès)</span> </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>Battement de coeur</div>
                                                    <div class="progress  m-b-20">
                                                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>Hémoglobine</div>
                                                    <div class="progress  m-b-20">
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (Attention)</span> </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>Sucre</div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Education</h4>
                                    <ul class="dis">
                                        <li>B.Com de l'Université de ski</li>
                                        <li>In hac habitasse platea dictumst.</li>
                                        <li>In hac habitasse platea dictumst.</li>
                                        <li>Vivamus elementum semper nisi.</li>
                                        <li>Praesent ac sem eget est egestas volutpat.</li>
                                    </ul>
                                    <hr>
                                    <h4>Histoire de la visite passée</h4>
                                    <ul class="dis">
                                        <li>Integer tincidunt.</li>
                                        <li>Praesent vestibulum dapibus nibh.</li>
                                        <li>Integer tincidunt.</li>
                                        <li>Praesent vestibulum dapibus nibh.</li>
                                        <li>Integer tincidunt.</li>
                                        <li>Praesent vestibulum dapibus nibh.</li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="timeline">
                                <div class="timeline-body">
                                    <div class="timeline m-border">
                                        <div class="timeline-item">
                                            <div class="item-content">
                                                <div class="text-small">Juste maintenant</div>
                                                <p>Décharge.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-info">
                                            <div class="item-content">
                                                <div class="text-small">11:30</div>
                                                <p>Vérification de routine</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-warning border-l">
                                            <div class="item-content">
                                                <div class="text-small">10:30</div>
                                                <p>Operation </p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-warning">
                                            <div class="item-content">
                                                <div class="text-small">Il y a 3 jours</div>
                                                <p>Vérification de routine</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-danger">
                                            <div class="item-content">
                                                <div class="text--muted">Jeu. 10 mars</div>
                                                <p>Vérification de routine</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-info">
                                            <div class="item-content">
                                                <div class="text-small">Samedi 5 mars</div>
                                                <p>Vérification de routine</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-danger">
                                            <div class="item-content">
                                                <div class="text-small">Dimanche 11 février</div>
                                                <p>Test de sang</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-info">
                                            <div class="item-content">
                                                <div class="text-small">Jeu. 17 janvier</div>
                                                <p>Admettre la salle des patients no.21</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection