<!DOCTYPE html>
<html lang="en">
<head>
    <title>sign up</title>
    <link rel="stylesheet" href="../assets/css/style_project.css">
</head>
<body id="body_signup">

  <div id="page_signup">

    <form method="POST" action="{{ route('register') }}">
      @csrf

      
      <h1 id="title_signup">Signup</h1>
          <x-input id="full_name" placeholder="Full Name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
          <input type="text" name="phone" id="phone" placeholder="Phone" required>
          <input type="text" name="adress" id="adress" placeholder="Adress" required>
          <x-input id="email_signup" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
          <x-input id="create_password" placeholder="create_password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
          <x-input id="confirm_password" placeholder="confirm_password" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
      
    <x-button class="ms-4" id="submit_signup">
      signup
  </x-button>

    <h4 id="link_signup_login">
      Already have an account?<a href="{{Route('login')}}">Login</a>
    </h4>
    <h5 id="write_or">Or</h5>

    <a href=""><img id="img_icon_facebook_signup" src="../assets/icon/photo_2024-09-04_12-10-56-removebg-preview.png"></a>
    <a href=""><img id="img_icon_google_signup" src="../assets/icon/icons8-google-48.png"></a>
  </div>

</body>
</html>
