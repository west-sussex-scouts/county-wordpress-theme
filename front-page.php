<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>
<div class="container-fluid welcome-section pt-4 pb-3">
    <div class="row">
        <div class ="card">
            <img class="welcome-section-image" src="<?php echo get_template_directory_uri() . '/assets/images/beavers_in_the_woods.jpg'; ?>" alt="Card image">
                <div class="card-img-overlay welcome-section-info">
                    <div class="row">
                        <div class="col-md-12 bg-scouts-black">
                            <div class="row">
                                <div class="col-md-8">
                                <div class="row welcome-section-info-message"> <p>This is the front page message </p> </div>
                                </div>
                                <div class="col-md-4 bg-scouts-purple">
                                    <div class="row welcome-section-info-sections"> <h2> Beavers </h2></div>
                                    <div class="row welcome-section-info-sections"> <h2> Cubs </h2> </div>
                                    <div class="row welcome-section-info-sections"> <h2> Scouts </h2> </div>
                                    <div class="row welcome-section-info-sections"> <h2> Network </h2> </div>
                                </div>
                            </div>
                        </div>  
                    </div> 
                </div>
        </div>
    </div>
</div>
<div class="container volunteers-section pb-4">
    <hr/>
    <div class="row pt-3">
        <div class="col-lg-3">
            <h3>Adult volunteers</h3>
        </div>
        <div class="col-lg-5">
            <p>The Scouts award-winning training scheme for volunteers means that adults get as much from Scouts as
                young people.</p>
        </div>
        <div class="col-lg-auto">
            <a href="/?page_id=<?= get_option( "av_fom_target" ) ?>" class="btn btn-big btn-scouts-green" id="av_fom">Find
                out more</a>
        </div>
    </div>
</div>
<div class="container online-safety-section pb-4 bg-scouts-yellow">
    <div class="row">
        <div class="col-md-6">
            <div class="row"><h4>Young People in Scouting</h4></div>
            <div class="row"><p>Wherever we go and whatever we do, we put young people’s safety and wellbeing first.</p></div>
            <div class="row"><a href="https://www.scouts.org.uk/information-for-parents/stay-safe"><h4>Find out more</h4></a></div>
        </div>
        <div class="col-md-6">
            <div class="row"><a href="https://www.scouts.org.uk/information-for-parents/stay-safe"><h4>Safety Training</h4></a></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
</body>
</html>
