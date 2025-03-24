<?php
include_once str_replace('/public_html', '', $_SERVER['DOCUMENT_ROOT']).'/app/betagamers/core/init.php';
$controllerclass = new Controller;
// $data['header'] = $controllerclass->header();
// $data['footer'] = $controllerclass->footer();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Error 404</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="theme-color" content="green">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="<?=HOME?>/assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?=HOME?>/assets/css/w3.css" />
<link rel="stylesheet" type="text/css" href="<?=HOME?>/assets/css/all.min.css" />
<script src="https://kit.fontawesome.com/906d05b5f6.js" crossorigin="anonymous"></script>

</head>
<body>
<?=$controllerclass->header(true)?>
<div class="w3-container">
    
    <div class="w3-center">
    <h1>Ooops, Page not found!</h1>
    <h2>You have requested a page or file which doesn't exist</h2>
    </div>
    
    <p><strong>What could have caused this?</strong></p>
    <ul class="w3-ul">
      <li>We might have removed the page from our website.</li>
      <li>Or the link you clicked might be old and does not work anymore.</li>
      <li>Or you might have accidentally typed the wrong URL in the address bar.</li>
    </ul>
    <h3>Here is what you can do</h3>
    <div class="w3-row-padding">
      <div class= "w3-col m4">
        <div class="w3-card w3-center">
            <i class="fa fa-redo" style="font-size:76px;  color: grey;"></i>
            <h2>Retype the URL</h2>
            <p>Check the URL you typed, correct any errors and try again.</p>
        </div>
      </div>

      <div class= "w3-col m4">
        <div class="w3-card w3-center">
            <i class="fa fa-envelope" style="font-size:76px;  color: grey;"></i>
            <h2>Report the Problem to Us</h2>
            <p>You can use the <a href="<?=support_links('mailus')?>" style="color:green">Contact Form</a> OR you can use the <a href="javascript:void(Tawk_API.toggle())" style="color:green">LiveChat</a> to tell us about it. Copy the URL and send it to us, we'll fix the problem immediately.</p>
        </div>
      </div>

      <div class= "w3-col m4">
        <div class="w3-card w3-center">
          <i class="fa fa-home" style="font-size:76px;  color: grey;"></i>
          <h2>Go to Homepage</h2>
          <p>You can also go back to the <a href="<?=HOME?>" style="color:green">homepage</a> and start browsing from there.</a></p>
        </div>
      </div>
    </div>
</div>

<?=$controllerclass->footer(true)?>
<script src="<?=HOME.'/assets/js/gen.js'?>"></script>
</body>
</html>


