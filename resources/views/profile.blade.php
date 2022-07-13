
@extends('layouts.menu')

@section('title','My Profile')
@section('scripts')
<link rel="stylesheet" href="/css/admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="/js/visual-pref.js" defer> </script>
@endsection

<html>
@section('dashboard')
    <body>

        <h1 class="user-display">
            Benvenuto, {{ Session::get('username')}}
        </h1>

       <div class="text-center">Questo è la mia pagina di profilo di {{ Session::get('username')}} </div> 
        <br><br>
       <div class="text-center">
            <a href="{{url('admin')}}" class="btn-secondary">Modifica credenziali</a></div>

            <!-- Dovrò inserire anche gli album preferiti del relativo utente-->
            
           
            <h1 class="user-display text-center">I miei preferiti</h1>


            <article id="album-view">
			
             </article>
             
    </body>
    @endsection
</html>

