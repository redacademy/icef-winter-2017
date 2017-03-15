<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<header class="front-page-head">
    <div class='home-hero'></div>
    <h2>One Community At a Time</h2>
    <p>Our vision is a community that can survive holistically 
        and self-sustainably.</p>
    <img class="scroll-down" src='<?php echo get_template_directory_uri();?>/images/svg/scroll-down.svg' alt='scroll-down' />
</header>

<section class="who-we-are">
    <h3>Who We Are</h3>
    <img class='cow-farmer' src='<?php echo get_template_directory_uri();?>/images/jpegs/home-who-we-are.jpg' alt='cow-farmer' />
    <div class="key-words"><p>International<br><span>Community<br>Empowerment</span><br>Foundation</p></div>
    <p class="who-we-are-text">We work with communities in Uganda to support their well being and sustainable growth. Our focus is on holistic development,
        knowing that the only way to truly support a community is through offering 
        multiple interconnected programs. We stay with the community for as long as 
        it takes for them to achieve self-sustainability. The community drives this
        progressive change, as key stakeholders in all planning, implementation, monitoring and evaluation of our work. 
        No decisions are made without the input of our community. 
    </p>
</section>
</div>
</div>

<?php get_footer(); ?>






