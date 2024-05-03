<?php
// some code in functions.php of your theme

/**
 * ACF accordion with shortcode
 */
 add_shortcode( 'price_accordion_acf', 'price_accordion_acf' );

function price_accordion_acf() {
ob_start();
    // Check if the repeater field has rows
    if( have_rows('price_repeater') ):
    
        // loop through the rows of data for the tab header
        while ( have_rows('price_repeater') ) : the_row();
            
            $header = get_sub_field('tab_header_title');
            ob_start();
            ?>
            
			      <div class="table_items_price">
                <?php 
                // Check if the sub-repeater field has rows
                if ( have_rows( 'prices' ) ) : 
                    // loop through the rows of data for each item in our price
                    while ( have_rows( 'prices' ) ) : the_row(); ?>
                        <div class="table_item_price">
                            <div class="left_table_item_price">
                                <div class="name_item_price"><?php the_sub_field( 'table_item_title' ); ?></div>
                                <div class="des_name_item_price"><?php the_sub_field( 'table_item_description' ); ?></div>
                            </div>
                            <div class="right_table_item_price">
                                <div class="price_item_price"><?php the_sub_field( 'price' ); ?> €</div>
                            </div>
                        </div>
                    <?php endwhile; //End the sub-loop ?> 
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
            </div>
			
            <?php
            $content = ob_get_clean();
            ?>
    
            <button class="accordion"><?php echo esc_html($header); ?></button>
            <div class="panel">
                <?php echo $content; ?>
            </div>    
            <?php
        endwhile;  //End the loop 
    
    else :
    
        // If there are no rows
        echo 'Some text';
    
    endif;
  
return ob_get_clean();
ativate_price_accordion();
}

function ativate_price_accordion(){
    // Register script
    wp_register_script('accordion_script', false);
    wp_enqueue_script('accordion_script');

    // Add inline script
    wp_add_inline_script('accordion_script', "
        document.addEventListener('DOMContentLoaded', function () {
            var acc = document.getElementsByClassName('accordion');
            for (var i = 0; i < acc.length; i++) {
                acc[i].addEventListener('click', function() {
                    this.classList.toggle('active');
                    var panel = this.nextElementSibling;
                    if (panel.style.display === 'block') {
                        panel.style.display = 'none';
                    } else {
                        panel.style.display = 'block';
                    }
                });
            }
        });
    ");
}
add_action('wp_enqueue_scripts', 'ativate_price_accordion');
