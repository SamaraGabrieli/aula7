<!DOCTYPE html>
<?php
    #recebe dados etapa1
    $nome =$_POST["nome"];
    $cpf  =$_POST["cpf"];
    $email =$_POST["email"];
    $tel =$_POST["tel"];
    $nas =$_POST["nas"];
    $senha =$_POST["senha"];

    #recebe dados etapa2
    $prod1  =$_POST["prod1"];
    $preco1 =$_POST["preco1"];
    $qtd1   =$_POST["qtd1"];
    $prod2  =$_POST["prod2"];
    $preco2 =$_POST["preco2"];
    $qtd2   =$_POST["qtd2"];
    $prod3  =$_POST["prod3"];
    $preco3 =$_POST["preco3"];
    $qtd3   =$_POST["qtd3"];
    $prod4  =$_POST["prod4"];
    $preco4 =$_POST["preco4"];
    $qtd4   =$_POST["qtd4"];

    $prod5  =$_POST["prod5"];
    $preco5 =$_POST["preco5"];
    $prod6 = $_POST["prod6"];
    $preco6 = $_POST["preco6"];
    $prod7 = $_POST["prod7"];
    $preco7 = $_POST["preco7"];
    $prod8 = $_POST["prod8"];
    $preco8 = $_POST["preco8"];
    $prod9 = $_POST["prod9"];
    $preco9 = $_POST["preco9"];

    echo "<h2>Confirmando Dados do Pedido</h2>";
    echo "<h2>Dados do Cliente</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Cpf:</strong> $cpf</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Telefone:</strong> $tel</p>";
    echo "<p><strong>Data de nascimento:</strong> $nas</p>";
    echo "<p><strong>Senha:</strong> $senha</p>";

    echo "<h2>Dados do Pedido</h2>";
    echo "<p><strong>Produtos Escolhidos:</strong></p>";
    echo "<p><strong>Produto1:</strong> $prod1 <strong>Preço:</strong> $preco1 <strong>Quantidade:</strong> $qtd1</p>";
    if($prod2 != ""){  
      echo "<p><strong>Produto2:</strong> $prod2 <strong>Preço:</strong> $preco2 <strong>Quantidade:</strong> $qtd2</p>";
    }
    if($prod3 != ""){  
        echo "<p><strong>Produto3:</strong> $prod3 <strong>Preço:</strong> $preco3 <strong>Quantidade:</strong> $qtd3</p>";
    }
    if($prod4 != ""){  
        echo "<p><strong>Produto4:</strong> $prod4 <strong>Preço:</strong> $preco4 <strong>Quantidade:</strong> $qtd4</p>";
      }
    if($prod5 != ""){  
        echo "<p><strong>Acompanhamento1:</strong> $prod5 <strong>Preço:</strong> $preco5</p>";
     }
    if($prod6 != ""){  
        echo "<p><strong>Acompanhamento2:</strong> $prod6 <strong>Preço:</strong> $preco6</p>";
     }
    if($prod7 != ""){  
        echo "<p><strong>Acompanhamento3:</strong> $prod7 <strong>Preço:</strong> $preco7</p>";
     }
    if($prod8 != ""){  
        echo "<p><strong>Acompanhamento4:</strong> $prod8 <strong>Preço:</strong> $preco8</p>";
     }
    if($prod9 != ""){
        echo "<p><strong>Acompanhamento5:</strong> $prod9 <strong>Preço:</strong> $preco9</p>";
     }

    $frete = $_POST["frete"];
     if ($frete == 1){
      $frete = "Cliente vem retirar na loja";
      $taxaentrega=0;      
     }
     else{
      $frete = "Entregar no endereço do cliente";		
      $taxaentrega=7;
     }

     $vtotal = (($preco1*$qtd1)+($preco2*$qtd2)+($preco3*$qtd3)+($preco4*$qtd4)+$preco5+$preco6+$preco7+$preco8+$preco9);
    echo "<p><strong>Valor Total da Compra sem frete:</strong> $vtotal</p>";
    $vtotal = (($preco1*$qtd1)+($preco2*$qtd2)+($preco3*$qtd3)+($preco4*$qtd4)+$preco5+$preco6+$preco7+$preco8+$preco9+$taxaentrega);
    echo "<p><strong>Valor Total da Compra com frete:</strong> $vtotal</p>";

    echo "<h2>Valor a Pagar</h2>";
    $fpagto=$_POST["fpagto"];
    if ($fpagto == 1){
      $vpagar = $vtotal - ($vtotal * 0.1);
      echo "<p><strong>Forma de Pagamento</strong> Boleto 10% Desconto <strong>Valor a Pagar:</strong> $vpagar </p>";
    }
    elseif ($fpagto == 2){
      $vpagar = $vtotal / 6;
      echo "<p><strong>Forma de Pagamento</strong> Cartão de Crédito 6x S/Juros <strong>Valor a Pagar:</strong> $vpagar </p>";
    }
    elseif ($fpagto == 3){
        $vpagar = ($vtotal + ($vtotal * 0.12))/12;
        echo "<p><strong>Forma de Pagamento</strong> Cartão de Crédito 12x C/Juros <strong>Valor a Pagar:</strong> $vpagar </p>";
    }
    elseif ($fpagto == 4){
        $vpagar = $vtotal;
        echo "<p><strong>Forma de Pagamento</strong> Pix <strong>Valor a Pagar:</strong> $vpagar </p>";
    }
    else{
        $vpagar = $vtotal;
        echo "<p><strong>Forma de Pagamento</strong> Cartão de Débito <strong>Valor a Pagar:</strong> $vpagar </p>";
      }

?>
</html>