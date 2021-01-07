<?php get_header(); ?>
 <div class="banner-content">
     <a href="<?php echo esc_url(site_url('/')) ?>" class="go-back"><i class="fas fa-angle-left"></i> Back</a>
        <h1 class=""><?php the_field('page_header')?></h1>
    </div>
</div> 


<section class="template_two_col content-image">
    <div class="container">
        <div class="row">
            

            <div class="col-md-6 no-padding">
                <div class="template_two_col__wrapper">
                   <div class="template_two_col__content">
                   <span class="block-tag"><?php echo get_field('sub_header'); ?></span>
                    <h2  class="block-header "><?php echo get_field('main_header'); ?></h2>
                    <p><?php echo get_the_content(); ?></p> 
                   </div>
                </div>
            </div>

            <div class="col-md-6 no-padding">
                <div class="template_two_col__wrapper img-right">
                <?php 
                    $image = get_field('feature_image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dining__menu">
    <div class="container">
        <div class="dining__menu__header">
            <span class="block-tag">Must Try</span>
            <h2  class="block-header ">Our Menu</h2>            
        </div>

        <div class="food__nav">
            <ul>
                <?php 
                    $terms = get_terms( array(
                        'taxonomy' => 'food_category',
                        'hide_empty' => false,
                    ) );
                    
                    foreach ( $terms as $term ) {
                        $term_link = get_term_link( $term );
                        echo '<li class="food__nav__item" data-id ='. $term->term_id .'>'. $term->name  . '</li>';
                    }
                ?>      
            </ul>
        </div>


        <div class="food__content">
            <div class="food__content__wrapper">
                <div class="food__item">
                   <div class="food__item__intro">
                        <div class="food__intro__wrapper">
                            <?php 
                                if(get_field('promo_banner'))  { ?>
                                <img src="<?php echo get_field('promo_banner')['url'] ?>">        
                                <?php } ?>
                            
                        </div>
                   </div>
                </div>   

                <div class="food__item">
                    <div class="food__intro__wrapper">
                        <?php echo get_field('promo_description'); ?>            
                    </div>
                </div>
            </div>        
        </div>

        
     </div>
</section>


<?php
    if(!empty(get_field('cta'))) {
        echo do_shortcode(get_field('cta'));
    }
    
?>


<?php get_footer(); ?>

<script>


const wrapper = document.querySelector('.food__content__wrapper');


loadMenuID()

function loadMenuID() {
const foodNav = document.querySelectorAll('.food__nav__item');

foodNav.forEach((btn)=> {
    btn.addEventListener('click', () => {
       let id = btn.getAttribute('data-id');
       removeMenuList()
       getMenu(id)
        });
    })
}

async function getMenu(id) {
    const res = await fetch( `http://localhost/tamar/wp-json/wp/v2/dining_menu?food_category=${id}`);
    const data = await res.json();
    const foodMenu = data;
    

    let option, remarks ;
    foodMenu.forEach(item => {
    const foodContentWrapper = document.createElement('div');
   
    foodContentWrapper.classList.add('food__item');    
   
    if(item.ACF.remarks !== undefined) {
        remarks = `- <span class="note">${item.ACF.remarks}</span>`;
    } else {
        remarks =""
    }
    

    if(item.ACF.option.length !== 0) {
        option = ` 
        <h4>Options</h4>
            <ul>
            ${item.ACF.option.map(option => `<li>${option}</li>`).join("")}
            </ul>
        `
    } else {
        option = "";  
    }

 
    foodContentWrapper.innerHTML = `
        <div class="menu__info">
        <div class="menu__header">  <h3>${item.title.rendered}  ${remarks} </h3> <h3>${item.ACF.price}</h3> </div>
        <p>${item.ACF.description}</p>
        <div class="food__options">
            ${option}
        </div>
    `;
if(wrapper) {
        wrapper.appendChild(foodContentWrapper);
        }
    });
}

function removeMenuList() {
    const foodItem = document.querySelectorAll('.food__item');
    foodItem.forEach((item)=>{
        item.remove();
    })
}




</script>