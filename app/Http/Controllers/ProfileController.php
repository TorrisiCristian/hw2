<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Song;

class ProfileController extends Controller
{
    //Stampo la pagina di profilo
    public function profile_page()
    {
        return view('profile');
    }

    //Stampo le canzoni preferite nella pagina profilo
    public function stampa_preferiti()
    {
        $canzoni = Song::where('admins_id',Session::get('id_logged'))->get();

        return $canzoni ;
    }

    //Rimuovo le canzoni preferite nella pagina profilo
    public function rimuovi()
    {
        $req_song = request('canzone');
        
        $utente_id=Session::get('id_logged');

        $delete_element = Song::where('admins_id',$utente_id)->where('canzone',$req_song)->delete();

        if($delete_element)
        {
            return 1;
        }
            return 0;
    }
}
?>