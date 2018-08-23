<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medecin;
use App\User;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.docteurs-ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            

        Medecin::create([
            'code_medecin' => request('code_medecin'), 
            'nom_medecin' => request('nom_medecin'),
            'prenom_medecin' => request('prenom_medecin'),
            'sexe_medecin' => request('sexe_medecin'),
            'email_medecin' => request('email_medecin'),
            'date_naiss_medecin' => request('date_naiss_medecin'),
            'specialite_medecin' => request('specialite_medecin'),
            'contact_medecin' => request('contact_medecin'),
            'domicile' => request('domicile'),
            'photo' => request('photo'),
            'status_medecin' => request('status_medecin')
        ]);
        User::create([
            'nom'  => request('nom_medecin').' '.request('prenom_medecin'),
            'email'  => request('email_conn'),
            'password'  => bcrypt(request('mdp_medecin')),
            'admin' => '0' 
        ]);

        return redirect('/docteurs-ajout/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
