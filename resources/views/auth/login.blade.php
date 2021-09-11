@extends('layouts.AdminNavbar')

@section('content')
<title>Registration</title>
         <link href="style.css" rel="stylesheet">

         <div class="c">
   <h1>login</h1>
 <form method="POST" action="{{ route('login') }}">
            @csrf

    <div class="tbox">
    

         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email" required autofocusd>

             @error('email')
             
               <span class="badge badge-primary" role="alert">

                <strong>invalid username or password</strong>
                  </span>
                    @enderror
                    </div>
    <div class="tbox">
      
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autofocusd>
                @error('password')
               <span class="badge badge-primary" role="alert">
                        <strong>invalid username or password</strong>
                             </span>
                                @enderror
        </div>
        <button type="submit" class="button">
                                 LOGIN
                </button>
                <br>
                <div class="b1">
    <a href="{{ route('register') }}">
                CREATE ANACCOUNT
        </a>
      </div>
                    </form>
    </div>
@endsection
