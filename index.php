<!DOCTYPe html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>grupoprominas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<form id="menuLogin" method="post" action="login.php">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email/Username</label>
        <input name="email" type="text" class="form-control form-input-style" id="exampleFormControlInput1" placeholder="Email/Username">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control form-input-style" id="exampleFormControlInput1" placeholder="Password">
    </div>
    <div class="group-button">
        <button type="submit" class="bnt-login" id="botao">Login</button>
    </div>

<!--    Login:-->
<!--    <input id="login" type="email">-->
<!--    Password:-->
<!--    <input id="password" type="password">-->
    <p class="cadastro">Nao possui login? Cadastre-se  <a href=http://leonardo.com:8080/wordpress/Prominas/cadastro.php>Aqui</a>!</p>
</form>

</body>
</html>