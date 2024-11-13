<!DOCTYPE html>
<?php
    #dados Cadastro
    $nome =$_POST["nome"];
    $cpf  =$_POST["cpf"];
    $email =$_POST["email"];
    $tel =$_POST["tel"];
    $nas =$_POST["nas"];
    $senha =$_POST["senha"];

    #dados produto
    #produto 1
    $prod1 = $_POST["prod1"];
    if ($prod1 == 1){
        $prod1="x-salada";
        $preco1=36;
    }
    elseif ($prod1 == 2){
        $prod1="x-egg bacon";
        $preco1=43;
    }
    elseif ($prod1 == 3){
        $prod1="x-frango";
        $preco1=41;
    }
    elseif ($prod1 == 4){
        $prod1="Premium Burguer";
        $preco1=40;
    }
    elseif ($prod1 == 5){
        $prod1="Supreme Bacon";
        $preco1=38;
    }
    else{
        $prod1="7B Gourmet";
        $preco1=42;
    }
    $qtd1   = $_POST["qtd1"];

    #produto 2
    $prod2 = $_POST["prod2"];
    if ($prod2 == 1){
        $prod2="x-salada";
        $preco2=36;
    }
    elseif ($prod2 == 2){
        $prod2="x-egg bacon";
        $preco2=43;
    }
    elseif ($prod2 == 3){
        $prod2="x-frango";
        $preco2=41;
    }
    elseif ($prod2 == 4){
        $prod2="Premium Burguer";
        $preco2=40;
    }
    elseif ($prod2 == 5){
        $prod2="Supreme Bacon";
        $preco2=38;
    }
    elseif ($prod2 == 6){
        $prod2="7B Gourmet";
        $preco2=42;
    }
    else{
        $prod2="Nenhuma opção";
        $preco2=0;
    }
    $qtd2   = $_POST["qtd2"];

    #produto 3
    $prod3 = $_POST["prod3"];
    if ($prod3 == 1){
        $prod3="x-salada";
        $preco3=36;
    }
    elseif ($prod3 == 2){
        $prod3="x-egg bacon";
        $preco3=43;
    }
    elseif ($prod3 == 3){
        $prod3="x-frango";
        $preco3=41;
    }
    elseif ($prod3 == 4){
        $prod3="Premium Burguer";
        $preco3=40;
    }
    elseif ($prod3 == 5){
        $prod3="Supreme Bacon";
        $preco3=38;
    }
    elseif ($prod3 == 6){
        $prod3="7B Gourmet";
        $preco3=42;
    }
    else{
        $prod3="Nenhuma opção";
        $preco3=0;
    }
    $qtd3   = $_POST["qtd3"];

    #produto 4
    $prod4 = $_POST["prod4"];
    if ($prod4 == 1){
        $prod4="x-salada";
        $preco4=36;
    }
    elseif ($prod4 == 2){
        $prod4="x-egg bacon";
        $preco4=43;
    }
    elseif ($prod4 == 3){
        $prod4="x-frango";
        $preco4=41;
    }
    elseif ($prod4 == 4){
        $prod4="Premium Burguer";
        $preco4=40;
    }
    elseif ($prod4 == 5){
        $prod4="Supreme Bacon";
        $preco4=38;
    }
    elseif ($prod4 == 6){
        $prod4="7B Gourmet";
        $preco4=42;
    }
    else{
        $prod4="Nenhuma opção";
        $preco4=0;
    }
    $qtd4   = $_POST["qtd4"];

    #Acompanhamentos
    if(isset($_POST["prod5"])){
        $prod5="Sem Acompanhamento";
        $preco5=0;
    }
    else{
        $prod5="";
        $preco5=0;
    }

    if(isset($_POST["prod6"])){
        $prod6="Batata Palito";
        $preco6=15;
    }
    else{
        $prod6="";
        $preco6=0;
    }

    if(isset($_POST["prod7"])){
        $prod7="Batata crinkle";
        $preco7=19;
    }
    else{
        $prod7="";
        $preco7=0;
    }

    if(isset($_POST["prod8"])){
        $prod8="Batata smile";
        $preco8=21;
    }
    else{
        $prod8="";
        $preco8=0;
    }

    if(isset($_POST["prod9"])){
        $prod9="Nuggets";
        $preco9=16;
    }
    else{
        $prod9="";
        $preco9=0;
    }
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Forma de Pagamento</title>
</head>
<body>
    <header>
        <h1> Flipper Lanches</h1>
    </header>
    <section class="signup-form">
            <h2>Forma de Pagamento e Frete</h2>
            <form action="confirma.php" method="post">
                <! recebendo dados etapa 1>
                <input type="hidden" name="nome" value="<?php echo $nome;?>">
                <input type="hidden" name="cpf"  value="<?php echo $cpf;?>">
                <input type="hidden" name="email" value="<?php echo $email;?>">
                <input type="hidden" name="tel" value="<?php echo $tel;?>">
                <input type="hidden" name="nas" value="<?php echo $nas;?>">
                <input type="hidden" name="senha" value="<?php echo $senha;?>">

                <! recebendo dados etapa 2>
                <input type="hidden" name="prod1" value="<?php echo $prod1;?>">
				<input type="hidden" name="preco1"value="<?php echo $preco1;?>">
				<input type="hidden" name="qtd1"  value="<?php echo $qtd1;?>">
                <input type="hidden" name="prod2" value="<?php echo $prod2;?>">
				<input type="hidden" name="preco2"value="<?php echo $preco2;?>">
				<input type="hidden" name="qtd2"  value="<?php echo $qtd2;?>">
                <input type="hidden" name="prod3" value="<?php echo $prod3;?>">
				<input type="hidden" name="preco3"value="<?php echo $preco3;?>">
				<input type="hidden" name="qtd3"  value="<?php echo $qtd3;?>">
                <input type="hidden" name="prod4" value="<?php echo $prod4;?>">
				<input type="hidden" name="preco4"value="<?php echo $preco4;?>">
				<input type="hidden" name="qtd4"  value="<?php echo $qtd4;?>">
                <!Acompanhamento>
                <input type="hidden" name="prod5" value="<?php echo $prod5;?>">
				<input type="hidden" name="preco5"value="<?php echo $preco5;?>">
                <input type="hidden" name="prod6" value="<?php echo $prod6;?>">
				<input type="hidden" name="preco6"value="<?php echo $preco6;?>">
                <input type="hidden" name="prod7" value="<?php echo $prod7;?>">
				<input type="hidden" name="preco7"value="<?php echo $preco7;?>">
                <input type="hidden" name="prod8" value="<?php echo $prod8;?>">
				<input type="hidden" name="preco8"value="<?php echo $preco8;?>">
                <input type="hidden" name="prod9" value="<?php echo $prod9;?>">
				<input type="hidden" name="preco9"value="<?php echo $preco9;?>">


                <label for="fpagto">Escolha a Forma de Pagamento:</label>
                <select name="fpagto">
                    <option value="1">Boleto - Desconto de 10%</option>
                    <option value="2">6x no Crédito sem Juros</option>
                    <option value="3">12x no Crédito - 12% de Juros</option>
                    <option value="4">Pix</option>
                    <option value="5">Cartão de Débito</option>
                </select>
                <br/><br/>
                <label for="frete">Escolha sua forma de retirada</label>
                <select name="frete">
                    <option value="1" checked> Retirada no balcão</option>
                    <option value="2"> Entrega no meu endereço (frete fixo R$ 7.00)</option>
                </select>
                <br/><br/>
                <button type="submit">Próxima</button>

            </form>
</body>
</html>