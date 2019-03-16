<html lang="en">
  <?php /* Template Name: Front Page */ ?>
  <?php require 'template-parts/head/head.php';?>
  <body>
    <?php if (get_option('facebook_handle')): ?>
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script>
    <?php endif ?>
    <?php require 'template-parts/header/header.php';?>
    <div class="container-flex">
      <div class="row top-banner">
        <img width="2048" height="945" src="<?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-2048.jpg'; ?>" class="img-fluid" alt="" srcset="<?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-2048.jpg'; ?> 2048w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-300.jpg'; ?> 300w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-768.jpg'; ?> 768w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-1024.jpg'; ?> 1024w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-1000.jpg'; ?> 1000w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-500.jpg'; ?> 500w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-600.jpg'; ?> 600w" sizes="(max-width: 2048px) 100vw, 2048px">
        <div class="col-md-6 offset-md-1 banner bg-scouts-purple pt-2 pb-2 pl-4 pr-4 pt-md-5 pb-md-3 pl-md-5 pr-md-5 rounded" id="top-banner-overlay">
          <h2>Skills for Life</h2>
          <p>As Scouts, we believe in preparing young people with Skills for Life. We encourage young people to do more, learn more and be more. Each week, we help over 460,000 young people across the UK enjoy fun and adventure while developing the skills they need to succeed, now and in the future. </p>
          <div class="btn_row">
            <a href="/?page_id=<?= get_option("sfl_fom_target") ?>" id="sfl_fom" class="btn btn-big btn-big-border btn-scouts-purple">Find out more</a>
            <a href="/?page_id=<?= get_option("sfl_jt_target") ?>" id="sfl_jt" class="btn btn-big btn-scouts-white-teal" >Join today</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container welcome-section pt-4 pb-3">
      <div class="row">
        <div class="col-md-7 col-sm-12">
        <h1>Welcome to <br /><span class="scouts-teal"><?php echo get_bloginfo( 'name', 'raw' )?></span></h1>
          <?= get_post_field('post_content', $post->ID) ?>
          <a href="/?page_id=<?= get_option("welcome_fom_target") ?>" id="welcome_fom" class="btn btn-big btn-scouts-green mr-1">Find out more</a>
          <a href="/?page_id=<?= get_option("welcome_jt_target") ?>" id="welcome_jt" class="btn btn-big btn-scouts-green">Join us today</a>
        </div>
        <div class="col-md-5 d-none d-md-block d-lg-block">
          <img width="1024" height="1402" src="<?php echo get_template_directory_uri() . '/assets/images/stock/scouts-in-canoes.jpg-1024.jpg'; ?>" class="img-fluid" alt="" srcset="<?php echo get_template_directory_uri() . '/assets/images/stock/scouts-in-canoes.jpg-2048.jpg'; ?> 2048w, <?php echo get_template_directory_uri() . '/assets/images/stock/scouts-in-canoes.jpg-300.jpg'; ?> 300w, <?php echo get_template_directory_uri() . '/assets/images/stock/scouts-in-canoes.jpg-768.jpg'; ?> 768w, <?php echo get_template_directory_uri() . '/assets/images/stock/scouts-in-canoes.jpg-1024.jpg'; ?> 1024w, <?php echo get_template_directory_uri() . '/assets/images/stock/scouts-in-canoes.jpg-1000.jpg'; ?> 1000w, <?php echo get_template_directory_uri() . '/assets/images/stock/scouts-in-canoes.jpg-500.jpg'; ?> 500w, <?php echo get_template_directory_uri() . '/assets/images/stock/scouts-in-canoes.jpg-600.jpg'; ?> 600w" sizes="(max-width: 2048px) 100vw, 2048px">
        </div>
      </div>
    </div>
    <div class="container pb-4 pt-4">
      <div class="row justify-content-md-center pt-md-4">
        <div class="col-md-12">
          <h3>Aged 6 to 25?</h3>
          <hr />
          <div class="card-deck section-cards">
            <div class="card mb-4 text-center section-card">
              <a href="/?page_id=<?= get_option("section_beavers_target") ?>" id="section_btn_beavers">
                <div class="card-body bg-scouts-blue align-self-center">
                  <h5 class="card-title">Beavers</h5>
                  <p class="card-text">6 to 8</p>
                </div>
                <div class="card-footer">
                  <span>Find out More</span>
                </div>
              </a>
            </div>
            <div class="card mb-4 text-center section-card">
              <a href="/?page_id=<?= get_option("section_cubs_target") ?>" id="section_btn_cubs">
                <div class="card-body bg-scouts-green">
                  <h5 class="card-title">Cubs</h5>
                  <p class="card-text">8 to 10.5</p>
                </div>
                <div class="card-footer">
                  <span>Find out More</span>
                </div>
              </a>
            </div>
            <div class="w-100 d-none d-sm-block d-md-block d-lg-none"><!-- wrap every 2 on md--></div>
            <div class="card mb-4 text-center section-card">
              <a href="/?page_id=<?= get_option("section_scouts_target") ?>" id="section_btn_scouts">
                <div class="card-body bg-scouts-purple">
                  <h5 class="card-title">Scouts</h5>
                  <p class="card-text">10.5 to 14</p>
                </div>
                <div class="card-footer">
                  <span>Find out More</span>
                </div>
              </a>
            </div>
            <div class="card mb-4 text-center section-card">
              <a href="/?page_id=<?= get_option("section_explorers_target") ?>" id="section_btn_explorers">
                <div class="card-body bg-scouts-navy">
                  <h5 class="card-title">Explorers</h5>
                  <p class="card-text">14 to 18</p>
                </div>
                <div class="card-footer">
                  <span>Find out More</span>
                </div>
                </a>
            </div>
            <div class="w-100 d-none d-sm-block d-md-block d-lg-none"><!-- wrap every 2 on md--></div>
            <div class="card mb-4 text-center section-card">
              <a href="/?page_id=<?= get_option("section_network_target") ?>" id="section_btn_network">
                <div class="card-body bg-scouts-black">
                  <h5 class="card-title">Network</h5>
                  <p class="card-text">18 to 25</p>
                </div>
                <div class="card-footer">
                  <span>Find out More</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container volunteers-section pb-4">
      <hr />
      <div class="row pt-3">
        <div class="col-lg-3">
          <h3>Adult volunteers</h3>
        </div>
        <div class="col-lg-5">
          <p>The Scouts award-winning training scheme for volunteers means that adults get as much from Scouts as young people.</p>
        </div>
        <div class="col-lg-auto">
          <a href="/?page_id=<?= get_option("av_fom_target") ?>" class="btn btn-big btn-scouts-green" id="av_fom">Find out more</a>
        </div>
      </div>
    </div>
    <div class="container-flex">
      <div class="row quote-row bg-scouts-blue pt-2">
        <div class="col-lg-5 offset-lg-1 col-sm-8 bg-scouts-blue pb-1">
          <h6><span>‘</span>Put your phone down and what are you left with? Just teamwork, courage and the skills to succeed.’</h6>
          <span class="author">Bear Grylls, Chief Scout</span>
        </div>
        <div class="col-lg-3 col-sm-4">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/bear_grylls.png'; ?>" alt="Bear Grylls Pointing">
        </div>
      </div>
    </div>
    <?php get_footer(); ?>
  </body>
</html>
