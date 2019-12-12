<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Réseau Jeunes Entrepreneur.es</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container cont-grande">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src={{ asset("img/logos/Logo-RJE-long-Transparent.png")}} alt="Logo Réseau Jeunes Entrepreneurs">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Newsletter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Bienvenue dans le Réseau Jeunes Entrepreneurs-es !</div>
        <div class="intro-heading text-uppercase">Rejoignez une communauté de jeunes entrepreneur-es !</div>
      </div>
    </div>
  </header>

  <!-- FAQ -->
  <section class="page-section" id="services">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Questions fréquentes</h2>
        <h3 class="section-subheading text-muted">Tout ce dont vous avez besoin de savoir sur le réseau</h3>
      </div>
    </div>

    <div class="text-center explain">
      <div class="qst" data-aos="fade-right" data-aos-duration="1200">
        <div class="rond image-qst-1">
          <p>Qu’est-ce que le Réseau Jeunes Entrepreneur-es ?</p>
        </div>

        <div class="bulle-reponse shadow">
          <p>
            Ce réseau a été créé en 2019 par Gautier Decroix, CEO de <em>Your Party</em>. Collaborant dans un premier temps sur les secteurs de Lille, Calais et Dunkerque, il a pour but d’aider les
            jeunes de 14 à 26 ans ayant une ébauche d'entreprise en tête (ou même un début de projet) et leur permettre de concrétiser
            leur projet entrepreneurial.
          </p>
        </div>
      </div>

      <div class="qst" data-aos="fade-up" data-aos-duration="1200">
        <div class="rond orange image-qst-2">
          <p>Que propose le Réseau Jeunes Entrepreneur-es ?</p>
        </div>

        <div class="bulle-reponse shadow">
          <p>
            Au sein du réseau, nous vous proposons un suivi de dossier sur-mesure selon vos contraintes. Vous
            aurez également la possibilité de rencontrer différents chefs d’entreprises qui pourront vous conseiller sur vos projets. Nous nous engageons à vous faire avancer en vous mettant en relation avec les bons interlocuteurs et vous faire gagner du temps.
          </p>

        </div>
      </div>

      <div class="qst" data-aos="fade-left" data-aos-duration="1200">
        <div class=" rond image-qst-3">
            <p>Quel est le but du Réseau Jeunes Entrepreneur-es ?</p>
        </div>

        <div class="bulle-reponse shadow">
          <p>
            Nous avons pour ambition de devenir un réseau national et de gagner en notoriété afin d'être une référence pour les jeunes dont le désir est d'entreprendre et de créer.
            Nous envisageons de faire bouger les choses sur le plan juridique dans le but de permettre aux jeunes de créer
            plus facilement et d’en tirer plus d’avantages.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Articles</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>

      <div class="row">
      @foreach($posts as $post)
      <div class="col-md-4 col-sm-6 portfolio-item" data-aos="zoom-in-up" data-aos-duration="1{{$loop->iteration *100}}">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$post->id}}">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="{{Voyager::image($post->image)}}" alt="">
        </a>
        <div class="portfolio-caption">
        <h4>{{$post->title}}</h4>
        <p class="text-muted">{{$post->excerpt}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">À propos</h2>
          <h3 class="section-subheading text-muted">Retour sur mon parcours</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 data-aos="fade-right">2017</h4>
                  <h4 class="subheading" data-aos="fade-right">Génése de YourParty</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted" data-aos="fade-right"> Alors que j’étais en 3ème, lors de mon stage de découverte m’est venue l’idée de Your Party. </p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 data-aos="fade-left">2019</h4>
                  <h4 class="subheading" data-aos="fade-left">YourParty grandi</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted" data-aos="fade-left">Pendant 3 ans, j’ai persévéré pour commencer à faire vivre ce projet. </p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 data-aos="fade-right">Mars 2019</h4>
                  <h4 class="subheading" data-aos="fade-right">Lauréat du Réseau Entreprendre</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted" data-aos="fade-right">En mars dernier je suis devenu le plus jeune lauréat de chez réseau entreprendre. Aujourd’hui le projet est en pleine accélération et je prépare la première levée de fonds pour cette magnifique aventure.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 data-aos="fade-left">2019</h4>
                  <h4 class="subheading" data-aos="fade-left">Création du Réseau Jeune Entrepreneur-es</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted" data-aos="fade-left"> Je l’ai créé spécialement pour les jeunes car durant mon parcours, j’ai rencontré énormément de difficultés liées à mon jeune âge.
                        Malgré les nombreuses structures d’accompagnement de projets, peu d’entre elles sont adaptées aux jeunes comme moi. Je souhaite faire bouger les choses au point de vue scolaire et juridique pour rendre plus simple la création d’entreprise de 14 à 26 ans.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Et 
                  <br>Pourquoi pas
                  <br>Vous ?</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Newsletter</h2>
          <h3 class="section-subheading text-muted">Restez au courant de toute les informations sur le réseau ! </h3>
        </div>
      </div>
    </div>
    <iframe width="800" height="500" src="https://a50fc341.sibforms.com/serve/MUIEAIOpVUOWJ8dqaL7X2-JGfcU6FFPZek_V0IeA9ZT5xyeClZzRkvGBXSpuH8cZ804UBbHhNznKD5pnYJcNclz83bzO8I9Z-H1f9WIAokcXMgrbpXfNa1ha2eqzK_ctfVV-Y4R0Y0iWc1T2F-4e1iFvPejEhrscNMpBJ-IlDIG2fo-DN7zasZ-3FwLeyKC4UXylASJIV80Fv4Ta" frameborder="0" scrolling="auto" allowfullscreen style="display: block;margin-left: auto;margin-right: auto;max-width: 100%;"></iframe>
    </section>
  <!-- Contact -->
  <section class="page-section" id="contact">

<div class="col-lg-12 text-center selectForm">
    <div id="success" class="button-group filter-button-group selectButtons">
      <button  data-filter=".contactUs" class="btn btn-primary btn-xl text-uppercase select m-3" id="select1" >Contact</button>
      <button  data-filter=".projet" class="m-3 btn btn-primary btn-xl text-uppercase select" id="select2" >J'ai déjà un projet</button>
      <button  data-filter=".entreprise" class="btn m-3 btn-primary btn-xl text-uppercase select" id="select3" >Je suis une entreprise</button>
    </div>
</div>
<div class="grid container" data-isotope='{ "itemSelector": ".element-item", "layoutMode": "vertical" }'>
<div class="container contact element-item contactUs">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2 class="section-heading text-uppercase m-5">Contact</h2>
      <h3 class="section-subheading text-muted"></h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form id="contactForm" name="sentMessage" novalidate="novalidate" action={{route('form')}} method='POST'>
          @csrf
          @method('POST')
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input class="form-control" id="lastnameContact" name="lastnameContact" type="text" placeholder="Nom *" required="required" data-validation-required-message="Entrez votre nom.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input class="form-control" id="nameContact" name="nameContact" type="text" placeholder="Prénom *" required="required" data-validation-required-message="Entrez votre prénom.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input class="form-control" id="email" name="emailContact" type="email" placeholder="Email *" required="required" data-validation-required-message="Entrez votre adresse mail.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <input type='hidden' name='type' value='contact'>
          <div class="col-md-6">
            <div class="form-group">
              <textarea class="form-control" id="message" name="messageContact" placeholder="Votre Message *" required="required" data-validation-required-message="Rédigez votre message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-lg-12 text-center">
            <div id="success"></div>
            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- j'ai déjà un projet -->
<div class="container contact element-item projet">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2 class="section-heading text-uppercase m-5">J'ai déjà un projet</h2>
      <h3 class="section-subheading text-muted"></h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form id="contactForm" name="sentMessage" novalidate="novalidate" action={{route('form')}} method='POST'>
        @csrf
        @method('POST')
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input class="form-control" id="lastnameProject" name="lastnameProject" type="text" placeholder="Nom *" required="required" data-validation-required-message="Entrez votre nom.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input class="form-control" id="nameProject" name="nameProject" type="text" placeholder="Prénom *" required="required" data-validation-required-message="Entrez votre prénom.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input class="form-control" id="email" name="emailProject" type="email" placeholder="Email *" required="required" data-validation-required-message="Entrez votre adresse mail.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input class="form-control" id="titleProject" name="titleProject" type="text" placeholder="Nom du Projet*" required="required" data-validation-required-message="Entrez le nom du projet.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input class="form-control" type="file" name="fileProject1" multiple required="required" data-validation-required-message="Selectionnez un document.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input class="form-control" type="file" name="fileProject2" multiple>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <input type='hidden' name='type' value='project'>
          <div class="clearfix"></div>
          <div class="col-lg-12 text-center">
            <div id="success"></div>
            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- je suis une entreprise -->
<div class="container contact element-item entreprise">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2 class="section-heading text-uppercase m-5">Je suis une entreprise</h2>
      <h3 class="section-subheading text-muted"></h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form id="contactForm" name="sentMessage" novalidate="novalidate" action={{route('form')}} method='POST'>
          @csrf
          @method('POST')
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input class="form-control" id="lastnameCompany" name="lastnameCompany" type="text" placeholder="Votre Nom *" required="required" data-validation-required-message="Entrez votre nom.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input class="form-control" id="nameCompany" name="nameCompany" type="text" placeholder="Votre Prénom *" required="required" data-validation-required-message="Entrez votre prénom.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input class="form-control" id="email" name="emailCompany" type="email" placeholder="Votre Email *" required="required" data-validation-required-message="Entrez votre adresse mail.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <textarea class="form-control" id="message" name="messageCompany" placeholder="La raison de votre prise de contact *" required="required" data-validation-required-message="Rédigez votre message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <input type='hidden' name='type' value='entreprise'>
          <div class="clearfix"></div>
          <div class="col-lg-12 text-center">
            <div id="success"></div>
            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Reseau Jeune Entrepreneur-es</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  @foreach($posts as $post)
  <div class="portfolio-modal modal fade" id="portfolioModal{{$post->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <div class="modal-body">
                    <!-- Project Details Go Here -->
                    <h2 class="text-uppercase">{{$post->title}}</h2>
                  <p class="item-intro text-muted">{{$post->excerpt}}</p>
                    <img class="img-fluid d-block mx-auto" src="{{Voyager::image($post->image)}}" alt="">
                    <p>{!! $post->body !!}</p>
                    <ul class="list-inline">
                    <li>{{ Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</li>
                    </ul>
                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                      <i class="fas fa-times"></i>
                      Close Project</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  @endforeach
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Isotope -->
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script>
    jQuery(function($){
      $('.grid').isotope({filter: '.contactUs'});
      $('.filter-button-group').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $('.grid').isotope({ filter: filterValue });
    });
  });
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script>
        AOS.init();
    </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.js"></script>

</body>

</html>