<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <link rel="stylesheet" href="../assets/css/style_project.css">
</head>
<body id="body_login">

  <div id="page_login">
    <form action="" method="get">
    <h1 id="title_login">Login</h1>
    <img id="img_icon_login" src="assets/icon/icons8-email-24.png">
    <input type="email" id="email_login" placeholder="Email"  name="email_login"><br>
    <img id="img_icon_login" src="assets/icon/icons8-password-24.png">
    <input type="password" id="password_login" placeholder="          password" name="password_login" >
    <h4 id="link_login" ><a href="" id="link_login_a"  name="link_login_a">Forget password?</a></h4>
    <input type="submit" id="submit_login" value="Login" name="submit_login" >
    </form>

    <h4 id="link_signup_login">
      Don't have an account?<a href="{{Route('signup')}}">Sign up</a>
    </h4>
    <p id="write_or">Or</p>

    <div id="visit_facebook">
    {{-- Call facebook page --}}
     <a href="https://www.facebook.com/login.php/"><img id="img_icon_facebook" src="assets/icon/icons8-facebook-24.png"></a>
     <a href="https://www.facebook.com/login.php/" id="write_visit_facebook">login with facebook  </a>
    </div>

    {{-- Call Gmail page --}}
    <div id="visit_google">
      <a href="https://accounts.google.com/v3/signin/identifier?ifkv=AdF4I76_IOEAV5F9xDl2f50i1hpP0sThoh6FspT2igg6r1fW00Ki3y9VHAZil9QGQsheU4EjFpu1jQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S640293642%3A1721995898935945&ddm=0"><img id="img_icon_google" src="assets/icon/icons8-google-48.png"></a>
      <a href="https://accounts.google.com/v3/signin/identifier?ifkv=AdF4I76_IOEAV5F9xDl2f50i1hpP0sThoh6FspT2igg6r1fW00Ki3y9VHAZil9QGQsheU4EjFpu1jQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S640293642%3A1721995898935945&ddm=0" id="write_visit_google">login with Google  </a>
     </div>
  </div>

</body>
</html>
