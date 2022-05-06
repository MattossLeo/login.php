<!DOCTYPe html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>grupoprominas</title>
    <link rel="stylesheet" href="cadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<form id="menuLogin" method="post" action="conexao.php">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input name="email" type="email" class="form-control form-input-style" id="exampleFormControlInput1" placeholder="Email" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
        <input name="username" type="text" class="form-control form-input-style" id="exampleFormControlInput1" placeholder="Username"required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control form-input-style" id="exampleFormControlInput1" placeholder="Password"required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Birthday</label>
        <input name="birthday" type="date" class="form-control form-input-style" id="exampleFormControlInput1"required>
    </div>
    <div class="group-button">
        <button type="submit" class="bnt-login" id="botao">Register</button>
    </div>

    <!--    Login:-->
    <!--    <input id="login" type="email">-->
    <!--    Password:-->
    <!--    <input id="password" type="password">-->
    <p class="cadastro">Possui login? Clique  <a href="http://gamestorm.com:8080/Prominas/index.php">Aqui</a>!</p>
</form>

</body>
</html>





