<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Citrus Systems - Test project</title>

  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
  <script>
  document.onreadystatechange = function () {
    var state = document.readyState
    if (state == 'interactive') {
        document.getElementById('content').style.visibility="hidden";
    } else if (state == 'complete') {
        setTimeout(function(){
          document.getElementById('interactive');
          document.getElementById('load').style.visibility="hidden";
          document.getElementById('content').style.visibility="visible";
        },2000);
    }
  }
  </script>
</head>

<body>
  <div class="redirect">
    <div id="content">
      <h2>Registration Success</h2>
      <button id="button">Click here to Login</button>
    </div>
    <div id="load"></div>
  </div>
    
</body>
</html>