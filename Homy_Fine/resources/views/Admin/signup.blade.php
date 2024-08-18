<!DOCTYPE html>
<html lang="en">
<head>
    <title>sign up</title>
    <link rel="stylesheet" href="../assets/css/style_project.css">
</head>
<body id="body_signup">

  <div id="page_signup">
    <form action="{{url('signupuser')}}" method="get">
    <h1 id="title_signup">Sign up</h1>
    <input type="text" name="full_name" id="full_name" placeholder="Full Name">

    <input type="email" id="email_signup" placeholder="Email"  name="email_signup"><br>


    <input type="password" id="create_password" placeholder="create_password" name="create_password" ><br>
    <input type="password" id="confirm_password" placeholder="confirm_password" name="confirm_password" >
    <input type="submit" id="submit_signup" value="Signup" name="submit_signup" >
    </form>

    <h4 id="link_signup_login">
      Already have an account?<a href="{{Route('login')}}">Login</a>
    </h4>
    <p id="write_or">Or</p>

    <div id="visit_facebook">
        {{-- Call facebook page --}}
     <a href="https://www.facebook.com/login.php/"><img id="img_icon_facebook" src="assets/icon/icons8-facebook-24.png"></a>
     <a href="https://www.facebook.com/login.php/" id="write_visit_facebook_signup">login with facebook  </a>
    </div>

    <div id="visit_google">
        {{-- Call Gmail page --}}
      <a href="https://accounts.google.com/v3/signin/identifier?ifkv=AdF4I76_IOEAV5F9xDl2f50i1hpP0sThoh6FspT2igg6r1fW00Ki3y9VHAZil9QGQsheU4EjFpu1jQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S640293642%3A1721995898935945&ddm=0"><img id="img_icon_google" src="assets/icon/icons8-google-48.png"></a>
      <a href="https://accounts.google.com/v3/signin/identifier?ifkv=AdF4I76_IOEAV5F9xDl2f50i1hpP0sThoh6FspT2igg6r1fW00Ki3y9VHAZil9QGQsheU4EjFpu1jQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S640293642%3A1721995898935945&ddm=0" id="write_visit_google_signup">login with Google  </a>
     </div>
  </div>

</body>
</html>
