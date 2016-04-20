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
                    <div class="frontpage-link-box v-box">
                        <p class="fancy-font large-fancy-size light-yellow-font-color" >Store Locator</p>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">                                
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Find a store near you">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"> <span class="glyphicon glyphicon-search"></span></button>
                                    </span>                                    
                                </div>
                                <span class="white-font-color ">Enter City and State, or Zip Code</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>    
    </div>
        
    
    
    <div class="row first-level-row" <?php //style="padding-top:12px;"?> >
       <div class="col-xs-12 h-xs-6" >
            <div class="first-level-solid-column-solo"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >            
                <img alt="image7" src="<?php echo get_template_directory_uri(); ?>/img/noosh-find-img-1.jpg"  style="width:100%"/>
            </div>
        </div>
    </div>
 
    
  
<?php get_sidebar(); ?>

<?php get_footer(); ?>
