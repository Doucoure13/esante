<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Input;

class ActionController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function docteursAjoutAdmin(Request $request)
    {

       $name = $request->input('nom');
       $prenom = $request->input('prenom');
       $domicile = $request->input('lieu');
       $fonction = $request->input('specialite');
       $contact = $request->input('contact');
       $birth = $request->input('birth');
       $sexe = $request->sexe;
       $mail = $request->input('mail');

        \App\Medecin::create([
        'nom_medecin'=> $name,
        'prenom'=> $prenom,
        'domicile'=> $domicile,
        'fonction'=> $fonction,
        'sexe'=>$sexe,
        'date_de_naissance'=>$birth,
        'mail'=>$mail,
        'contact'=>$contact

    ]);
    

        return view('admin/docteurs-ajout');

    }

        public function patientFormulaire(Request $request)
    {

        return view('admin/patient-formulaire');

    }



    public function ajoutPatient(Request $request)
    {

       $name = $request->input('name');
       $prenom = $request->input('prenom');
       $sexe = $request->sexe;
       $contact = $request->input('contact');
       $birth = $request->input('birth');
       $lieu = $request->input('lieu');
       $mail = $request->input('mail');
                
        \App\Patient::create([
        'nom_patient'=> $name,
        'prenom_patient'=> $prenom,
        'sexe_patient'=> $sexe,
        'contact_patients'=>$contact,
        'date_de_naissance_patients'=>$birth,
        'domicile_patient'=>$lieu,
        'mail_patients'=>$mail
    ]);
        return view('admin/patients-ajout');

    }

        public function update(Request $request, $id)
    {
        //
    }
}