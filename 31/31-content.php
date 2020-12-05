<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-31-content">

  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="kites">
          <div class="windsurf">
          <button>Kites</button>
          <button>Windsurf</button>
          </div>
        </div>

        <div class="introduce">
          <div class="ngaythang">
            <span><i class="fas fa-calendar-day"></i> May 17, 2019</span>
            <span><i class="far fa-comments"></i> 4</span>
          </div>

          <p>The big point for us was the campervan, as it meant total independence. Having our bed, toilet, kitchen, kite stuff and everything else with us all the time, meant that we didn’t have to plan the days in advance.</p>

          <p>Also, breastfeeding makes traveling with baby super easy, as you don’t have to prepare milk bottles or disinfect bottles every 2-3 hours.</p>

          <p>If you choose to travel to a destination where you rent a room or apartment, I would strongly suggest having accommodation right at the kite spot. And of course, you should inform yourself about the local health situation (health hazards and health care) a lot more in detail than when you just travel on your own.</p>

          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-11">
              <p>Sem justo facilisi, pulvinar feugiat sed cursus donec vestibulum, rutrum mauris montes felis, quam metus sed in. In curabitur, ut in auctor ut, egestas nunc elit lectus sed sed</p>

              <div class="boder">
                <div class="row">
                  <div class="col-md-4">
                    January 23, 2019
                  </div>
                  <div class="col-md-8">
                    Happy Customer
                  </div>
                </div>
              </div>
            </div>
          </div>

          <p>Saltbeat is one of the very few brands on the market that combines fashion with functionality in such a beautiful way. They are creating luxurious pieces that can withstand the most radical of waterwomen and combine chic with “staying put” even in the wipe out and during kite crashes.</p>

          <div class="icon">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-telegram"></i>
            <i class="fab fa-pinterest"></i>
          </div>

          <div class="phanhoi">
            <button>Post</button>
            <button>Simple post</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>