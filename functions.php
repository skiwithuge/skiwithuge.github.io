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

function generateCarousel(){
  echo "<div class=\"carousel\">";

  echo "</div>";
  echo <<< CAR
                <div class="carousel">
                <input type="radio" id="slide-1" name="carousel-radio" hidden="" class="carousel-locator" checked="">
                <input type="radio" id="slide-2" name="carousel-radio" hidden="" class="carousel-locator">
                <input type="radio" id="slide-3" name="carousel-radio" hidden="" class="carousel-locator">
                <input type="radio" id="slide-4" name="carousel-radio" hidden="" class="carousel-locator">

                <div class="carousel-container">

                  <figure class="carousel-item">
                    <label class="item-prev btn btn-action btn-lg" for="slide-2">
                      <i class="icon icon-arrow-left"></i>
                    </label>
                    <label class="item-next btn btn-action btn-lg" for="slide-2">
                      <i class="icon icon-arrow-right"></i>
                    </label>
                    <img src="img/alex.png" class="img-responsive rounded" alt="AlEx">
                  </figure>

                  <figure class="carousel-item">
                    <label class="item-prev btn btn-action btn-lg" for="slide-1">
                      <i class="icon icon-arrow-left"></i>
                    </label>
                    <label class="item-next btn btn-action btn-lg" for="slide-3">
                      <i class="icon icon-arrow-right"></i>
                    </label>
                    <img src="img/aliBenchScheme.png" class="img-responsive rounded" alt="aliBench Scheme">
                  </figure>

                  <figure class="carousel-item">
                    <label class="item-prev btn btn-action btn-lg" for="slide-2">
                      <i class="icon icon-arrow-left"></i>
                    </label>
                    <label class="item-next btn btn-action btn-lg" for="slide-4">
                      <i class="icon icon-arrow-right"></i>
                    </label>
                    <img src="img/aliBench.png" class="img-responsive rounded" alt="aliBench">
                  </figure>

                  <figure class="carousel-item">
                    <label class="item-prev btn btn-action btn-lg" for="slide-3">
                      <i class="icon icon-arrow-left"></i>
                    </label>
                    <label class="item-next btn btn-action btn-lg" for="slide-1">
                      <i class="icon icon-arrow-right"></i>
                    </label>
                    <img src="img/tcoffeeScheme.png" class="img-responsive rounded" alt="ntcoffee Scheme">
                  </figure>


                <div class="carousel-nav">
                  <label class="nav-item text-hide hand" for="slide-1">1</label>
                  <label class="nav-item text-hide hand" for="slide-2">2</label>
                  <label class="nav-item text-hide hand" for="slide-3">3</label>
                  <label class="nav-item text-hide hand" for="slide-4">4</label>
                </div>
              </div>
            </div>
CAR;
}
?>