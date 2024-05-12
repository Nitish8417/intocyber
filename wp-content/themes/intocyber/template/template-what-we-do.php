<?php
// Template Name: What We Do
get_header(); ?>



<section class="main-wme">
    <div class="container">
        <div class="wme">
            <div class="left-block">
                <img src="http://localhost/IntoCyber/wp-content/uploads/2024/05/img1.png" alt="left-wme">
            </div>
            <div class="right-block">
                <h2>Global Expansion Solutions</h2>
                <p class="p18-color">Unlocking Local Relevance</p>
                <p class="p16">We are bridging the gap between your Global aspirations and Local relevance which is a key challenge for companies expanding into new markets or scaling into the existing region.
                    Outsourcing your sales to us and adapt to Middle East, Africa and Turkey through our. specialized local expertise, cost efficient, and scalable organization is the key to success.
                </p>
            </div>
        </div>
    </div>
</section>

<!--Challages of Vendors------IntoCyber Solutions------------>
 <?php echo get_template_part('parts/content', 'cv-introcyber-slon'); ?>
<!-end--->


<!--IntoCyber Approach-->

 <?php echo get_template_part('parts/content', 'ic-approach'); ?>
<!--end-->


<?php echo get_template_part('parts/content', 'products'); ?>


<!-- contact form block -->

<?php echo get_template_part('parts/content', 'contact'); ?>
<!--end contact block-->

<!---->
<?php echo get_template_part('parts/content', 'full-width-text'); ?>
<!---->


<?php get_footer(); ?>