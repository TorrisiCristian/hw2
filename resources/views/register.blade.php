@extends('layouts.sign_log')
@section('title','Sign in')
@section('scripts')
<link rel="stylesheet" href="/css/admin.css">
<script src="/js/controll-form.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('form')
            <form action="{{ url('register') }}" method="post" onsubmit="return ValidateSignForm()" name="sign_form" 
            enctype="multipart/form-data" 
            class="text-center">
            @csrf
            @if(Session::get('error') == 'esistente')
            <section class="error">Username già utilizzato</section>
            @endif
                FullName: <br>
                <input type="text" name="full_name" placeholder="Insert fullname" > <br><br>
                Username: <br>
                <input type="text" name="username" placeholder="Insert username" > <br><br>
                Password: <br>
                <input type="password" name="password" placeholder="Insert password" ><br><br>
                <br>
                <input type="submit" name="submit" value="Sign" class="btn-primary">
               <div>Hai già un account? <a href="/login">Accedi</a></div> 
            </form>
@endsection