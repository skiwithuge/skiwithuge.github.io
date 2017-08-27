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

function generateCarousel2($photos, $divcode){
  for($i=0;$i<count($photos);$i++){
    echo "<a href=\"img/$photos[$i]\" class=\"image-link\">";
      echo "<img src=\"img/thumb_$photos[$i]\" alt=\"\">";
    echo "</a>";
  }
}

function generateCarousel($photos,$divcode){
  echo "<div class=\"carousel\">";
  for($i=0;$i<count($photos);$i++){
    $normalizedCount = $i + 1;
    echo "<input type=\"radio\" id=\"slide-$normalizedCount$divcode\" name=\"carousel-radio\" hidden=\"\" class=\"carousel-locator\"";
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
    echo "<label class=\"item-prev btn btn-action btn-lg\" for=\"slide-$prev$divcode\">";
    echo "<i class=\"icon icon-arrow-left\"></i>";
    echo "</label>";
    echo "<label class=\"item-next btn btn-action btn-lg\" for=\"slide-$next$divcode\">";
    echo "<i class=\"icon icon-arrow-right\"></i>";
    echo "</label>";
    echo "<img src=\"img/$photos[$i]\" class=\"img-responsive rounded zoom\" alt=\"AlEx\">";
    echo "</figure>";
  }
  echo "<div class=\"carousel-nav\">";
  for($i=0;$i<count($photos);$i++) {
    $normalizedCount = $i + 1;
    echo "<label class=\"nav-item text-hide hand\" for=\"slide-$normalizedCount$divcode\">$normalizedCount$divcode</label>";
  }
  echo "</div>";
  echo "</div>";
  echo "</div>";
}

function generateProject($project){
  $divcode = hash('md5', $project->name);
  echo "<div class=\"docs-content column col-5 col-sm-5\">";
    echo "<section class=\"notes\">";
      echo "<div class=\"card\">";
        echo "<div class=\"card-header\">";
          echo "<h7>";
            echo "
                <button class=\"btn btn-action btn-sm circle btn-primary float-right $divcode\" onclick=\"togglebtn('$divcode');\"><i class=\"icon icon-arrow-down\"></i></button>
                <button class=\"btn btn-action btn-sm circle hidden float-right $divcode\" onclick=\"togglebtn('$divcode');\"><i class=\"icon icon-arrow-up\"></i></button>
              ";
          echo "</h7>";
          echo "<h4>$project->name";
          echo "</h4>";
          echo "<h5>$project->startdate - $project->enddate</h5>";
          echo "<mark>";
          foreach($project->languages->language as $lg){
            echo "$lg";
            if($lg == end($project->languages->language))
              break;
            echo " - ";
          }
          echo "</mark>";
        echo "</div>";

        echo "<div id=\"$divcode\" class=\"card-body hidden\">";
          echo "<p>$project->description</p>";
        echo "</div>";
        echo "<div class=\"card-footer\">";
          if(count($project->photos->photo) != 0)
            generateCarousel2($project->photos->photo, $divcode);
        echo "</div>";
      echo "</div>";
    echo "</section>";
  echo "</div>";
}
?>