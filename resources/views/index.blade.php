@extends('templates.format')

@section('js')
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
  </script>
@endsection

@section('body')

<body >
  
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!--h1 class="text-light"><a href="#intro" class="scrollto"><span>Pretetfinance-FR</span></a></h1-->
        <a href="/" class="scrollto"><img src="{{asset('assets/img/logo.png')}}" alt="Prêt et finance FR" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li>
            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-globe"></i>
            </a>
            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown" id="google_translate_element">
              <li>
                <a href="/en" onclick="window.location.hash='#googtrans(en)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/gb.png')}}"></i> English</span>       
                </a>
              </li>
              <li>
                <a href="/de" onclick="window.location.hash='#googtrans(de)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/de.png')}}"></i> Deutsch</span>       
                </a>
              </li>
              <li>
                <a href="/hr" onclick="window.location.hash='#googtrans(hr)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/cr.png')}}"></i> Croate</span>       
                </a>
              </li>
              <li>
                <a href="/da" onclick="window.location.hash='#googtrans(da)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/dn.png')}}"></i> Danois</span>       
                </a>
              </li>
              <li>
                <a href="/es" onclick="window.location.hash='#googtrans(es)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/es.png')}}"></i> Espagnol</span>       
                </a>
              </li>
              <li>
                <a href="/fr" onclick="window.location.hash='#googtrans(fr)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/fr.png')}}"></i> Français</span>       
                </a>
              </li>
              <li>
                <a href="/hu" onclick="window.location.hash='#googtrans(hu)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/hg.png')}}"></i> Hongrois</span>       
                </a>
              </li>
              <li>
                <a href="/it" onclick="window.location.hash='#googtrans(it)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/it.png')}}"></i> Italien</span>       
                </a>
              </li>
              <li>
                <a href="/nl" onclick="window.location.hash='#googtrans(nl)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/pb.png')}}"></i> Néerlandais</span>       
                </a>
              </li>
              <li>
                <a href="/pl" onclick="window.location.hash='#googtrans(pl)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/pn.png')}}"></i> Polonais</span>       
                </a>
              </li>
              <li>
                <a href="/pt" onclick="window.location.hash='#googtrans(pt)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/pt.png')}}"></i> Portugais</span>       
                </a>
              </li>
              <li>
                <a href="/ro" onclick="window.location.hash='#googtrans(ro)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/rn.png')}}"></i> Roumain</span>       
                </a>
              </li>
              <li>
                <a href="/ru" onclick="window.location.hash='#googtrans(ru)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/ru.png')}}"></i> Russe</span>       
                </a>
              </li>
              <li>
                <a href="/sk" onclick="window.location.hash='#googtrans(sk)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/sq.png')}}"></i> Slovaque</span>       
                </a>
              </li>
              <li>
                <a href="/cs" onclick="window.location.hash='#googtrans(cs)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/cz.png')}}"></i> Tchèque</span>       
                </a>
              </li>
              <li>
                <a href="/uk" onclick="window.location.hash='#googtrans(uk)';location.reload();">
                  <span class=""><i><img style="width:15px; height:15px;" src="{{('assets/lg/uk.png')}}"></i> Ukrainien</span>       
                </a>
              </li>
            </ul>
          </li>
          <li class="active"><a href="#intro">Accueil</a></li>
          <li><a href="#about">A propos</a></li>
          <li><a href="#services">Produits</a></li>
          <li><a href="#features">Commander</a></li>
          <li><a href="#footer">Contact</a></li>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Obtenez un prêt <br>sur mesure avec <span>Prêt et finance FR!</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">En savoir plus</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="{{asset('assets/img/intro-img.png')}}" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="{{asset('assets/img/about-us.png')}}" alt="Prêt et finance FR">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>Qui sommes-nous?</h2>
              <h3><a href="/">Pretetfinance-FR</a> est un cabinet de consultant en finance et de courtage de produits financiers en ligne.</h3>
              <p>Dans un souci constant d’accompagnement des consommateurs dans leurs projets de vie, les experts en prêt sont à l’écoute de vos besoins. Ils vous proposent des solutions adaptées en ligne, en fonction des produits que vous aurez choisies. Nous vous proposons essentiellement des produits comme : </p>
              <ul>
                  <li><i class="ion-android-checkmark-circle"></i> Crédit rapide</li>
                  <li><i class="ion-android-checkmark-circle"></i> Crédit personnel</li>
                  <li><i class="ion-android-checkmark-circle"></i> Crédit renouvenable</li>
              </ul>
              <p>Avec Nos Engagements, nous nous engageons envers nos clients tout au long de notre relation : de la souscription au remboursement de votre credit, en passant par vos éventuels changements de vie. Laissez-vous guider sur notre site Internet et souscrivez en quelques clics un credit renouvelable, un prêt perso, ou un prêt rapide, qui saura répondre à vos attentes.</p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Nos Produits</h3>
          <p>Préparez votre projet et découvrez toute notre gamme de produits et services financiers dédiés à vos besoins directement sur le site. Nous vous proposons des crédits adaptés.</p>
        </header>

        <div class="row">
            <div class="col-md-4 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                    <h4 class="title"><a href="">Crédit rapide</a></h4>
                    <p class="description mb-4 text-justify">Vous souhaitez faire face rapidement à un imprévu, payer une caution urgente, Avec le Prêt Rapide <em>Pretetfinance-FR</em>, </p>
                    <p class="description mb-4 text-justify center">Emprunter en ligne 7j/7, Réponse sous 24h</p>
                    <ul class="list-unstyled ul-check primary">
                        <li><i class="ion-ios-pricetag-outline" style="color:#41cf2e;"></i><span> 1000€ à 5000€</span></li>
                        <li><i class="ion-ios-stopwatch-outline" style="color:#41cf2e;"></i><span> 3 à 60 mois</span></li>
                        <li><i class="ion-ios-calculator-outline" style="color:#41cf2e;"></i><span> 0.75%</span></li>
                    </ul>
                    <div>
                        <a href="#features" class="btn-get-started btn-info" style="border-radius: 4px;">Commander</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="">Crédit personnel</a></h4>
                    <p class="description mb-4 text-justify">Vous souhaitez financer un projet, refaire votre maison, changer de voiture, faire le tour du monde ? Avec le Prêt Personnel <em>Pretetfinance-FR</em>, </p>
                    <p class="description mb-4 text-justify center">Emprunter en ligne 7j/7, Réponse sous 24h</p>
                    <ul class="list-unstyled ul-check primary">
                        <li><i class="ion-ios-pricetag-outline" style="color:#41cf2e;"></i><span> 5000€ à 150000€</span></li>
                        <li><i class="ion-ios-stopwatch-outline" style="color:#41cf2e;"></i><span> 6 à 120 mois</span></li>
                        <li><i class="ion-ios-calculator-outline" style="color:#41cf2e;"></i><span> 2.89%</span></li>
                    </ul>
                    <div>
                        <a href="#features" class="btn-get-started btn-info" style="border-radius: 4px;">Commander</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
                    <h4 class="title"><a href="">Crédit renouvelable</a></h4>
                    <p class="description mb-4 text-justify">Vous souhaitez un financement occasionnel ou régulier pour effectuer des achats au quotidien ? Avec le Crédit Renouvelable <em>Pretetfinance-FR</em>, </p>
                    <p class="description mb-4 text-justify center">Emprunter en ligne 7j/7, Réponse sous 24h</p>
                    <ul class="list-unstyled ul-check primary">
                        <li><i class="ion-ios-pricetag-outline" style="color:#41cf2e;"></i><span> 3000€ à 15000€</span></li>
                        <li><i class="ion-ios-stopwatch-outline" style="color:#41cf2e;"></i><span> 3 à 60 mois</span></li>
                        <li><i class="ion-ios-calculator-outline" style="color:#41cf2e;"></i><span> 1.45%</span></li>
                    </ul>
                    <div>
                        <a href="#features" class="btn-get-started btn-info" style="border-radius: 4px;">Commander</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section><!-- #services -->


    <!--==========================
        Demand Section
    ============================-->
    <section id="features" >
        <header class="section-header">
            <h3>Commander un produit</h3>
            <p>Simuler votre envie et ensuite faites la commande de nos produits.</p>
        </header>
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-lg-4">
                  <div class=" box-with-humber">
                      <h2 class="text-black">Simulez votre crédit</h2>
                      <p class="mb-4">Simuler votre crédit avant toute demande</p>
                      <img src="{{asset('assets/img/calculator-savings.svg')}}" alt="simulator" class="img-fluid align-content-center">
                      <form name="Simulateur">
                          <div class="form-group">
                              <select class="form-control" id="TypeCredit">
                                  <option value="">Sélectionner l'objet du crédit</option>
                                  <option value="CRD001">Crédit rapide</option>
                                  <option value="CRD002">Crédit personnel</option>
                                  <option value="CRD003">Crédit renouvelable</option>
                              </select>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6">
                                  <label for="montant">Montant(Euro/€)</label>
                                  <input type="range" class="form-control-range custom-range text-info" value="50" min="2000" max="150000" id="Montant-range" step="10">
                              </div>

                              <div class="col-md-6">
                                  <label class="amount-range">Entre 2000 et 150000</label>
                                  <input type="text" class="form-control" aria-label="Dollar amount" id="Montant" value="">
                              </div>
                          </div>


                          <div class="row form-group">
                              <div class="col-md-6">
                                  <label for="periode">Durée(Mois)</label>
                                  <input type="range" class="form-control-range custom-range text-info" value="60" min="3" max="120" id="Periode-range" step="3">
                              </div>

                              <div class="col-md-6">
                                  <label class="period-range">Entre 3 et 120 mois</label>
                                  <input type="text" class="form-control" aria-label="Dollar periode" id="Periode" value="">
                              </div>
                          </div>
                          <div>
                              <a class="btn btn-info simuler" style="border-radius: 4px;">Simuler</a>
                          </div>
                      </form>
                  </div>
                  <div class="alert alert-danger simerror" style="display: none;"></div>
              </div>

              <div class="col-md-6 col-lg-4">
                  <div class=" box-with-humber" id="amortissement">
                      <h2 class="text-black">Récapitulatif</h2>
                      <p class="mb-4">Ci-dessous, les résultats de votre simulation.</p>
                      <ul class="list-unstyled ul-check primary recapitulatif">
                          <li>Type de prêt : <strong id="type">prêt personnel</strong> </li>
                          <li>Montant emprunt (euros) : <strong id="amount">50000</strong></li>
                          <li>Duree d'emprunt(mois) : <strong id="periode">25</strong></li>
                          <li>TAEG négociable(%) : <strong id="interet">1.25</strong></li>
                          <li>Mensualité du credit(euros) : <strong id="mensualite">860.08</strong></li>
                          <li>Total du crédit : <strong id="totalCredit">51604.80</strong></li>
                          <li>Total des intérêts : <strong id="totalInteret">1604.80</strong></li>
                          <li>Tableau d'amortissement <a href="#" id="print">Imprimer</a></li>
                      </ul>
                  </div>
                  <div class="alert alert-info" style="display: none;"></div>
              </div>

              <div class="col-md-6 col-lg-4">
                  <div class=" box-with-humber">
                      <h2 class="text-black">Déposer ma demande</h2>
                      <p class="mb-4">Obtenez une réponse rapide sous 24h.</p>
                      <form name="Demande" class="form-demand">
                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="gender">Civilité</label>
                                  <select id="gender" class="form-control"required>
                                    <option value="M.">M.</option>
                                    <option value="Mlle">Mlle</option>
                                    <option value="Mme">Mme</option>
                                  </select>
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="prenom">Prénom</label>
                                  <input type="text" id="prenom" class="form-control" name="Prenom" required>
                              </div>
                              <div class="col-md-6">
                                  <label for="nom">Nom</label>
                                  <input type="text" id="nom" class="form-control" name="Nom" required>
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-12">
                                  <label for="email">Email</label>
                                  <input type="email" id="email" class="form-control" name="Email" required>
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-12">
                                  <label for="cemail">Confirmer Email</label>
                                  <input type="email" id="cemail" class="form-control" name="Email" required>
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="pays">Pays</label>
                                  <input type="text" id="pays" class="form-control" name="Pays" required>
                              </div>
                              <div class="col-md-6">
                                  <label for="phone">Téléphone</label>
                                  <input type="text" id="phone" class="form-control" name="Phone" required>
                              </div>
                          </div>

                          <div class="row form-group">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="ville">Ville</label>
                                  <input type="text" id="ville" class="form-control" name="Ville" required>
                              </div>
                              <div class="col-md-6">
                                  <label for="code_postal">Code Postal</label>
                                  <input type="text" id="code_postal" class="form-control" name="CodePostal" required>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <a class="btn btn-info btn-demand" style="border-radius: 4px;">Soumettre</a>
                              </div>
                              <div class="col-md-6">
                                  <div class="alert alert-success cmdsuccess" style="display: none;"></div>
                                  <div class="alert alert-danger cmderror" style="display: none;"></div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </section><!-- #demande -->

      <!--==========================
        Call To Action Section
      ============================-->
      <!-- section id="call-to-action" class="wow fadeInUp">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 class="cta-title">Vous avez déjà déposé une demande ?</h3>
              <p class="cta-text"> Si vous avez déjà une demande en cours de traitement, veuillez cliquer sur le bouton.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Suivre ma demande</a>
            </div>
          </div>

        </div>
      </section--><!-- #call-to-action -->

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">
        <header class="section-header">
          <h3>Questions posées fréquemments </h3>
          <p>Ci-dessous quelques questions à vos réponse.</p>
        </header>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Quelles sont les étapes d'une demande de financement en ligne ? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Avec Pretetfinance-FR, vous pouvez effectuer votre demande de prêt en toute simplicité, sans vous déplacer ! Voici les 5 étapes à suivre :
              </p>
                <ol>
                 <li>Selon votre projet, vous choisissez le prêt qui vous convient. Grâce à notre simulateur, selon le montant dont vous avez besoin, vous personnalisez la mensualité et la durée qui vous paraissent les mieux adaptées à votre situation. Il ne reste plus qu'à saisir votre demande !</li>
                 <li>Vous recevez une réponse de principe immédiate, ainsi qu'un e-mail récapitulatif de votre demande.</li>
                 <li>Vous avez la possibilité de télécharger et imprimer votre dossier de crédit pour ne pas perdre de temps. Ou bien, choisissez de recevoir votre dossier par courrier.</li>
                 <li>Vous nous adressez votre offre de contrat de crédit et votre fiche de dialogue, datées et signées, ainsi que les justificatifs demandés.</li>
                 <li>Dès réception, votre dossier est finalisé par votre agence.</li>
                </ol>
                <p> Et rappelez-vous : pour savoir où en est votre demande, consultez votre suivi de demande depuis votre espace client, grâce au numéro de dossier transmis dans l'e-mail récapitulatif !</p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Ai-je la possibilité de modifier le montant de mes mensualités ? La durée de mon crédit ? <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                Avec le prêt personnel ou le crédit renouvelable Pretetfinance-FR, vous pouvez modifier le montant de vos mensualités à tout moment, autant de fois que vous le voulez, après étude de votre dossier.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Cela fait plus de 48h que j'ai saisi mon dossier, et je n'ai toujours pas de réponse ? <i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
               Normalement, un e-mail vous a été envoyé. Nous vous invitons donc à vérifier votre boîte électronique, y compris le dossier « Courrier indésirable ».
              </p>
            </div>
          </li>
        </ul>

      </div>
    </section><!-- #faq -->
  </main>

    <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">
                  <a href="/"><img src="{{asset('assets/img/logo.png')}}" alt="Prêt et finance FR" class="img-fluid"></a>
                  <div class="footer-info">
                    <p>
                      14, rue Charles Corbeau<br>
                      Fecamp 76400<br>
                      France <br>
                      <strong>Téléphone:</strong> +33 756864290<br>
                      <strong>Email:</strong> contact@pretetfinance-fr.com<br>
                  </p>
                  </div>

                </div>

                <div class="col-sm-6">
                    <div class="footer-links">
                        <h4>menu rapide</h4>
                        <ul>
                            <li><a href="/">Accueil</a></li>
                            <li><a href="/#about">A propos</a></li>
                            <li><a href="/#services">Nos Produits</a></li>
                            <li><a class="cgu" href="/cga" data-toggle="modal" data-target="#cgu">Conditions générales</a></li>
                            <li><a class="policy" href="/policy" data-toggle="modal" data-target="#policy">Politique de confidentialité</a></li>
                        </ul>
                    </div>
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>

          </div>

            <div class="col-lg-6">

            <div class="form">

              <h4>Envoyez-nous un message</h4>
              <p>Vous pouvez nous envoyer un message pour tous renseignements.</p>
              <form role="form" class="form-contact">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="contact-name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Entrez au moins 4 caractères pour le nom" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="contact-email" placeholder="Votre Email" data-rule="minlen:5" data-msg="Entrez un mail valide" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="contact-subject" placeholder="Subject" data-rule="minlen:8" data-msg="Entrez au moins 8 caractères pour le sujet" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" id="contact-message" rows="5" data-rule="required" data-msg="Entrez quelques mots" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center">
                    <a class="btn btn-info btn-contact" style="border-radius: 4px;">Envoyer</a>
                </div>
                <div class="alert alert-success sendmessage" style="display:none;"> Votre message a été envoyé. Merci!</div>
                <div class="alert alert-danger errormessage" style="display:none;">Message non envoyé</div>
              </form>
            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong>Pretetfinance-fr</strong> &copy;. Tous droits réservés
      </div>
    </div>
  </footer><!-- #footer -->

  </body>
  @endsection