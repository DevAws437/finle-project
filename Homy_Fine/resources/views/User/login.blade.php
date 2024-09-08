<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <link rel="stylesheet" href="../assets/css/style_project.css">
</head>
<body id="body_login">

  <div id="page_login">

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <h1 id="title_login">Login</h1>
      <img id="img_icon_login" src="../assets/icon/icons8-email-24.png">
          <x-input id="email"  id="email_login" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /><br>
          <img id="img_icon_login" src="../assets/icon/icons8-password-24.png">
          <x-input id="password_login"   type="password" name="password" placeholder="password" required autocomplete="current-password" />
          <h4 id="link_login" ><a href="" id="link_login_a"  name="link_login_a">Forget password?</a></h4>


          <x-button class="ms-4" id="submit_login">
              {{ __('Log in') }}
          </x-button>
    </form>
       {{-- <form action="{{route('home')}}" method="get">
        @csrf
          <h1 id="title_login">Login</h1>
            <img id="img_icon_login" src="../assets/icon/icons8-email-24.png">
               <input type="email" id="email_login" placeholder="Email"  name="email_login" required><br>
            <img id="img_icon_login" src="../assets/icon/icons8-password-24.png">
            <input type="password" id="password_login" placeholder="password" name="password_login" required >
             <h4 id="link_login" ><a href="" id="link_login_a"  name="link_login_a">Forget password?</a></h4>
           <input type="submit" id="submit_login" value="Login" name="submit_login" >
            </form> --}}

    <h4 id="link_signup_login">
      Don't have an account?<a href="{{Route('signupe')}}">Signup</a>
    </h4>
    <h5 id="write_or">Or</h5>

    <div id="visit_facebook">
     <a href=""><img id="img_icon_facebook" src="../assets/icon/photo_2024-09-04_12-10-56-removebg-preview.png"></a>
     <a href="" id="write_visit_facebook">login with facebook  </a>
    </div>

    <div id="visit_google">
      <a href=""><img id="img_icon_google" src="../assets/icon/icons8-google-48.png"></a>
      <a href="" id="write_visit_google">login with Google  </a>
     </div>
  </div>

</body>
</html>
