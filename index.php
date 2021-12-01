<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="=X-UA-Compatible" content="ie=edge">
  <title>Meu portifólio</title>
<!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/33f4eb0ae3.js" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
  <link rel="stylesheet" type="text/css" href="assets/css/rodape.css">
</head>
<body>

  <!-- ***************************************************** -->
  <!-- ********************HEADER*************************** -->
  <!-- ***************************************************** -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand texto-nome" href="#">Andre Almeida</a>
      Site em desenvolvimento
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="colapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto"></ul>
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link texto-menu" href="" target="_blank">Download Currículo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link texto-menu" href="public/certificacoes.html">Certificados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link texto-menu" href="#projetos">Projetos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link texto-menu" href="#sobre-mim">Sobre mim</a>
        </li>
        <li class="nav-item">
            <a class="nav-link texto-menu" href="#experiencias">Experiência</a>
        </li>
        <li class="nav-item">
            <a class="nav-link texto-menu" href="#contato">Contato</a>
        </li>
      </ul>
    </div>
  </nav>
  <section class="jumbotron text-center cor-home fonte">
    <div class="container">
      <img class="foto-perfil" src="assets/img/minhafoto.jpg">
      <h1 class="jumbotron-heading text-home-white">Andre Almeida</h1>
      <p class="lead text-home-white">Dev Front-end - Estudante.</p>
      <p>
        <a href="#contato" class="btn btn-dark my-4">Contato</a>
      </p>
      <a href="https://www.linkedin.com/in/andre-almeida-a7aa82156/" target="_blank">
        <i class="icones-home fab fa-linkedin"></i>
      </a>
      <a href="https://www.facebook.com/joao.guilherme.dev" target="_blank">
        <i class="icones-home fab fa-facebook"></i>
      </a>
      <a href="https://www.instagram.com/joao_guilherme.guitar/" target="_blank">
        <i class="icones-home fab fa-instagram"></i>
      </a>
      <a href="https://github.com/andrecurvit" target="_blank">
        <i class="icones-home fab fa-github"></i>
      </a>
    </div>
  </section>

  <!-- ****************************************************************** -->
  <!-- *************************PROJECTS********************************* -->
  <!-- ****************************************************************** -->

  <section class="basico">
  <div class="album py-5 cor-projetos" id="projetos">
    <div class="container">
      <h2 class="jumbotron-heading text-center titulo-preto">
        Projetos
      </h2>
      <div class="row">

        <!-- NETFLIX -->

        <div class="col-md-6"> <!-- Forma de organizar a pagina (colunas) --> 
          <div class="card mb-5 box-shadow">
            <img class="card-img-top" src="https://psfonttk.com/wp-content/uploads/2020/09/netflix-logo.png" data-holder-rendered="true">
            <div class="card-body">
              <p class="card-text texto-preto">Esse projeto foi criado a partir das aulas realizadas pelo Bruno Fraga (Técnicas de Invasão) 
              para clonagem de plataforma de Streaming de Filmes e Séries (NetFlix). (ATUALIZANDO para visão em mobile...)</p>
              <div class="languagescode">
                <ul class="texto-preto"> <!-- Linguagens utilizadas -->
                  <li>Bootstrap 4</li>
                  <li>HTML</li>
                  <li>CSS</li>
                  <li>JS</li>
                </ul><!-- Linguagens utilizadas -->
                <!-- Buttons "Ver projeto" & "Código" -->
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group"><!-- Grupo de botões -->
                    <a href="#" target="_blank">
                      <button type="button" class="btn btn-sm btn-outline-success">Ver projeto</button>
                    </a>
                    <a href="https://github.com/andrecurvit/MeuPortifolio">
                      <button type="button" class="btn btn-sm btn-outline-primary">Código</button>
                    </a>
                  </div> <!-- Grupo de botões -->
                </div> <!-- Buttons "Ver projeto" & "Código" -->
              </div>            
            </div>
          </div> <!-- card mb-4 box-shadow -->
        </div> <!-- col-md-5 -->

        <!-- SOLAR SYSTEM -->

        <div class="col-md-6"> <!-- Forma de organizar a pagina (colunas) --> 
          <div class="card mb-5 box-shadow">
            <img class="card-img-top" src="https://altamontanha.com/wp-content/uploads/2019/09/Os-Planetas-do-Sistema-Solar-768x400.jpg" data-holder-rendered="true">
            <div class="card-body">
              <p class="card-text texto-preto">Este projeto foi criado através de uma pesquisa no site
              <a href="https://terminalroot.com.br/2021/04/sistema-solar-feito-com-html-css-e-javascript-puro.html">terminalroot.com.br</a>
              para conhecimento de estilos de CSS e tags HTML. (ATUALIZANDO para visão em MOBILE...)</p>
              <div class="languagescode">
                <ul class="texto-preto">
                  <li>HTML</li>
                  <li>CSS</li>
                  <li>JS</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="#" target="_blank">
                      <button type="button" class="btn btn-sm btn-outline-success">Ver projeto</button>
                    </a>
                    <a href="https://github.com/andrecurvit/MeuPortifolio">
                      <button type="button" class="btn btn-sm btn-outline-primary">Código</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- card mb-4 box-shadow -->
        </div> <!-- col-md-4 -->

        <!-- IFOOD -->

        <div class="col-md-6"> <!-- Forma de organizar a pagina (colunas) --> 
          <div class="card mb-5 box-shadow">
            <img class="card-img-top" src="https://logopng.com.br/logos/ifood-43.svg" alt="Logo iFood" data-holder-rendered="true">
            <div class="card-body">
              <p class="card-text texto-preto">Esse projeto foi desenvolvido em um intensivão de Front-end sobre a mentoria da escola 
              Kenzie Academy juntamento com parceria de iFood.</p>
              <div class="languagescode">
                <ul class="texto-preto">
                  <li>HTML</li>
                  <li>CSS</li>
                  <li>JS</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="#">
                      <button type="button" class="btn btn-sm btn-outline-success">Ver projeto</button>
                    </a>
                    <a href="https://github.com/andrecurvit/MeuPortifolio">
                      <button type="button" class="btn btn-sm btn-outline-primary">Código</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- card mb-4 box-shadow -->
        </div> 
          <!-- PHP básico com MySQL -->
        <div class="col-md-6"> <!-- Forma de organizar a pagina (colunas) --> 
          <div class="card mb-5 box-shadow">
            <img class="card-img-top" src="https://creativealive.com/wp-content/uploads/2013/10/PHP-MySQL.jpg" alt="Logo PHP e MySQL" data-holder-rendered="true">
            <div class="card-body">
              <p class="card-text texto-preto">Projeto realizado através do Curso de PHP com MySQL da plataforma UDEMY, ministrado por Danilo Filitto.</p>
              <div class="languagescode">
                <ul class="texto-preto">
                  <li>HTML</li>
                  <li>CSS</li>
                  <li>PHP</li>
                  <li>MySQL</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="../PHP_Basico">
                      <button type="button" class="btn btn-sm btn-outline-success">Ver projeto</button>
                    </a>
                    <a href="https://github.com/andrecurvit/MeuPortifolio">
                      <button type="button" class="btn btn-sm btn-outline-primary">Código</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- card mb-4 box-shadow -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </div>
  </section>
  <!-- ****************************************************************** -->
  <!-- *************************ABOUT********************************* -->
  <!-- ****************************************************************** -->

  <section class="jumbotron text-center cor-about-me" id="sobre-mim">
    <div class="container">
      <h2 class="jumbotron-heading titulo-preto">
        Sobre mim
      </h2>
      <p class="lead texto-black">
        Sou um jovem de 
          <?php
          date_default_timezone_set('America/Sao_Paulo');
          function idade($data_nascimento){
          $dn = new DateTime($data_nascimento);
          $agora = new DateTime();
          $idade = $agora->diff($dn);
          return $idade->y;
        }
          echo idade('1999-10-27');
        ?>
        anos de idade que busca conhecimentos na área de informática. Pretendo iniciar um curso na área de Segurança da Informação (Segurança Ofensiva). Gosto muito de ajudar as pessoas, dar dicas de como melhorar em algo e principalmente, se proteger, coisa que hoje em dia, quem não sabe, sempre fica para trás e caem em golpes. Sou muito estudioso, dedico mais de 70% do meu tempo livre para os estudos. Gosto de desafios novos e me acho criativo em relação em determinados momentos. Dedicarei meu tempo para tentar evoluir cada vez mais na minha vida.
      </p>
    </div>
  </section> <!-- jumbotron text-center -->

  <!-- Experiências -->
  <section class="jumbotron text-center cor-experiencia" id="experiencias">
    <div class="container">
      <h2 class="jumbotron-heading titulo-preto">
        Experiências
      </h2>
      <div class="row">
        <div class="col-lg-7">
          <img class="elgin" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-GzBQMRur2zJN07hV1N2fNnAAJy-Sv1HdXA&usqp=CAU" alt="Elgin">
          <h2>Elgin</h2>
          <p class="detalhes"><span id="pontos">...</span><span id="mais">Gestão de entregas de malotes internos da empresa;<br>
            Recebimento de produtos (SEDEX, DHL, FEDEX);<br>
            Cadastrava funcionários (Utilizava o EXCEL 2016/Libre Office);<br>
            Digitalizava documentos e enviava para os responsáveis;<br>
            Realizava atendimento telefônico e direcionava as ligações para os setores;<br>
            Rastreio / Controle de correspondências;<br>
            Aprovações de reservas utilizando o sistema SAP;<br>
            Entre outros.</span>
          </p>
          <button class="funcoesElgin" onclick="leiaMais()" id="btnLeiaMais">Ver Funções</button><br><br><br>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="clubmed" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLRwbDuP1jFL4mjCOvUqq78gwzMN0vZwT5HA&usqp=CAU" alt="ClubMed Lake Paradise">
          <h2>ClubMed Lake Paradise</h2>
          <p class="experiencias"><span id="pontos1">...</span><span id="mais1">Recebimento de mercadorias;<br>
            Separação de requisições para cada setor do Club;<br>
            Organização do setor;<br>
            Organizava os produtos no fifo (validade);<br>
            Auxiliava também em outros setores quando necessário.</span>
          </p>
          <button class="funcoesClube" onclick="leiaMais1()" id="btnLeiaMais1">Ver Funções</button>
        </div><!-- /.col-lg-4 -->
      </div>  
    </div>
  </section> <!-- jumbotron text-center -->

  <!-- Contato -->
  <section class="corPrimaria" id="contato">
    <div>
      <div class="container-fluid">
        <h3 style="padding-top: 60px;" class="text-center titulosBrancos">
          Disponivel para oportunidades
        </h3>
        <p class="textoBranco" style="text-align: center;">Estou à disposição para qualquer dúvida que ocorra em meu perfil.</p>        
      </div>
    </div>
  </section>

  <!-- rodapé -->
  <footer class="rodape">
    <div class="rodape">
      <nav class="sociais">
        <ul class="sociais">
          <li class="sociais">
            <a class="desc" href="https://www.linkedin.com/in/andre-almeida-a7aa82156/" target="_blank">
              <img class="social" src="./assets/img/rodape/linkedin.svg" title="Linkedin" alt="Linkedin">
            </a>
          </li>
          <li class="sociais">
            <a class="desc" href="https://github.com/andrecurvit" target="_blank">
              <img class="social" src="./assets/img/rodape/github.svg" title="Github" alt="Github">
            </a>
          </li>
          <li class="sociais">
            <a class="desc" href="https://www.instagram.com/joao_guilherme.guitar/" target="_blank">
              <img class="social" src="./assets/img/rodape/instagram.svg" title="Instagram" alt="Instagram">
            </a>
          </li>
          <li class="sociais">
            <a class="desc" href="https://www.youtube.com/channel/UCwm5rBFbxJxbgIZASuBLDAQ" target="_blank">
              <img class="social" src="./assets/img/rodape/youtube.svg" title="Youtube" alt="Youtube">
            </a>
          </li>
          <li class="sociais">
            <a class="desc" href="https://www.facebook.com/joao.guilherme.dev"  target="_blank">
              <img class="social" src="./assets/img/rodape/facebook.svg" title="Facebook" alt="Facebook">
            </a>
          </li>
          <br>
          <div class="ultdet">
            <p class="ultdet">
              <strong>Desenvolvido por:</strong> &copy Andre Almeida /
              <a href="mailto:andrecurvit@gmail.com" title="Enviar email">
              <strong>E-mail: </strong>andrecurvit@gmail.com / </a>
              <strong>Cidade: </strong>Mogi Das Cruzes-SP
            </p>
          </div> <!-- ultdet -->
        </ul> <!-- sociais -->
      </nav> <!-- sociais -->
    </div> <!-- rodape -->
  </footer> <!-- rodape -->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>