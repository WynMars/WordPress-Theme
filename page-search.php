<?php

get_header();

while (have_posts()) {
    the_post(); ?>

<main class="container">



    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 mt-4 fst-italic border-bottom ">
                <?php the_title(); ?>
            </h3>


            <div class="generic-content">
                <form method="get" action="<?php echo esc_url(site_url('/')); ?>">
                    <div class="search-form-row">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" name="s">
                        <input type="submit" class="input-group-text border-0" id="search-addon" value="Search">
                    </div>
                </form>
            </div>



            <!-- <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </div> -->

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


<?php
}

get_footer();

?>