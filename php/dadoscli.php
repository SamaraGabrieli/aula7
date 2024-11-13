<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <h1> Flipper Lanches </h1>
    </header>

    <main>
        <section class="signup-form">
            <h2 class="texto2">Dados do Cliente</h2>
            <form action="vendapro.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" size="50" maxlength="50" required>
                <br/><br/>
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" size="50" maxlength="50" required>
                <br/><br/>
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" size="50" maxlength="50" required>
                <br/><br/>
                <label for="tel">Telefone:</label>
                <input type="text" id="tel" name="tel" size="50" maxlength="50" required>
                <br/><br/>
                <label for="nas">Data de Nascimento:</label>
                <input type="date" id="nas" name="nas" size="50" maxlength="50" required>
                <br/><br/>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" size="50" maxlength="50" required>
                <br/><br/>
                <button type="submit">Próximo</button>
            </form>
        </section>
    </main>
</body>
</html>