<!DOCTYPE html>
<html>
  <head>
      <title>FittyWeb</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link href="stylePage4.css" rel="stylesheet" type="text/css"/>
  </head>
    <body>
      <header id="top">
        <img id="logo" src="logofittyweb.png" alt="ASI" width="70" height="70"/>
        <h1>FittyWeb</h1>
      </header>
        <h2>Choix Partie du corps</h2>
        <form action="GET">
          <fieldset>
                <input type="checkbox" id="cardio" name="cardio" value="cardio"/><label class="checkbox" for="cardio">Cardio</label>
          </fieldset>
          <fieldset>
                <input type="checkbox" id="bras" name="bras" value="bras"/><label class="checkbox" for="bras">Bras</label>
          </fieldset>
          <fieldset>
                <input type="checkbox" id="jambes" name="jambes" value="jambes"/><label class="checkbox" for="jambes">Jambes</label>
          </fieldset>
          <fieldset>
                <input type="checkbox" id="fessier" name="fessier" value="fessier"/><label class="checkbox" for="fessier">Fessier</label>
          </fieldset>

          <input type="submit" value="Sauvegarder les changements"/>
          <input type="button" value="Annuler les changements"/>
        </form>

      <footer>
      </footer>
    </body>
</html>
