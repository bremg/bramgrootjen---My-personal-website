<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bram Grootjen</title>
  <meta name="author" content="Bram Grootjen">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.ico">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/application.css">

</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default visible-xs visible-sm">
    <div class="container-fluid hidden-md">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">Bram Grootjen</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-collapse collapse" id="collapse-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="#main-menu" class="hidden-xs hidden-sm">Home</a>
            <a href="#main-menu" class="visible-xs visible-sm nav-link" data-toggle="collapse" data-target=".navbar-collapse">Home</a>
          </li>
          <li>
            <a href="#about" class="hidden-xs hidden-sm">About</a> 
            <a href="#about" class="visible-xs visible-sm nav-link" data-toggle="collapse" data-target=".navbar-collapse">About</a>
          </li>
          <li>
            <a href="#skills" class="hidden-xs hidden-sm">Skills</a>
            <a href="#skills" class="visible-xs visible-sm nav-link" data-toggle="collapse" data-target=".navbar-collapse">Skills</a>
          </li>
          <li>
            <a href="#resume" class="hidden-xs hidden-sm">Resume</a>
            <a href="#resume" class="visible-xs visible-sm nav-link" data-toggle="collapse" data-target=".navbar-collapse">Resume</a>
            </li>
          <li>
            <a href="#contact" class="hidden-xs hidden-sm">Contact</a>
            <a href="#contact" class="visible-xs visible-sm nav-link" data-toggle="collapse" data-target=".navbar-collapse">Contact</a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <!-- Main -->
  <section class="hwpanel left-25" id="main-menu">
    <div class="container-fluid">

     <div class="row">
      <header class="col-md-6 col-centered">
        <div class="profile-avatar">
          <img src="images/myuglymug.png" alt="My Photo">
        </div>
        <h2>
          Bram Grootjen
        </h2>
        <p>
          Leuk dat je op mijn website komt kijken! Ik ben een Front- &amp; backend developer uit Heiloo en dit is de website waar ik mijn ide&euml;en uitwerk. Momenteel ben ik bezig om deze website te voorzien van een Laravel backend.

        </p>
      </header>
    </div>

    <div class="row">
      <div class="col-md-6 col-centered">
        <ul>

          <li id="about-link">      
            <a href="#about" class="nav-link page-left">
              about
            </a>
          </li> 

          <li id="skills-link">      
            <a href="#skills" class="nav-link page-right">
              skills
            </a>
          </li> 

          <li id="resume-link">
            <a href="#resume" class="nav-link page-left">
              resume
            </a>
          </li>

          <li id="contact-link" class="contact-link">
            <a href="#contact" class="nav-link page-right">
              contact
            </a>
          </li>

        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-8 col-centered">
        <div class="social-links-tabled"> 
          <ul class="social-links">
            <li>
              <a href="https://www.facebook.com/bram.grootjen">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://nl.linkedin.com/in/bram-grootjen-8b853964">
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
            <li>
              <a href="https://teamtreehouse.com/bramgrootjen">
                <img border="0" alt="teamtreehouse" src="images/treehouse-white.png">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About -->
<section class="hwpanel left-25 page-left" id="about">
  <div class="container-fluid">
   <div class="row">
    <header class="col-md-6 col-centered">
      <div class="profile-avatar">
        <img src="images/myuglymug2.gif" alt="My Photo">
      </div>
      <h2>
        Bram Grootjen
      </h2>
      <p>
      Ik ben een 28 jaar oude webdeveloper uit Heiloo. Eind 2014 ben ik als hobby begonnen met webdevelopment. Begin 2015 ben ik gaan werken bij Quickwins als datavisualist en is mijn hobby mijn werk geworden.</br>
      </br>
      Aangezien ik het programmeer virus flink te pakken heb ben ik in mijn vrije tijd altijd wel bezig meteen een curcus op Udemy, TeamTreehouse.com of youtube.  Check gerust mijn <a href="https://teamtreehouse.com/bramgrootjen" target="_blank">Treehouse</a> profiel.
     </p>
   </header>
 </div>
