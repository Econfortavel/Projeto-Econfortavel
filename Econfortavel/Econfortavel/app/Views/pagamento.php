<?php
$metodo = $_POST['metodo'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento - EcoConfortável</title>
    <link rel="stylesheet" href="<?php echo URL; ?>/css/pagamento.css">
</head>

<body>
    <div class="pagina-pagamento">
        <h1>PAGAMENTO</h1>
        <div class="conteudo">

            <!-- OPÇÕES DE PAGAMENTO -->
            <div class="opcoes-pagamento">

                <form method="POST">
                    <button type="submit" name="metodo" value="boleto">
                        BOLETO
                    </button>

                    <button type="submit" name="metodo" value="cartao">
                        CARTÃO CRÉDITO/DÉBITO
                    </button>

                    <button type="submit" name="metodo" value="pontos">
                        PONTOS DE VIAGEM
                    </button>
                </form>
            </div>

            <!-- QR CODE -->
            <div class="area-qrcode">
                <h2>QR CODE</h2>
                <div class="qrcode">
                    <img src="<?=URL?>/img/EXMGH6SVAAMhmAc.jpg" alt="QR Code">
                </div>
            </div>
        </div>

        <!-- MENSAGEM DO PAGAMENTO -->
        <?php if ($metodo != ''): ?>
            <div class="mensagem">
                <?php
                if ($metodo == 'boleto') {
                    echo "Pagamento selecionado: Boleto";
                } elseif ($metodo == 'cartao') {
                    echo "Pagamento selecionado: Cartão Crédito/Débito";
                } elseif ($metodo == 'pontos') {
                    echo "Pagamento selecionado: Pontos de Viagem";
                } ?>
            </div>
        <?php endif; ?>

        <!-- LOGO -->
        <div class="logo">

            <img
               <img src="<?=URL?>/img/arvore.png" class="logo">
                alt="Econfortável"
            >

        </div>

    </div>
</body>
</html>