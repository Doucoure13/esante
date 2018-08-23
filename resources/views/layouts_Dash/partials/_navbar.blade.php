<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-cyan">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Veuillez patienter svp...</p>
    </div>
</div>
<!-- #FIN# Chargement de page  --> 
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- #Float icon -->
<ul id="f-menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
  <li class="mfb-component__wrap">
    <a href="javascript:void(0);" class="mfb-component__button--main g-bg-cyan">
      <i class="mfb-component__main-icon--resting zmdi zmdi-plus"></i>
      <i class="mfb-component__main-icon--active zmdi zmdi-close"></i>
    </a>
    <ul class="mfb-component__list">
      <li>
        <a href="horaire-doc" data-mfb-label="Heure de travail" class="mfb-component__button--child bg-blue">
          <i class="zmdi zmdi-calendar mfb-component__child-icon"></i>
        </a>
      </li>
      <li>
        <a href="patients" data-mfb-label="Liste des Patients " class="mfb-component__button--child bg-orange">
          <i class="zmdi zmdi-account-o mfb-component__child-icon"></i>
        </a>
      </li>

      <li>
        <a href="paiements" data-mfb-label="Paiements" class="mfb-component__button--child bg-purple">
          <i class="zmdi zmdi-balance-wallet mfb-component__child-icon"></i>
        </a>
      </li>
    </ul>
  </li>
</ul>
<!-- #Float icon -->
<!-- Morphing Search  -->
<div id="morphsearch" class="morphsearch">

    <!-- /morphsearch-content --> 
    <span class="morphsearch-close"></span> </div>
<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <span style="color: white;" > 
           @if(Auth::check() && Auth::user()->admin)
            <h4>{{Auth::user()->nom}}</h4>
            @else
            <h4>{{Auth::user()->nom}}</h4>
            @endif
        </span> </div>
        <ul class="nav navbar-nav navbar-right">
            <!-- Tasks -->
            <!-- #END# Tasks -->
            <li><a href="{{url('/logout')}}" class="button">Déconnexion</a></li>
        </ul>
    </div>
