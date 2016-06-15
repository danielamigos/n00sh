<?php /* Template Name: Product Template */ get_header(); ?>
        
    
    <div class="row first-level-row" >        
        <div class="col-xs-12 h-xs-12  col-sm-6 h-sm-6">
            <div class="first-level-solid-column-left">            
                <div class="h-content  noosh-slide-wrapper red-background-color">         
                  <?PHP $flag = 0; while (have_rows('headlines') ) : the_row(); $image = get_sub_field('background_image'); ?>         
                    <div class="v-wrap noosh-slide" style="background-image:url(<?php echo $image['url']; ?>); background-size:cover; <?PHP if($flag==0) $flag=1; else echo 'display:none;'; ?>">
                        <div class="v-box">
                            <p class="fancy-font jumbo-fancy-size normal-side-padding <?PHP the_sub_field('headline_font_color'); ?>"><?PHP the_sub_field('headline_text'); ?></p>
                        </div>
                    </div>
                  <?PHP endwhile; ?>
                </div>
            </div>
        </div>
        
       
        <div class="col-xs-12 h-xs-12 col-sm-6 h-sm-6 " <?PHP //style="padding-right:12px; padding-bottom:12px;" ?> >
            <div class="first-level-solid-column-right">
                <div class="h-content">
                  <?PHP $image = get_field('first_row_right_column_image') ?>
                    <div class="v-wrap" style="background-image:url(<?PHP echo $image['url']; ?>); background-size:cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row first-level-row"  <?php //style="padding-top:12px; "?> >
        <div class="col-xs-12 h-xs-12  col-sm-6 h-sm-6">
            <div class="first-level-solid-column-left" <?PHP //style="padding-right:12px; padding-bottom:12px;" ?> >           
                <div class="h-content v-wrap v-wrap-left cream-background-color">
                    <div class="v-box">
                        <p class="large-regular-size normal-regular-font red-font-color normal-side-padding" ><?PHP the_field('product_description'); ?></p>
                        <hr class="brown-hr-color normal-bottom-padding"/>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="normal-regular-size normal-bold-font red-font-color normal-side-padding"><?PHP the_field('left_column_text'); ?></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="normal-regular-size normal-bold-font brown-font-color normal-side-padding">Benefits:</p>                                
                                <p class="normal-regular-size normal-regular-font light-brown-font-color normal-side-padding"><?PHP the_field('benefits'); ?></p>
                            </div>
                        </div>
                        <p class="normal-regular-size normal-bold-font brown-font-color normal-side-padding">Ingredients:</p>
                        <p class="normal-regular-size normal-regular-font light-brown-font-color normal-side-padding"><?PHP the_field('ingredients'); ?></p>
                        <p class="normal-regular-size normal-regular-font light-brown-font-color normal-side-padding"><a href="<?PHP the_field('nutritional_link'); ?>"><?PHP the_field('nutritional_link_text'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 first-level-hollow-column-right-vertical-stack">
            <div class="row second-level-row">
                <div class="col-xs-12 h-xs-6" >
                    <div class="second-level-vertical-stack-right second-level-vertical-stack-top"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >                     
                        <div class="h-content">
                            <?PHP $image = get_field('second_row_right_column_top_image') ?>
                            <div class="v-wrap" style="background-image:url(<?PHP echo $image['url']; ?>); background-size:cover;">
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
            <div class="row second-level-row"  <?php //style="padding-top:12px;"?> >
                <div class="col-xs-12 h-xs-6 " >
                    <div class="second-level-vertical-stack-right"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                        <div class="h-content <?PHP if( have_rows('second_row_right_column_bottom_texts') ): ?>  noosh-slide-wrapper<?PHP endif; ?>" style="background-color:#b1651d;" >               
                          <?PHP $flag = 0; while ( have_rows('second_row_right_column_bottom_texts') ) : the_row(); ?>
                            <div class="v-wrap noosh-slide" style="<?PHP if($flag==0) $flag=1; else echo 'display:none;'; ?>">                          
                                <p class="fancy-font light-yellow-font-color large-fancy-size v-box" ><?PHP the_sub_field('text'); ?></p>
                            </div>
                          <?PHP endwhile; ?>                                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="row first-level-row">
        <div class="col-xs-12 h-xs-6 col-sm-3  h-sm-3 " >
            <div class="first-level-solid-column-left">
                <div style="background-color:#e8d3a2;" class="h-content noosh-slide-wrapper">
                  <?PHP $flag = 0; while (have_rows('fun_facts') ) : the_row();?>
                    <div class="v-wrap noosh-slide" style="<?PHP if($flag==0) $flag=1; else echo 'display:none;'; ?>">
                        <div class="v-box">                     
                            <p class="brown-font-color fancy-font large-fancy-size" ><?PHP the_sub_field('fun_fact_heading'); ?></p>
                            <hr class="white-br-color normal-bottom-padding"/>
                            <p class="normal-regular-size normal-regular-font red-font-color normal-side-padding"><?PHP the_sub_field('fun_fact_text'); ?></p>
                        </div>
                    </div>
                  <?PHP endwhile; ?>
                </div>
            </div>
        </div>        
        <div class="col-xs-12 h-xs-4 col-sm-9 h-sm-3">
            <div class="first-level-solid-column-right" >
                <div class="h-content noosh-slide-wrapper">
                  <?PHP $flag = 0; while (have_rows('fun_facts') ) : the_row(); $image = get_sub_field('fun_fact_image'); ?>
                    <div class="v-wrap noosh-slide" style="background-image:url(<?php echo $image['url']; ?>); background-size:cover;<?PHP if($flag==0) $flag=1; else echo 'display:none;'; ?>">
                    </div>
                  <?PHP endwhile; ?>
                </div>
            </div>
        </div>
    </div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
