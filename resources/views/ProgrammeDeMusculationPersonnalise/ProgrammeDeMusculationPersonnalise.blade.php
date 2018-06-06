<!DOCTYPE html>
<html>
  <head>
    <title>Programme de musculation personnalisé</title>
    <meta  http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--<link  href="style.css" rel="stylesheet" type="text/css" />-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!--{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}-->

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        #logo {
          float: left;
        }

        header h1 {
          padding-top: 30px;
          margin-left: 100px;
        }
    </style>
  </head>
  <body>
    <header>
      <img id="logo" src="logofittyweb.png" alt="ASI" width="90" height="90"/>
      <h1>FittyWeb</h1>
    </header>
    </br>
    <h2>Programme de musculation personnalisé</h2>
    <form action="ProgrammeDeMusculationPersonnalise.blade.php" method="post">
      <fieldset>
        <div class="form-check">
          <input type="checkbox" class="custom-control-input" name="programme" id="1" value="Squats"/>
          <label class="form-check-input" for="1">Squats</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="custom-control-input" name="programme" id="2" value="Abdominaux"/>
          <label class="form-check-input" for="2">Abdominaux</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="custom-control-input" name="programme" id="3" value="Rameur"/>
          <label class="form-check-input" for="3">Rameur</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="custom-control-input" name="programme" id="4" value="Pompes"/>
          <label class="form-check-input" for="4">Pompes</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="custom-control-input" name="programme" id="5" value="Dorsaux"/>
          <label class="form-check-input" for="5">Dorsaux</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="custom-control-input" name="programme" id="6" value="Biceps"/>
          <label class="form-check-input" for="6">Biceps</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="custom-control-input" name="programme" id="7" value="Triceps"/>
          <label class="form-check-input" for="7">Triceps</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="custom-control-input" name="programme" id="8" value="DeveloppeCouche"/>
          <label class="form-check-input" for="8">Développé Couché</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="custom-control-input" name="programme" id="9" value="Presse Oblique"/>
          <label class="form-check-input" for="9">Presse Oblique</label>
        </div>

        <input type="button" class="btn btn-primary" value="Retour"/>
        <input type="reset" class="btn btn-primary" value="Effacer"/>
        <input type="button" class="btn btn-primary" value="Valider"/>

      </fieldset>
    </form>
  </body>
</html>
