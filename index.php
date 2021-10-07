<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link 
        rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
        crossorigin="anonymous"
    >
    <!--CSS, Icone e Titulo da Aba-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/icon-index.png">
    <title>STRING Animes</title>
  </head>
  <body>
    <header>
      <!--Navbar-->
      <div class="py-3 navbar bg-black">
        <div class="container">
          <a href="index.php" class="text-decoration-none">
            <img class="navIcon" src="./img/icon-index.png" alt="Ícone Site">
            <strong class="px-2 m-0">
              <span id="string-span">
                STRING
                <span id="anime-span">
                  Animes
                </span>
              </span>
            </strong>
          </a>
          <button type="button" class="loginBtn p-0">
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              width="50" 
              height="50" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="#7031B3" 
              stroke-width="2" 
              stroke-linecap="round" 
              stroke-linejoin="round"
              class="loginIcon"
            >
              <path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/>
              <circle cx="12" cy="10" r="3"/>
              <circle cx="12" cy="12" r="10"/>
            </svg>
          </button>
        </div>
      </div>
      <!--Navbar-->
    </header>
    <!--Contéudo Site-->
    <main role="main bg-black" style="overflow-x: hidden">
      <!--Banner-->
      <section class="banner">
        <div class="p-0">
          <img class="img-banner bordery-853bd4" src="./img/banner-index.jpg" alt="Banner">
        </div>
      </section>
      <!--Lista de Animes-->
      <div class="py-3">
        <div class="container">
          <p class="text-center text-light font-weight-bold display-4">Animes</p>
          <div class="row">
            <!--Cartão Anime-->
            <div class="col-md-4 mb-5">
              <div class="card bg-black border-853bd4 custom-card cursorh-pointer">
                <img class="card-img" src="./img/animes-banner/naruto.jpg" alt="" style="height: 300px; width: 100%; display: block;">
                <p class="font-weight-bold text-light display-6 text-center mt-3 mb-0 text-uppercase">naruto</p>
                <div class="p-2">
                  <div class="text-light card-sinopse mb-3">
                    <p class="text-justify">
                      Naruto é um jovem órfão habitante da Vila da Folha que sonha se tornar o quinto Hokage, 
                      o maior guerreiro e governante da vila. 
                      Agora Naruto vai contar com a ajuda dos colegas Sakura e Sasuke e do professor dos três, 
                      Kakashi Hatake, para perseguir seu sonho e deter os ninjas que planejam fazer mal á sua cidade.
                    </p>
                    <a href="">Mais...</a>
                  </div>
                  <div class="float-right">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-light btn-editar">Editar</button>
                      <button type="button" class="btn btn-outline-light btn-excluir">Excluir</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Cartão Anime-->   
            <!--Cartão Anime-->
            <div class="col-md-4 mb-5">
              <div class="card bg-black border-853bd4 custom-card cursorh-pointer">
                <img class="card-img" src="./img/animes-banner/tokyoghoul.jpg" alt="" style="height: 300px; width: 100%; display: block;">
                <p class="font-weight-bold text-light display-6 text-center mt-3 mb-0 text-uppercase">Tokyo Ghoul</p>
                <div class="p-2">
                  <div class="text-light card-sinopse mb-3">
                    <p class="text-justify">
                      Tóquio é assombrada por ghouls, humanos que se alimentam somente de carne humana. 
                      As pessoas estão tomadas de medo dessas “criaturas” cuja identidade é um mistério. 
                      Um estudante chamado Kaneki encontra Rize, uma menina que é uma ávida leitora como ele, 
                      no café que frequenta. Como Kaneki tem uma queda por Rize, 
                      eles se encontram com cada vez mais frequência, até uma noite fatídica. 
                      Kaneki descobre da pior forma possível que Rize é um Ghoul, 
                      porém acaba escapando por pura sorte, mas com sérios ferimentos. 
                      Quando se recupera descobre que órgãos da Ghoul foram passados para o seu corpo, 
                      lhe dando a mesma sede de sangue das criaturas.
                    </p>
                    <a href="">Mais...</a>
                  </div>
                  <div class="float-right">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-light btn-editar">Editar</button>
                      <button type="button" class="btn btn-outline-light btn-excluir">Excluir</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Cartão Anime-->  
            <!--Cartão Anime-->
            <div class="col-md-4 mb-5">
              <div class="card bg-black border-853bd4 custom-card cursorh-pointer">  
                <img class="card-img" src="./img/animes-banner/fairytail.jpg" alt="" style="height: 300px; width: 100%; display: block;">
                <p class="font-weight-bold text-light display-6 text-center mt-3 mb-0 text-uppercase">Fairy Tail</p>
                <div class="p-2">
                  <div class="text-light card-sinopse mb-3">
                    <p class="text-justify">
                      Lucy é uma garota de 16 anos que quer se tornar uma maga completa, para isso, 
                      ela precisa entrar em uma guilda de magos. Um dia visitando a cidade de Harujion, 
                      ela conhece Natsu, um jovem rapaz que fica facilmente enjoado com qualquer tipo de transporte. 
                      Mas Natsu não é apenas uma criança fraca, ele é um membro de uma das maiores e infames guildas: FAIRY TAIL.
                    </p>
                    <a href="">Mais...</a>
                  </div>
                  <div class="float-right">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-light btn-editar">Editar</button>
                      <button type="button" class="btn btn-outline-light btn-excluir">Excluir</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Cartão Anime-->  
            <!--Cartão Anime-->
            <div class="col-md-4 mb-5 cursorh-pointer">
              <div class="card bg-black border-853bd4 custom-card cursorh-pointer">
                <img class="card-img" src="./img/animes-banner/onepiece.jpg" alt="" style="height: 300px; width: 100%; display: block;">
                <p class="font-weight-bold text-light display-6 text-center mt-3 mb-0 text-uppercase">One Piece</p>
                <div class="p-2">
                  <div class="text-light card-sinopse mb-3">
                    <p class="text-justify">
                      One Piece segue a história de um grupo de piratas liderado pelo capitão Luffy, um garoto 
                      que possui um corpo elástico e almeja se tornar o Rei dos Piratas, mas 
                      para isso deve encontrar o One Piece, um tesouro misterioso capaz de torná-lo imbatível, 
                      segundo as lendas.
                    </p>
                    <a href="">Mais...</a>
                  </div>
                  <div class="float-right">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-light btn-editar">Editar</button>
                      <button type="button" class="btn btn-outline-light btn-excluir">Excluir</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Cartão Anime--> 
            <!--Cartão Adicionar--> 
            <div class="col-md-4 mb-5" id="adicionarAnime">
              <div class="card bg-black custom-card border-853bd4 plus-card cursorh-pointer">
                <div onclick="document.getElementById('adicionarAnime').style.display='none';document.getElementById('formAnime').style.display='block'">
                  <div class="plus text-center">
                    <svg 
                      xmlns="http://www.w3.org/2000/svg" 
                      width="100" 
                      height="100" 
                      viewBox="0 0 24 24" 
                      fill="none" 
                      stroke="#853bd4" 
                      stroke-width="3" 
                      stroke-linecap="round" 
                      stroke-linejoin="round"
                    >
                      <line x1="12" y1="5" x2="12" y2="19">
                      </line>
                      <line x1="5" y1="12" x2="19" y2="12">
                      </line>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <!--Cartão--> 
            <!--Cartão--> 
            <div class="col-md-4 mb-5" id="formAnime">
              <div class="card bg-black custom-card border-853bd4 plus-card cursorh-pointer">
                <div class="p-0">
                  <div class="text-center text-light">
                    <form method="post" action="./php/pdo.php">
                      <label for="nomeAnime">Nome do Anime:</label>
                      <input class="input-adicionar-anime text-light bg-black border-2BFF67" type="text" name="nomeAnime" id="nomeAnime" placeholder="Nome do Anime">
                      <label for="sinopse">Sinopse:</label>
                      <input class="input-adicionar-anime text-light bg-black border-2BFF67" type="text" name="sinopse" id="sinopse" placeholder="Sinopse">
                      <label for="genero">Gênero:</label>
                      <div class="d-flex justify-content-center">
                        <select class="select-adicionar-anime text-light bg-black border-2BFF67" name="genero" id="genero">
                          <option class="option-adicionar-anime" value="Esportes" selected="selected">Esportes</option>
                          <option class="option-adicionar-anime" value="Fantasia">Fantasia</option>
                          <option class="option-adicionar-anime" value="Scifi">Ficção Científica</option>
                          <option class="option-adicionar-anime" value="Isekai">Isekai</option>
                          <option class="option-adicionar-anime" value="Romance">Romance</option>
                          <option class="option-adicionar-anime" value="Shounen">Shounen</option>
                          <option class="option-adicionar-anime" value="Slice Life">Slice Life</option>
                          <option class="option-adicionar-anime" value="Suspense">Suspense</option>
                          <option class="option-adicionar-anime" value="Terror">Terror</option>
                        </select>
                      </div> 
                      <label for="dataLancamento">Data de Lançamento:</label>
                      <input class="input-adicionar-anime text-light bg-black border-2BFF67" type="text" name="dataLancamento" id="dataLancamento" placeholder="Ano de Lançamento">
                      <label for="statusLancamento">Status:</label>
                      <div class="d-flex justify-content-center">
                        <select class="select-adicionar-anime text-light bg-black border-2BFF67" name="statusLancamento" id="statusLancamento" placeholder="Status de Lançamento">
                          <option class="option-adicionar-anime" value="Concluido" selected="selected">Concluido</option>
                          <option class="option-adicionar-anime" value="Em lançamento">Em lançamento</option>
                        </select>
                      </div>
                      <label for="animeImagem">Nome para o path da imagem:</label>
                      <input class="input-adicionar-anime text-light bg-black border-2BFF67" type="text" name="animeImagem" id="animeImagem" placeholder="Nome minúsculo. Ex: naruto">
                      <input type="submit" value="Adicionar Anime" class="submit-adicionar-anime text-black bg-2BFF67 border-2BFF67">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--Cartão-->  
          </div>
        </div>
      </div>
    </main>
    <!--Contéudo Site-->
    <!--Footer--> 
    <footer id="sticky-footer" class="flex-shrink-0 py-4 text-white bordertop-853bd4">
      <div class="container text-center">
        <small>Copyright &copy; STRING Animes</small>
      </div>
    </footer>
    <!--Footer--> 
    <!-- jQuery  -->
    <script 
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous"
    ></script>
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
        crossorigin="anonymous"
    ></script>
    <script 
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
        crossorigin="anonymous"
    ></script>
    <!-- jQuery  -->
  </body>
</html>