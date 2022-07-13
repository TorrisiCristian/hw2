@extends('layouts.log_in')
@section('title','Log in')
@section('scripts')
<link rel="stylesheet" href="/css/admin.css">
<script src="/js/controll-form.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('form')
            <form action="{{ url('login') }}" method="post" onsubmit="return ValidateSignForm()" name="login_form" 
            class="text-center">
            @csrf
            @if($error == 'campo_vuoto')
            <section class="error">Riempi tutti i campi</section>
            @elseif($error == 'errato')
            <section class="error">Utente non esistente</section>
            @endif
                Username: <br>
                <input type="text" name="username" placeholder="Insert username" > <br><br>
                Password: <br>
                <input type="password" name="password" placeholder="Insert password" ><br><br>
                <br>
                <input type="submit" name="submit" value="Sign" class="btn-primary">
               <div>Non sei registrato? <a href="/register">Registrati</a></div> 
            </form>
@endsection