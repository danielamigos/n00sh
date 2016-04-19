<?php /* Template Name: Product Template */ get_header(); ?>
        
    
    <div class="row first-level-row" >
        <div class="col-xs-12 col-sm-6 first-level-solid-column-left" <?PHP //style="padding-right:12px; padding-bottom:12px;" ?> >
            <img alt="image1" src="<?php echo get_template_directory_uri(); ?>/img/noosh-product-img-1.jpg" style="width:100%"/>
        </div>
       
        <div class="col-xs-12 col-sm-6 first-level-solid-column-right" <?PHP //style="padding-right:12px; padding-bottom:12px;" ?> >
            <img alt="image1" src="<?php echo get_template_directory_uri(); ?>/img/noosh-product-img-1.jpg" style="width:100%"/>
        </div>
    </div>
    
    <div class="row first-level-row"  <?php //style="padding-top:12px; "?> >
        <div class="col-xs-12 h-xs-12  col-sm-6 h-sm-6">
            <div class="first-level-solid-column-left" <?PHP //style="padding-right:12px; padding-bottom:12px;" ?> >           
                <div style="background-color:#f6eedc;" class="h-content v-wrap v-wrap-left">
                    <div class="v-box">
                        <p class="noosh-red-text" style="font-size:24px;">Noosh Squeezable Almond Butter is the perfect complement to your favorite foods. Great in hot cereal, protein shakes, as an ingredient, dessert topper, spread, or simply as a tasty treat on a spoon. Just Shake & Squeeze®.</p>
                        <hr class="product-page-divider"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 first-level-hollow-column-right-vertical-stack">
            <div class="row second-level-row">
                <div class="col-xs-12 h-xs-6" >
                    <div class="second-level-vertical-stack-right second-level-vertical-stack-top"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                        <div style="background-color:#b1651d;" class="h-content v-wrap">                            
                            <p class="light-fancy-text-2 v-box" >Squeeze it.<br/>Eat it.<br/>Share it.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row second-level-row"  <?php //style="padding-top:12px;"?> >
                <div class="col-xs-12 h-xs-6 " >
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
