@extends('layouts.menu')

@section('title','Create Admin')
@section('scripts')
<link rel="stylesheet" href="/css/admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="/js/controll-form.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('dashboard')
<div class="main-content">

    <div class="wrapper">
        <h1 class="text-center">Add Admin </h1>
        <div id="errorMessage"></div>

        

        
        @section('form')
        <form action="{{route('admin.store')}}" method="POST" onsubmit="return ValidateAdd()" >
        @csrf
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td>
                        <input type="text" name = "fullname" placeholder="Add a fullname" id="full_name" >
                    </td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name = "username" placeholder="Add an username" id="username" >
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name = "password" placeholder="Add a password" id="password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Create Admin" class="btn-secondary">
                    </td>
                </tr>
                    
                

            </table>

        </form>
        @endsection
    </div>
</div>
@endsection
