<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Rachel Fitz';
?>

<!-- ### intro
            ================================================== -->
            <section id="intro" class="s-intro target-section">

                <div class="intro-content wide">

                    <div class="column">
                        <div class="text-pretitle with-line">
                            Hello World
                        </div>

                        <h1 class="text-huge-title">
                            I am Rachel, <br>
                            PHP Developer <br>
                            & 3D Environment Artist <br> 
                            based <br>
                            in Malta.
                        </h1>
                    </div>

                    <ul class="intro-social">
                        <li><a href="#0">Behance</a></li>
                        <li><a href="#0">Twitter</a></li>
                        <li><a href="#0">Dribbble</a></li>
                        <li><a href="#0">Instagram</a></li>
                    </ul>

                </div> <!-- end intro content -->

                <a href="#about" class="intro-scrolldown smoothscroll">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M11 21.883l-6.235-7.527-.765.644 7.521 9 7.479-9-.764-.645-6.236 7.529v-21.884h-1v21.883z"/></svg>
                </a>

            </section> <!-- end s-intro -->


            <!-- ### about
            ================================================== -->
            <section id="about" class="s-about target-section">


                <div class="row about-info wide" data-animate-block>

                    <div class="column lg-6 md-12 about-info__pic-block">
                        <img src="assets/img/about-photo.jpg" 
                             srcset="assets/img/about-photo.jpg 1x, assets/img/about-photo@2x.jpg 2x" alt="" class="about-info__pic" data-animate-el>
                    </div>

                    <div class="column lg-6 md-12">
                        <div class="about-info__text" >

                            <h2 class="text-pretitle with-line" data-animate-el>
                                About
                            </h2>
                            <p class="attention-getter" data-animate-el>
                            I'm a senior PHP developer with a passion for crafting efficient, 
                            scalable web applications. With a strong background in Yii2 and database optimization, 
                            I thrive on solving complex problems with clean, maintainable code. Beyond development, 
                            I'm a CrossFit RX athlete and a 3D environment artist, always looking for ways to blend creativity, logic, and strategy. 
                            I give 100% in everything I do, and as an outgoing and supportive person, 
                            I love collaborating with others, tackling challenges head-on, and bringing energy to every team I’m part of.
                            </p>
                            <a href="rf-cv.pdf" target="_blank" class="btn btn--medium u-fullwidth" data-animate-el>Download CV</a>

                        </div>
                    </div>
                </div> <!-- about-info -->

                <div class="row about-expertise" data-animate-block>
                    <div class="column lg-12">

                        <h2 class="text-pretitle" data-animate-el>Expertise</h2>

                        <ul class="skills-list h1" data-animate-el>
                            <li>Web Development</li>
                            <li>PHP</li>
                            <li>YII2 Framework</li>
                            <li>Database Optimization</li>
                            <li>API Development</li>
                            <!-- <li>Adobe Creative Suite</li> -->
                        </ul>

                    </div>
                </div> <!-- end about-expertise -->

                <div class="row about-timelines" data-animate-block>

                    <div class="column lg-6 tab-12">

                        <h2 class="text-pretitle" data-animate-el>
                            Experience
                        </h2>

                        <div class="timeline" data-animate-el>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <h4 class="timeline__title">eBusiness Systems</h3>
                                    <h5 class="timeline__meta">Senior PHP Developer</h5>
                                    <p class="timeline__timeframe">June 2019 - Present</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>
                                        As a Senior PHP Developer, I write and review clean, efficient code while ensuring best practices through detailed code comments and documentation. 
                                        I work with databases by designing and modifying tables as needed and conduct unit and acceptance testing to maintain high-quality standards. 
                                        Using JIRA for ticket management and GitHub for version control, I contribute to seamless development workflows. 
                                        Additionally, I leverage AWS for file storage, ensuring scalable and secure solutions.</p>
                                </div>
                            </div>
    
                            <!-- <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <h4 class="timeline__title">Microsoft</h4>
                                    <h5 class="timeline__meta">Frontend Developer</h5>
                                    <p class="timeline__timeframe">August 2016 - July 2019</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                                </div>
                            </div> -->
    
                        </div> <!-- end timeline -->

                    </div> <!-- end column -->

                    <div class="column lg-6 tab-12">

                        <h2 class="text-pretitle" data-animate-el>
                            Education
                        </h2>

                        <div class="timeline" data-animate-el>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <h4 class="timeline__title">MCAST Institute of Creative Arts</h3>
                                    <h5 class="timeline__meta">BA. Hons in Interactive Media</h5>
                                    <p class="timeline__timeframe">June 2019</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>This degree programme prepared me to work in various sectors within an ever-evolving digital industry 
                                        by giving me exposure to creative design and software development techniques for interactive media content. 
                                        I received a strong grounding in graphic design principles and programming techniques for games, 
                                        website technologies and interactive installations. 
                                        Concurrently, I also acquired applied knowledge in the fundamental practices of the industry by 
                                        exploring user experience design, game design, and generative digital imaging techniques. In my final year of study, 
                                        I was able to team up with students from other disciplines to create rich interactive experiences.
                                    </p>
                                </div>
                            </div>
    
                        </div> <!-- end timeline -->
                        
                    </div> <!-- end column -->

                </div> <!-- end about-timelines -->

            </section> <!-- end s-about -->

            <!-- ### works
            ================================================== -->
            <section id="login" class="s-works target-section">

                <div class="row works-portfolio">

                    <div class="column lg-12" data-animate-block>

                        <h2 style="text-align:center" class="text-pretitle" data-animate-el>
                            Please login to view works
                        </h2>

                        <div style="text-align:center">
                            <span>Click here to login</span><br>
                            <?= Html::a('Login', ['site/login'], ['class' => 'btn btn-danger']) ?>
                        </div>
                        
                    </div> <!-- end column -->

                </div> <!-- end works-portfolio -->

            </section> <!-- end s-works -->

            <!-- ### contact
            ================================================== -->
            <section id="contact" class="s-contact target-section">

                <div class="row contact-top">
                    <div class="column lg-12">
                        <h2 class="text-pretitle">
                            Get In Touch
                        </h2>

                        <p class="h1">
                            I'd love to hear from you.
                            Whether you have a question or just 
                            want to chat about design, tech & art — shoot me a message.
                        </p>
                    </div>
                </div> <!-- end contact-top -->

                <div class="row contact-bottom">
                    <div class="column lg-3 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Reach me at</h3>
                        <p class="contact-links">
                            <a href="mailto:sayhello@luther.com" class="mailtoui">sayhello@luther.com</a> <br>
                            <a href="tel:+1975432345">+356 79941345 </a>
                        </p>
                    </div>
                    <div class="column lg-4 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Social</h3>
                        <ul class="contact-social">
                            <li><a href="#0">Behance</a></li>
                            <li><a href="#0">Dribble</a></li>
                            <li><a href="#0">Twitter</a></li>
                            <li><a href="#0">Instagram</a></li>
                            <li><a href="#0">Github</a></li>
                        </ul>
                    </div>
                    <div class="column lg-4 md-12 contact-block">
                        <a href="mailto:sayhello@luther.com" class="mailtoui btn btn--medium u-fullwidth contact-btn">Say Hello.</a>
                    </div>
                </div> <!-- end contact-bottom -->

            </section> <!-- end contact -->


    <style>
        .login-container a {
            color: #ff7b00;
            text-decoration: none;
            margin-top: 10px;
            align-self: flex-start;
        }

        form input {
            width:100%;
        }
    </style>

