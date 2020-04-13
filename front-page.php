<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>

<?php if ( get_option( 'front_page_announcement' ) ): ?>
<div class="container-fluid welcome-section-annoucement bg-scouts-navy">
    <div class="row">
        <div class="col text-center">
            <H2>Important Annoucenemt</h2>
        </div>
    </div>
    <div class="row">
        <div class="col text-center links-format-white">
            <p><?php echo get_option ('front_page_announcement')?></p>
        </div>
    </div>
</div>
<?php endif ?>

<div class="container-fluid welcome-section pt-4 pb-3">
    <div class="row">
        <div class ="card">
        <img class="card-img welcome-section-image" src="<?php echo get_template_directory_uri() . '/assets/images/beavers_in_the_woods.jpg'; ?>" alt="Card image">
            <div class="row card-img-overlay">
                <div class="col">
                <div class="row opacity-75 welcome-section-info bg-scouts-black">
                    <div class="col-md-8 col-xs-12 welcome-section-info">
                        <div class="row welcome-section-info"> 
                            <h3>
                                <?php if ( get_option( 'front_page_message' ) ): ?>
                                    <?php echo get_option( 'front_page_message' ) ?>
                                <?php endif ?>
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 bg-scouts-purple text-center">
                        <div class="row welcome-section-info-sections links-format-white"><a href="/?page_id=<?= get_option( "section_beavers_target" ) ?>"><h3>Beavers</h3></a></div>
                        <div class="row welcome-section-info-sections links-format-white"><a href="/?page_id=<?= get_option( "section_cubs_target" ) ?>"><h3>Cubs</h3></a></div>
                        <div class="row welcome-section-info-sections links-format-white"><a href="/?page_id=<?= get_option( "section_scouts_target" ) ?>"><h3>Scouts</h3></a></div>
                        <div class="row welcome-section-info-sections links-format-white"><a href="/?page_id=<?= get_option( "section_explorers_target" ) ?>"><h3>Explorers</h3></a></div>
                        <div class="row welcome-section-info-sections links-format-white"><a href="/?page_id=<?= get_option( "section_network_target" ) ?>"><h3>Network</h3></a></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container front-page-card-deck-container">
    <div class="row justify-content-md-center pt-md-4">
        <div class="col-md-12">
            <div class="card-deck front-page-card-deck">
                <div class="card mb-4 text-center section-card">
                    <a href="/?page_id=<?= get_option( "av_fom_target" ) ?>">
                        <div class="card-body bg-scouts-blue align-self-center">
                            <h5 class="card-title">Adult Volunteers</h5>
                            <p class="card-text">The Scouts award-winning training scheme for volunteers means that adults get as much from Scouts as young people.</p>
                        </div>
                        <div class="card-footer">
                            <span>Find out More</span>
                        </div>
                    </a>
                </div>
                <div class="w-100 d-none d-sm-block d-md-block d-lg-none"><!-- wrap every 2 on md--></div>
                <div class="card mb-4 text-center section-card">
                    <div class="card-body bg-scouts-yellow align-self-center">
                        <h5 class="card-title">Young people first: Safeguarding and Safety in Scouting</h5>
                        <p class="card-text">Wherever we go and whatever we do, we put young people’s safety and wellbeing first.</p>
                    </div>
                    <div class="card-footer">
                        <span>Find out More</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
</body>
</html>
