<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php print $data['title']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- TODO: make sure bootstrap.min.css points to BootTheme generated file -->
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- TODO: make sure bootstrap-responsive.min.css points to BootTheme
        generated file -->
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="site/css/main.css" rel="stylesheet" type="text/css" />
        <!-- EXTRA ASSETS -->
        <?php
            foreach($data['stylesheets'] as $sheet) {
                print '<link href="'.$sheet.'" rel="stylesheet" type="text/css"/>'; 
            } 
        ?>
    </head>
<body>
