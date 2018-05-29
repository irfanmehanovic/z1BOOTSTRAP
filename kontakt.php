<?php include 'header.php'; ?>

<div class="jumbotron">
  <div class="container text-center">

    <h2>Kontakt obrazac</h2>
    <div id="results"></div>

    <form id="myForm" action="script.js">
      <fieldset>
      <legend>Personal information:</legend>  
        Name:<br>
          <input id="name" type="text" name="firstname">
          <br>
          Surname:<br>
          <input id="lastname" type="text" name="lastname">
          <br>
          Password:<br>
          <input id="password" type="password" name="psw">
          <br>
          E-mail:<br>
          <input id="email" type="email" name="email">
          <br>
          Telephone:<br>
          <input id="phone" type="tel" name="phone">
          <br>
          <br><br>
          <input type="button" onclick="return results(event);" value="Submit">
          <input type="reset"> 
      </fieldset>
    </form>
  </div>
</div>

<?php include 'footer.php'; ?>