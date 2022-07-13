<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Session;



class RegisterController extends Controller
{
    //Stampo la pagina di registrazione
    public function register_page()
    {
        if(Session::get('username'))
        {
            return redirect('main');
        }
        return view('register');

        //Creo una variabile per stampare gli eventuali errori
        $error = Session::get('error');

        Session::forget('error');

        return view('register')->with('error', $error);
    }

    //Creazione nuovo utente da aggiungere
    protected function sign()
    {
        //Verifico se l'utente è già loggato
        if(Session::get('username'))
        {
            return redirect('main');
        }
        
            //Verifico che l'username che inserisco è differente da un'altro già presente
            if(Admin::where('username', request('username'))->first())
            {
                Session::put('error','esistente');

                return redirect('register')->withInput();
            }

            //Creo l'utente da inserire nel Database
            $admin = new Admin();

            $admin->fullname = request('full_name');

            $admin->username =  request('username');

            $admin->password = password_hash( request('password'),PASSWORD_BCRYPT);

            $admin->save();

                //Aggiorno il parametro session utile in caso di login

                Session::put('username', $admin->username);

                Session::put('password', request('password'));

                return redirect('main');
    }

    protected function logout()
    {
       //Elimino la sessione corrente

       Session::flush();

       return redirect('login');
    }

    protected function login_page(){
        
        //Verifico che l'utente sia loggato
        if(Session::get('username'))
        {
            return redirect('main');
        }
        //Creao la una variabile per stampare gli eventuali errori
        $error = Session::get('error');

        Session::forget('error');

        return view('login')->with('error', $error);
    }

    protected function login(){

        //Verifco che l'utente sia loggato
        if(Session::get('username'))
        {
           return redirect('main');
        }

        //Gestione errori lato server
        if(strlen(request('username'))== 0 ||strlen(request('password'))==0){

            Session::put('error','campo_vuoto');

            return redirect('login')->withInput();
            }

            $admin = Admin::where('username', request('username'))->first();

            if(!$admin || !password_verify(request('password'), $admin->password))
             {
             Session::put('error','errato');

             return redirect('login')->withInput();
             }   

             //Prendo l'id dell'utente loggato 
            $id_search = Admin::where('username', request('username'))->first()->id;
            //Salvo l'id in Session(utile per altre funzioni)
            Session::put('id_logged',$id_search);

            //Aggiorno i parametri Sessione dedicati al login
            Session::put('username', request('username'));

            Session::put('password',request('password'));

            return redirect('main');

    }



    
}