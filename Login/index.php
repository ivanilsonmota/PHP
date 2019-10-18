<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPStudies | Home</title>
    <link rel='stylesheet' type='text/css' href='assets/css/style.css' />
</head>

<body>
    <header>
        <nav id='menu'>
            <ul>
                <li><a href='#'>Home</a></li>
                <li><a href='#'>Sobre</a></li>
                <li><a href='#'>Produtos</a></li>
                <li><a href='#'>Contato</a></li>
            </ul>
        </nav>
    </header>
    <article>
        <section>
            <form id="formLogin" method="post" action="login.php">
                <input type="email" name="email" placeholder="Digite o seu e-mail." /><br />
                <input type="password" name="pass" placeholder="Digite sua senha." /><br />
                <input type="submit" value="Efetuar Login" />
            </form>
        </section>
        <aside>
        </aside>
    </article>
    <footer>
        <p>Todos os direitos reservados.</p>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>