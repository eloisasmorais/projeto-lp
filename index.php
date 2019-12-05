<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Arquivo Musical</title>
  <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
  <header class="header">
    <div>
      <img src="./img/vinyl-record.png" alt="Disco de vinil" />
      <h1>Arquivo Musical</h1>
    </div>
    <nav>
      <ul>
        <li><button onclick="location.replace('index.php?pagina=inicio')">Home</button></li>
        <li><button onclick="location.replace('index.php?pagina=listar')">Procurar disco</button></li>
        <li><button onclick="location.replace('index.php?pagina=cadastrar')">Adicionar disco</button></li>
      </ul>
    </nav>
  </header>
  <main>
    <?php 
      // include "DB.php";
      if(isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
      } else {
        $pagina = "inicio";
      }

      if ($pagina == "inicio") {
    ?>
    <p>
      Bem vindo ao Arquivo Musical, você pode consultar informações sobre diversos álbuns lançados e também ajudar
      a gente a expandir nossa base de dados adicionando novos albuns à nossa coleção.
    </p>
    <section class="container">
      <div class="w-50" id="covers">
        <div class="cover" id="cover-1" onclick="addBg(1)"></div>
        <div class="cover" id="cover-2"></div>
        <div class="cover" id="cover-3"></div>
        <div class="cover" id="cover-4"></div>
        <div class="cover" id="cover-5"></div>
      </div>
    </section>
    <?php
      } elseif ($pagina == "cadastrar") {
        include "Cadastro.php";
      } elseif ($pagina == "listar") {
        include "Lista.php";
      }
    ?>
  </main>
</body>
<script>

  // const cover = document.getElementById('covers').addEventListener("click", function() {
  //   addBg();
  // });
  function addBg(n) {
    const container = document.getElementById('container');
    container.classList.add('bg-gray');
  }
</script>
</html>