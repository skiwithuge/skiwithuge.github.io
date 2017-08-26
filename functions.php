<?php
/**
 * Created by PhpStorm.
 * User: skiwithuge
 * Date: 8/22/17
 * Time: 10:32 AM
 */
function generateNav(){
  echo <<< NAV
  <section class="section section-header bg-gray">
      <section class="grid-header container grid-960">
        <nav class="navbar">
          <section class="navbar-section">
            <a href="index.html" class="btn btn-link">Timeline</a>
            <a href="index.html" class="btn btn-link">Projects</a>
            <a href="index.html" class="btn btn-link">Skills</a>
            <a href="index.html" class="btn btn-link">Interests</a>
            <a href="index.html" class="btn btn-link">Contacts</a>
          </section>
          <section class="navbar-section">
          </section>
        </nav>
      </section>
    </section>
NAV;
}

function printTimelineNode($year,$textArr,$large="icon-lg"){
  echo <<< NODE
  
            <div class="timeline-item">
              <div class="timeline-left">
                <a class="timeline-icon $large"></a>
              </div>
              <div class="timeline-content">
                <div class="tile">
                  <div class="tile-content">
                    <p class="tile-subtitle">$year</p>

NODE;
  for($i=0;$i<count($textArr);$i++){
    echo "                    <p class=\"tile-title\">$textArr[$i]</p>\n";
  }
  echo <<< NODE
                  </div>
                </div>
              </div>
            </div>

NODE;
}

function generateCarousel($photos){
  echo "<div class=\"carousel\">";
  for($i=0;$i<count($photos);$i++){
    $normalizedCount = $i + 1;
    echo "<input type=\"radio\" id=\"slide-$normalizedCount\" name=\"carousel-radio\" hidden=\"\" class=\"carousel-locator\"";
    if($i == 0)
      echo "checked=\"\"";
    echo ">";
  }
  echo "<div class=\"carousel-container\">";
  for($i=0;$i<count($photos);$i++){
    $normalizedCount = $i + 1;
    $next = $normalizedCount + 1;
    if($next>count($photos))
      $next = 1;
    $prev = $normalizedCount - 1;
    if($prev < 1)
      $prev = count($photos);

    echo "<figure class=\"carousel-item\">";
    echo "<label class=\"item-prev btn btn-action btn-lg\" for=\"slide-$prev\">";
    echo "<i class=\"icon icon-arrow-left\"></i>";
    echo "</label>";
    echo "<label class=\"item-next btn btn-action btn-lg\" for=\"slide-$next\">";
    echo "<i class=\"icon icon-arrow-right\"></i>";
    echo "</label>";
    echo "<img src=\"img/$photos[$i]\" class=\"img-responsive rounded\" alt=\"AlEx\">";
    echo "</figure>";
  }
  echo "<div class=\"carousel-nav\">";
  for($i=0;$i<count($photos);$i++) {
    $normalizedCount = $i + 1;
    echo "<label class=\"nav-item text-hide hand\" for=\"slide-$normalizedCount\">$normalizedCount</label>";
  }
  echo "</div>";
  echo "</div>";
  echo "</div>";
}

function generateProject($project){
  echo "<div class=\"item\">";
  echo "<h4>$project->name</h4>";
  echo "<h5>$project->startdate - $project->enddate</h5>";
  echo "<mark>";
  foreach($project->languages->language as $lg){
    echo "$lg";
    if($lg == end($project->languages->language))
      break;
    echo " - ";
  }
  echo "</mark>";
  generateCarousel($project->photos->photo);
  echo "</div>";
}
?>