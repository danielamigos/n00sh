<?php /* Template Name: Recipe Template */ get_header(); ?>
        
        
    <div class="row first-level-row">
        <div class="col-xs-12 h-xs-8 col-sm-12 h-sm-3" >
            <div class="first-level-solid-column-solo">
                <div style="background-color:#ffd24f;" class="h-content v-wrap">
                    <div class="v-box">
                        <p class="brown-font-color fancy-font large-fancy-size" ><?PHP the_field('recipes_heading'); ?></p>
                        <hr class="red-hr-color normal-bottom-padding"/>
                        <p class="brown-font-color large-regular-size normal-regular-font normal-side-padding">Breakfast | Lunch | Dinner | Appetizers | Drinks | Desserts | Side Dishes | Snacks</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <?PHP 
    $count = 1;
    $styles = array(
        1 => array('background'=>'light-brown-background-color','type'=>'white-font-color normal-regular-font large-regular-size','name'=>'fancy-font large-fancy-size white-font-color',
                    'hr'=>'yellow-hr-color normal-bottom-padding','description'=>'normal-regular-size white-font-color normal-regular-font normal-side-padding','button'=>'noosh-button normal-bold-font brown-font-color yellow-background-color'),
        2 =>  array('background'=>'red-background-color','type'=>'white-font-color normal-regular-font large-regular-size','name'=>'fancy-font large-fancy-size white-font-color',
                    'hr'=>'yellow-hr-color normal-bottom-padding','description'=>'normal-regular-size white-font-color normal-regular-font normal-side-padding','button'=>'noosh-button normal-bold-font brown-font-color yellow-background-color'),
        3 =>  array('background'=>'yellow-background-color','type'=>'brown-font-color normal-regular-font large-regular-size','name'=>'fancy-font large-fancy-size brown-font-color',
                    'hr'=>'red-hr-color normal-bottom-padding','description'=>'normal-regular-size brown-font-color normal-regular-font normal-side-padding','button'=>'noosh-button normal-bold-font white-font-color red-background-color'),
        4 =>  array('background'=>'light-yellow-background-color','type'=>'brown-font-color normal-regular-font large-regular-size','name'=>'fancy-font large-fancy-size brown-font-color',
                    'hr'=>'white-hr-color normal-bottom-padding','description'=>'normal-regular-size red-font-color normal-regular-font normal-side-padding','button'=>'noosh-button normal-bold-font white-font-color red-background-color'),
    );
    while (have_rows('recipes') ) : 
    the_row(); 
    $image = get_sub_field('image');
    
    if($count % 2 == 0): ?>
    
    
        <div class="row first-level-row">
            <div class="col-xs-12 col-sm-9 col-sm-6  h-sm-6">
                <div class="first-level-solid-column-left">
                    <div class="h-content">
                        <div class="v-wrap" style="background-image:url(<?PHP echo $image['url']; ?>); background-size:cover;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 h-xs-6 col-sm-6  h-sm-6 " >
                <div class="first-level-solid-column-right">
                    <div class="h-content v-wrap <?PHP echo $styles[$count]['background']; ?>">
                        <div class="v-box">                     
                            <div class="top-centered-box-position"><p class="<?PHP echo $styles[$count]['type']; ?>"><?PHP the_sub_field('recipe_type'); ?></p></p></div>
                            <p class="<?PHP echo $styles[$count]['name']; ?>" ><?PHP the_sub_field('recipe_name'); ?></p>
                            <hr class="<?PHP echo $styles[$count]['hr']; ?> normal-bottom-padding"/>
                            <p class="<?PHP echo $styles[$count]['description']; ?>">Description: <?PHP the_sub_field('description'); ?>
                            <br/><br/>
                            Difficulty: 
                            <?PHP the_sub_field('dificulty'); ?>
                            </p>
                            <a class="<?PHP echo $styles[$count]['button']; ?> open-recipe" href="#">Recipe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    <?PHP else: ?>
    
        <div class="row first-level-row">
            <div class="col-xs-12 h-xs-6 col-sm-6  h-sm-6 " >
                <div class="first-level-solid-column-left">
                    <div class="h-content v-wrap <?PHP echo $styles[$count]['background']; ?>">
                        <div class="v-box">                     
                            <div class="top-centered-box-position"><p class="<?PHP echo $styles[$count]['type']; ?>"><?PHP the_sub_field('recipe_type'); ?></p></div>
                            <p class="<?PHP echo $styles[$count]['name']; ?>" ><?PHP the_sub_field('recipe_name'); ?></p>
                            <hr class="<?PHP echo $styles[$count]['hr']; ?>"/>
                            <p class="<?PHP echo $styles[$count]['description']; ?>">Description: <?PHP the_sub_field('description'); ?><br/><br/>
                                    Difficulty: 
                                <?PHP the_sub_field('dificulty'); ?>
                                    </p>
                            <a class="<?PHP echo $styles[$count]['button']; ?> open-recipe" href="#" >Recipe</a>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-9 col-sm-6  h-sm-6">
                <div class="first-level-solid-column-right">
                    <div class="h-content">
                        <div class="v-wrap" style="background-image:url(<?PHP echo $image['url']; ?>); background-size:cover;">
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    <?PHP endif; ?>
    
    
        
    <div class="row first-level-row recipe-details" style="display:none;">
        <div class="col-sm-12" >
            <div class="first-level-solid-column-solo">               
                 <div class="row first-level-row show-me light-yellow-background-color"  >
                    <div class="col-sm-3" style="padding-top:15px;padding-bottom:15px;">
                        <p class="red-font-color normal-bold-font normal-regular-size normal-side-padding">
                            <?PHP if(get_sub_field('prep_time')): ?>Prep Time: <?PHP the_sub_field('prep_time') ?><br/><?PHP endif; 
                             if(get_sub_field('total_time')): ?>Total Time: <?PHP the_sub_field('total_time') ?><br/><?PHP endif; 
                             if(get_sub_field('servings')): ?>?>Servings: <?PHP the_sub_field('servings'); endif;?>
                        </p>
                        <hr class="brown-hr-color normal-bottom-padding" />
                        <p class="brown-font-color normal-bold-font normal-regular-size normal-side-padding">Ingredients:</p>
                        <p class="light-brown-font-color normal-regular-font normal-regular-size normal-side-padding"><?PHP the_sub_field('ingredients') ?></p>
                    </div>
                    <div class="col-sm-9"  style="padding-top:15px;padding-bottom:15px;">
                        <a href="#" class="red-background-color yellow-font-color normal-regular-size close-recipe" style="padding: 6px 8px 3px 8px; float:right; margin-right:25px;"><span class="glyphicon glyphicon-remove"></span></a>
                        <p class="brown-font-color normal-bold-font normal-regular-size normal-side-padding">Directions:</p>
                        <div class="light-brown-font-color normal-regular-font normal-regular-size normal-side-padding"><?PHP the_sub_field('directions') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
    
    <?PHP
    if($count==4)
        $count = 1;
     else   
        $count++; 
     endwhile; ?>
    
       
 
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
