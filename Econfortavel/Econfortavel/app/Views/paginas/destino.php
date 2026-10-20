 <link rel="stylesheet" href="<?=URL?>/css/destino.css">
 <main class="destinos">
<!-- CABEÇALHO -->
    <header>
        <div class="logo">
            Econfortável
        </div>

        <nav>
            <a href="<?=URL?>" class="ativo">INÍCIO</a>
            <a href="<?=URL?>/paginas/destino">DESTINOS</a>
            <a href="<?=URL?>/paginas/sobre">SOBRE</a>
            <a class="cadastrar" onclick="window.location.href='<?=URL?>/usuarios/cadastrar'">CADASTRAR</a>
            <a class="entrar" onclick="window.location.href='<?=URL?>/usuarios/login'">ENTRAR</a>
            <a href="<?= URL?>/Usuarios/sair" class="sair">SAIR</a>
        </nav>
    </header>

    <section class="titulo">
        <h1>Explore nossos destinos</h1>

        <p>
            Conheça lugares incríveis, cheios de natureza,
            cultura e experiências únicas.
        </p>
    </section>


    <section class="lista-destinos">

        <div class="card-destino">

            <img src="<?php echo URL; ?>/img/cidade.jpg"
                 alt="Guajará-Mirim">

            <div class="conteudo">

                <h2>Guajará-Mirim</h2>

                <p>
                    Conheça a cultura, a natureza e a história
                    da Pérola do Mamoré.
                </p>

                <a href="#" class="botao">Ver destino</a>

            </div>

        </div>


        <div class="card-destino">

            <img src="<?php echo URL; ?>/img/unnamed.jpg"
                 alt="Rio Mamoré">

            <div class="conteudo">

                <h2>Rio Mamoré</h2>

                <p>
                    Natureza, tranquilidade e paisagens
                    incríveis para conhecer.
                </p>

                <a href="#" class="botao">Ver destino</a>

            </div>

        </div>


        <div class="card-destino">

            <img src="<?php echo URL; ?>/img/parque.jpeg"
                 alt="Parque Natural">

            <div class="conteudo">

                <h2>Parque Natural</h2>

                <p>
                    Trilhas, biodiversidade e contato
                    com a natureza.
                </p>

                <a href="#" class="botao">Ver destino</a>

            </div>

        </div>


        <div class="card-destino">

            <img src="<?php echo URL; ?>/img/bolivia.png"
                 alt="Guayaramerín">

            <div class="conteudo">

                <h2>Guayaramerín</h2>

                <p>
                    Atravesse a fronteira e conheça
                    uma nova cultura.
                </p>

                <a href="#" class="botao">Ver destino</a>

            </div>

        </div>

    </section>

