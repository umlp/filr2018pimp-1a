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
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

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
      <h1>Matériel à disposition</h1>
    </header>
    <form name="formulaireMateriel" action="GET">
      <fieldset>
        <input type="checkbox" name="materiel" id="1" value="Presse"/><label for="1">Presse oblique</label>
        
        <input type="checkbox" name="materiel" id="2" value="Altère"/><label for="2">Altère</label>
        
        <input type="checkbox" name="materiel" id="3" value="BancMuscu"/><label for="3">Banc de musculation</label>
        
        <input type="checkbox" name="materiel" id="4" value="BarreTraction"/><label for="4">Barre de traction</label>
  
        <input type="checkbox" name="materiel" id="5" value="TapisCourse"/><label for="5">Tapis de course</label>
        
        <input type="checkbox" name="materiel" id="6" value="TapisSol"/>
        <label for="6">Tapis de sol</label>
        
        <input type="checkbox" name="materiel" id="7" value="BancAbdos"/>
        <label for="7">Banc abdominaux</label>
        </br>
        <input type="radio" id="enseignant" name="statut" value="enseignant"/><label class="labelradio" for="enseignant">Enseignant</label>
        
        <label for="poidsDispo">Poids disponible: </label>
          <select name="poidsDispo" class="dropdown" id="poidsDispo">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="25">25</option>
            <option value="30">30</option>
          </select></br>
        <input type="submit" class="bouton" value="Valider"/>
        <input type="reset" class="bouton" value="Retour"/>
      </fieldset>
    </form>
    
  </body>
</html>
