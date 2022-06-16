<!DOCTYPE html>
<html>
  <head>
    <title> Contact Form</title>
    <link rel="stylesheet" href="style.css"/>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
    function doajax () {
      var data = new FormData(document.getElementById("cform"));
      data.append("g-recaptcha-response", grecaptcha.getResponse());

      fetch("process.php", { method: "POST", body: data })
      .then((res) => { return res.text(); })
      .then((txt) => {
        console.log(res);
      });
      return false;
    }
    </script>
  </head>
  <body>
    <form id="cform" method="post" onsubmit="return doajax();">
      <h1>Contact</h1>

      <label>Prénom</label>
      <input type="text" name="prenom" required/>

      <label>Nom</label>
      <input type="text" name="nom" required/>

      <label>Téléphone</label>
      <input type="tel" name="tel" required/>

      <label>Email</label>
      <input type="email" name="email" required/>

      <label>Objet</label>
      <input type="text" name="objet" required/>

      <label>Message</label>
      <textarea name="message" required></textarea>

      <div class="g-recaptcha" data-sitekey="6LdRAmggAAAAAP_mew4NPS8PECClRi9kn38zLx7s"></div>

      <input type="submit" value="Submit"/>
    </form>
  </body>
</html>
