<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Do While Loops">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="Kukwac">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
    <title>Factorial, Do While Loops</title>
  </head>
  <body>
    
    <form action="./results.php" method="post" target="results">
      <label for="userNumber">User Number:</label>
      <input type="integer" id="userNumber" name="userNumber"><br><br>
      <input type="submit" value="Display Factorial">
    </form>
    <br>
    <iframe id="results" name="results">
      <div id="user-info">
        <div id="$result"></div>
      </div>
    </iframe>  
  </body>
</html>
