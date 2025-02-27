<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Construtech Recrutamento</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/faleconosco.css">
    <link rel="stylesheet" href="css/reset.css">
    <script src="https://unpkg.com/vanilla-masker@1.1.1/build/vanilla-masker.min.js"></script>
    <script src="js/mascara.js"></script>
    <script type="module" src="js/validacao/validaFormContato.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

</head>

<body>
    <header class="cabecalho">
        <?php
        include 'components/header.php';
        ?>
    </header>

    <section class="conteudo_principal">
    <a href="https://api.whatsapp.com/send?phone=5511915189377&text=Olá!" 
   class="whatsapp-float" 
   target="_blank">
   <span class="whatsapp-hover-text">Deseja um atendimento <BR> personalizado?<BR> Chame a gente no Whats!</span>
   <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="whatsapp-icon">
</a>
        <h1>ENTRE EM CONTATO</h1>
        <div class="form_explicativo">
            <div class="conteiner_explicativo">
                <p>Entre em contato conosco! Se você tiver alguma dúvida ou precisar de mais informações, estamos aqui
                    para ajudar. <BR>Envie sua mensagem e nossa equipe responderá o mais rápido possível para oferecer o
                    suporte que você precisa.</p>

                <!-- Container que organiza o formulário e o mapa ao lado -->
                <div class="container_form_mapa">
                    <!-- Formulário de Cadastro -->
                    <div class="container_cadastro">
                        <h2 class="legenda_principal">Preencha os dados abaixo</h2>
                        <p class="legenda_secundaria">* Lembre-se que alguns campos são obrigatórios</p>
                        <form action="php/action/faleConoscoAction.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="* Nome Completo"
                                        aria-label="Nome" name="nome" maxlength="100">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="CPF/CNPJ" id="cpfCnpj"
                                        aria-label="cpfCnpj" maxlength="18" name="cpfCnpj">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <input type="text" id="email" class="form-control" placeholder="* E-mail"
                                        aria-label="E-mail" maxlength="255" name="email">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="telefone" placeholder="* Telefone"
                                        aria-label="Telefone" maxlength="15" minlength="14"
                                        name="telefone">
                                </div>
                            </div>

                            <textarea class="form-control" style="margin-bottom: 15px;" rows="3"
                                placeholder="* Comentários..." maxlength="1000" name="comentario"></textarea>

                            <div class="mb-3">
                                <label for="evidencia" class="form-label">Anexar evidência (somente .pdf):</label>
                                <input class="form-control" type="file" id="evidencia" style="width: 86%;"
                                    accept="application/pdf" name="evidencia">
                            </div>

                            <button class="botao_1" type="submit">Enviar</button>
                            <button class="botao_1" type="reset">Limpar</button>
                        </form>
                    </div>

                    <!-- Mapa -->
                    <div class="container_mapa" id="container_mapa">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="rodape">
        <?php
        include 'components/footer.php';
        ?>
    </footer>

    <script>
        // Inicializando o mapa com Leaflet
        var map = L.map('map').setView([-23.550520, -46.633308], 13); // Coordenadas de São Paulo

        // Adicionando a camada do OpenStreetMap (OSM)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Adicionando um marcador para mostrar no mapa (opcional)
        L.marker([-23.563441135784334, -46.65480798993285]).addTo(map)
            .bindPopup("<b>ConstruTech São Paulo, SP<b>")
            .openPopup();
    </script>

</body>

</html>