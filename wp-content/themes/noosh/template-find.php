<?php /* Template Name: Find Template */ get_header(); ?>

    
    <div class="row first-level-row"  <?php //style="padding-top:12px; "?> >
        <div class="col-xs-12 h-xs-6 col-sm-6 h-sm-3" >
            <div class="first-level-solid-column-left"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                <div class="h-content v-wrap red-background-color">
                    <div class="v-box">
                        <p class="fancy-font large-fancy-size light-yellow-font-color" >Discover Noosh Squeezable<br/>Almond Butter at your local Costco.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 h-xs-6 col-sm-6 h-sm-3" >
            <div class="first-level-solid-column-right"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                <div class="h-content v-wrap brown-background-color">
                    <div class="v-box" style="width:100%;">
                        <p class="fancy-font large-fancy-size light-yellow-font-color" >Store Locator</p>
                        <div class="row">
                            <div class="col-sm-12">  
                                <form autocomplete="off">
                                    <div>
                                        <input id="wpsl-search-input" type="text" value="" name="wpsl-search-input" placeholder="" aria-required="true" style="display: inline-block;vertical-align: bottom; height: 50px; border:none; font-size:16px; width: 60%;"/>
                                        <button id="wpsl-search-btn" type="submit" value="Search"  style="display: inline-block; float: none; font-size: 38px; color: #ed3124; background-color: #ffd24f; background-image: none; border: none; border-radius: 0; margin: 0; height: 50px; vertical-align: bottom; margin-left: -3px; padding: 1px 6px;"><span class="icon-noosh-nav-find icon menu-noosh-icon"></span></button>
                                    </div>
                                </form>

                                <span class="white-font-color ">Enter City and State, or Zip Code</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>    
    </div>
        
    <?PHP echo do_shortcode('[wpsl]'); ?>
    
    <div class="row first-level-row" <?php //style="padding-top:12px;"?> >
       <div class="col-xs-12 h-xs-6" >
            <div class="first-level-solid-column-solo"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >            
                <img alt="image7" src="<?php echo get_template_directory_uri(); ?>/img/noosh-find-img-1.jpg"  style="width:100%"/>
            </div>
        </div>
    </div>
    
 
    
  
<?php get_sidebar(); ?>

<?php get_footer(); ?>
