<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Less of an Insecurity</title>
        <link type="text/css" rel="stylesheet" href="/less-insecure/css/less-insecure.css" />
        <script src="js/less-insecure.js" type="text/javascript"></script>
    </head>
    <body>
        <form method="post">
            <input id="username" type="text" placeholder="Username">
            <input id="password" oninput="verifyStuff(this);" type="text" placeholder="Password">
            <input id="v-password" oninput="verifyStuff(this);" type="text" placeholder="Verify Password">
            <input id="secret-code" type="text" placeholder="Secret Code">
            <input name= 'submit' type="submit" value="Create Account" value=""> 
            <input type="reset"> 
        </form>
        <p id="confirm-password"></p>
    </body>
</html>