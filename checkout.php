<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirror Fahion | Checkout</title>
</head>
<body>
    <h1>Ótima escolha!</h1>
    <p>Obrigado por comprar na Mirror Fashion!
        Preencha seus dados para efetivar a compra.
    </p>
    <h2>Sua compra</h2>
    <dl>
        <dt>Nome</dt>
        <dd><?= $_POST['nome']?></dd>
        
        <dt>Cor</dt>
        <dd><?= $_POST['cor']?></dd>
    
        <dt>Tamanho</dt>
        <dd><?= $_POST['tamanho']?></dd>

        <dt>Preço</dt>
        <dd><?= $_POST['preco']?></dd>
        
    </dl>

</body>
</html>