@extends('layouts.appnew')

@section('content')

                <div class="logo text-center pt-20">
  						<img src="img/logo.png" alt="logo">
  				</div>

                  <style>
                        .login_style{
                            margin:20px;
                            text-align:center;
                        }
                        .login_style h2 {
                                font-size:50px;
                                color:#fff;
                                }
                         .login_style span a{
                            color:#fff;
                            

                        }
                        /* .login_style span a:hover{
                            background:
                        } */ */
                  </style>
                    <div class="login_style">

                    <h2 class="pt-50">Welcome To Dorkar</h2>
                  
                    <span><a class="btn btn-outline-success" href="{{ route('register') }}">Register Now</a></span>
                    </div>
@endsection



