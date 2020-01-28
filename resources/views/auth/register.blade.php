@extends('layouts.appnew')

@section('content')


<section>
  	<div class="registration-area fix">
  		<div class="row">
  			<div class="col-md-7 fix">
  				<div class="registration">
  					<div class="logo text-center pt-20">
  						<img src="img/logo.png" alt="logo">
  					</div>
  					<div class="signup-form">
  						<h1>Sign Up In Expert</h1>
  						  
                          <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" class="row">
                        @csrf

                          <div class="form-group col-lg-12 ">
                             <input type="text"  id="name" name="name" placeholder="Full Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                         </div> 
                       
                         @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                           <div class="form-group col-lg-12 ">
                             <input type="text" class="form-control" id="shop" name="shop" placeholder="shop name" required>
                         </div> 

                          <div class="form-group col-lg-12 ">
                          	<div class="row">
                          	<div class="col-3 col-sm-3 ">
                          		<select class="form-control country-code" required  name="country_code" id="" style="display: inline-block;" >
                          		<option value="">---</option>
                                  <option value="+88">+88</option>
                          	</select>
                          	</div>
                          	<div class="col-9 col-sm-9">
                          		<input style="display: inline-block;" type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                          	</div>
                          	</div>
                          	
                             

                         </div> 

                          <div class="form-group col-lg-12 ">
                             <input type="text" class="form-control" id="pass1" name="shop_address" placeholder="Shop Addres" required>
                         </div>

                         <div class="form-group col-lg-12 ">
                             <input type="email" class="form-control" id="pass1" name="email" placeholder="Email" required>
                         </div>
                        
                         <div class="form-group col-lg-12 ">
                             <input type="password" class="form-control" id="pass1" name="password" placeholder="Password" required>
                         </div>
                         <div class="form-group col-lg-12 ">
                             <input type="password" class="form-control" id="pass1" name="password_confirmation" placeholder="Retype Password" required>
                         </div>
                          <div class="form-group col-lg-12 ">
                             <select class="form-control" required name="service" id="" >
                             	<option >-----Select your Service Category-----</option>
                             	<option value="1">Electrical</option>
                             	<option value="2">AC & refrigerator</option>
                             	<option value="3">Appliance</option>
                                 <option value="4">Plumbing</option>
                                 <option value="5">Painting</option>
                                 <option value="6">Cleaning & Pest control</option>
                                 <option value="7">Driver</option>
                                 <option value="8">House maid</option>
                                 <option value="9">Moving/Shifting</option>
                                 <option value="10">Laundry</option>
                                 <option value="11">Home security</option>
                                 <option value="12">Car-wash</option>
                                 <option value="13">Rent Service</option>
                                 <option value="14">Desktop & laptop</option>
                                 <option value="15">Interior & Decoration</option>
                                 <option value="16">IT_Solutions</option>
                                 <option value="17">salon & beauty parlour</option>
                                 <option value="18">mason contractor</option>
                                 <option value="19">Travels</option>
                                 <option value="20">Medical & laboratory</option>
                             </select>
                         </div>
                        <div class="form-group text-center">
                        <label class="i-checks">
                            <input type="checkbox" name="checkbox" required>
                            <i></i>
                        </label>
                          By Creating an account you agree to our <a href="#">Terms of Service</a> and <a href="#">Privecy Policy</a>
                    </div>
                         

                         <div class="col-lg-12 form-group pt-15" style="margin-bottom: 0; ">
                                <button class="reg-btn" type="submit">Register</button>
                         </div>
                         <div class="social-login">
                         	<span>Sign in With</span>
                         	<span><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                         	<span><a class="google" href="#"><i class="fa fa-google" aria-hidden="true"></i></a></span>
                         	
                         </div>
                    </form>
  					</div>
  				</div>
  			</div>
  			<div class="col-md-5 fix">
  				<div class="registration-image">
  					
  					<div class="image-active owl-carousel ">

  						  <div class="image_section text-center">
                            <img  src="img/img1.jpg" alt="">
  					     </div>

  					       <div class="image_section text-center">
                            <img  src="img/img2.jpg" alt="">
  					     </div>
  					      <div class="image_section text-center">
                            <img  src="img/img3.jpg" alt="">
  					     </div>

  					       <div class="image_section text-center">
                            <img  src="img/img4.jpg" alt="">
  					     </div>
  					     <div class="image_section text-center">
                            <img  src="img/img5.jpg" alt="">
  					     </div>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>








<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
