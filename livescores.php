<?php
include_once str_replace('/public_html', '', $_SERVER['DOCUMENT_ROOT']).'/app/betagamers/core/init.php';
$controllerclass = new Controller;
// $data['header'] = $controllerclass->header();
// $data['footer'] = $controllerclass->footer();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>BetaGamers: Livescores</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="green">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="BETAGamers">
<meta name="keywords" content="Betagamers.net, betagamers, betagamer, betagamers livescore, betagamers livescores">
<meta name="description" content="View up to date scores of football matches from leagues all over the world." />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MRP6848');</script>
<!-- End Google Tag Manager -->

<link rel="canonical" href="https://betagamers.net/livescores.php" />
<link rel="alternate" href="https://fr.betagamers.net/livescores.php" hreflang="fr" />
<link rel="alternate" href="https://es.betagamers.net/livescores.php" hreflang="es" />
<link rel="alternate" href="https://pt.betagamers.net/livescores.php" hreflang="pt" />
<link rel="icon" href="favicon.ico">

<link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="./assets/css/w3.css" />
<link rel="stylesheet" type="text/css" href="./assets/css/all.min.css" />
<script src="https://kit.fontawesome.com/906d05b5f6.js" crossorigin="anonymous"></script>
<style> 
@font-face {
  font-family: 'Font Awesome';
  font-display: auto;
      src: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2') format('woff2');
    }
@font-face {
  font-family: 'tawkwidget';
  font-display: auto;
  src: url('https://static-v.tawk.to/a-v3-47/fonts/tawk-widget.ttf?yh9epr')format('ttf');
    }
.livescore-widget {
    width: 100%; height: 100%;
}
</style>

</head>
<body>
    <?=$controllerclass->header(true)?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRP6848"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="widget" class="livescore-widget"><iframe src="https://www.ngscore.com/Free/FreeSoccer" width="100%" height="5000" frameborder="0"><iframe></div>

<!--<div id="widget" class="livescore-widget"></div><script type="text/javascript" src="https://ls.soccersapi.com/widget/res/w770_602e5328e92a1/widget.js"></script>-->
    <?=$controllerclass->footer(true)?>

</body>
</html>