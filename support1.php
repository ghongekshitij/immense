<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
 <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="src/css/main.css" rel="stylesheet">
 <link rel="preload" as="img" href="">
<style>
.head{

margin-top: 100px;
/* margin-left: 100px; */
}



img{
  height:80px;
  width:80px;
}
li{
  float:left;
  list-style-type: none;
  padding-right:40px;
}

</style>


</head>
  <body class="bc3-clean  jtbd-stacked-page">

  <?php include 'header.php';?>
<center>
<div class="head">
      <h1>The support team is here to help.</h1>
      <p class="subhead response-time-js">(Our current response time is about <strong><span data-response-time></span></strong>.)</p>
</div>
<div class="container-fluid">
<div class="container">
	<ul>
		<li><img src="images/c.png" class="img-circle"><p><center>Ajinkya</center></p></li>
		<li><img src="images/c.png" class="img-circle"><p><center>Kshitij</center></p></li>
		<li><img src="images/c.png" class="img-circle"><p><center>Mudasir</center></p></li>
		<li><img src="images/c.png" class="img-circle"><p><center>Shubham</center></p></li>
		<li><img src="images/a.png" class="img-circle"><p><center>Bhakti</center></p></li>
		<li><img src="images/a.png" class="img-circle"><p><center>Mrunal</center></p></li>
		<li><img src="images/c.png" class="img-circle"><p><center>Aniket</center></p></li>
		<li><img src="images/b.png" class="img-circle"><p><center>Nana</center></p></li>
	</ul>
	<ul>
		<li><img src="images/c.png" class="img-circle"><p><center>Sandeep</center></p></li>
		<li><img src="images/a.png" class="img-circle"><p><center>Bhagyashiri</center></p></li>
		<li><img src="images/a.png" class="img-circle"><p><center>shweta</center></p></li>
		<li><img src="images/a.png" class="img-circle"><p><center>vinita</center></p></li>
		<li><img src="images/c.png" class="img-circle"><p><center>Amit</center></p></li>
		<li><img src="images/b.png" class="img-circle"><p><center>Nana</center></p></li>
		<li><img src="images/c.png" class="img-circle"><p><center>Nana</center></p></li>
		<li><img src="images/a.png" class="img-circle"><p><center>Nana</center></p></li>
	</ul>
</div>
</div>

</center>
<br>

<!-- <div class="container b1">
<center>

  <iframe width="300" height="215" src="https://www.youtube.com/embed/YYcAwalYO2E">
      Master the basics in 15 minutes
  </iframe>

</center> -->

</div>




<center>

