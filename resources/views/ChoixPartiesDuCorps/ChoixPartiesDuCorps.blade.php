<!DOCTYPE html>
<html>
  <head>
      <title>FittyWeb</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <!--<link href="ChoixPartiesDuCorps.css" rel="stylesheet" type="text/css"/>-->
      <!-- Fonts -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

      <!-- Styles -->
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
      <!--{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}-->

      <style>
          #logo {
            float: left;
          }

          h1 {
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
        <h2>Choix Partie du corps</h2>
        <form action="ChoixPartiesDuCorps.blade.php" method="post">

          <div class="form-check">
            <input type="checkbox" class="custom-control-input" name="cardio" id="1" value="Cardio"/>
            <label class="form-check-input" for="1">Cardio</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="custom-control-input" name="Bras" id="2" value="Bras"/>
            <label class="form-check-input" for="2">Bras</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="custom-control-input" name="Jambes" id="3" value="Jambes"/>
            <label class="form-check-input" for="3">Jambes</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="custom-control-input" name="Fessier" id="4" value="Fessier"/>
            <label class="form-check-input" for="4">Fessier</label>
          </div>

          <input type="button" value="Sauvegarder les changements"/>
          <input type="reset" value="Annuler les changements"/>
        </form>

      <footer>
      </footer>
    </body>
</html>
