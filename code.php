<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Project TRAL </title>
    <link rel="stylesheet" type="text/css" href="data/css/codestyle.css">
    <?php include "connectdb.php";?>
</head>

<body>

<h1> Enter code here: </h1>

<form name="code" action="syntax.php" method="post" >

    <img name="logo" src="data/img/logo.png">
    <br>
    <textarea name="code" id="code" rows="40" cols="100" placeholder="enter code here."> </textarea>
    <br>

    <label class="select" for="languages">Choose a language:</label>

    <select class="select" name="language" id="languages">
        <option name="php" value="php">PHP</option>
        <option name="html" value="html5">HTML</option>
        <option name="css" value="css">CSS</option>
        <option name="sql" value="sql">SQL</option>
        <option name="javascript" value="javascript">JavaScript</option>
    </select>

    <input class="code" id="code" type="submit">
      



</form>


</body>

</html>