<section class="help">

  <div class="help-staff">
  <div class="self-help">
    <p class="self-help__option">
      <iframe width="300" height="215" src="https://www.youtube.com/embed/YYcAwalYO2E">
          Master the basics in 15 minutes
      </iframe>
    </p>
    <p class="self-help__option">
      <a href="https://basecamp.com/help">
        <img srcset="https://3.basecamp-static.com/bcxhq/assets/support/docs-card-744c15dc0eebfba3916a85e58cec2bedca4eeee0353170f3106eaa4540d1e3fb.jpg 1x, https://3.basecamp-static.com/bcxhq/assets/support/docs-card@2x-1af2304c8d1c89068972c5005fd223766ba2933a5c5727a76a4b8f0f37563497.jpg 2x" src="https://3.basecamp-static.com/bcxhq/assets/support/docs-card@2x-1af2304c8d1c89068972c5005fd223766ba2933a5c5727a76a4b8f0f37563497.jpg" alt="help guide covers"><br>
        Read our how-to guides and help docs
      </a>
    </p>
    <p class="self-help__option">
      <a href="https://twitter.com/basecamp" target="_new">
        <img srcset="https://3.basecamp-static.com/bcxhq/assets/support/twitter-card-52c762ccc1cb3a2066287f65c5a8ee1ea91e16047fea1d749e0a9087ea581870.gif 1x, https://3.basecamp-static.com/bcxhq/assets/support/twitter-card@2x-ad040e96796f94f6e4e26a4fbddacfde407a4fe8b123387adf065cb76a77a257.gif 2x" src="https://3.basecamp-static.com/bcxhq/assets/support/twitter-card@2x-ad040e96796f94f6e4e26a4fbddacfde407a4fe8b123387adf065cb76a77a257.gif" alt="Twitter icon"><br>
        Ask a quick question on Twitter
      </a>
    </p>
  </div>

  <h2 class="push-bottom">Send us a message to get detailed help:</h2>

    <form class="card-form" accept-charset="UTF-8"  enctype="multipart/form-data"  data-form="support">

      <p class="avg-response response-time-js">
        <span class="avg-respons_label"  >
          <strong>Current response time:
             <span data-response-time>

             </span>
           </strong>
         </span>
       </p>

      <input id="ticket_full_name" name="ticket[full_name]" data-support="full_name" type="hidden" />
      <input id="ticket_user_name" name="ticket[user_name]" data-support="user_name" type="hidden" />
      <input id="ticket_has_classic_account" name="ticket[has_classic_account]" data-support="has_classic_account" type="hidden" />
      <input id="ticket_source" name="ticket[source]" data-support="source" type="hidden" />

      <div class="card-form__block validate-js">
        <h4 class="flush-top">What do you need help with? <em>&mdash;&nbsp;Required</em></h4>
        <p>This helps us make sure you get the right answer as fast as possible.</p>
        <select id="ticket_issue_type" name="ticket[issue_type]">
          <option value="">Please select one...</option>
          <option value="login">I can&#x27;t access my account</option>
          <option value="signup">I have a question before I sign up</option>
          <option value="request">I want to request a feature</option>
          <option value="billing">I have a billing question</option>
          <option value="email">I&#x27;m not receiving emails</option>
          <option value="confused">I&#x27;m confused about how something works</option>
          <option value="broken">I think something is broken</option>
          <option value="other">Other</option>
        </select>
      </div>

      <div class="card-form_block validate-js">
        <h4>What&rsquo;s your question, comment, or issue? <em>&mdash;&nbsp;Required</em></h4>
        <p>Share all the details. The more we know, the better we can help you.</p>
        <textarea cols="40" id="ticket_details" name="ticket[details]" rows="15"></textarea>
      </div>

      <div class="card-form_block">
        <h4>Send us a file, screenshot, or document</h4>
        <p>Sharing a picture of what&rsquo;s wrong can help us big time.</p>
        <input id="ticket_file" name="ticket[file]" type="file" />
      </div>

      <div class="card-form_block validate-js">
        <h4>Whats your email address? <em>&mdash;&nbsp;Required</em></h4>
        <p>This is where we&rsquo;ll get back to you. Double check that it&rsquo;s right.</p>
        <input id="ticket_email_address" name="ticket[email_address]" data-support="email_address" placeholder="Enter your email address" size="30" type="email" />
      </div>

      <div class="card-form_block validate-js">
        <h4>What&rsquo;s your account URL?</h4>
        <p>Example: https://basecamp.com/8675309</p>
        <input id="ticket_account_url" name="ticket[account_url]" data-support="account_url" placeholder="Enter your account URL..." size="30" type="text" />
      </div>

      <input class="btn btn-primary" type="submit" value="Submit this support request" />

      <small class="centered">Expect a reply between 8am - 6:30pm CST Monday through Friday.</small>

    </form>

  </section>
  </center>



<!-- <script>
  window.lazyLoadOptions = {
      data_src: "src",
      elements_selector: "video"
  };
</script> -->
<!-- <script async src="https://3.basecamp-static.com/bcxhq/assets/vendor/lazyload-8.2.0-27ccd756d8de83ffdfa74e55988120af3529b5a9c1a825f9d9af4d3dbe5514a6.js"></script> -->

<script src="library/bootstrap/jquery/jquery.min.js"></script>
<script src="library/bootstrap/js/bootstrap.bundle.min.js"cript>

</body>
</html>
