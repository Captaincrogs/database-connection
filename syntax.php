<!DOCTYPE html>
<html lang="en" dir="ltr"> 

<head>
    <meta charset="utf-8">
    <title> Project TRAL </title>
    <link rel="stylesheet" type="text/css" href="data/css/syntaxstyle.css">
  
</head>

<body>

<?php
  include "connectdb.php";

// Hides potential errors for the user.
//error_reporting(0);
//ini_set('display_errors', 0);

// Include the GeSHi library.
include_once 'geSHi/geshi.php';

// Variable values from code.html including the code and the chosen programming language.
$language = $_POST["language"];
$source = $_POST["code"];
echo $source;

// verzend de ingevoerde data naar de database en krijg een unique id nummer toegewezen -->


    $status = "voer je code in een leeg of fout syntax is niet toegestaan!";

    

      $sql = "INSERT INTO syntax (code) VALUES (?)";


      $stmt = $pdo->prepare($sql);
      
      $stmt->execute([$source]);
      

      $status = "Jou code is verstuurd naar onze database";
      echo $status;
      $code = "";
    
// The variables get put in a variable and ran through geSHi.
$geshi = new GeSHi($source, $language);

// The syntax highlighted code gets printed.
echo $geshi->parse_code();
?>

</body>

</html>