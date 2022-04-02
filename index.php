<?php
    get_header();

    $root = get_template_directory_uri();
    // echo $root
    
?>

<!doctype html>
    <html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="/favicon.ico">
    <title>v</title>
    <script defer="defer" src="<?=$root?>/dist/js/chunk-vendors.js"></script>
    <script defer="defer" src="<?=$root?>/dist/js/about.js"></script>
    <script defer="defer" src="<?=$root?>/dist/js/app.js"></script>
    <link href="<?=$root?>/dist/css/chunk-vendors.css" rel="stylesheet">
    <link href="<?=$root?>/dist/css/app.css" rel="stylesheet">
 </head>
<body> 
    <noscript>
        <strong>We're sorry but v doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript> 
    <div id="app"></div>
</body>
</html>

<?php get_footer(); ?>