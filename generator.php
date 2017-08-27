<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("functions.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>I AM Orazio Scicolone</title>
  <link rel="stylesheet" href="css/spectre.min.css" />
  <link rel="stylesheet" href="css/spectre-exp.min.css" />
  <link rel="stylesheet" href="css/spectre-icons.min.css" />
  <link rel="stylesheet" href="css/docs.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/viewbox.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/actions.js"></script>
  <script type="text/javascript" src="js/jquery.viewbox.js"></script>
</head>
  <body>
  <?php generateNav() ?>

  <section class="section section-hero bg-gray">
    <section class="grid-hero container grid-960 text-center">
      <h2>Hi! I am</h2>
      <h1>Orazio Scicolone</h1>
      <h2>Software Developer.</h2>
    </section>
  </section>

  <section class="container grid-960">
    <br>

    <header class="text-center"><h1>Timeline</h1></header>

    <section class="columns">
      <div class="docs-content column col-3 col-sm-3">
      </div>
      <div class="docs-content column col-6 col-sm-6">
        <br>
        <div class="timeline">
          <?php printTimelineNode('1990',['Born'],''); ?>

          <div id="timelineopen" class="hidden">
            <?php
            printTimelineNode('2000',['First Web Developement Book']);
            printTimelineNode('2005',['First Programming book (PHP)']);
            printTimelineNode('2006',['First web sites experiments (HTML, CSS, PHP)']);
            printTimelineNode('2007',['First web app']);
            printTimelineNode('2009',['Experiments in mShell (Symbian)','Start bachelor\'s degree in Computer Engineering (Universita\' di Palermo, Palermo - Italy)']);
            printTimelineNode('2010',['Other Apps in mShell']);
            printTimelineNode('2011',['Start a cooperation agreement to build a University portal']);
            printTimelineNode('2012',['Built other web experiments and an Online Newspaper Web Site']);
            printTimelineNode('2013',['Bachelor\'s Degree Graduation','Start Master\'s Degree in Computer Engineering (Politecnico di Torino, Turin - Italy)']);
            printTimelineNode('2016',['Masters\'s Degree Graduation']);
            ?>
          </div>
          <?php
            printTimelineNode('2017',['Working as a Bioinformatics Research Assistant at Polito (Politecnico di Torino, Turin - Italy)']);
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

    <div class="divider"></div>

    <section class="container grid-960">

      <header class="text-center"><h1>Projects</h1></header>

      <section class="columns">

                  <?php
                    $projects = simplexml_load_file('data/projects.xml');
                    //foreach($projects as $pj) {
                    //  generateProject($pj);
                    //}
                    for($i=0;$i<count($projects);$i++){
                      generateProject($projects->project[$i]);
                      if($i%2 == 0)
                          echo "<div class=\"docs-content column col-2 col-sm-2\"></div>";
                    }
                  ?>
      </section>
    </section>

    <div class="divider"></div>

    <section class="container grid-960">

      <header class="text-center"><h1>Interests and Hobbies</h1></header>

      <section class="columns">
          <div class="docs-content column col-3 col-sm-2 centered text-center" >
                  <h4>Cooking</h4>
                  <p><i class="fa fa-cutlery fa-5x" aria-hidden="true"></i></p>
          </div>
          <div class="docs-content column col-3 col-sm-2 centered text-center">
                  <h4>Literature</h4>
                  <p><i class="fa fa-book fa-5x" aria-hidden="true"></i></p>
          </div>
          <div class="docs-content column col-3 col-sm-2 centered text-center">
                  <h4>Bioinformatics</h4>
                  <p><i class="fa fa-flask fa-5x" aria-hidden="true"></i></p>
          </div>
          <div class="docs-content column col-3 col-sm-2 centered text-center">
                  <h4>Computer Security</h4>
                  <p><i class="fa fa-bug fa-5x" aria-hidden="true"></i></p>
          </div>
          <div class="docs-content column col-3 col-sm-2 centered text-center">
              <h4>Android</h4>
              <p><i class="fa fa-android fa-5x" aria-hidden="true"></i></p>
          </div>
          <div class="docs-content column col-3 col-sm-2 centered text-center">
              <h4>Web Developing</h4>
              <p><i class="fa fa-code fa-5x" aria-hidden="true"></i></p>
          </div>
          <div class="docs-content column col-3 col-sm-2 centered text-center">
              <h4>Electronics</h4>
              <p><i class="fa fa-microchip fa-5x" aria-hidden="true"></i></p>
          </div>
      </section>
    </section>

    <div class="divider"></div>

    <section class="container grid-960">

      <header class="text-center"><h1>Contact Me</h1></header>

      <section class="columns">
          <div class="docs-content column col-3 col-sm-3">
          </div>
          <div class="docs-content column col-6 col-sm-6">
              <section class="notes text-center">
                  <h2>
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                      <i class="fa fa-linkedin" aria-hidden="true"></i>
                      <i class="fa fa-github" aria-hidden="true"></i>
                  </h2>
              </section>
          </div>
      </section>
    </section>


  </section>
  </body>
</html>