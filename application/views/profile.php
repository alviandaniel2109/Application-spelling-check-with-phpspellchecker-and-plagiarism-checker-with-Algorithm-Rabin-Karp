<!DOCTYPE html>
<html>
<head>
    <title>Hai</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/materialize/css/materialize.min.css'); ?>" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body class="grey lighten-4">
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <br>
                <div class="card-panel teal">
                    <a href="<?php echo site_url('auth/logout') ?>" title="Logout" class="right"><i class="material-icons white-text">power_settings_new</i></a>
                    <span class="white-text">Hai</span>
                </div>
                 
                <script src="https://apis.google.com/js/plusone.js"></script>
                <div id="comments"></div>
               
            </div>
        </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.min.js') ?>"></script>
</body>
</html>