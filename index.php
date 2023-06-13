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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Cardápio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="hero" class="d-flex align-items-center bg-dark text-white">
        <div class="container text-center">
    
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
            <br><br><img src="img/logo2.png" class="corner-image rounded-circle">
            <h2><b>Bem-vindo ao Cardápio da Brother's Burgers</b></h2>
            <p>Descubra o sabor autêntico da paixão em cada mordida, nossos hambúrgueres artesanais são a essência da perfeição grelhada.</p><br>
            <a href="#cart" class="btn btn-primary">Ir para o Carrinho</a>
        </div>
    </section>

    <section id="menu" class="py-5 bg-dark text-black">
        <div class="container">
            <h2 class="text-center mb-4 text-white">Nosso Cardápio Completo</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagem1.png" class="card-img-top" alt="Triplo X-Salada Brother's">
                        <div class="card-body">
                            <h5 class="card-title">Duplo X-Salada Brother's</h5>
                            <p class="card-text">Triplo pão, dois hambúrgueres artesanais de briscket 90g cobertos com queijo, alface americana, cebola, picles e molho especial.</p>
                            <p class="card-number">R$ 34,99</p>
                            <a href="#" class="btn btn-primary add-to-cart" data-nome="Item 1" data-preco="10">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagem2.png" class="card-img-top" alt="X-Salada Brother's">
                        <div class="card-body">
                            <h5 class="card-title">X-Salada Brother's</h5>
                            <p class="card-text">Pão tostado, hambúrguer artesanal de carne briscket 90g coberto de queijo derretido, alface, tomate e nossa saborosa maionese.</p>
                            <p class="card-number">R$ 24,99</p>
                            <a href="#" class="btn btn-primary add-to-cart">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagem3.png" class="card-img-top" alt="Brat Brother's">
                        <div class="card-body">
                            <h5 class="card-title">Brat Brother's</h5>
                            <p class="card-text">Pão tostado, hambúrguer artesanal de carne briscket 90g coberto de queijo derretido e seu molho preferido, cebola e picles.</p>
                            <p class="card-number">R$ 19,99</p>
                            <a href="#" class="btn btn-primary add-to-cart">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagem4.png" class="card-img-top" alt="Chicken Cheddar Bacon Brother's">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Cheddar Bacon Brother's</h5>
                            <p class="card-text">Peito de frango temperado empanado coberto com queijo, alface americana, fatia de tomate, cheddar e o nosso super bacon.</p>
                            <p class="card-number">R$ 29,99</p>
                            <a href="#" class="btn btn-primary add-to-cart">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagem5.png" class="card-img-top" alt="Big Brat Chicken Brother's">
                        <div class="card-body">
                            <h5 class="card-title">Big Brat Chicken Brother's</h5>
                            <p class="card-text">Hambúrguer artesanal de brisket 140 g, fatias de queijo, maionese, catupiry, fatias do nosso super bacon no pão tipo brioche tostado.</p>
                            <p class="card-number">R$ 39,99</p>
                            <a href="#" class="btn btn-primary add-to-cart">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagem6.png" class="card-img-top" alt="Porção de Frango Empanado">
                        <div class="card-body">
                            <h5 class="card-title">Porção de Frango Empanado</h5>
                            <p class="card-text">Deliciosos pedaços de peito de frango temperados, empanados e fritos. Contém 8 deliciosos pedaços.</p>
                            <p class="card-number">R$ 19,99</p>
                            <a href="#" class="btn btn-primary add-to-cart">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagem7.png" class="card-img-top" alt="Porção de Fritas Grande">
                        <div class="card-body">
                            <h5 class="card-title">Porção de Fritas Grande</h5>
                            <p class="card-text">Deliciosa e sequinha porção de fritas tamanho grande. Aproximadamente 450g.</p>
                            <p class="card-number">R$ 14,99</p>
                            <a href="#" class="btn btn-primary add-to-cart">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagem8.png" class="card-img-top" alt="Prato 2">
                        <div class="card-body">
                            <h5 class="card-title">Proção de Batata Cheddar & Bacon Grande</h5>
                            <p class="card-text">Batata frita, coberta com delicioso cheddar cremoso, e bacon crocante. Aproximadamente 450g.</p>
                            <p class="card-number">R$ 29,99</p>
                            <a href="#" class="btn btn-primary add-to-cart">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagem9.png" class="card-img-top" alt="Coca-cola 350ml">
                        <div class="card-body">
                            <h5 class="card-title">Coca-cola 350ml</h5>
                            <p class="card-text">Coca-cola 350ml. Gelada ou sem gelo.</p>
                            <p class="card-number">R$ 5,99</p>
                            <a href="#" class="btn btn-primary add-to-cart">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagem10.png" class="card-img-top" alt="Suco de Laranja Natural 500ml">
                        <div class="card-body">
                            <h5 class="card-title">Suco de Laranja Natural 500ml</h5>
                            <p class="card-text">Suco de Laranja Natural 500ml. Gelado ou sem gelo.</p>
                            <p class="card-number">R$ 9,99</p>
                            <a href="#" class="btn btn-primary add-to-cart">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagem11.png" class="card-img-top" alt="Agua Mineral Crystal 510ml">
                        <div class="card-body">
                            <h5 class="card-title">Agua Mineral Crystal 510ml</h5>
                            <p class="card-text">Agua Mineral Crystal 510ml. Natural ou com Gás, gelada ou sem gelo.</p>
                            <p class="card-number">R$ 4,99</p>
                            <a href="#" class="btn btn-primary add-to-cart">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="img/imagem12.png" class="card-img-top" alt="Cerveja Budweiser  330ml">
                        <div class="card-body">
                            <h5 class="card-title">Cerveja Budweiser  330ml</h5>
                            <p class="card-text">Cerveja Budweiser American Lager 330ml Long Neck, gelada ou sem gelo.</p>
                            <p class="card-number">R$ 14,99</p>
                            <a href="#" class="btn btn-primary add-to-cart">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>

                <!-- Repita o código acima para adicionar mais pratos -->

            </div>
        </div>
    </section>
    <section id="cart" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Carrinho de Compras</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody id="cart-items">
                    <!-- Itens do carrinho serão adicionados aqui -->
                </tbody>
                <tfoot>
                    <tr>
                        <td>Total:</td>
                        <td id="cart-total">R$ 0,00</td>
                    </tr>
                </tfoot>
            </table>
            <form action="" method="post" class="needs-validation" novalidate>

            <input type="hidden" name="itensTotal[]" value="" id="itensTotal" hidden>
            <input type="text" name="valorTotal" id="valorTotal" hidden>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">Nome:</label>
                        <input type="text" class="form-control" name="validationTooltip01" id="validationTooltip01" placeholder="Insira o seu nome." required>
                        <div class="invalid-tooltip">
                            Insira o seu Nome.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">Telefone:</label>
                        <input type="text" class="form-control" name="validationTooltip02" id="validationTooltip02" placeholder="Insira o seu telefone." required>
                        <div class="invalid-tooltip">
                            Insira o seu Telefone.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">Endereço:</label>
                        <input type="text" class="form-control" name="validationTooltip03" id="validationTooltip03" placeholder="Insira o seu endereço." required>
                        <div class="invalid-tooltip">
                            Insira o seu Endereço.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">CEP:</label>
                        <input type="text" class="form-control" name="validationTooltip04" id="validationTooltip04" placeholder="Insira o seu CEP." required>
                        <div class="invalid-tooltip">
                            Insira o seu CEP.
                        </div>
                    </div>
                </div>
            <button id="btn-finalizar enviar-whatsapp" class="btn btn-primary btn-success" style="display: inline-block; width: 200px; height: 40px;">Finalizar Comprar</a>
            </button>
        </form>
        <br><button id="btn-limpar" class="btn btn-danger" style="display: inline-block; width: 200px; height: 40px;">Limpar  Carrinho</button>
        </div>
    </section>
    <footer class="bg-warning text-white py-3 text-center">
    <a href="#hero" class="btn btn-light">Voltar ao Cardápio</a>
       <font color="black"> <p ><br>&copy; 2023 Brother's Burger. Todos os direitos reservados. Desenvolvido por Fabio Augusto.</p> </font>
       
    </footer>
    <!-- Adicione os links para os arquivos JavaScript do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
         $(document).ready(function() {
            var carrinho = [];

            $('.add-to-cart').click(function() {
                var nome = $(this).data('nome');
                var preco = $(this).data('preco');

                carrinho.push({ nome: nome, preco: preco });

            });

            $('#enviar-whatsapp').click(function() {
                var mensagem = "Pedido:\n";
                var total = 0;

                for (var i = 0; i < carrinho.length; i++) {
                    var item = carrinho[i];
                    mensagem += item.nome + " - R$" + item.preco.toFixed(2) + "\n";
                    total += item.preco;
                }

                mensagem += "Total: R$" + total.toFixed(2);

                var telefone = "5511961833139";
                var mensagemWhatsApp = encodeURIComponent(mensagem);
                var linkWhatsApp = "https://wa.me/" + telefone + "?text=" + mensagemWhatsApp;
                window.open(linkWhatsApp);
            });
        });

            // Função para atualizar o carrinho
                function updateCart() {
                const carrinhoContainer = document.getElementById("cart-items");
                const cartTotalElement = document.getElementById("cart-total");
                let cartTotal = 0;

                // Limpa os itens do carrinho
                carrinhoContainer.innerHTML = "";

                // Adiciona os itens do carrinho ao HTML
                carrinho.forEach(function(item) {
                    const row = document.createElement("tr");
                    const nome = document.createElement("td");
                    const preco = document.createElement("td");
                    const carrinho = Array.from(carrinhoContainer.getElementsByTagName("tr"))
                .map(function(row) {
                        const cells = Array.from(row.getElementsByTagName("td"));
                        return cells.map(function(cell) {
                        return cell.textContent;
                        });
                    });
                const flattenedItems = carrinho.flat();
                    const hiddenField = document.getElementById("itensTotal");
                    hiddenField.value = flattenedItems.join(", ");
                    nome.textContent = item.name;
                    preco.textContent = "R$ " + item.price.toFixed(2);

                    row.appendChild(nome);
                    row.appendChild(preco);
                    carrinhoContainer.appendChild(row);

                    cartTotal += item.price;
                    
                    document.getElementById("itensTotal").value = carrinho;
                    document.getElementById("valorTotal").value = cartTotal;

                });

                // Atualiza o total do carrinho
                document.getElementById("btn-limpar").addEventListener("click", function() {
                    carrinho.length = 0; // Limpa o array carrinho
                    updateCart(); // Atualiza o carrinho para exibir os itens limpos
                });

                cartTotalElement.textContent = "R$ " + cartTotal.toFixed(2);
            }

            // Função para adicionar um item ao carrinho
            function addToCart(nome, preco) {
                const item = {
                    name: nome,
                    price: preco
                };

                carrinho.push(item);
                updateCart();
            }
            // Adiciona o evento de clique aos botões "Adicionar ao Carrinho"
            addToCartButtons.forEach(function(button) {
                button.addEventListener("click", function(event) {
                    const cardBody = event.target.parentNode;
                    const nome = cardBody.querySelector(".card-title").textContent;
                    const preco = parseFloat(cardBody.querySelector(".card-number").textContent.replace("R$ ", "").replace(",", "."));
                    addToCart(nome, preco);
                    event.preventDefault();
                });
            });
        });

        // Atualizar o campo escondido com os itens do carrinho
    const hiddenField = document.getElementById("itensTotal");
    const carrinho = Array.from(carrinhoContainer.getElementsByTagName("tr"))
      .map(function(row) {
        return row.cells[0].textContent;
      });
    hiddenField.value = JSON.stringify(carrinho);

    // Atualizar o campo escondido com o valor total do carrinho
    const total = Array.from(carrinhoContainer.getElementsByTagName("tr"))
      .reduce(function(sum, row) {
        return sum + parseFloat(row.cells[1].textContent.replace("R$ ", ""));
      }, 0);
    const totalField = document.getElementById("valorTotal");
    totalField.value = total.toFixed(2);
    </script>
    <script>
        const btnLimpar = document.getElementById("btn-limpar");
        btnLimpar.addEventListener("click", function() {
            const carrinhoContainer = document.getElementById("cart-items");
            carrinhoContainer.innerHTML = ""; // Limpa o conteúdo do carrinho
            carrinho.length = 0; // Remove todos os itens do carrinho
            cartTotal = 0; // Zera o total do carrinho
            cartTotalElement.textContent = "R$ 0,00"; // Atualiza a exibição do total do carrinho
        });
    </script>


</body>

</html>