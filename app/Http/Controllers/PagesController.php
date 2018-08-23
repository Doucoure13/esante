<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Input;

class PagesController extends Controller
{
	// PARTIE DOCTEUR
    public function accueil()
    {
       // $med= Input::get('nom');
        return view('welcome');

    }
        public function index()
    {
       // $med= Input::get('nom');
        return view('docteur/index');

    }
        public function livreRdv()
    {
       // $med= Input::get('nom');
        return view('docteur/livre-rdv');

    }
        public function HoraireDoc()
    {
       // $med= Input::get('nom');
        return view('docteur/horaire-doc');

    }
        public function patientsAjout()
    {
       // $med= Input::get('nom');
        return view('patients-ajout');

    }
        public function patients()
    {
       // $med= Input::get('nom');
        return view('welcome');

    }
  
        public function patientsProfile()
    {
       // $med= Input::get('nom');
        return view('docteur/patient-profile');

    }
  
         public function patientsFacture()
    {
       // $med= Input::get('nom');
        return view('docteur/patients-facture');
    }

         public function ajoutPaiements()
    {
       // $med= Input::get('nom');
        return view('docteur/ajout-paiement');
    }
         public function paiements()
    {
       // $med= Input::get('nom');
        return view('docteur/paiements');
    }
         public function facturePaiements()
    {
       // $med= Input::get('nom');
        return view('docteur/facture-paiement');
    }
         public function rapport()
    {
       // $med= Input::get('nom');
        return view('docteur/rapports');
    }
         public function mailInbox()
    {
       // $med= Input::get('nom');
        return view('docteur/mail-inbox');
    }
             public function profile()
    {
       // $med= Input::get('nom');
        return view('docteur/profile');
    }

    /////////////////////// PARTIE ADMINISTRATEUR//////////////////////////////:


        public function index2()
    {
       // $med= Input::get('nom');
        return view('admin/index2');

    }
        public function livreRdvAdmin()
    {
       // $med= Input::get('nom');
        return view('admin/livre-rdv');

    }
        public function HoraireDocAdmin()
    {
       // $med= Input::get('nom');
        return view('admin/horaire-doc');

    }

        public function patientsAjoutAdmin()
    {
        return view('admin/patients-ajout');
    }
        public function patientsAdmin()
    {

       $patients = \App\Patient::all();
        return view('admin/patients')->withPatients($patients);

    }
  
        public function patientsProfileAdmin()
    {
        return view('admin/patient-profile');

    }
  
         public function patientsFactureAdmin()
    {
       // $med= Input::get('nom');
        return view('admin/patients-facture');
    }

         public function ajoutPaiementsAdmin()
    {
       // $med= Input::get('nom');
        return view('admin/ajout-paiement');
    }
         public function paiementsAdmin()
    {
       // $med= Input::get('nom');
        return view('admin/paiements');
    }
         public function facturePaiementsAdmin()
    {
       // $med= Input::get('nom');
        return view('admin/facture-paiement');
    }
         public function rapportAdmin()
    {
       // $med= Input::get('nom');
        return view('admin/rapports');
    }
         public function mailInboxAdmin()
    {
       // $med= Input::get('nom');
        return view('admin/mail-inbox');
    }
             public function profileAdmin()
    {
       // $med= Input::get('nom');
        return view('admin/profile');
    }
            public function nouveauPatient()
    {
       // $med= Input::get('nom');
        return view('admin/nouveau-patient');
    }

               public function patientFormulaire()
    {
        return view('admin/patient-formulaire');
    }

    	public function docteursAdmin()
    {
    	$medecins = \App\Medecin::all();
        return view('admin/docteurs')->withMedecins($medecins);

    }
  

    public function docteursAjoutAdminis()
    {

        return view('admin/docteurs-ajout');

    }


  
         public function docteursProfileAdmin()
    {
       // $med= Input::get('nom');
         return view('admin/profile');
    }





}