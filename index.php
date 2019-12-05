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
        <li>Home</li>
        <li>Procurar disco</li>
        <li>Adicionar disco</li>
      </ul>
    </nav>
  </header>
  <main>
    <!-- for loop to update screen  -> max = 5 -->
    <p>
      Bem vindo ao Arquivo Musical, você pode consultar informações sobre diversos álbuns lançados e também ajudar
      a gente a expandir nossa base de dados adicionando novos albuns à nossa coleção.
    </p>
    <!-- <div class="container">
      <div class="card">
        <img src="" alt="" id="cover-" />
        <p class="title"></p><p class="year">()</p>
      </div>
    </div> -->
    <section class="container">
      <div class="w-50" id="covers">
        <div class="cover" id="cover-1" onclick="addBg(1)"></div>
        <div class="cover" id="cover-2"></div>
        <div class="cover" id="cover-3"></div>
        <div class="cover" id="cover-4"></div>
        <div class="cover" id="cover-5"></div>
      </div>
    </section>
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