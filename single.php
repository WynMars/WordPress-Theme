<!--single blog page -->
<?php

get_header(); ?>


<main class="container">


    <div class="row g-5">
        <div class="col-md-8">

            <?php 
        while (have_posts()) {
          the_post();  ?>




            <div class="col p-4 d-flex flex-column position-static">


                <!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
                <h3 class="mt-2 mb-0"><?php the_title(); ?></h3>

                <div class="mb-5 text-muted"><?php the_time('d.m.Y'); ?></div>

                <p class="card-text mb-auto"><?php echo get_the_content(); ?></p>

            </div>

            <?php 
        } ?>



            <div>


                <nav class="blog-pagination" aria-label="Pagination">

                    <?php echo paginate_links(); ?>
                </nav>

            </div>



        </div>



        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0">Customize this section to tell your visitors a little bit about your publication,
                        writers, content, or something else entirely. Totally up to you.</p>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

</main>




<?php get_footer(); 

?>