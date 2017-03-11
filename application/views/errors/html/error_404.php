<!-- <!doctype html> -->

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>404 Page Not Found</title>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Material Design Lite">
  <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#3372DF">

  <link rel="canonical" href="">

  <link href='//fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="<?php echo base_url().NAV_ASSETS;?>css/material.min.css">
  <link rel="stylesheet" href="<?php echo base_url().NAV_ASSETS;?>css/helpers.css">
  <link rel="stylesheet" href="<?php echo base_url().NAV_ASSETS;?>css/404.css">

</head>
<body>
<div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
  <div class="demo-ribbon mdl-color--green-400" ></div>
  <!--style=" background-image: url(<?php // echo base_url().NAV_ASSETS;?>images/12.jpg); background-size: 100%; background-repeat:no-repeat;"-->
  <main class="demo-main mdl-layout__content">
    <h2 class="t-center mdl-color-text--white text-shadow">Material Lite</h2>
    <!--<a id="top"></a>-->
    <div class="demo-container mdl-grid">
      <div class="mdl-cell mdl-cell--4-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
      <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet p-50 t-center">
        <div class="demo-crumbs mdl-color-text--grey-500 f12" id="link">
          
        </div>
        <h2>404</h2>
        <p>
          The page your are looking for has escaped from our servers.
        </p>
        <button onclick="document.location.href = '<?php echo base_url();?>'" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color--green-400">
          Back Home
        </button>
      </div>
    </div>
  </main>
</div>

<script src="<?php echo base_url().NAV_ASSETS;?>js/material.min.js"></script>
<script>
    var currentURL=location.href;
//    string path = @HttpContext.Current.Request.Url.AbsolutePath;
    document.getElementById("link").innerHTML = currentURL;
</script>
</body> 
</html>
