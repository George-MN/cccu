
<!-- =========================
   EVENTS SECTION   
============================== -->

<section class="packages" id="events">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="white-text">Events</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6 class="white-text">
                Here are our upcoming events. 
            </h6>
        </div>
        <!-- / END SECTION HEADER -->

        <!-- PACKAGES -->
        <div class="row">

            <!-- FIRST PACKAGE -->
            <div class="col-lg-4 col-sm-4">
                <div class="package wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <?php
                    if (isset($events) && $events) {
                        $friday = $events['friday'];
                    }
                    ?>
                    <div class="package-header green-bg">
                        <h5>Friday <sub> <?php
                                if (isset($friday) && $friday) {
                                    echo str_repeat('&nbsp;', 3) . $friday->date;
                                }
                                ?></sub></h5>
                    </div>
                    <div class="price dark-bg">
                        <div class="price-container">
                            <h5><?php
                                if (isset($friday) && $friday) {
                                    echo $friday->name;
                                } else {
                                    echo "No event this Friday";
                                }
                                ?> <sub><?php
                                    if (isset($friday) && $friday) {
                                        echo str_repeat('&nbsp;', 3) . 'by' . str_repeat('&nbsp;', 3) . $friday->speaker;
                                    }
                                    ?></sub> </h5>
                        </div>
                    </div>
                    <ul>
                        <?php if (isset($friday) && $friday) { ?>
                            <li><i class="icon-check"></i>
                                <?php
                                echo $friday->time . '  ' . $friday->venue;
                                ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div> <!-- / END FIRST PACKAGE -->

            <div class="col-lg-4 col-sm-4">
                <div class="best-value">
                    <div class="package wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <div class="package-header red-bg">
                            <?php
                            if (isset($events) && $events) {
                                $special = $events['special'];
                            }
                            ?>
                            <h5>Special <sub> <?php
                                    if (isset($special) && $special) {
                                        echo str_repeat('&nbsp;', 3) . $special->date;
                                    }
                                    ?></sub></h5>
                        </div>
                        <div class="price dark-bg">
                            <h5><?php
                                if (isset($special) && $special) {
                                    echo $special->name;
                                } else {
                                    echo "No Special event";
                                }
                                ?> <sub><?php
                                    if (isset($special) && $special) {
                                        echo str_repeat('&nbsp;', 3) . 'by' . str_repeat('&nbsp;', 3) . $special->speaker;
                                    }
                                    ?></sub> </h5>
                        </div>
                        <ul>
                            <?php if (isset($special) && $special) { ?>
                                <li><i class="icon-check"></i>
                                    <?php
                                    echo $special->time . '  ' . $special->venue;
                                    ?>
                                </li>
                            <?php } ?>                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="package wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <div class="package-header blue-bg">
                        <?php
                        if (isset($events) && $events) {
                            $sunday = $events['sunday'];
                        }
                        ?>
                        <h5>Sunday <sub> <?php
                                if (isset($sunday) && $sunday) {
                                    echo str_repeat('&nbsp;', 3) . $sunday->date;
                                }
                                ?></sub></h5>
                    </div>
                    <div class="price dark-bg">
                        <div class="price-container">
                            <h5><?php
                                if (isset($sunday) && $sunday) {
                                    echo $sunday->name;
                                } else {
                                    echo "No event this Sunday";
                                }
                                ?> <sub><?php
                                    if (isset($sunday) && $sunday) {
                                        echo str_repeat('&nbsp;', 3) . 'by' . str_repeat('&nbsp;', 3) . $sunday->speaker;
                                    }
                                    ?></sub> </h5>
                        </div>
                    </div>
                    <ul>
                        <?php if (isset($sunday) && $sunday) { ?>
                            <li><i class="icon-check"></i>
                                <?php
                                echo $sunday->time . '  ' . $sunday->venue;
                                ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div> <!-- / END PACKAGES -->

    </div> <!--END CONTAINER  -->
</section> <!-- END PACKAGES SECTION -->
<!-- =========================
   SEPARATOR ONE      
============================== -->

<section class="separator-one">
    <div class="color-overlay">
        <h3 class="container text wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
        ....Guard the good deposit that was entrusted to you--guard it with the help of the Holy Spirit who lives in us
</h3>
        <div class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            2nd Timothy 1:14
        </div>
    </div>
</section>  <!-- / END SEPARATOR -->

<!-- =========================
   ABOUT US SECTION   
============================== -->

<section class="about-us" id="aboutus">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 id="about_headers">About US</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6 id="about_headers">
                We teach , preach &amp;  evangelise.
            </h6>
        </div>
        <!-- / END SECTION HEADER -->

        <!-- 3 COLUMNS OF ABOUT US-->
        <div class="row">

            <!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->
            <div class="col-lg-4 col-md-4 column">
                <div class="big-intro wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <img src="<?php echo base_url(); ?>assets/images/about/held_logo.png" alt="Logo" class="img-responsive"/>
                </div>
            </div>

            <!-- COLUMN 2 - BRIEF ABOUT THE CCCU-->
            <div class="col-lg-4 col-md-4 column">
                <p class="wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <h4 id="about_left">Our Logo</h4>
                <p> This logo encapsules graphically what the Christian union (C.C.C.U) aspires and stands for.</p><br>
                <h5 id="about_left">White dove</h5>
                <p>The guarding wisdom of Christ from above which is pure, peaceable, gentle, 
                    willing to yield, full of mercy and good fruit (James 3:17).
                    All this made possible by the power of the Holy Spirit (Galatians 5:22-23)
                    Outstretched wings carrying the CCCU banner higher and higher symbolizes, 
                    the Grace of God lifting us from glory to glory, strength to strength and faith to greater faith.</p><br>
                <h5 id="about_left">The blue sky</h5>
                <p>Heavenly things. We have set our minds on things above and not of the earth.</p><br>
                <h5 id="about_left">Horizon</h5>
                <p>We are set to achieve our set goals.
                    As our ambitions meet with the Lord’s plans and will for the Christian union. 
                    Looking up to our Lord who is sited at the right hand of God.(Col. 3:1-2)</p>
                </p>
            </div>

            <div class="col-lg-4 col-md-4 column">
                <h4 id="about_left">Our Vision</h4>
                <p> Our vision is to be a family of well-natured responsible
                    Christians having Godly impact in campus and society.</p><br>
                <h4 id="about_left">Our Mission</h4>
                <p>Our mission is to reach out to students and equip them producing
                    leaders who are effective witnesses in campus and society.</p><br>
                <h4 id="about_left">Our Core Values</h4>
                <ul id="about_list">
                    <li>Upholding integrity</li>
                    <li>Being honest</li>
                    <li>Being faithful</li>
                    <li>Pursuing excellence</li>
                    <li>Dwelling in unity</li>
                    <li>Instilling discipline</li>
                </ul>
                <br>
                <h4 id="about_left">Our Objectives</h4>
                <ul id="about_list">
                    <li><strong>Discipleship</strong><br>To strengthen the spiritual
                        life of its members by studying the bible, by prayer and by
                        Christian fellowship.</li>
                    <li><strong>Evangelism </strong><br>To witness to the Lord Jesus
                        Christ and to seek to lead others to a personal faith in Him.</li>
                    <li><strong>Leadership development</strong> <br />To encourage
                        responsible membership in church and society.</li>
                    <li><strong>Mission</strong><br />To sensitize members into mission
                        work in every area of life according to their calling and gifting</li>
                </ul>
            </div>
        </div> <!-- / END 3 COLUMNS OF ABOUT US-->
    </div> <!-- / END CONTAINER -->

</section> <!-- END ABOUT US SECTION -->
<!-- =========================
   OUR LEADERS SECTION   
============================== -->

<section class="our-team" id="team">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="dark-text">Our Leaders</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6>
                Check the awesome leaders the Lord has chosen to lead CCCU this academic year. 
            </h6>

        </div>
        <!-- / END SECTION HEADER -->

        <!-- TEAM MEMBERS -->
        <div class="team-member">
            <figure class="profile-pic"> 
                <img src="<?php echo base_url(); ?>assets/images/leaders/eric.jpg" alt="Eric Musembi'"> <!-- MEMBER PROFILE PIC -->
            </figure>
            <div class="member-details">
                <h5 class="dark-text red-border-bottom">Eric Musembi</h5>
                <div class="position">
                    Co-ordinating Chairperson (Dad)
                </div>
            </div>
            <div class="social-icons">
                <ul>
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="icon-facebook"></i></a></li>
                    <li><a href="index.html"><i class="icon-twitter-alt"></i></a></li>
                    <li><a href="index.html"><i class="icon-email"></i></a></li>
                </ul>
            </div>
            <div class="details">
                <p>
                    COURSE: B.Sc. (Geology), 4th Year.<br>
                    HOBBIES: Adventure,travelling singing,Cooking.<br>
                    PASSION: Compassion<br>
                    BEST QUOTE:I am only one,but still am one, I cannot do everything,<br> but still I can do something and because I cannot do everything, <br>I will not refuse to do something I can do<br>

                    <!-- I am convinced that the best way to spend your life as a young person is to live it for Christ. I have a passion to serve God in whichever field of life he called me to work in especially among students since it is at this point that one can make maximum impact in the society. -->
                    <br><br>
                    Phone Number 0705-957-417<br> 
                </p>
            </div>
        </div>
        
        <div class="row wow fadeInRight animated" data-wow-offset="40" data-wow-duration="3s" data-wow-delay="0.15s">
            <!-- MEMBER -->
            <!-- <div class="col-lg-3 col-sm-3">
             
            </div> -->
            <!-- / END MEMBER -->

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="<?php echo base_url(); ?>assets/images/leaders/mum.jpg" alt="Reginah wanjiru">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text green-border-bottom">Reginah Wanjiru</h5>
                        <div class="position">
                            1st Vice Chairperson(Mum)
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="index.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="index.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="index.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            COURSE: BSC Mathematics ( 2nd yr)<br>
                            HOBBIES: Passionate on charity works<br>
                            QUOTE: A heart for children is necessary to one without.....
                            <br><br>
                            <!-- Phone Number 0702-677-744 -->
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="<?php echo base_url(); ?>assets/images/leaders/gabu.jpg" alt="Gabriel mwanzia">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text blue-border-bottom">Gabriel Mwanzia</h5>
                        <div class="position">
                            2nd Vice Chairperson (Uncle)
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="index.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="index.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="index.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            COURSE: BSC. Industrial chemistry(4th year).<br>
                            HOBBIES: Watching movies n matches,travelling,hikes and having fun.<br>
                            TALENTS: Service
                            <br><br>
                            <!-- Phone Number 0711-999-637 -->
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img height='200'src="<?php echo base_url(); ?>assets/images/leaders/mutegi.jpg" alt="William mutegi">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow-border-bottom">William Mutegi</h5>
                        <div class="position">
                            Secretary
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="index.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="index.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="index.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            COURSE: BA Urban planning (3rd Year).<br>
                            HOBBIES: Volleyball, Reading novels <br>
                            QUOTE: The lord is the archtect of our life and Engineer of moral standards.
                            <br><br>
                            <!-- Phone Number 0721-555-817 -->
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="<?php echo base_url(); ?>assets/images/leaders/index.png" alt="Naomi mumbe">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red-border-bottom">Naomi Mumbe</h5>
                        <div class="position">
                            Vice Secretary
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="index.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="index.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="index.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>

                            COURSE: BSc Statistics(2nd Year)<br>
                            HOBBIES: Dancing, Singing, Swimming,Cooking and Travelling<br>
                            PASSION: Service<br>
                            QUOTE: Faith is taking the first step even when you cant see the whole staircase
                            <!-- Phone Number 0716-333-950 -->
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="<?php echo base_url(); ?>assets/images/leaders/dency.jpg" alt="Dency Obiero">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text green-border-bottom">Dency Obiero</h5>
                        <div class="position">
                            Treasurer
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="index.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="index.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="index.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                          COURSE: BSc Meteorology(4th year)<br>
                          HOBBIES: Watcing movies and making friends<br>
                          QUOTE: You were born a mobile peron, able to think and reason<br> so that you can make the world better wherever you go<br>
                            <br><br>
                            <!-- Phone Number 0713-707-706 -->
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="<?php echo base_url(); ?>assets/images/leaders/index.png" alt="John caleb">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text blue-border-bottom">John Caleb</h5>
                        <div class="position">
                            Lit and theatre Co-ordinator
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="index.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="index.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="index.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            COURSE: BA Construction management(3rd year)<br>
                            PASSION: Music &amp; Art.<br>
                            QUOTE: The mind runs the world.
                            <br><br>
                            <!-- Phone Number 0721-145-422 -->
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="<?php echo base_url(); ?>assets/images/leaders/prayers.jpg" alt="Joseph Njoroge">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow-border-bottom">Joseph Njoroge</h5>
                        <div class="position">
                            Prayer Co-ordinator
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="index.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="index.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="index.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            <!-- Bio -->
                            COURSE: Bsc Meteorology(3rd year)<br>
                            PASSION: Reading novels,walking,sharing with friends<br>
                            QUOTE: there is a great joy past the horizons of agonys, pain and suffering. 

                            <br><br>
                            <!-- Phone Number  0713-133-678 -->
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="<?php echo base_url(); ?>assets/images/leaders/jenifer.jpg" alt="Jennifer Wangari">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text red-border-bottom">Jenifer Wangari</h5>
                        <div class="position">
                            Worship Co-ordinator
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="index.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="index.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="index.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            COURSE: Medical laboratory science and technology(3rd year)<br>
                            HOBBIES: Singing, dancing, cooking, swimming, reading novels and socializing.<br>
                            QUOTE: The God in the mountains is still the God in the valley.
                            <br><br>
                            <!-- Phone Number 0712-410-666 -->
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="<?php echo base_url(); ?>assets/images/leaders/index.png" alt="Dennis mureithi">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text green-border-bottom">Dennis Mureithi</h5>
                        <div class="position">
                            Evangelism and Mission Co-ordinator
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="index.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="index.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="index.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            COURSE: Bsc Maths (2nd year)<br>
                            HOBBIES: Populating heaven.<br>
                            QUOTE: A ship is always safe at the shore but thats not what its built for.
                            <!-- Bio -->
                            <br><br>
                            <!-- Phone Number 0729-780-220 -->
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="<?php echo base_url(); ?>assets/images/leaders/mose.jpg" alt="Moses Mwangi '">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text blue-border-bottom">Moses Mwangi</h5>
                        <div class="position">
                            BS and Training Co-ordinator
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="index.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="index.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="index.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            <!-- Bio -->
                            COURSE: Geology<br>
                            HOBBIES: Reading books & Watching football<br>
                            YEAR OF STUDY: Year 3


                            <br><br>
                            <!-- Phone Number 0701-700-808 -->
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="<?php echo base_url(); ?>assets/images/leaders/anthony.jpg" alt="Anthony Koech">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow-border-bottom">Anthony Koech</h5>
                        <div class="position">
                            Asst and Partnership Co-ordinator
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="index.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="index.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="index.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            COURSE: BSc Industrial chemistry (4th yr)
                            HOBBIES: Reading novels,Reading ,Watching documentaries and great speeches,Sharing with like-minds<br>
                            QUOTE: You will change who you are if you have positive attributes coming after your "I am"
                            <br><br>
                            <!-- Phone Number  0729-437-003 -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="team-member">
                    <figure class="profile-pic">
                        <img src="<?php echo base_url(); ?>assets/images/leaders/index.png" alt="Elijah Okiya">
                    </figure>
                    <div class="member-details">
                        <h5 class="dark-text yellow-border-bottom">Elijah Okiya</h5>
                        <div class="position">
                            Missions Co-ordinator
                        </div>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="index.html"><i class="icon-facebook"></i></a></li>
                            <li><a href="index.html"><i class="icon-twitter-alt"></i></a></li>
                            <li><a href="index.html"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <p>
                            COURSE: BSc chemistry(3rd year)<br>
                            HOBBIES: Witnessing,Socialising,Reading,Travelling<br>
                            QUOTE: No man is greater than his prayer life
                            <!-- Bio -->
                            <br><br>
                            <!-- Phone Number  0729-437-003 -->
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- / END TEAM MEMBER LIST -->

    </div> <!-- / END CONTAINER -->
</section> <!-- / END OUR TEAM SECTION -->

<!-- =========================
   REGISTER          
============================== -->

<section class="contact-us" id="register">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="white-text">Register</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6 class="white-text">
                It's free to become a member
            </h6>
        </div>
        <!-- / END SECTION HEADER -->
        <div class="col-lg-12">
            <div id="response_register_div" class="alert alert-success" role="alert">
                <strong> <label id="response_register">  </label> </strong>
            </div>
            <form  method="post" id="register_form">
                <div class="form-group col-lg-6">
                    <input type="text" id="first_name" name="first_name" placeholder="First name" class="form-control input-box" required>
                </div>
                <div class="form-group col-lg-6">
                    <input type="text" id="last_name" name="last_name" placeholder="Last name" class="form-control input-box" required>
                </div>
                <!-- <br> -->
                <div class="form-group  col-lg-6">
                    <input type="text" id="phone_no" name="phone_no" placeholder="Phone number" class="form-control input-box" required>
                </div>
                <div class="form-group  col-lg-6">
                    <input type="email" id="email" name="email" placeholder="Email" class="form-control input-box" required>
                </div>
                <!-- <br> -->
                <div class="form-group col-lg-6">
                    <input type="text" id="course" name="course" placeholder="Course" class="form-control input-box" required>
                </div>
                <div class="form-group col-lg-6">
                    <input type="text" id="reg_no" name="reg_no" placeholder="Registration Number" class="form-control input-box" required>
                </div>
                <br>
                <div class="form-group col-lg-12">
                    <input type="text" name="hall" id="hall" placeholder="Hall of Residence" class="form-control input-box" required>
                </div>
                <!-- <br> -->
                <!--  <div class="form-group col-lg-6">
                   <label class="form-control input-box" for="gender">Gender</label>
                </div> -->
                <!-- <br> -->
                <div class="form-group col-lg-12">
                    <select class="form-control input-box" name="gender" id="gender">
                        <option disabled="disabled" selected="selected">----select gender----</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>  
                <button type="submit" class="btn btn-primary custom-button red-btn">Sign Up</button>
            </form>
        </div>
    </div> <!-- / END CONTAINER -->
</section> <!-- / END CONTACT US SECTION-->


<!-- =========================
   TESTIMONIAL        
============================== -->

<section class="testimonial" id="testimonials">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="white-text">Articles</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6 class="white-text">
                Check out some of our awesome articles. 
            </h6>
        </div>
        <!-- / END SECTION HEADER -->

        <!-- CLIENT FEEDBACKS -->
        <div class="row wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <div class="col-md-12">
                <div id="client-feedbacks" class="owl-carousel owl-theme">

                    <!-- SINGLE FEEDBACK BOX-->
                    <div class="feedback-box">

                        <!-- MESSAGE OF THE CLIENT -->
                        <div class="message">
                            “Christ, i will rise because you rose, love because you loved and forgive because you have always forgiven”
                        </div>

                        <!-- CLIENT INFORMATION -->
                        <div class="client">
                            <div class="quote red-text">
                                <i class="icon-fontawesome-webfont-294"></i>
                            </div>
                            <div class="client-info">
                                <a class="client-name" >George Maina</a> 
                                <div class="client-company">
                                    Third year' ICT,CCCU
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <img src="<?php echo base_url(); ?>assets/images/articles/jijo.jpg" alt="">
                            </div>
                        </div> <!-- / END CLIENT INFORMATION-->
                    </div> <!-- / END SINGLE FEEDBACK BOX-->

                    <div class="feedback-box">
                        <div class="message">
                            “I can do everything through him who gives me strength.-Philippians 4:13”
                        </div>
                        <div class="client">
                            <div class="quote green-text">
                                <i class="icon-fontawesome-webfont-294"></i>
                            </div>
                            <div class="client-info">
                                <a class="client-name">Eucevia Gititi </a>
                                <div class="client-company">
                                    Worship Co-ordinator,CCCU
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <img src="<?php echo base_url(); ?>assets/images/articles/eucevia.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="feedback-box">
                        <div class="message">
                            “In your struggle against sin, you have not yet resisted to the point of shedding your blood.-Hebrews 12:4.”
                        </div>
                        <div class="client">
                            <div class="quote blue-text">
                                <i class="icon-fontawesome-webfont-294"></i>
                            </div>
                            <div class="client-info">
                                <a class="client-name" >Anthony Koech</a>
                                <div class="client-company">
                                    Asst and Partnership Co-ordinator,CCCU
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <img src="<?php echo base_url(); ?>assets/images/articles/anthony.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="feedback-box">
                        <div class="message">
                            “…. Nothing catches God by surprise and before we know He already knew. He never make mistakes.-Esther 4:1-14”
                        </div>
                        <div class="client">
                            <div class="quote red-text">
                                <i class="icon-fontawesome-webfont-294"></i>
                            </div>
                            <div class="client-info">
                                <a class="client-name" >Dency Obiero</a>
                                <div class="client-company">
                                    1st Vice Chairperson(Mum),CCCU
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <img src="<?php echo base_url(); ?>assets/images/articles/dency.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="feedback-box">
                        <div class="message">
                            “And we know that in all things God works for the good of those who love him, who have been called according to his purpose.-Rom 8:28”
                        </div>
                        <div class="client">
                            <div class="quote green-text">
                                <i class="icon-fontawesome-webfont-294"></i>
                            </div>
                            <div class="client-info">
                                <a class="client-name" >Bible</a>
                                <div class="client-company">
                                    Rom 8:28
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <img src="<?php echo base_url(); ?>assets/images/articles/bible.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="feedback-box">
                        <div class="message">
                            “What, then, shall we say in response to these things? If God is for us, who can be against us?-Romans 8:31”
                        </div>
                        <div class="client">
                            <div class="quote blue-text">
                                <i class="icon-fontawesome-webfont-294"></i>
                            </div>
                            <div class="client-info">
                                <a class="client-name" >Bible</a>
                                <div class="client-company">
                                    Romans 8:31,NIV
                                </div>
                            </div>
                            <div class="client-image hidden-xs">
                                <img src="<?php echo base_url(); ?>assets/images/articles/bible.png" alt="">
                            </div>
                        </div>
                    </div>

                </div> <!-- / END FEEDBACKS-->
            </div> <!-- / END COLUMN -->
        </div> <!-- / END ROW -->

    </div> <!-- / END CONTAINER -->
</section> <!-- / END TESTIMONIAL SECTION -->

<!-- =========================
   FEATURES SECTION   
============================== -->
<section class="features" id="features">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="dark-text">Gallery</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6>
                Check out our cool photos.
            </h6>
            <br/>
            <div class="container gallery center-block">
                <ul class="thumbnails">
                    <li class="span2">
                        <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/1.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/1.jpg" title="Image Title"/></a>
                    </li> <!--end thumb -->
                    <li class="span2">
                        <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/2.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/2.jpg" title="Image Title" /></a>
                    </li> <!--end thumb -->
                    <li class="span2">
                        <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/3.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/3.jpg" title="Image Title" /></a>
                    </li> <!--end thumb -->
                    <li class="span2">
                        <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/4.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/4.jpg" title="Image Title" /></a>
                    </li> <!--end thumb -->
                    <li class="span2">
                        <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/5.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/5.jpg" title="Image Title" /></a>
                    </li> <!--end thumb -->
                    <li class="span2">
                        <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/6.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/6.jpg" title="Image Title" /></a>
                    </li> <!--end thumb -->
                    <li class="span2">
                        <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/7.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/7.jpg" title="Image Title" /></a>
                    </li> <!--end thumb -->
                    <li class="span2">
                        <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/8.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/8.jpg" title="Image Title" /></a>
                    </li> <!--end thumb -->
                    <li class="span2">
                        <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/9.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/9.jpg" title="Image Title" /></a>
                    </li> <!--end thumb -->
                    <li class="span2">
                        <a class="thumbnail" rel="lightbox[group]" href="<?php echo base_url(); ?>assets/img/pics/10.jpg"><img class="group1" src="<?php echo base_url(); ?>assets/img/pics/10.jpg" title="Image Title" /></a>
                    </li> <!--end thumb -->
                </ul><!--end thumbnails -->
            </div> <!-- /container -->

        </div>
        <!-- / END SECTION HEADER -->

        <!-- FEATURS -->
        <div class="row">
<!--            <section id="feature_slider" class="lol">
                 
                    Each slide is composed by <img> and .info
                    - .info's position is customized with css in index.css
                    - each <img> parallax effect is declared by the following params inside its class:
                    
                    example: class="asset left-472 sp600 t120 z3"
                    left-472 means left: -472px from the center
                    sp600 is speed transition
                    t120 is top to 120px
                    z3 is z-index to 3
                    Note: Maintain this order of params
        
                    For the backgrounds, you can combine from the bgs folder :D
                
                <article class="slide" id="tour" style="background: url('assets/images/backgrounds/moi.jpg') repeat-x top center;">
                    <div class="info">
                        <h2 style="text-transform: none; font-size: 30px !important;">Chiromo Campus Christian Union</h2>
                        <h2 style="text-transform: none ; font-size: 16px !important;">We call it home</h2>
                    </div>
                </article>

                <article class="slide" id="showcasing" style="background: url('assets/images/backgrounds/deep_green_thumb.jpg') repeat-x top center;">
                    <div class="info">
                        <h2 style="text-transform: none; font-size: 30px !important;">Theme</h2>
                        <h2 style="text-transform: none ; font-size: 16px !important;">Theme of the Sem</h2>
                    </div>
                </article>
                <article class="slide" id="tour" style="background: url('assets/images/backgrounds/moi.jpg') repeat-x top center;">
                    <div class="info">
                        <h2 style="text-transform: none; font-size: 24px !important;">The Brothers' ministry(MOIs) at a past event</h2>
                    </div>
                </article>
                <article class="slide" id="showcasing" style="background: url('assets/images/backgrounds/queens.jpg') repeat-x top center;">
                    <div class="info">
                        <h2 style="text-transform: none; font-size: 30px !important;">Queens at a past event</h2>
                    </div>
                </article>
            </section>-->
        </div> <!-- / END FEATURES -->
    </div> <!-- / END CONTAINER -->
</section> <!-- / END FEATURES SECTION -->


<!-- =========================
   CONTACT US         
============================== -->

<section class="contact-us" id="contact">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="white-text">Get in touch</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6 class="white-text">
                Have any question or suggestion? Drop us a message. We will get back to you shortly.
            </h6>
        </div>
        <!-- / END SECTION HEADER -->
        <div id="response_div" class="alert alert-success" role="alert">
            <strong> <label id="response">  </label> </strong>
        </div>
        <!-- CONTACT FORM-->
        <div class="row">
            <form method="post" id="contact_form">
                <div class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <div class="col-lg-4 col-sm-4">
                        <input type="text" name="name" id="name" placeholder="Your Name" class="form-control input-box" required="required">
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <input type="email" name="email" id="email_contact" placeholder="Your Email" class="form-control input-box" required="required">
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control input-box" required="required">
                    </div>
                </div>

                <div class="col-md-12 wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <textarea name="message" id="message" class="form-control textarea-box" placeholder="Your Message" required="required"></textarea>
                </div>
                <button class="btn btn-primary custom-button red-btn wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" id="submit_message"  type="submit">Send Message</button>
            </form>
        </div>
        <!-- / END CONTACT FORM-->
    </div> <!-- / END CONTAINER -->
</section> <!-- / END CONTACT US SECTION-->