</div>
</section>

<!-- Skills -->
<section class="hwpanel left-25 page-right" id="skills">
  <div class="container-fluid">
   <section id="skills" class="skills-section">
      <h2 class="section-title wow fadeInUp">Talen</h2>

      <div class="row">
        <div class="col-lg-6">
          <div class="skill-progress">
            <div class="skill-title"><h3>HTML</h3></div> 
            <div class="progress">
              <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" ><span>95%</span>
              </div>
            </div>
          </div>

          <div class="skill-progress">
            <div class="skill-title"><h3>CSS</h3></div> 
            <div class="progress">
              <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" ><span>90%</span>
              </div>
            </div>
          </div>
          <div class="skill-progress">
            <div class="skill-title"><h3>JavaScript</h3></div>  
            <div class="progress">
              <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" ><span>70%</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="skill-progress">
            <div class="skill-title"><h3>PHP</h3></div> 
            <div class="progress">
              <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ><span>60%</span>
              </div>
            </div>
          </div>
          <div class="skill-progress">
            <div class="skill-title"><h3>MySQL</h3></div> 
            <div class="progress">
              <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" ><span>80%</span>
              </div>
            </div>
          </div>
          <div class="skill-progress">
            <div class="skill-title"><h3>XML/XSD</h3></div>  
            <div class="progress">
              <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" ><span>85%</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="skill-chart text-center">
        <h3>Frameworks</h3>
      </div>

      <div class="row more-skill text-center">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="chart" data-percent="70" data-color="e74c3c">
            <span class="percent"></span>
            <div class="chart-text">
              <h3>Zend</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="chart" data-percent="75" data-color="2ecc71">
            <span class="percent"></span>
            <div class="chart-text">
              <h3>ExtJS</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="chart" data-percent="90" data-color="3498db">
            <span class="percent"></span>
            <div class="chart-text">
              <h3>jQuery</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="chart" data-percent="65" data-color="3498db">
            <span class="percent"></span>
            <div class="chart-text">
              <h3>Wordpress</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="chart" data-percent="75" data-color="3498db">
            <span class="percent"></span>
            <div class="chart-text">
              <h3>Sass</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="chart" data-percent="85" data-color="3498db">
            <span class="percent"></span>
            <div class="chart-text">
              <h3>Bootstrap</h3>
            </div>
          </div>
        </div>
    </section><!-- End Skills Section -->

  </div>
</div>
</section>