</nav>
<!-- #Top Bar -->
<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="{{asset('assets/images/random-avatar7.jpg')}}" alt=""> </div>
            <div class="admin-action-info"> <span>Bienvenue</span>
                    @if(Auth::check() && Auth::user()->admin=='1')
                    <h3>Admin</h3>
                    @elseif(Auth::check() && Auth::user()->admin=='2')
                    <h3>Secretaire</h3>
                    @else
                    <h3>Docteur</h3>
                    @endif
                <ul>
                    <li><a data-placement="bottom" title="Boite de reception" href="mail-inbox"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a data-placement="bottom" title="Profil" href="profile"><i class="zmdi zmdi-account"></i></a></li>                    
                    <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                </ul>
            </div>
            <div class="quick-stats">
                <h5>Rapport d'aujourd'hui</h5>
                <ul>
                    <li><span>16<i>Patient</i></span></li>
                    <li><span>20<i>Panding</i></span></li>
                    <li><span>04<i>Visite</i></span></li>
                </ul>
            </div>
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header"> BAR DE NAVIGATION</li>
                <li class="active open"><a href="index"><i class="zmdi zmdi-home"></i><span>Tableau De bord</span></a></li>                                               
                    @if(Auth::check() && Auth::user()->admin=='1')

                 <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Medecins</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{url('/docteurs-liste')}}">Tous les médecins</a></li>
                        <li><a href="{{url('/docteurs-ajout/create')}}">Ajouter un médecin</a></li>                       
                        <li><a href="docteurs-profile-admin">Profil du medecin</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Secrétaires</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{url('/secretaire-liste')}}">Toutes les sécretaires</a></li>
                        <li><a href="{{url('/secretaire-ajout/create')}}">Ajouter une sécretaire</a></li>                       
                        <li><a href="docteurs-profile-admin">Profil de la secretaire</a></li>
                    </ul>
                </li>
                 @endif

              <!--///////////////// nav bar de secretaire ///////////////: -->

                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Rendez-vous</span> </a>
                    <ul class="ml-menu">
                 @if((Auth::check() && Auth::user()->admin=='0') || (Auth::check() && Auth::user()->admin=='1'))
                        <li><a href="#">Liste des rendez-vous</a></li>
                        <li><a href="#">Donner rendez-vous patient</a></li>
                @endif
                @if((Auth::check() && Auth::user()->admin=='2') || (Auth::check() && Auth::user()->admin=='1'))
                        <li><a href="#">Liste des rendez-vous patient</a></li>
                        <li><a href="#">Demande de rendez-vous patient</a></li>
                @endif
                    </ul>
                </li>
                @if((Auth::check() && Auth::user()->admin=='2') || (Auth::check() && Auth::user()->admin=='1'))
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                    <ul class="ml-menu">
                        <li><a href="patients-admin">Liste des patients</a></li>
                        <li><a href="{{url('/enreg-nouv-patient')}}">Enreg nouveau Patient</a></li>             
                        <li><a href="{{url('/enreg-ancien-patient')}}">Enreg ancien patient</a></li>
                    </ul>
                </li>
                 <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi  zmdi-calendar-check"></i><span>Medecin disponible</span> </a>
                    <ul class="ml-menu">
                        <li><a href="#">Horaire du medecin</a></li>
                        <li><a href="#">Rendez-vous medecin</a></li>
                        <li><a href="{{url('/docteurs-liste')}}">Tous les medecins</a></li>
                    </ul>
                </li>
                 @endif
                 @if((Auth::check() && Auth::user()->admin=='0') || (Auth::check() && Auth::user()->admin=='1'))
                 <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                    <ul class="ml-menu">
                        <li><a href="patients-admin">Liste des patients</a></li>
                        <li><a href="nouveau-patient">Consultation</a></li>             
                    </ul>
                </li>
                @endif
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar --> 
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Des peaux</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Discussion</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Parametres</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red">
                        <div class="red"></div>
                        <span>Rouge</span> </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Violet</span> </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Bleu</span> </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Cyan</span> </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Vert</span> </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span> </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Gris</span> </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Noir</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span> </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane" id="chat">
                <div class="demo-settings">
                    <div class="search">
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Search..." required autofocus>
                            </div>
                        </div>
                    </div>
                    <h6>Recent</h6>
                    <ul>
                        <li class="online">
                            <div class="media">
                                <a  role="button" tabindex="0"> <img class="media-object " src="{{asset('assets/images/xs/avatar1.jpg')}}" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Claire Sassu</span> <span class="message">Pouvez-vous partager le ......</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="{{asset('assets/images/xs/avatar2.jpg')}}" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Maggie jackson</span> <span class="message">Pouvez-vous partager le ...</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="{{asset('assets/images/xs/avatar3.jpg')}}" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Joel King</span> <span class="message">Prêt pour la reunion</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h6>Contacts</h6>
                    <ul>
                        <li class="offline">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="{{asset('assets/images/xs/avatar4.jpg')}}" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Joel King</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="{{asset('assets/images/xs/avatar1.jpg')}}" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Joel King</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="offline">
                            <div class="media"> <a class="pull-left " role="button" tabindex="0"> <img class="media-object " src="{{asset('assets/images/xs/avatar2.jpg')}}" alt=""> </a>
                                <div class="media-body">
                                    <span class="name">Joel King</span> <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="settings">
                <div class="demo-settings">
                    <p>PARAMETRE GENERAL</p>
                    <ul class="setting-list">
                        <li> <span>Utilisation du panneau de rapport</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Redirection Email</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>LES PARAMÈTRES DU SYSTÈME</p>
                    <ul class="setting-list">
                        <li> <span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Mises à jour automatiques</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>PARAMÈTRES DU COMPTE</p>
                    <ul class="setting-list">
                        <li> <span>Hors ligne</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Autorisation de localisation</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <div class="color-bg"></div>
    <!-- #END# Right Sidebar --> 
</section>