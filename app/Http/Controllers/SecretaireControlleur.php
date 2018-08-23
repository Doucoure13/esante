<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Secretaire;
use App\User;

class SecretaireControlleur extends Controller
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
        return view('admin.secretaire-ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     Secretaire::create([
            'code_secretaire' => request('code_secretaire'), 
            'nom_secretaire' => request('nom_secretaire'),
            'prenom_secretaire' => request('prenom_secretaire'),
            'sexe_secretaire' => request('sexe_secretaire'),
            'email_secretaire' => request('email_secretaire'),
            'date_naiss_secretaire' => request('date_naiss_secretaire'),
            'contact_secretaire' => request('contact_secretaire'),
            'domicile' => request('domicile'),
            'photo' => request('photo'),
            'status_secretaire' => request('status_secretaire')
        ]);
        User::create([
            'nom'  => request('nom_secretaire').' '.request('prenom_secretaire'),
            'email'  => request('email_conn'),
            'password'  => bcrypt(request('mdp_secretaire')),
            'admin' => '2'
        ]);

        return redirect('/secretaire-ajout/create');
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