<!-- Resume  -->
<section class="hwpanel left-25 page-left" id="resume">
<div class="resume-experience">
    <div class="container-fluid">
      <h4 class="pre">Curriculum Vitae</h4>
      <p style="color: #373f51">Download mijn CV <a href="/download/resume.pdf">hier</a></p>
      
    </div>
  </div>

  <div class="resume-experience">
    <div class="container-fluid">
      <h4 class="pre">Werkervaring</h4>
      <ul class="timeline">
        <li>
          <div class="row">
            <div class="col-sm-6">
              <strong>2015 - Heden</strong>
            </div>
            <div class="col-sm-6">
              <h4>Software Developer - Code24</h4>
              <span>Front- &amp; backend developer</span>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-6">
              <strong>2014 - 2015</strong>
            </div>
            <div class="col-sm-6">
              <h4>Web developer - Quickwins</h4>
              <span>Het bouwen van dashboards in een CRM systeem. </span>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-6">
              <strong>2013 - 2014</strong>
            </div>
            <div class="col-sm-6">
              <h4>Beslisser claim ww faillissementen - UWV</h4>
              <span>Afhandelen en berekenen van faillissementsaanvragen. Tevens software tester.</span>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-6">
              <strong>2010 - 2013</strong>
            </div>
            <div class="col-sm-6">
              <h4>HR Planner - Zorgbalans</h4>
              <span>Verantwoordelijk voor de personeels- en cliëntenplanning van verschillende thuiszorgteams.</span>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-6">
              <strong>2009 - 2010</strong>
            </div>
            <div class="col-sm-6">
              <h4>Marketing trainee - eFresh.com Curaçao</h4>
              <span>Marktonderzoek naar kansen en bedreigingen op de internationale markt van versproducten.</span>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-6">
              <strong>2005 - 2009</strong>
            </div>
            <div class="col-sm-6">
              <h4>Datamanager - Picturae</h4>
              <span>Verantwoordelijk voor het bewaken van het digitaliseringsproces van orders.</span>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="resume-education">
    <div class="container-fluid">
      <h4 class="pre">Opleidingen</h4>
      <ul class="timeline">
        <li>
          <div class="row">
            <div class="col-sm-6">
              <strong>2015 - Heden</strong>
            </div>
            <div class="col-sm-6">
              <h4>Online cursussen - TeamTreehouse</h4>
              <span>Een groot gedeelte van de online curcussen die ik heb gevolgd, heb ik gevolgd op <a href="https://teamtreehouse.com/bramgrootjen" target="_blank">TeamTreehouse.com</a>. </span>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-6">
              <strong>2015</strong>
            </div>
            <div class="col-sm-6">
              <h4>Getting Started with Ext JS 6 Training - Online bij Sencha</h4>
              <span>Online training van 5 dagen</span>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-6">
              <strong>2007 - 2013</strong>
            </div>
            <div class="col-sm-6">
              <h4>HBO Bachelor Management Economie &amp; Recht - Inholland Alkmaar</h4>
              <span>Minors richting makelaardij en financial service management.</span>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-sm-6">
              <strong>2000 - 2006</strong>
            </div>
            <div class="col-sm-6">
              <h4>VWO - Jac P Thijsse</h4>
              <span>Profiel: Economie &amp; Maatschappij </span>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>     
</section>


<section class="hwpanel left-25 page-left" id="about">
  <div class="container-fluid">
   <div class="row">
    <header class="col-md-6 col-centered">
      <div class="profile-avatar">
        <img src="images/myuglymug2.gif" alt="My Photo">
      </div>
      <h2>
        Bram Grootjen
      </h2>
      <p>
      Ik ben een 28 jaar oude webdeveloper uit Heiloo. Eind 2014 ben ik als hobby begonnen met webdevelopment. Begin 2015 ben ik gaan werken bij Quickwins als datavisualist en is mijn hobby mijn werk geworden.</br>
      </br>
      Aangezien ik het programmeer virus flink te pakken heb ben ik in mijn vrije tijd altijd wel bezig meteen een curcus op Udemy, TeamTreehouse.com of youtube.  Check gerust mijn <a href="https://teamtreehouse.com/bramgrootjen" target="_blank">Treehouse</a> profiel.
     </p>
   </header>
 </div>
</div>
</section>

<!-- Contact -->
<section class="hwpanel left-25 page-right" id="contact">
  <div class="container-fluid col-md-6 col-centered">
   <div class="row">
    <p>
     Zodra mijn backend klaar is komt hier een contactformulier. Tot die tijd kun kun je een email sturen naar bramgrootjen@hotmail.com
     </p>
   </div>
 </div>
</section>

<!-- Jquery CDN, Using v2 instead of v3 because of bootstrap incompatibility -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<!-- jQuery local fallback -->
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<!-- Bootstrap JS CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/bootstrap-toolkit.min.js"></script>
<script src="js/jquery.inview.min.js"></script> 
<script src="js/jquery.easypiechart.js"></script>
<script src="js/scripts.js"></script>
<script src="https://use.fontawesome.com/29690fafe7.js"></script>

<!-- Bootstrap CSS local fallback -->
<script>
  $(document).ready(function() {

      // load bootstrap locally if CDN is offline
      var bodyColor = $('body').css("color");
      if(bodyColor != 'rgb(51, 51, 51)') {
        $("head").prepend('<link rel="stylesheet" href="css/bootstrap.min.css">');
      }

    });
  </script>

</body>
</html> 