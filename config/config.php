<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="?router=Site/home">MVC</a>
        </div>
        <div class="navigation">
            <ul>
                <li><a href="?router=Site/home">Home</a></li>
                <li><a href="?router=Site/about">About</a></li>
                <li><a href="?router=Site/contact">Contact</a></li>
                <li><a href="?router=Site/cadastro">Cadastro</a></li>
                <li><a href="?router=Site/consulta">Consultas</a></li>
            </ul>
        </div>
    </nav>
</body>
<style>
nav {
  display: flex;
  align-items: center;
  justify-content: space-around;
  background: #024416;
}
nav .logo{
    font-size: 1.5rem;
    font-weight: 600;
}

</style>

</html>