<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Shoppe</title>
    <link rel="shortcut icon" href="../IMAGENS/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/trocas-devolucoes.css">
</head>
<body>
    <?php
        include '../include/header.php';
    ?>

    <hr>
    
    <main>
        <h1>TROCAS E DEVOLUÇÕES - ENTRE EM CONTATO</h1>

        <p>Nossa política de trocas dos produtos 
        visa proporcionar ao cliente total segurança em relação aos 
        produtos adquiridos em nossa loja.</p>

        <p>Todos nossos produtos possuem garantia contra
        defeitos de fabricação.
        Também realizamos trocas de produtos que vieram 
        diferente daquele encomendado pelo cliente.
        Caso você receba um produto nosso com algum 
        defeito de fabricação ou diferente do que você encomendou
        siga os seguintes passos para realizar a troca:</p>

        <p>Caso tenha ultrapassado os 7 dias úteis e o produto 
        apresente algum vício ou defeito, entre em contato conosco, 
        informando CPF, número do pedido, o produto a ser 
        devolvido e o defeito.
        Assim que recebermos o e-mail enviamos sua solicitação
        ao nosso setor de qualidade para que seja verificado. 
        Será necessária a autorização desse setor para que uma 
        possível troca seja feita. 
        Análise realizada, retornaremos o contato com o 
        parecer e se será necessária a troca.</p>

        <p>O prazo para a troca ser solicitada por este motivo é
        de 90 dias após o recebimento do produto.
        Atenção, não realizaremos trocas ou ressarcimentos após 
        este prazo.
        Envie-nos uma mensagem que retornaremos o mais
        breve possível.</p>

        <p>Tomamos cuidado para escolher fornecedores que além
        de preço e qualidade, também agilizam o tempo de 
        envio.</p>

        <p>Passado o prazo estipulado, recomendamos que você 
        entre em contato com os Correios para esclarecer o 
        motivo da demora.</p>

        <p>Caso os correios não estejam de posse de seu pedido 
        entre em contato imediatamente conosco para 
        verificarmos junto aos nossos fornecedores.</p>

        <p>Confirmando que existe um problema na logística de seu
        pedido, efetuaremos o estorno TOTAL de sua compra,
        imediatamente, após estas etapas de verificação.</p>

        <p>O código de rastreio de sua compra será enviado por 
        e-mail entre 5 a 10 dias úteis após a confirmação de seu 
        pedido.</p>

        <p>Caso o seu pedido tenha sido feito pela opção Boleto 
        Bancário o tempo entre o pagamento e a compensação 
        bancária pode chegar a até 5 dias úteis.</p>

        <div id="formulario">
            <form action="#" method="post">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name">
                <label for="telefone">Telefone:</label>
                <input type="tel" name="telefone" id="telefone">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
                <label for="mensagem">Mensagem:</label>
                <input type="text" name="mensagem" id="mensagem">
                <input type="submit" value="Enviar">
            </form>
        </div>

    </main>

    <?php
        include '../include/footer.php';
    ?>
   
</body>
</html>







