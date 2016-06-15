<?php /* Template Name: Contact Template */ get_header(); ?>
        
    
    <div class="row first-level-row"  <?php //style="padding-top:12px; "?> >
        <div class="col-xs-12 h-xs-6 col-sm-6 h-sm-3" >
            <div class="first-level-solid-column-left"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                <div class="h-content v-wrap yellow-background-color">
                    <div class="frontpage-link-box v-box">
                        <p class="fancy-font red-font-color large-fancy-size normal-side-padding" >Do you have a question or comment regarding Noosh Squeezable Almond Butter? Or just want to say hello? We’d love to hear from you.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 first-level-solid-column-right"  <?php //style="padding-right:12px;"?> >
            <img alt="image8" src="<?php echo get_template_directory_uri(); ?>/img/noosh-contact-img-1.jpg"  style="width:100%"/>
        </div>
    </div>
    
    
    
    <div class="row first-level-row"  <?php //style="padding-top:12px; "?> >
        <div class="col-xs-12 h-xs-3" >
            <div class="first-level-solid-column-solo"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                <div class="h-content v-wrap cream-background-color">
                    <div class="v-box" style="width:100%; text-align:left;" >
                       
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row first-level-row"  <?php //style="padding-top:12px; "?> >
        <div class="col-xs-12 h-xs-2" >
            <div class="first-level-solid-column-solo"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                <div class="h-content v-wrap light-brown-background-color">
                    <div class="v-box" style="width:100%; text-align:left;" >
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1"> 
                                <p class="white-font-color normal-bold-font normal-regular-size">Noosh</p>
                                <p class="white-font-color normal-regular-font normal-regular-size">
                                Nut Butter Concepts, LLC<br/>
                                4439 Ish Drive, Simi Valley, CA 93063<br/><br/>

                                E. info@nooshnutbutters.com
                                </p>
                                
                            </div>
                        </div>
                      
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="row first-level-row"  <?php //style="padding-top:12px; "?> >
        <div class="col-xs-12 h-xs-8 col-sm-6 h-sm-3" >
            <div class="first-level-solid-column-left"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                <div style="background-color:#e8d3a2;" class="h-content v-wrap">
                    <div class="v-box">
                        <p class="brown-font-color fancy-font large-fancy-size" >Manufacturing Capabilities</p>
                        <hr class="white-hr-color normal-bottom-padding"/>
                        <p class="red-font-color normal-regular-size normal-regular-font normal-side-padding">Our state-of-the-art facility at Nut Butter Concepts offers a wide range capabilities. Curious about opportunities using our almonds?</p>
                         <a class="noosh-button normal-bold-font white-font-color red-background-color" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 first-level-hollow-column-right" <?PHP //style="padding-left:12px;"?> >
            <div class="row second-level-row"> 
                <div class="col-xs-6 second-level-column-left" <?PHP //style="padding-left:12px;"?> >
                    <img alt="image3" src="<?php echo get_template_directory_uri(); ?>/img/noosh-brand-img-2.jpg"  style="width:100%"/>
                </div>
                <div class="col-xs-6 second-level-column-right" <?PHP //style="padding-left:12px;"?> >
                    <img alt="image3" src="<?php echo get_template_directory_uri(); ?>/img/noosh-brand-img-3.jpg"  style="width:100%"/>
                </div>
            </div>
        </div>        
    </div>
    
    

<?php get_sidebar(); ?>

<?php get_footer(); ?>
