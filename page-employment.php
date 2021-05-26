<?php get_header(); ?>
    <div class="banner-content">
    <?php global $post;
        $parentId = $post->post_parent;
        $linkToParent = get_permalink($parentId);
    ?>
        <a href="<?php echo esc_url(site_url('/'))?>" class="go-back"><i class="fas fa-angle-left"></i> Back</a>
        <h1 class=""><?php the_field('page_header')?></h1>
    </div>
</div>

<?php 
            $employment_query = new WP_Query(
                array(
                    'post_type' => 'employment',                  
                )
            )
        ?>


<section class="employment">
    <div class="container"> 
    <?php  if($employment_query->have_posts()) : while($employment_query->have_posts()) : $employment_query->the_post(); ?>

           <div class="employment-grid">
                <div class="employment-title">
                    
                    <div class="employment-block employment--header">
                        <span>Position</span>
                        <h2><?php the_title(); ?></h2>
                    </div>

                    <div class="employment-block employment--subheader">
                        <span>Status</span>
                        <h3><?php the_field('status')?></h3>
                    </div>

                </div>
                <div class="employment-content">
                  <h2>Job Description</h2>
                  <?php the_content();  ?>
                </div>
           </div>  
    <?php     
        endwhile;
        else :
            echo esc_html('No more information to load');
        endif;
        wp_reset_postdata();
    ?>  
    </div>
    </section>


<section class="employment-contact">
        <div class="employment-contact-container">
            <div class="employment-contact-header">
            <h2>Send us an email </h2>
            <p>If you would like to apply for any position above, please use the form below</p>
            </div>
            
            <div class="employment-grid">
                <div class="employment-details">
                    <div class="employment-block employment--subheader">
                        <span>Email:</span>
                        <h3><a href="mailto:reception@tamarvalleyresort.com.au"> reception@tamarvalleyresort.com.au</a></h3>
                    </div>

                    <div class="employment-block employment--subheader">
                        <span>Phone:</span>
                        <h3>6330 0400</h3>
                    </div>

                    <div class="employment-block employment--subheader">
                        <span>Look for:</span>
                        <h3>Ms. Iris</h3>
                    </div>
                </div>
                <div class="employment-form">
                    <form action="" class="form-employment">
                         <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" placeholder="Full name">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" placeholder="Full name">
                        </div>

                        <div class="form-group">
                            <label for="">Subject</label>
                            <input type="text" placeholder="Full name">
                        </div>

                        <div class="form-group">
                            <label for="">Subject</label>
                            <textarea name="" id="" cols="20" rows="8"></textarea>                       
                        </div>

                        <div class="form-group">
                           <button class="btn">Send</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
</section>







<?php get_footer(); ?>