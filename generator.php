<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();
include("functions.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name="description" content="Orazio Scicolone Personal Resume Site">
  <title>Orazio Scicolone Site - Software Developer</title>
  <link rel="stylesheet" href="css/spectre.min.css" />
  <link rel="stylesheet" href="css/spectre-exp.min.css" />
  <link rel="stylesheet" href="css/spectre-icons.min.css" />
  <link rel="stylesheet" href="css/docs.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/viewbox.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/actions.js"></script>
  <script type="text/javascript" src="js/jquery.viewbox.js"></script>

  <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107267947-1"></script>
  <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)};
        gtag('js', new Date());

        gtag('config', 'UA-107267947-1');
  </script>

</head>
  <body>
  <?php generateNav() ?>

  <section class="section section-hero bg-gray">
    <section class="grid-hero container grid-960 text-center">
      <h2>Hi! I am</h2>
      <figure class="avatar avatar-xxl">
        <img src="img/avatar.jpg"/>
      </figure>
      <h1>Orazio Scicolone</h1>
      <h2>Software Developer.</h2>
    </section>
  </section>

  <section class="container grid-960">
    <br>
    <section class="container grid-960">
        <header class="text-center air"><h1 id="Timeline">Timeline</h1></header>

        <section class="columns">
          <div class="docs-content column col-3 col-sm-1">
          </div>
          <div class="docs-content column col-6 col-sm-10">
            <br>
            <div class="timeline">
              <?php printTimelineNode('1990',['Born'],''); ?>

              <div id="timelineopen" class="hidden">
                <?php
                //printTimelineNode('2000',['First Web Developement Book']);
                //printTimelineNode('2005',['First Programming book (PHP)']);
                printTimelineNode('2006',['First web sites experiments (HTML, CSS, PHP)']);
                printTimelineNode('2007',['First web app']);
                printTimelineNode('2009',['Experiments in mShell (Symbian)','Start bachelor\'s degree in Computer Engineering (Universita\' di Palermo, Palermo - Italy)']);
                printTimelineNode('2010',['Other Apps in mShell']);
                printTimelineNode('2011',['Start a cooperation agreement to build a University portal']);
                printTimelineNode('2012',['Built other web experiments and an Online Newspaper Web Site']);
                printTimelineNode('2013',['Bachelor\'s Degree Graduation','Start Master\'s Degree in Computer Engineering (Politecnico di Torino, Turin - Italy)']);
                printTimelineNode('2016',['Masters\'s Degree Graduation']);
                printTimelineNode('2017',['Coursera\'s Machine Learning Certificate','Droidcon Hackaton 2017','Working as a Bioinformatics Research Fellow at Polito (Politecnico di Torino, Turin - Italy)']);
                ?>
              </div>
              <?php
                printTimelineNode('2018',['GeneEX article (Bioinformatics)','Working as SW Developer @ Amadeus - Sophia Antipolis','EnviMove published','Cosa Visitare Alexa Skill']);
                printTimelineNode('2019',['Working as Android Developer @ Telemaque - Sophia Antipolis']);
                printTimelineNode('2020',['BioSeqZip article (Bioinformatics)','Working as Fullstack Developer @ WildMoka - Sophia Antipolis']);
                ?>
            </div>
          </div>
        </section>

        <section class="columns">
          <div class="docs-content column col-9 col-sm-9"></div>
          <div class="docs-content column col-3 col-sm-3">
              <button class="btn btn-action circle btn-primary timelineopen" onclick="togglebtn('timelineopen');"><i class="icon icon-arrow-down"></i></button>
              <button class="btn btn-action circle hidden timelineopen" onclick="togglebtn('timelineopen');"><i class="icon icon-arrow-up"></i></button>
          </div>
        </section>
    </section>
    <section class="container grid-960">
        <br>

        <header class="text-center air"><h1 id="Work">Work</h1></header>
        <section class="columns">
            <div class="docs-content column col-1 ">
            </div>
            <div class="docs-content column col-4 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Fullstack developer @ WildMoka</h4>
                        <h6 class="card-subtitle">02/2020 - to date</h6>
                    </div>
                    <div class="card-body">
                        <li>Fullstack developer for the WildMoka Platform - <mark>Python - NodeJS - Js</mark></li>
                    </div>
                </div>
            </div>
            <div class="docs-content column col-2 ">
            </div>
            <div class="docs-content column col-4 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Android Developer @ Telemaque</h4>
                        <h6 class="card-subtitle">09/2019 - 12/2019</h6>
                    </div>
                    <div class="card-body">
                        <li>App dev - <mark>Android</mark></li>
                    </div>
                </div>
            </div>
            <div class="docs-content column col-4 ">
        </section>
        <section class="columns">
            <div class="docs-content column col-1 ">
            </div>
            <div class="docs-content column col-4 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Software Developer @ Amadeus</h4>
                        <h6 class="card-subtitle">01/2018 - 08/2019</h6>
                    </div>
                    <div class="card-body">
                        <li>Develop of Rail Platform - <mark>C++ - Python</mark></li>
                    </div>
                </div>
            </div>
            <div class="docs-content column col-2 ">
            </div>
            <div class="docs-content column col-4 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Research Fellow @ Politecnico di Torino</h4>
                        <h6 class="card-subtitle">02/2017 - 12/2017</h6>
                    </div>
                    <div class="card-body">
                        <li>Build innovative advanced Bioinformatics tools
                            <ul>
                                <li><a href="http://www.scitepress.org/PublicationsDetail.aspx?ID=ZaT7yr1Kba8=&t=1">
                                        GeneEx: Differential Analysis Tool</a> - <mark>R</mark></li>
                                <li><a href="https://pubmed.ncbi.nlm.nih.gov/31999333/">BioSeqZip - A Collapser of NGS Redundant Reads<mark>C++</mark></li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
            <div class="docs-content column col-1 ">
            </div>
        </section>
        <section class="columns">
            <div class="docs-content column col-1 ">
            </div>
            <div class="docs-content column col-4 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">University Portal</h4>
                        <h6 class="card-subtitle">08/2012 - 01/2013</h6>
                    </div>
                    <div class="card-image">
                        <div class="video-responsive video-responsive-4-3">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/g20MERlDGPE" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="card-body">
                        Unipablog was the first university portal of Università degli Studi di Palermo
                    </div>
                </div>
            </div>
            <div class="docs-content column col-2 ">
            </div>
            <div class="docs-content column col-4 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Online Newspaper</h4>
                        <h6 class="card-subtitle">11/2012 - 11/2013</h6>
                    </div>
                    <div class="card-image">
                        <img src="img/gs.jpg" class="img-responsive" />
                    </div>
                    <div class="card-body">
                        <li>FrontEnd/BackEnd editing of pages of the JOOMLA CMS for a Local Newspaper WebSite</li>
                        <li>Rewrited URLs using Apache Mod Rewrite</li>
                        <li>Rewrited the RSS Engine</li>
                    </div>
                </div>
            </div>
            <div class="docs-content column col-1 ">
            </div>
        </section>
    </section>



    <section class="container grid-960">

      <header class="text-center air"><h1 id="Projects">Projects</h1></header>

      <section class="columns">
                  <?php
                    $projects = simplexml_load_file('data/projects.xml');
                    //foreach($projects as $pj) {
                    //  generateProject($pj);
                    //}
                    for($i=0;$i<count($projects);$i++){
                      generateProject($projects->project[$i]);
                      if($i%2 == 0)
                          echo "<div class=\"docs-content column col-2\"></div>";
                    }
                  ?>
      </section>
    </section>

    <!--<section class="container grid-960">

        <header class="text-center air"><h1 id="Skills">Skills</h1></header>
        <section class="columns">
            <div class="docs-content column col-1 ">
            </div>
            <div class="docs-content column col-10 col-sm-12">
                <section class="notes text-center">
                    <div class="responsivetable">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="active text-center">
                                <th></th>
                                <th>Proficient in:</th>
                                <th>Familiar with:</th>
                                <th>Basic Knowledge:</th>
                            </tr>
                        </thead>
                        <tbody>
    <tr >
        <td>Languages</td>
        <td>C++, C, R, Bash, Python, PHP</td>
        <td>Android, Java, Matlab, Javascript</td>
        <td></td>
    </tr>
    <tr >
        <td>Databases</td>
        <td>SQL</td>
        <td>MongoDB, SQLite</td>
        <td></td>
    </tr>
    <tr >
        <td>Frameworks</td>
        <td>SeqAn</td>
        <td>GMaps API, jQuery, GTK</td>
        <td></td>
    </tr>
    <tr >
        <td>Technologies</td>
        <td></td>
        <td></td>
        <td>Arduino, AJAX, Soap</td>
    </tr>
    <tr >
        <td>Methods</td>
        <td></td>
        <td>Agile, UML</td>
        <td>Machine Learning, SEO</td>
    </tr>
    <tr >
        <td>OSs</td>
        <td>Linux, Windows</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>SWs</td>
        <td>Intellij Suite, Git, phpMyAdmin, Jupyter <br> Adobe Photoshop and Premiere</td>
        <td>Wordpress, Joomla, Bioinformatics Applications</td>
        <td></td>
    </tr>
                        </tbody>
                    </table>
                    </div>
                </section>
            </div>
        </section>
    </section>-->

    <section class="container grid-960">

      <header class="text-center air"><h1 id="Interests">Interests and Hobbies</h1></header>

      <section class="columns">
          <div class="docs-content column col-3 col-sm-6 centered text-center" >
                  <h4>Cooking</h4>
                  <p><i class="fa fa-cutlery fa-5x" aria-hidden="true"></i></p>
          </div>
          <div class="docs-content column col-3 col-sm-6 centered text-center">
                  <h4>Bioinformatics</h4>
                  <p><i class="fa fa-flask fa-5x" aria-hidden="true"></i></p>
          </div>
          <div class="docs-content column col-3 col-sm-6 centered text-center">
                  <h4>Computer Security</h4>
                  <p><i class="fa fa-bug fa-5x" aria-hidden="true"></i></p>
          </div>
          <div class="docs-content column col-3 col-sm-6 centered text-center">
              <h4>Android</h4>
              <p><i class="fa fa-android fa-5x" aria-hidden="true"></i></p>
          </div>
          <div class="docs-content column col-3 col-sm-6 centered text-center">
              <h4>Web Developing</h4>
              <p><i class="fa fa-code fa-5x" aria-hidden="true"></i></p>
          </div>
          <div class="docs-content column col-3 col-sm-6 centered text-center">
              <h4>Electronics</h4>
              <p><i class="fa fa-microchip fa-5x" aria-hidden="true"></i></p>
          </div>
      </section>
    </section>


    <section class="container grid-960">

      <header class="text-center air"><h1 id="Contacts">Contact Me</h1></header>

      <section class="columns">
          <div class="docs-content column col-2 col-sm-1">
          </div>

          <div class="docs-content column col-2 col-sm-2">
              <section class="notes text-center">
                  <h2>
                      <a href="https://www.facebook.com/oscicolone"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <br>
                      <a href="https://twitter.com/Zio123"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                      <br>
                      <a href="https://www.linkedin.com/in/orazio-scicolone-16235169/"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
                      <br>
                      <a href="https://github.com/skiwithuge"> <i class="fa fa-github" aria-hidden="true"></i></a>
                  </h2>
              </section>
          </div>
          <div class="docs-content column col-4 col-sm-8">

              <div class="card">

                  <div class="card-body">
                      <section class="notes">
                          Leave me a message...
                          <form class="form-horizontal" action="" onsubmit="this.action=get_action();" method="POST">
                              <div class="form-group">
                                  <div class="col-10">
                                      <input class="form-input" type="text" id="input-example-1" placeholder="Name" name="name"/>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-10">
                                      <input class="form-input" type="email" id="input-example-2" placeholder="Email" name="_replyto"/>
                                  </div>
                              </div>
                              <!-- form textarea control -->
                              <div class="form-group">
                                  <div class="col-10">
                                    <textarea class="form-input" id="input-example-3" placeholder="Text" rows="3" name="text"></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-2">
                                  </div>
                                  <div class="col-10">
                                      <button class="btn btn-primary float-right" type="submit" value="Send">Submit</button>
                                      <button class="btn btn-link float-right" type="reset">Cancel</button>
                                  </div>
                              </div>
                          </form>
                      </section>
                  </div>
              </div>
          </div>
      </section>
    </section>


  </section>

  <section class="section section-hero bg-gray">
      <br>
      <header class="text-center"><h1>Credits</h1></header>
      <section class="columns">
          <div class="docs-content column col-3 col-sm-3">
          </div>
          <div class="docs-content column col-6 col-sm-6">
              <section class="notes">
                  <h5><a href="https://picturepan2.github.io/spectre/">Spectre</a></h5>
                  <h5><a href="http://fontawesome.io">Font Awesome</a></h5>
                  <h5><a href="https://jquery.com">jQuery</a></h5>
                  <h5><a href="https://github.com/pgooood/viewbox">Viewbox</a></h5>
                  <h5>2018 - Orazio Scicolone</h5>
              </section>
          </div>
      </section>
  </section>
  </body>
</html>
<?php
/*
file_put_contents('index.html', $tidy->html()->value);
include_once('format.php');
$format = new Format;
$formatted_html = $format->HTML(ob_get_contents());
file_put_contents('index.html', $formatted_html);
echo $formatted_html;
//echo $tidy->html()->value;*/
file_put_contents('index.html', ob_get_contents());
?>