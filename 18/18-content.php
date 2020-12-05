<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-18-content">

  <div class="container">
    <div class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Can anyone kitesurf?
                    <i class="fas fa-chevron-circle-down"></i>
                  </a>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  We specialize in private kitesurfing lessons, semi-private kitesurfing lessons, and we are now proud to offer an exclusive tandem kiteboarding experience right here in Portugal! We teach kiteboarding at our epic local spot near Óbidos, in a flat water lagoon home to consistent winds and butter flat water.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How do you rate kitesurfing as a sport? <i class="fas fa-chevron-circle-down"></i>
                  </a>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  We specialize in private kitesurfing lessons, semi-private kitesurfing lessons, and we are now proud to offer an exclusive tandem kiteboarding experience right here in Portugal! We teach kiteboarding at our epic local spot near Óbidos, in a flat water lagoon home to consistent winds and butter flat water.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Is kitesurfing hard to learn? <i class="fas fa-chevron-circle-down"></i>
                  </a>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  We specialize in private kitesurfing lessons, semi-private kitesurfing lessons, and we are now proud to offer an exclusive tandem kiteboarding experience right here in Portugal! We teach kiteboarding at our epic local spot near Óbidos, in a flat water lagoon home to consistent winds and butter flat water.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                  <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    How do you take it? <i class="fas fa-chevron-circle-down"></i>
                  </a>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  We specialize in private kitesurfing lessons, semi-private kitesurfing lessons, and we are now proud to offer an exclusive tandem kiteboarding experience right here in Portugal! We teach kiteboarding at our epic local spot near Óbidos, in a flat water lagoon home to consistent winds and butter flat water.
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingFive">
                <h2 class="mb-0">
                  <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
                    Can you go upwind when kitesurfing? <i class="fas fa-chevron-circle-down"></i>
                  </a>
                </h2>
              </div>

              <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                  We specialize in private kitesurfing lessons, semi-private kitesurfing lessons, and we are now proud to offer an exclusive tandem kiteboarding experience right here in Portugal! We teach kiteboarding at our epic local spot near Óbidos, in a flat water lagoon home to consistent winds and butter flat water.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingSix">
                <h2 class="mb-0">
                  <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    What is the fastest sailing water sport in the world?
                    <i class="fas fa-chevron-circle-down"></i>
                  </a>
                </h2>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                <div class="card-body">
                  We specialize in private kitesurfing lessons, semi-private kitesurfing lessons, and we are now proud to offer an exclusive tandem kiteboarding experience right here in Portugal! We teach kiteboarding at our epic local spot near Óbidos, in a flat water lagoon home to consistent winds and butter flat water.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingSeven">
                <h2 class="mb-0">
                  <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Is it OK to use a board leash when I am learning? <i class="fas fa-chevron-circle-down"></i>
                  </a>
                </h2>
              </div>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                <div class="card-body">
                  We specialize in private kitesurfing lessons, semi-private kitesurfing lessons, and we are now proud to offer an exclusive tandem kiteboarding experience right here in Portugal! We teach kiteboarding at our epic local spot near Óbidos, in a flat water lagoon home to consistent winds and butter flat water.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingEight">
                <h2 class="mb-0">
                  <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Is it OK to use a board leash in big surf? <i class="fas fa-chevron-circle-down"></i>
                  </a>
                </h2>
              </div>
              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                <div class="card-body">
                  We specialize in private kitesurfing lessons, semi-private kitesurfing lessons, and we are now proud to offer an exclusive tandem kiteboarding experience right here in Portugal! We teach kiteboarding at our epic local spot near Óbidos, in a flat water lagoon home to consistent winds and butter flat water.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>