<?php 
if (isset($_POST['e_submit'])) {
    require_once("app/database/connect.php");
    
    
    $user = $_POST['user'];
    $pass = sha1($_POST['pwd']);
    
    echo "User: " . htmlspecialchars($user) . "<br>";
    echo "Password Hash: " . $pass . "<br>";
    
   
}
?>


<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela de Login</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style0.css">
    </head>
    <body>
        <div class="Login">
            <h1>Login</h1>
      
            <form
            method = "POST"
            action = "app/pagina1.php">
            <input type="text" id="username" placeholder="Usuario"  name="username" required>
            <br><br>
            <input type="password" id="password" placeholder="Senha" name="password" required>
            <br><br>
            <button type="submit">Login</button>
           
        
        </div>
    </body>
</html>
    