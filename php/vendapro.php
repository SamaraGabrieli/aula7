<!DOCTYPE html>
<?php
    $nome =$_POST["nome"];
    $cpf  =$_POST["cpf"];
    $email =$_POST["email"];
    $tel =$_POST["tel"];
    $nas =$_POST["nas"];
    $senha =$_POST["senha"];
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Produtos</title>
</head>

<body>
    <header>
        <h1> Flipper Lanches</h1>
    </header>

    <main>
        <section class="signup-form">
            <h2> Selecione os Produtos</h2>
            <form action="pagamento.php" method="post">
                <input type="hidden" name="nome" value="<?php echo $nome;?>">
                <input type="hidden" name="cpf"  value="<?php echo $cpf;?>">
                <input type="hidden" name="email" value="<?php echo $email;?>">
                <input type="hidden" name="tel" value="<?php echo $tel;?>">
                <input type="hidden" name="nas" value="<?php echo $nas;?>">
                <input type="hidden" name="senha" value="<?php echo $senha;?>">

                <fieldset>
                    <legend>Produto 1:</legend>
                    <input type="radio" name="prod1" value="1"/> x-salada   -   R$ 36,00  <br/>
                    <input type="radio" name="prod1" value="2"/> x-egg bacon   -   R$ 43,00  <br/>
                    <input type="radio" name="prod1" value="3"/> x-frango   -   R$ 41,00  <br/>
                    <input type="radio" name="prod1" value="4"/> Premium burguer   -   R$ 40,00  <br/>
                    <input type="radio" name="prod1" value="5"/> Supreme Bacon   -   R$ 38,00  <br/>
                    <input type="radio" name="prod1" value="6"/> 7B Gourmet   -   R$ 42,00  <br/>
                    <br/>
                    Quantidade
                    <select name="qtd1" >
                        <option value="1" > 1 </option>
                        <option value="2" > 2 </option>
                        <option value="3" > 3 </option>
                        <option value="4" > 4 </option>  
                    </select>
                </fieldset>
                <br/><br/>
                <fieldset>
                    <legend>Produto 2:</legend>
                    <input type="radio" name="prod2" value="1"/> x-salada   -   R$ 36,00  <br/>
                    <input type="radio" name="prod2" value="2"/> x-egg bacon   -   R$ 43,00  <br/>
                    <input type="radio" name="prod2" value="3"/> x-frango   -   R$ 41,00  <br/>
                    <input type="radio" name="prod2" value="4"/> Premium burguer   -   R$ 40,00  <br/>
                    <input type="radio" name="prod2" value="5"/> Supreme Bacon   -   R$ 38,00  <br/>
                    <input type="radio" name="prod2" value="6"/> 7B Gourmet   -   R$ 42,00  <br/>
                    <input type="radio" name="prod2" value="7"/> -----------------   R$ 0,00  <br/>

                    <br/>
                    Quantidade
                    <select name="qtd2" >
                        <option value="1" > 0 </option>
                        <option value="2" > 1 </option>
                        <option value="3" > 2 </option>
                        <option value="4" > 3 </option>
                        <option value="5" > 4 </option> 
                        <option value="6" > 5 </option>             
                    </select>
                </fieldset>
                <br/><br/>
                <fieldset>
                    <legend>Produto 3:</legend>
                    <input type="radio" name="prod3" value="1"/> x-salada   -   R$ 36,00  <br/>
                    <input type="radio" name="prod3" value="2"/> x-egg bacon   -   R$ 43,00  <br/>
                    <input type="radio" name="prod3" value="3"/> x-frango   -   R$ 41,00  <br/>
                    <input type="radio" name="prod3" value="4"/> Premium burguer   -   R$ 40,00  <br/>
                    <input type="radio" name="prod3" value="5"/> Supreme Bacon   -   R$ 38,00  <br/>
                    <input type="radio" name="prod3" value="6"/> 7B Gourmet   -   R$ 42,00  <br/>
                    <input type="radio" name="prod3" value="7"/> -----------------   R$ 0,00  <br/>

                    <br/>
                    Quantidade
                    <select name="qtd3" >
                        <option value="1" > 0 </option>
                        <option value="2" > 1 </option>
                        <option value="3" > 2 </option>
                        <option value="4" > 3 </option>
                        <option value="5" > 4 </option> 
                        <option value="6" > 5 </option>           
             
                    </select>
                </fieldset>
                <br/><br/>
                <fieldset>
                    <legend>Produto 4:</legend>
                    <input type="radio" name="prod4" value="1"/> x-salada   -   R$ 36,00  <br/>
                    <input type="radio" name="prod4" value="2"/> x-egg bacon   -   R$ 43,00  <br/>
                    <input type="radio" name="prod4" value="3"/> x-frango   -   R$ 41,00  <br/>
                    <input type="radio" name="prod4" value="4"/> Premium burguer   -   R$ 40,00  <br/>
                    <input type="radio" name="prod4" value="5"/> Supreme Bacon   -   R$ 38,00  <br/>
                    <input type="radio" name="prod4" value="6"/> 7B Gourmet   -   R$ 42,00  <br/>
                    <input type="radio" name="prod4" value="7"/> ---------------   R$ 0,00  <br/>

                    <br/>
                    Quantidade
                    <select name="qtd4" >
                        <option value="1" > 0 </option>
                        <option value="2" > 1 </option>
                        <option value="3" > 2 </option>
                        <option value="4" > 3 </option>
                        <option value="5" > 4 </option> 
                        <option value="6" > 5 </option>             
                    </select>
                </fieldset>
                <br/><br/>
                <fieldset>
                    <legend>Acompanhamento:</legend>
                    <input type="checkbox" name="prod5" value="1" /> Não quero Acompanhamento  R$ 0,00 <br/>
                    <input type="checkbox" name="prod6" value="1" /> Porção batata palito   -   R$ 15,00 <br/>
                    <input type="checkbox" name="prod7" value="1" /> Porção batata crinkle   -   R$ 19,00 <br/>
                    <input type="checkbox" name="prod8" value="1" /> Porção batata smile   -   R$ 21,00 <br/>
                    <input type="checkbox" name="prod9" value="1" /> Porção nuggets   -   R$ 16,00 <br/>
                </fieldset>
                <br/><br/>
                <button type="submit">Próximo</button>

            </form>

        </section>
    </main>
</body>
</html>
