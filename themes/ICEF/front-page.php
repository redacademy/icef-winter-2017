<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="front-page-container">
    <header class="front-page-head">
        <div class='home-hero'></div>
        <div class="hero-text">
            <h2>One Community At a Time</h2>
            <p>Our vision is a community that can survive holistically 
                and self-sustainably.</p>
        </div>
        <img class="scroll-down" src='<?php echo get_template_directory_uri();?>/images/svg/scroll-down.svg' alt='scroll-down' />
    </header>

    <div class="front-content-container">
        <section class="who-we-are">
            <h3>Who We Are</h3>
            <div class='who-purple-border'>
                <img class='cow-farmer' src='<?php echo get_template_directory_uri();?>/images/jpegs/home-who-we-are.jpg' alt='cow-farmer' />
                <div class="key-words"><p>International</p><span><p>Community</p><p>Empowerment</p></span><p>Foundation</p></div>
            </div>
            <div class='who-no-border'>
                <p class="who-we-are-text">We work with communities in Uganda to support their well being and sustainable growth. Our focus is on holistic development,
                    knowing that the only way to truly support a community is through offering 
                    multiple interconnected programs. We stay with the community for as long as 
                    it takes for them to achieve self-sustainability.<br> The community drives this
                    progressive change, as key stakeholders in all planning, implementation, monitoring and evaluation of our work. 
                    No decisions are made without the input of our community. 
                </p>
            </div>
        </section>


        <div class="yellow-dot-filler">
            <img class="front-cross" src='<?php echo get_template_directory_uri();?>/images/svg/cross.svg' alt='cross' />
        </div>


        <section class='front-tekera-research'>
            <h3>Tekera research Centre</h3>

            <div class="research-flex">
                <img src="<?php echo get_template_directory_uri();?>/images/jpegs/home-tekera.jpg" alt="smiling girl">

                <div class='color-block-flex'>

                    <div class='purple-block'>
                        <p>Our efforts are currently focused on the Tekera Resource Centre. The TRC was 
                        founded in January 2006 near Tekera Village, Masaka District, in Southwestern Uganda. 
                        </p>
                    </div>
                
                    <div class="gold-block">
                        <p class="front-numbers">100%</p>
                        <p>of the Tekera Resource Centre staff are from Masaka district.</p>
                    </div>

                    <div class="white-block">
                        <span>
                            <p class="front-numbers">10,000</p>
                            <p>and counting people in the surrounding area have been affected by these services.</p>
                        </span>
                        <p>Some of the services and infrastructures available at the TRC:</p>
                    </div>
                
                </div>

                <div class="icon-block">
                    <div>
                        <img src='<?php echo get_template_directory_uri();?>/images/svg/health-care-icon.svg' alt='' >
                        <p>Health Care</p>
                    </div>
                    <div>                    
                        <img src='<?php echo get_template_directory_uri();?>/images/svg/coop-farming-icon.svg' alt='' >
                        <p>Coop Farming</p>
                    </div>
                    <div>                    
                        <img src='<?php echo get_template_directory_uri();?>/images/svg/schooling-icon.svg' alt='' >
                        <p>Schooling</p>
                    </div>
                    <div>            
                        <img src='<?php echo get_template_directory_uri();?>/images/svg/local-business-icon.svg' alt='' >
                        <p>Local Business</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-values">
            <img src='<?php echo get_template_directory_uri();?>/images/jpegs/home-our-values.jpg' alt='building-values' >
            <h3>Our Values</h3>
            <p>ICEF Canada is entirely volunteer driven. Since 2008 our administration
                fees have amounted to less than 1% annually and every dollar donated 
                goes to the Tekera Resource Centre. We believe that big chances come 
                when money is spent efficiently and towards the projects that need it the most.
                As a small but impactful organization we pride ourselves on 100% transparency and direct impact. 
            </p>
            <a class="purple-btn">Donate</a>
        </section>

        <div class="yellow-dot-filler">
            <img class="front-heart" src='<?php echo get_template_directory_uri();?>/images/svg/heart.svg' alt='heart' />
        </div>
        

        <section class="key-cornerstones">
            <h2>Our Key Cornerstones</h2>

            <div class="cornerstone-flex">

                <div class="education">
                    <div class='cornerstone-text'>
                        <h3>Eduction</h3>
                        <p><b>Tekera Primary School</b></p>
                        <p>Is one of the top schools in Masaka.
                        <p><b>Vocational School</b></p>
                        <p>Allows students the opportunity to learn skills and contribute to the local community</p>
                    </div>
                    <img src='<?php echo get_template_directory_uri();?>/images/jpegs/home-cornerstone-education.jpg' alt='school-pic'>
                </div>

                <div class="local-business">
                    <div class='cornerstone-text'>
                        <h3>Local Business</h3>
                        <p> A community is only as healthy as its citizens, 
                            which is why ICEF Canada and Tekera Resource Centre 
                            put such value on public health. The Tekera Health Clinc 
                            Level II has been open for 8 years providing accessible healthcare 
                            to Tekera Village and an out reach program to the nearby communities.
                        </p>
                    </div>
                    <img src='<?php echo get_template_directory_uri();?>/images/jpegs/our-work-tekera-primary-story.jpg' alt='smiling-kids'>
                </div>

                <div class="health">
                    <div class='cornerstone-text'>
                        <h3>Health</h3>
                        <p> A community is only as healthy as its citizens, which is why ICEF Canada
                            and Tekera Resource Centre put such value on public health. 
                            The Tekera Health Clinc Level II has been open for 8 years 
                            providing accessible healthcare to Tekera Village and an out 
                            reach program to the nearby communities.
                        </p>
                    </div>
                    <img src='<?php echo get_template_directory_uri();?>/images/jpegs/homepage-health.png' alt='health investigators'>
                </div>

            </div>

        </section>

        <div class='bottom-arrow'>
            <img src='<?php echo get_template_directory_uri();?>/images/svg/arrow-icon.svg' alt='down-arrow' >
        </div>

        <section class='front-bottom'>
            <h4>Interested in learning more about the TRC or want to help Tekera?</h4>
            <a class='purple-btn'>Explore</a>
            <a class='purple-btn'>Donate</a>
        </section>
    </div>
</div>
</div>

<?php get_footer(); ?>






