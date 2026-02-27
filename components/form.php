<link rel="stylesheet" href="/css/forms.css">
<h2>Testformulier</h2>

<form action="#" method="post">

  <fieldset>
    <legend>Tekstachtige velden</legend>

    <div class="input-group">
      <label for="text">Tekst:</label>
      <input type="text" id="text" name="text">
    </div>


    <div class="input-group">
      <label for="password">Wachtwoord:</label>
      <input type="password" id="password" name="password">
    </div>


    <div class="input-group">
      <label for="email">E‑mail:</label>
      <input type="email" id="email" name="email" autocomplete="off">
    </div>


    <div class="input-group">
      <label for="search">Zoek:</label>
      <input type="search" id="search" name="search">
    </div>


    <div class="input-group">
      <label for="tel">Telefoon:</label>
      <input type="tel" id="tel" name="tel" autocomplete="tel">
    </div>


    <div class="input-group">
      <label for="url">URL:</label>
      <input type="url" id="url" name="url">
    </div>


    <div class="input-group">
      <label for="textarea">Tekstvak:</label>
      <textarea id="textarea" name="textarea" rows="4" cols="40"></textarea>
    </div>

  </fieldset>

  <br>

  <fieldset>
    <legend>Numerieke en slider velden</legend>

    <div class="input-group">
      <label for="number">Nummer:</label>
      <input type="number" id="number" name="number" min="0" max="100" step="1">
    </div>


    <div class="input-group">
      <label for="range">Bereik (range):</label>
      <input type="range" id="range" name="range" min="0" max="100">
    </div>

  </fieldset>

  <br>

  <fieldset>
    <legend>Datum en tijd</legend>

    <div class="input-group">
      <label for="date">Datum:</label>
      <input type="date" id="date" name="date">
    </div>


    <div class="input-group">
      <label for="time">Tijd:</label>
      <input type="time" id="time" name="time">
    </div>


    <div class="input-group">
      <label for="datetime">Datum & tijd (lokaal):</label>
      <input type="datetime-local" id="datetime" name="datetime">
    </div>


    <div class="input-group">
      <label for="month">Maand:</label>
      <input type="month" id="month" name="month">
    </div>


    <div class="input-group">
      <label for="week">Week:</label>
      <input type="week" id="week" name="week">
    </div>

  </fieldset>

  <br>

  <fieldset>
    <legend>Keuzes en selecties</legend>

    <p><strong>Checkboxen:</strong></p>
    <label>
      <input type="checkbox" name="interesses" value="sport">
      Sport
    </label><br>
    <label>
      <input type="checkbox" name="interesses" value="muziek">
      Muziek
    </label>

    <p><strong>Radiobuttons (één keuze):</strong></p>
    <label>
      <input type="radio" name="geslacht" value="m">
      Man
    </label><br>
    <label>
      <input type="radio" name="geslacht" value="v">
      Vrouw
    </label><br>
    <label>
      <input type="radio" name="geslacht" value="x">
      Anders
    </label>

    <div class="input-group">
      <label for="select">Select (dropdown):</label>
      <select id="select" name="select">
        <option value="">-- Kies een optie --</option>
        <option value="optie1">Optie 1</option>
        <option value="optie2">Optie 2</option>
        <option value="optie3">Optie 3</option>
      </select>
    </div>


    <div class="input-group">
      <label for="select-multiple">Select (meerdere):</label>
      <select id="select-multiple" name="select_multiple[]" multiple size="4">
        <option value="a">Appel</option>
        <option value="b">Banaan</option>
        <option value="c">Citroen</option>
        <option value="d">Druif</option>
      </select>
    </div>

  </fieldset>

  <br>

  <fieldset>
    <legend>Bestanden en kleur</legend>

    <div class="input-group">
      <label for="file">Bestand uploaden:</label>
      <input type="file" id="file" name="file">
    </div>


    <div class="input-group">
      <label for="color">Kleur:</label>
      <input type="color" id="color" name="color" value="#ff0000">
    </div>

  </fieldset>

  <br>

  <fieldset>
    <legend>Overige input types</legend>

    <div class="input-group">

      <input type="hidden" id="field1" name="hidden-field"
        value="verborgen-waarde">
      <span>(niet zichtbaar in de UI)</span>
    </div>


    <div class="input-group">
      <label for="checkbox-simple">Eenvoudige checkbox:</label>
      <input type="checkbox" id="checkbox-simple" name="checkbox_simple">
    </div>

  </fieldset>

  <br>

  <fieldset>
    <legend>Knoppen</legend>

    <input class="btn" type="submit" value="Verzenden">
    <input class="btn" type="reset" value="Reset">
    <button type="button" onclick="alert('Losse knop geklikt!')">Losse
      knop</button>
  </fieldset>

</form>