<!DOCTYPE html>
  <html lang="fr">
    <head>
      <link type="text/css" rel="stylesheet" href="http://<?php echo DOMAIN.'/'.PREFIX; ?>/view/css/custom.css"/>
      <meta charset="UTF-8"/>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="http://<?php echo DOMAIN.'/'.PREFIX; ?>/view/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <form action="<?php echo SITE_ROOT; ?>/search/movies">
                        <input placeholder="Rechercher" name="query" class="validate" type="text" />
                    </form>
                </div>