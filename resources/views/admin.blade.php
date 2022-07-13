@extends('layouts.menu')

@section('title','Manage Admin')

@section('scripts')
<link rel="stylesheet" href="/css/admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection

@section('dashboard')
        <!-- Main content section starts-->
        <div class="main-content">
        <div class="wrapper">
            <h1>Manage Admin</h1>
            
            <br />
            <a href="{{route('admin.create')}}" class="btn-primary">Add Admin</a>
            <br /><br /><br />
            <!-- Button to add Admin -->
            
            @if(session()->get('completed'))
                <div class="success">{{ session()->get('completed')}} </div><br />
            @endif
            <br /><br /><br />
                <table class="tbl-full">
                    <tr>
                        <th>S.N</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                        @foreach($admins as $admin)
                        <tr>
                            <td>{{$admin->id }} </td>
                            <td> {{$admin->fullname}} </td>
                            <td> {{ $admin->username}}</td>
                            <td>
                                
                                <a href="{{route('admin.edit',$admin->id)}}" class="btn-secondary" >Update </a>
                               
                                <form action="{{ route('admin.destroy', $admin->id)}}" method="post" style="display: inline-block; padding-left:10">
                            @csrf
                            @method('DELETE')
                            <button class="btn-danger" id="delete-button" type="submit">Delete </button>
                        </form>
                            </td>
                            
                        </tr>
                        @endforeach

                       
                </table>
            </div>
        </div>
        <!-- Main content section ends-->

@endsection

   