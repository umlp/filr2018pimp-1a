<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}} -->

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

  <body id="app-layout">
    <header>
      <img class="float-left" id="logo" src="logofittyweb.png" alt="ASI" width="70" height="70"/>
      <h1>FittyWeb</h1>
    </header>
    <h2>Matériel à disposition</h2>
    <form action="https://fittyweb.herokuapp.com/ProgrammeDeMusculationPersonnalise" method="post">

       <div class="form-check">
        <input type="checkbox" class="custom-control-input" name="materiel" id="1" value="Presse"/>
        <label class="form-check-input" for="1">Presse oblique</label>
      </div>

      <div class="form-check">
        <input type="checkbox" class="custom-control-input" name="materiel" id="2" value="Altère"/>
        <label class="form-check-input" for="2">Altère</label>
      </div>

      <div class="form-check">
        <input type="checkbox" class="custom-control-input" name="materiel" id="3" value="BancMuscu"/>
        <label class="form-check-label" for="3">Banc de musculation</label>
      </div>

      <div class="form-check">
        <input type="checkbox" class="form-check-input" name="materiel" id="4" value="BarreTraction"/>
        <label class="form-check-label" for="4">Barre de traction</label>
      </div>

      <div class="form-check">
        <input type="checkbox" class="form-check-input" name="materiel" id="5" value="TapisCourse"/>
        <label class="form-check-label" for="5">Tapis de course</label>
      </div>

      <div class="form-check">
        <input type="checkbox" class="form-check-input" name="materiel" id="6" value="TapisSol"/>
        <label class="form-check-label" for="6">Tapis de sol</label>
      </div>

      <div class="form-check">
        <input type="checkbox" class="form-check-input" name="materiel" id="7" value="BancAbdos"/>
        <label class="form-check-label" for="7">Banc abdominaux</label>
      </div>

      <div>
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Poids disponibles : </label>
        <input placeholder="" id="inlineFormCustomSelectPref" name="poids" type="text" size="3"/>
      </div>

        </br>

        <a href="https://fittyweb.herokuapp.com/ChoixPartiesDuCorps"><input type="button" class="btn btn-primary" value="Retour"/></a>
        <input type="reset" class="btn btn-primary" value="Effacer"/>
        <a href="https://fittyweb.herokuapp.com/ProgrammeDeMusculationPersonnalise"><input type="button" class="btn btn-primary" value="Valider"/></a>
     </form>

  </body>
</html>
