
<html>
    <head>
        <title> @yield('title') </title>
        @section('scripts')

        @show
    </head>
    <body>
         <!--Menu section starts -->  
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="main">Home</a></li>
                    <li><a href="admin">Admin</a></li>
                    <li><a href="cerca">Ricerca</a></li>
                    <li><a href="login">Log in </a></li>
                    <!--Inserisco il nome dell'utente solo se è presente anche nel DB-->
                    @if( App\Models\Admin::where('username',Session::get('username'))->exists() )
                    <li><a href="profile">{{ Session::get('username')}} 
                        @else
                            {{Session::forget('username')}}
                         </a></li>
                         @endif
                    <li><a href="logout">Logout</a></li>
                </ul>
            </div>
        </div>
         <!-- Menu section ends-->
       
         <div class="main-content">
         @section('dashboard')
         @show
        </div>
        @section('form')
        @show
         
         <div class="footer">
        <div class="wrapper">
           <p class="text-center"> 2022 All rights reserved, Gestion data. Developed by - Torrisi Cristian</p>
            </div>
        </div>
        <!-- Footer content section ends-->
    </body> 