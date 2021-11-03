<!DOCTYPE html>
<html>
<head>
    <title>Error handler</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="text-center">
<form  class="border mx-auto mt-10 w-1/2" action='includes/signup.inc.php' method="post">
    <h2 class="text-4xl mt-10">sign up form</h2>
    <input class="mt-5 p-1 border" type="text" placeholder="first name" name="fname">
    <br>
    <input class="my-5 p-1 border" type="text" placeholder="last name" name="lname">
    <br>
    <input class="mb-5 p-1 border" type="text" placeholder="e-mail" name="email">
    <br>
    <input class="mb-5 p-1 border" type="text" placeholder="username" name="uid">
    <br>
    <input class="mb-5 p-1 border" type="password" placeholder="password" name="pwd">
    <br>
    <button class="border border-red-500 bg-red-500 py-2 px-5 mb-10 rounded text-white" type='submit' name='submit'>sign up</button>
</form>
<?php
$fullUrl="http:/$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullUrl,"signup=empty") == true){
    echo "<p class='py-4 px-5 text-3xl text-red-700 '> Please fill in all the fields!</p>";
    exit();
}
elseif(strpos($fullUrl,"signup=email") == true){
    echo "<p class='py-4 px-5 text-3xl text-red-700 '> Please provide a valid email address!</p>";
    exit();
}
elseif(strpos($fullUrl,"signup=char") == true){
    echo "<p class='py-4 px-5 text-3xl text-red-700 '> Please fill in valid characters!</p>";
    exit();
}
elseif(strpos($fullUrl,"signup=success") == true){
    echo "<p class='py-4 px-5 text-4xl text-green-700 '> Congrats! You've signed in </p>";
    exit();
}

?>

</body>
</html>