<link rel="stylesheet" href="<?=URL?>/css/inicio.css">

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

  


    <!-- BANNER -->
    <section class="banner">

        <video autoplay muted loop playsinline>
            <source src="<?=URL?>/public/img/video.mp4" type="video/mp4">
        </video>

        <div class="conteudo-banner">

            <h2>
                Explore destinos<br>
                incríveis e viva<br>
                <span>experiências inesquecíveis.</span>
            </h2>

            <p>
                Conectamos você à natureza, à cultura e ao conforto.<br>
                Escolha seu próximo destino com a Econfortável.
            </p>

        </div>
    </section>


    <!-- BENEFÍCIOS -->
    <section class="beneficios">

        <h2>Por que escolher a Econfortável?</h2>

        <div class="cards">

            <div class="card">
                <img src="<?=URL?>/public/img/natureza.png" alt="Sustentabilidade">
                <h3>Sustentabilidade</h3>
                <p>
                    Valorizamos a natureza e incentivamos
                    práticas sustentáveis.
                </p>
            </div>

            <div class="card">
                <img src="<?=URL?>/public/img/159448.png" alt="Segurança">
                <h3>Segurança</h3>
                <p>
                    Sua segurança e tranquilidade são
                    nossas prioridades.
                </p>
            </div>

            <div class="card">
                <img src="<?=URL?>/public/img/hj.png" alt="Conforto">
                <h3>Conforto</h3>
                <p>
                    Buscamos proporcionar conforto durante
                    toda a sua experiência.
                </p>
            </div>

            <div class="card">
                <img src="<?=URL?>/public/img/descanso.png" alt="Experiência única">
                <h3>Experiência única</h3>
                <p>
                    Criamos momentos especiais para você
                    aproveitar cada destino.
                </p>
            </div>

        </div>
    </section>


    <!-- RODAPÉ -->
<footer>
    <p class="copyright">
         @2026 Ecofortável. Todos os direitos reservados.
    </p>

    <p class="frase">
        Porque cada viagem guarda uma história que merece ser vivida.
    </p>
</footer>