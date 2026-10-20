<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EConfortável</title>
<link rel="stylesheet" href="<?=URL?>/css/pg_1.css">
</head>
<body>
<header>
  <button class="botao esquerda" title="Histórico">◴</button>
  <div class="logo"><img src="<?=URL?>/img/logo.png" alt="EConfortável" width="100px" height="100px"></div>
  <button class="botao direita" title="Menu">☰</button>
</header>
<main>
  <section>
    <div class="mapa">
      <iframe title="Google Maps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31357.24401795471!2d-65.323008!3d-10.7610112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1792435538121!5m2!1spt-BR!2sbr%22" loading="lazy"></iframe>
    </div>
    <div class="listas">
      <div class="lista">Popular Places:</div>
      <div class="lista">New Places:</div>
    </div>
  </section>
  <aside class="painel">
    <div class="cabecalho-card">
      <div>
        <div class="nome-local">Nome do Local</div>
        <span class="avaliacao-label">AVALIAÇÕES:</span>
        <div class="estrelas">★★★★★<span class="vazia">★</span></div>
      </div>
    </div>
    <div class="secao">
      <h2 class="titulo">Reservas</h2>
      <div class="reserva"></div>
      <h2 class="titulo">Tempo de viagem</h2>
      <div class="tempo"><div></div><div></div><div></div></div>
      <h2 class="titulo">Avaliações　♜</h2>
    </div>
  </aside>
</main>
</body>
</html>
