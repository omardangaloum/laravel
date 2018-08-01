<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Etudiant;
use App\Http\Requests\EtudiantRequest;


class EtudiantController extends Controller
{
    /**
     * Create a new etudiant.
     *
     * @return to the previous view.
     */
    public function add(EtudiantRequest $request)
    {
      Etudiant::create($request->all());
      return back()->with('status' , trans('Etudiant enregistré avec success'));
    }



    /**
     * Show the etudiant information.
     * @param int $id : etudiant's id
     * @return view show
     */

public function showinfo($id)
{
   $etudiant = Etudiant::findorFail($id); // if the etudiant doesnt exist we return the 404 page
        return view ('etudiant.showinfo' , compact('etudiant'));

}


public function delete($id)

{
 
  Etudiant::destroy($id);
   return back()->with('status' , trans('Etudiant supptrimé avec success'));

}



    /**
     * affiche the etudiant edit form .
     * @param int $id : etudiant's id
     * @return view edit
     */
    public function edit($id)
    {
        $etudiant = Etudiant::findorFail($id); // if the etudiant doesnt exist we return the 404 page
        return view ('etudiant.edit' , compact('etudiant'));

    }




    /**
     * validate the update form.
     * @param int $id : etudiant's id and the request informations
     * @return to the previous view
     */
    public function update(Request $request , $id)
    {
        $etudiant = Etudiant::findorFail($id);
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->save();
        return back()->with('status' , trans('etudiant.msgmisajourok'));
    }
}
