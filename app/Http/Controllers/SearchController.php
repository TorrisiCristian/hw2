<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Song;
class SearchController extends Controller
{
    protected function cerca_page()
    {
        //Verifico che l'utente sia loggato
        if(!Session::get('username')){

            return redirect('login');
    
         }
         
            return view('cerca');
         
        
    }

    public function cerca()
    {
        //Verifico che l'utente sia loggato
        if(!Session::get('username')){

            return redirect('login');
        }

         //Testo request(differenza rispetto alla gestione con PHP)
        $text = request('text');
        //variabile per la call
        $client_id = "77bbe538c4744b50a82c2a7127e78604";
        $client_secret = "f158fc6adc7c41489edf0dac2e0da3bf";
        $limti = 4;
        // ACCESS TOKEN
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://accounts.spotify.com/api/token' );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        # Eseguo la POST
        curl_setopt($ch, CURLOPT_POST, 1);
        # Setto body e header della POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials'); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret)));
        $token=json_decode(curl_exec($ch), true);
        curl_close($ch);   
        // QUERY EFFETTIVA
        $url = 'https://api.spotify.com/v1/search?type=track&q='.$text. '&limit='. $limti;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        # Imposto il token
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token['access_token'])); 
        $res=curl_exec($ch);
        curl_close($ch);

        return $res;  

    
    }

    public function aggiungi()
    {
       //Creo una nuova istanza di Song ed aggiungo i parametri della canzone aggiunta
        $song = new Song();
        $song->admins_id = Session::get('id_logged');
        $song->autore = request('artist');
        $song->canzone = request('song');
        $song->immagine = request('img');
        $song->link = request('link');
        $song->save();

        
    }
   
    
}
