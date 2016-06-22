<?php /* Template Name: Frontpage Template */ get_header(); ?>

   
    <div class="row first-level-row" >        
        <div class="col-xs-12 h-xs-12  col-sm-12 h-sm-6">
            <div class="first-level-solid-column-left">            
                <div class="h-content red-background-color">         
                  <?PHP $image = get_field('first_row_image'); ?>         
                    <div class="v-wrap frontpage-jumbotron-wrapper" style="background-image:url(<?PHP echo $image['url']; ?>);">
                        <div class="v-box frontpage-jumbotron">
                            <p class="jumbotron-heading fancy-font normal-side-padding red-font-color" style="opacity:0;"><?PHP the_field('first_row_heading'); ?></p>
                            <p class="jumbotron-subheading jumbotron-subheading-1 fancy-font normal-side-padding brown-font-color" style="opacity:0;"><?PHP the_field('first_row_sub_heading'); ?></p>
                            <p class="jumbotron-subheading jumbotron-subheading-2 fancy-font normal-side-padding brown-font-color" style="opacity:0;"><?PHP the_field('first_row_sub_heading_2'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    
    
    <div class="row first-level-row" <?php //style="padding-top:12px;"?> >
        <div class="col-xs-12 h-xs-6 col-sm-3  h-sm-3 " >
            <div class="first-level-solid-column-left" <?php //style="padding-right:12px; padding-bottom:12px;"?> >
                <div class="h-content v-wrap light-yellow-background-color">
                    <div class="v-box">                     
                        <p class="fancy-font large-fancy-size brown-font-color"><?PHP the_field('second_row_left_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 h-xs-4 col-sm-9 h-sm-3"  <?php //sstyle="padding-left:12px; padding-bottom:12px;"?> >
            <div class="first-level-solid-column-right" >
                <div class="h-content">
                  <?php $image = get_field('second_row_right_column_image'); ?>
                    <div class="v-wrap noosh-slide" style="background-image:url(<?php echo $image['url']; ?>); background-size:cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    
    <div class="row first-level-row" >        
        <div class="col-xs-12 h-xs-12  col-sm-6 h-sm-6">
            <div class="first-level-solid-column-left">            
                <div class="h-content">                                
                    <?php $image = get_field('third_row_left_column_image'); ?> 
                    <div class="v-wrap" style="background-image:url(<?php echo $image['url']; ?>); background-size:cover;">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 h-xs-12 col-sm-6 h-sm-6 " <?PHP //style="padding-right:12px; padding-bottom:12px;" ?> >
            <div class="first-level-solid-column-right">
                <div class="h-content brown-background-color">
                    <div class="v-wrap">
                        <div class="v-box">
                            <p class="fancy-font jumbo-fancy-size normal-side-padding yellow-font-color"><?PHP the_field('third_row_right_column_text'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row first-level-row" >        
        <div class="col-xs-12 h-xs-12  col-sm-6 h-sm-6">
            <div class="first-level-solid-column-left">            
                <div class="h-content yellow-background-color">                                
                    <div class="v-wrap">
                        <div class="v-box">
                            <p class="fancy-font jumbo-fancy-size normal-side-padding brown-font-color"><?PHP the_field('fourth_row_left_column_text'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 h-xs-12 col-sm-6 h-sm-6 " <?PHP //style="padding-right:12px; padding-bottom:12px;" ?> >
            <div class="first-level-solid-column-right">
                <div class="h-content">                        
                    <?php $image = get_field('fourth_row_right_column_image'); ?> 
                    <div class="v-wrap" style="background-image:url(<?php echo $image['url']; ?>); background-size:cover;">
                    </div>                    
                </div>
            </div>
        </div>
    </div>
   
<?php get_sidebar(); ?>

<?php get_footer(); ?>