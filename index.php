<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Citrus Systems - Test project</title>

  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
  <script defer src="script.js"></script>
</head>

<body>
  <div class="container">
    <h1>Register Page</h1>
    <div class="buttons">
      <h3>Register with</h3> 
      <button class="choice-btn" onclick="showPhoneNumb()">Phone number</button>
      <h3>Or</h3>
      <button class="choice-btn" onclick="showEmail()">Email</button>
    </div>
    <div class="form">
      <form id="form" action="/test/redirect.php">
      <div id="error"></div>
        <fieldset id="phone_number_field">
          <label for="phone_numb">Phone number</label>
          <input type="text" class="country_code" value="+381" readonly>
          <input id="phone_numb_text" onkeypress="return validateNumber(event);" maxlength="9" type="text" placeholder="Phone number">
         </fieldset>

        <fieldset id="email_field"  style="display:none;">
          <label for="email">Email</label>
          <input id="email_text" type="text" placeholder="Email">
        </fieldset>

        <fieldset id="submit_field" style="display:none;">
          <label for="currency">Currency</label>
          <select name="currency" id="currency">
            <option value="eur">EUR</option>
            <option value="usd">USD</option>
          </select><br>
          <input type="checkbox" name="consent" id="consent" >
          <label for="consent">I agree with terms and conditions</label>
          <button id="button" type="submit">Submit</button>
        </fieldset>
      </form>
    </div>
  </div>
</body>
</html>