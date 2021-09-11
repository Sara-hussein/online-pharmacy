@extends('layouts.AdminNavbar')

@section('content')
<title>Registration</title>
<style type="text/css">
    body{
        background-image: url(pharmacy.jpg);
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    }
    #ui{
        background-color: #333;
        padding: 30px;
        margin-top: 50px;
        border-radius: 10px;
        opacity: 0.9;
    }
    #ui label,h1{
        color: #fff;
    }
</style>
<div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div id="ui">
                     <h1 class="text-center">Registration Form</h1>



                    <form class="form-group text-center" action="{{route('register') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <label>First Name:</label>
                                <input id="Firstname" type="text" class="form-control @error('Firstname') is-invalid @enderror" name="Firstname" value="{{ old('Firstname') }}" required autocomplete="Firstname" autofocus placeholder="Enter Your First Name..">

                                @error('Firstname')
                                    <span class="badge badge-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> <br>
                            <div class="col-lg-6">
                                <label>Middle Name:</label>
                                <input id="Middlename" type="text" class="form-control @error('Middlename') is-invalid @enderror" name="Middlename" value="{{ old('Middlename') }}" autofocus placeholder="Optionally">

                                @error('Middlename')
                                    <span class="badge badge-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div> <br>


                                <label>Last Name:</label>
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Enter Your Last Name..">

                                @error('lastname')
                                    <span class="badge badge-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <br>

                        <div class="row">
                            <div class="col-lg-6">
                                <label>Mobile</label>
                                <input id="Mobile" type="number" class="form-control @error('Mobile') is-invalid @enderror" name="Mobile" value="{{ old('Mobile') }}" required autocomplete="Mobile" placeholder="Enter Your Mobile *11 number*">

                                @error('Mobile')
                                    <span class="badge badge-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br>


                            <div class="col-lg-6">
                                <label>Phone Number</label>
                               <input id="Phone" type="number" class="form-control @error('Phone') is-invalid @enderror" name="Phone" value="{{ old('Phone') }}"  placeholder="Enter Your Mobile *10 number*">
                               @error('Phone')
                                  <span class="badge badge-primary" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div><br>

                        <label>E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your E-mail">

                                @error('email')
                                    <span class="badge badge-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <br>


                        <div class="row">
                            <div class="col-lg-6">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your Password">

                                @error('password')
                                    <span class="badge badge-primary" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-6">
                                <label>Re-type Password:</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-Enter Password">
                            </div>
                        </div><br> <br>

                            <select class="form-control" >
                            <option>Choose Gender</option>
                            <option>Male</option>
                            <option>Female</option>

                        </select>
                        <br>
                        <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-lg">

           </form>
       </div>
   </div>

@endsection
