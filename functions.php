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
?>