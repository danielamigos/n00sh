<?php /* Template Name: Frontpage Template */ get_header(); ?>

    <div class="row first-level-row" >
        <div class="col-xs-12 col-sm-6 first-level-solid-column-left" <?PHP //style="padding-right:12px; padding-bottom:12px;" ?> >
            <img alt="image1" src="<?php echo get_template_directory_uri(); ?>/img/noosh-landing-img-2.jpg" style="width:100%"/>
        </div>
        <div class="col-xs-12 col-sm-6 first-level-hollow-column-right" <?PHP //style="padding-left:12px;"?> >
            <div class="row second-level-row"> 
                <div class="col-xs-6 h-xs-6" >
                    <div class="second-level-column-left"  <?PHP //style="padding-right:12px; padding-bottom:12px;"?> >
                        <div style="background-color:#68411c;" class="h-content v-wrap">
                            <p class="light-fancy-text v-box">Introducing the first Squeezable Almond Butter</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 second-level-column-right" <?PHP //style="padding-left:12px;"?> >
                    <img alt="image3" src="<?php echo get_template_directory_uri(); ?>/img/noosh-landing-img-1.jpg"  style="width:100%"/>
                </div>
            </div>
            <div class="row second-second-level-row" <?PHP //style="padding-top:12px;"?> > 
                <div class="col-xs-6 second-level-column-left" <?PHP //style="padding-right:12px;?> ">
                    <img alt="image4" src="<?php echo get_template_directory_uri(); ?>/img/noosh-landing-img-3.jpg"  style="width:100%"/>
                </div>
                <div class="col-xs-6 h-xs-6" >
                    <div class="second-level-column-right"  <?PHP //style="padding-left:12px; padding-bottom:12px;"?> >
                        <div style="background-color:#ffd24f;" class="h-content v-wrap">                            
                            <p class="dark-fancy-text v-box">It's Ok.<br/>Indulge.<br/>We love it too.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="row first-level-row" <?php //style="padding-top:12px;"?> >
        <div class="col-xs-12 h-xs-6 col-sm-3  h-sm-3 " >
            <div class="first-level-solid-column-left" <?php //style="padding-right:12px; padding-bottom:12px;"?> >
                <div style="background-color:#e8d3a2;" class="h-content v-wrap">
                    <div class="frontpage-link-box v-box">                     
                        <p class="dark-fancy-title" >Craving Noosh?</p>
                        <hr/>
                        <p class="link-box-red-text">Satisfy your almond butter cravings. Noosh squeezable almond butter is available at your local Costco.</p>
                        <button class="link-box-red-button">FIND</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9 first-level-solid-column-right"  <?php //sstyle="padding-left:12px; padding-bottom:12px;"?> >
            <img alt="image7" src="<?php echo get_template_directory_uri(); ?>/img/noosh-landing-img-4-2.jpg"  style="width:100%"/>
        </div>
    </div>
    
    
    <div class="row first-level-row"  <?php //style="padding-top:12px; "?> >
        <div class="col-xs-12 col-sm-6 first-level-solid-column-left"  <?php //style="padding-right:12px;"?> >
            <img alt="image8" src="<?php echo get_template_directory_uri(); ?>/img/noosh-landing-img-5-2.jpg"  style="width:100%"/>
        </div>
        <div class="col-xs-12 h-xs-6 col-sm-6 h-sm-3" >
            <div class="first-level-solid-column-right"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                <div style="background-color:#ed3124;" class="h-content v-wrap">
                    <div class="frontpage-link-box v-box">
                        <p class="white-fancy-title" >Almond Crunch Ice Cream</p>
                        <hr class="yellow"/>
                        <p class="link-box-white-text">All-natural almond flavored ice cream. Loaded with chocolate almond 
    clusters and drizzled with Noosh squeezable almond butter</p>
                        <button class="link-box-yellow-button">RECIPE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
    <div class="row first-level-row"  <?php //style="padding-top:12px; "?> >
        <div class="col-xs-12 col-sm-9 first-level-solid-column-left"  <?php //style="padding-right:12px;"?> >
            <img alt="image10" src="<?php echo get_template_directory_uri(); ?>/img/noosh-landing-img-6-2.jpg"  style="width:100%"/>
        </div>
        <div class="col-xs-12 col-sm-3 first-level-hollow-column-right-vertical-stack">
            <div class="row second-level-row">
                <div class="col-xs-12 h-xs-6 col-sm-12 h-sm-12" >
                    <div class="second-level-vertical-stack-right second-level-vertical-stack-top"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                        <div style="background-color:#b1651d;" class="h-content v-wrap">                            
                            <p class="light-fancy-text-2 v-box" >Squeeze it.<br/>Eat it.<br/>Share it.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row second-level-row"  <?php //style="padding-top:12px;"?> >
                <div class="col-xs-12 h-xs-6 col-sm-12 h-sm-12" >
                    <div class="second-level-vertical-stack-right"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                        <div style="background-color:#ffd24f;" class="h-content v-wrap">                                
                            <p class="dark-fancy-text v-box" >Enjoy a better<br/>breakfast<br/>with Noosh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
