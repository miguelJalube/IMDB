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
                    <nav>
                        <div class="nav-wrapper">
                            <a href="<?php echo SITE_ROOT; ?>" class="brand-logo">IMDB</a>
                            <ul style="height: 100%;" id="nav-mobile" class="right hide-on-med-and-down">
                                <li style="height: 100%;">
                                    <form style="height: 100%;" action="<?php echo SITE_ROOT; ?>/search/multi">
                                        <div style="height: 100%;" class="input-field">
                                            <input style="height: 100%;" id="search" name="query" class="validate" type="search" required/>
                                            <label for="search"><i class="material-icons">search</i></label>
                                            <i class="material-icons">close</i>
                                        </div>
                                    </form>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>