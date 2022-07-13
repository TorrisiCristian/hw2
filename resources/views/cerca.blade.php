

@extends('layouts.menu')
@section('title','Food Order Website - Ricerca')
@section('scripts')
<link rel="stylesheet" href="/css/admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="/js/call-spotify.js" defer></script>
@endsection

<html>
@section('dashboard')
 
    
        <body>
            <!--Form -->
            @section('form')
            <form action="" method="post" name="form_spo"  id="spo" class="text-center">
                @csrf
                Autore: <br>
                <input type="text" name="autore" placeholder="Insert autore" id="autore" > <br><br>
                <br>
                <input type="submit" name="submit" value="search" class="btn-primary">
            </form>
            @endsection
<!--Locazione dove far apparire i risultati-->
        
    <article id="album-view">
        
    </article>
        </body>
      @endsection
</html>

