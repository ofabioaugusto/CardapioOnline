<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $nome = $_POST['name'];
    $telefone = $_POST['telefone'];
    $msgcliente = $_POST['message'];

    // Montar a mensagem com os dados do pedido
    $mensagem .= "Nome: " . $nome . "\n";
    $mensagem .= "Telefone: " . $telefone . "\n";
    $mensagem .= "Mensagem: " . $msgcliente . "\n";
    
    // Limpar a mensagem para uso em uma URL
    $mensagemLimpa = urlencode($mensagem);

    // Gerar o link direto do WhatsApp
    $numeroWhatsApp = "+5511961833139"; // Substitua pelo número do seu WhatsApp
    $linkWhatsApp = "https://wa.me/" . $numeroWhatsApp . "?text=" . $mensagemLimpa;

    // Redirecionar para o link do WhatsApp
    header("Location: " . $linkWhatsApp);
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brother's Burgers</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="icon" href="img/logo3.png" class="rounded-circle" type="image/png">
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <img src="img/logo3.png" alt="Brother's Burger" style="width:45px;height:45px; margin-right: 25px;"><a class="navbar-brand" href="#">Brother's Burgers</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Cardápio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section id="contact" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Entre em Contato com a Brother's Burgers</h2>
            <div class="row">
                <div class="col-md-6">
                <form action="" method="post" class="needs-contact" novalidate target="_blank">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <style>
                        .corner-image {
                            position: none;
                            top: 20px;
                            right: 20px;
                            width: 200px;
                            height: 200px;
                            float: right;
                        }
                    </style>
                    <br><img src="img/logo1.png" class="corner-image rounded-circle">
                    <br><br><br><br><br><br><br><br><h6><b>Endereço:</b></h6>
                    R. Candido Portinari, 123<br>
                    São Paulo - SP<br>
                    CEP: 12345-678<br>
                    Telefone: (11) 96183-3139<br>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-warning text-white py-3 text-center">
       <font color="black">&copy; 2023 Brother's Burgers. Todos os direitos reservados.  Desenvolvido por Fabio Augusto.</font>
    </footer>
    <!-- Adicione os links para os arquivos JavaScript do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

</html>