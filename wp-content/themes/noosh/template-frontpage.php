<?php /* Template Name: Frontpage Template */ get_header(); ?>

    <div class="row first-level-row" >
        <div class="col-xs-12 h-xs-12 col-sm-6 h-sm-6">
            <div class="first-level-solid-column-left" >
                <div class="h-content <?PHP the_field('first_row_left_column_background_color'); if( have_rows('first_row_left_column_images') ): ?>  noosh-slide-wrapper<?PHP endif; ?>">
                  <?php $flag = 0; while ( have_rows('first_row_left_column_images') ) : the_row(); $image = get_sub_field('image'); ?>
                    <div class="v-wrap noosh-slide" style="background-image:url(<?php echo $image['url']; ?>); background-size:cover; <?PHP if($flag==0) $flag=1; else echo 'display:none;'; ?>">
                    </div>
                  <?PHP endwhile; ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 first-level-hollow-column-right"  >
            <div class="row second-level-row"> 
                <div class="col-xs-6 h-xs-6" >
                    <div class="second-level-column-left"  >
                        <div class="h-content brown-background-color <?PHP if( have_rows('first_row_right_column_box_1_texts') ): ?>  noosh-slide-wrapper<?PHP endif; ?>">
                          <?PHP $flag = 0; while ( have_rows('first_row_right_column_box_1_texts') ) : the_row(); ?>
                            <div class="v-wrap noosh-slide" style="<?PHP if($flag==0) $flag=1; else echo 'display:none;'; ?>">
                                <p class="light-yellow-font-color fancy-font large-fancy-size normal-side-padding v-box"><?PHP the_sub_field('text'); ?></p>
                            </div>
                          <?PHP endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 h-xs-6">
                    <div class="second-level-column-right" >
                        <div class="h-content <?PHP the_field('first_row_right_column_box_2_background_color'); if( have_rows('first_row_right_column_box_2_images') ): ?>  noosh-slide-wrapper<?PHP endif; ?>">
                          <?php $flag = 0; while ( have_rows('first_row_right_column_box_2_images') ) : the_row(); $image = get_sub_field('image'); ?>
                            <div class="v-wrap noosh-slide" style="background-image:url(<?php echo $image['url']; ?>); background-size:cover; <?PHP if($flag==0) $flag=1; else echo 'display:none;'; ?>">
                            </div>
                          <?PHP endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row second-second-level-row"> 
                <div class="col-xs-6 h-xs-6">
                    <div class="second-level-column-left"> 
                        <div class="h-content <?PHP the_field('first_row_right_column_box_3_background_color'); if( have_rows('first_row_right_column_box_3_images') ): ?>  noosh-slide-wrapper<?PHP endif; ?>">
                          <?php $flag = 0; while ( have_rows('first_row_right_column_box_3_images') ) : the_row(); $image = get_sub_field('image'); ?>
                            <div class="v-wrap noosh-slide" style="background-image:url(<?php echo $image['url']; ?>); background-size:cover; <?PHP if($flag==0) $flag=1; else echo 'display:none;'; ?>">
                            </div>
                          <?PHP endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 h-xs-6" >
                    <div class="second-level-column-right">
                        <div class="h-content yellow-background-color <?PHP if( have_rows('first_row_right_column_box_4_texts') ): ?>  noosh-slide-wrapper<?PHP endif; ?>" >  
                          <?PHP $flag = 0; while ( have_rows('first_row_right_column_box_4_texts') ) : the_row(); ?>
                            <div class="v-wrap noosh-slide" style="<?PHP if($flag==0) $flag=1; else echo 'display:none;'; ?>">                          
                                <p class="brown-font-color fancy-font large-fancy-size normal-side-padding v-box"><?PHP the_sub_field('text'); ?></p>
                            </div>
                          <?PHP endwhile; ?>
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
                        <p class="fancy-font large-fancy-size brown-font-color" ><?PHP the_field('second_row_left_column_heading'); ?></p>
                        <hr class="white-hr-color"/>
                        <p class="normal-regular-size red-font-color normal-regular-font normal-side-padding"><?PHP the_field('second_row_left_text'); ?></p>
                        <a class="noosh-button normal-bold-font white-font-color red-background-color" href="<?PHP the_field('second_row_left_column_button_link'); ?>" target="<?PHP the_field('second_row_left_column_button_target'); ?>"><?PHP the_field('second_row_left_column_button_text'); ?></a>
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
    
    <?PHP if(have_rows('third_row_recipes')):  $recipesArray = get_field('third_row_recipes');
    $selectedRecipe = null; 
    if (count($recipesArray) == 1)
        $selectedRecipe = $recipesArray[0];
    else {
        $randomIndex = rand(1,count($recipesArray));
        $selectedRecipe = $recipesArray[$randomIndex-1];
    } ?>
    <div class="row first-level-row">
        <div class=" col-xs-12 h-xs-6 col-sm-6 h-sm-3">
            <div class="first-level-solid-column-left">
                <div class="h-content">
                  <?PHP $image = $selectedRecipe['image']; ?>
                    <div class="v-wrap noosh-slide" style="background-image:url(<?php echo $image['url']; ?>); background-size:cover;">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 h-xs-6 col-sm-6 h-sm-3" >
            <div class="first-level-solid-column-right"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                <div class="h-content v-wrap red-background-color">
                    <div class="v-box">
                        <p class="white-font-color fancy-font large-fancy-size " ><?PHP echo $selectedRecipe['recipe_name']; ?></p>
                        <hr class="yellow-hr-color"/>
                        <p class="normal-regular-size white-font-color normal-regular-font normal-side-padding"><?PHP echo $selectedRecipe['recipe_description']; ?></p>
                        <a class="noosh-button normal-bold-font brown-font-color yellow-background-color" href="<?PHP the_field('third_row_recipes_url'); echo '#'.$selectedRecipe['recipe_name']; ?>" ><?PHP the_field('third_row_recipes_button_text');?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?PHP endif; ?>
    
        
    <?PHP if(have_rows('fourth_row_image_and_text')):  $imageAndTextArray = get_field('fourth_row_image_and_text');
    $selectedImageAndText = null; 
    if (count($recipesArray) == 1)
        $selectedImageAndText = $imageAndTextArray[0];
    else {
        $randomIndex = rand(1,count($imageAndTextArray));
        $selectedImageAndText = $imageAndTextArray[$randomIndex-1];
    } ?>
    <div class="row first-level-row"  <?php //style="padding-top:12px; "?> >
        <div class="col-xs-12 h-xs-9 col-sm-9 h-sm-6"  <?php //style="padding-right:12px;"?> >
            <div class="first-level-solid-column-left">
                <div class="h-content">
                  <?PHP $image = $selectedImageAndText['image']; ?>
                    <div class="v-wrap noosh-slide" style="background-image:url(<?PHP echo $image['url']; ?>); background-size:cover;">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 first-level-hollow-column-right-vertical-stack">
            <div class="row second-level-row">
                <div class="col-xs-12 h-xs-6 col-sm-12 h-sm-12" >
                    <div class="second-level-vertical-stack-right second-level-vertical-stack-top"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                        <div class="h-content v-wrap light-brown-background-color">                            
                            <p class="light-yellow-font-color fancy-font large-fancy-size v-box" ><?PHP echo $selectedImageAndText['top_box_text']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row second-level-row"  <?php //style="padding-top:12px;"?> >
                <div class="col-xs-12 h-xs-6 col-sm-12 h-sm-12" >
                    <div class="second-level-vertical-stack-right"  <?php //style="padding-left:12px; padding-bottom:12px;"?> >
                        <div class="h-content v-wrap yellow-background-color">                                
                            <p class="brown-font-color fancy-font large-fancy-size v-box" ><?PHP echo $selectedImageAndText['bottom_box_text']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?PHP endif; ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
