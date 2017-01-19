<?php

require 'vendor/autoload.php';

use InstagramScraper\Instagram;
use PHPUnit\Framework\TestCase;




$account = Instagram::getAccount('amr__p');
$media   = $account->user->media->nodes;

// printme($media);exit();

function printme($string)
{
    echo '<pre>'.print_r($string,true).'</pre>';
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Amr Fotography</title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Bodo - Simple One Page Personal" name="description">
    <meta content="BdgPixel" name="author">
    <!--Fav-->
    <link href="images/favicon.ico" rel="shortcut icon">
    
    <!--styles-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--fonts google-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
       <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--PRELOADER-->
    <div id="preloader">
      <div id="status">
        <!-- <img alt="logo" src="images/logo-big.png"> -->
        <span style="font-family: 'Above';line-height: 2.3;font-size: 130%;">Amr Fotography</span>
      </div>
    </div>
    <!--/.PRELOADER END-->

    <!--HEADER -->
    <div class="header">
      <div class="for-sticky">
        <!--LOGO-->
        <div class="col-md-2 col-xs-6 logo">
          <a href="index.html">
            <span style="font-family: 'Above';line-height: 2.3;font-size: 130%;">Amr Fotography</span>
            <!-- <img alt="logo" class="logo-nav" src="images/logo.png"> -->
          </a>
        </div>
        <!--/.LOGO END-->
      </div>
      <div class="menu-wrap">
        <nav class="menu">
          <div class="menu-list">
            <a data-scroll="" href="#home" class="active">
              <span>Home</span>
            </a>
            <a data-scroll="" href="#about">
              <span>About</span>
            </a>
            <a data-scroll="" href="#work">
              <span>Work</span>
            </a>
             <a data-scroll="" href="#services">
              <span>Services</span>
            </a>
            <a data-scroll="" href="#employement">
              <span>Employement</span>
            </a>
            <a data-scroll="" href="#skill">
              <span>Skills</span>
            </a>
            <a data-scroll="" href="#education">
              <span>Education</span>
            </a>
            <a data-scroll="" href="#testimonial">
              <span>Testimonial</span>
            </a>
            <a data-scroll="" href="#blog">
              <span>Blog</span>
            </a>
            <a data-scroll="" href="#contact">
              <span>Contact</span>
            </a>
          </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
      </div>
      <button class="menu-button" id="open-button">
        <span></span>
        <span></span>
        <span></span>
      </button><!--/.for-sticky-->
    </div>
    <!--/.HEADER END-->
    
    <!--CONTENT WRAP-->
    <div class="content-wrap">
      <!--CONTENT-->
      <div class="content">
        <!--HOME-->
        <section id="home">
          <div class="container">
            <div class="row">
              <div class="wrap-hero-content">
                  <div class="hero-content">
                    <h1>Hello</h1>
                    <br>
                    <span class="typed"></span>
                  </div>
              </div>
              <div class="mouse-icon margin-20">
                <div class="scroll"></div>
              </div>
            </div>
          </div>
        </section>
        <!--/.HOME END-->

        <!--ABOUT-->
        <section id="about">
          <div class="col-md-6 col-xs-12 no-pad">
            <div class="bg-about"></div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12 white-col">
            <div class="row">
              <!--OWL CAROUSEL2-->
              <div class="owl-carousel2">
                <div class="col-md-12">
                  <div class="wrap-about">
                    <div class="w-content">
                      <p class="head-about">
                        Photography is a love affair with life, It can alter time and give you a memory that will live forever. My passion to photography took me places I never thought of going and being a developer myself, gives me the ability to be more creative with my always full of thoughts head.
                      </p>
                      
                      <h5 class="name">
                        <span style="font-family: 'Above';line-height: 2.3;font-size: 130%;">Amr B.</span>
                      </h5>
                      <!-- <img alt="signature" src="images/signature.png"> -->
                    </div>
                  </div>
                </div>
              
                <div class="col-md-12 col-sm-12 col-xs-12 white-col">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                      <div class="wrap-about">
                        <table class="w-content">
                          <tr>
                            <td class="title">Name </td>
                            <td class="break">:</td>
                            <td> Amr Ismail</td>
                          </tr>
                          <tr>
                            <td class="title">Phone </td>
                            <td class="break">:</td>
                            <td> +201002090035</td>
                          </tr>
                          <tr>
                            <td class="title">Email </td>
                            <td class="break">:</td>
                            <td> amr.ahmedassem@gmail.com</td>
                          </tr>
                          <tr>
                            <td class="title">Address </td>
                            <td class="break">:</td>
                            <td> Cairo, Egypt</td>
                          </tr>
                          <tr>
                            <td class="title">Skype </td>
                            <td class="break">:</td>
                            <td> amrahmed87</td>
                          </tr>
                          <tr>
                            <td class="title">Instagram </td>
                            <td class="break">:</td>
                            <td> <a target="_blank" href="https://www.instagram.com/amr__p/">Amr P.</a></td>
                          </tr>
                          <!-- <tr>
                            <td class="title">Facebook</td>
                            <td class="break">:</td>
                            <td> m-reza</td>
                          </tr> -->
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/.OWL CAROUSEL2 END-->
            </div>
          </div>
        </section>
        <!--/.ABOUT END-->

        <!--WORK-->
        <section class="grey-bg mar-tm-10" id="work">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>My Photography</span>
                </h3>
                <p class="content-detail">
                  Some of my best pictures in my favorites cities all over the world.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <!--PORTFOLIO IMAGE-->
                <ul class="portfolio-image">
                  <li class="col-md-6">
                    <a href="images/amrp/1.jpg"><img alt="image" src="images/amrp/1.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                           <p class="desc">Times Square, New York</p>
                        </div>

                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/amrp/3.jpg"><img alt="image" src="images/amrp/3.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Paris, France
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/amrp/7.jpg"><img alt="image" src="images/amrp/7.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Berlin, Germany
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/amrp/12.jpg"><img alt="image" src="images/amrp/12.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Madrid, Spain
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/amrp/13.jpg"><img alt="image" src="images/amrp/13.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Cairo, Egypt
                          </p>  
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/amrp/10.jpg"><img alt="image" src="images/amrp/10.jpg">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Rome, Italy
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <!--/.PORTFOLIO IMAGE END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.WORK END-->

        <!--SERVICES-->
        <section class="white-bg" id="services">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Services</span>
                </h3>
                <p class="content-detail">
                  I offer wide range of services besdies Photography.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-4 col-sm-4">
                        <h3 class="icon-use">
                          c
                        </h3>
                        <p class="head-sm">
                          INSTAGRAM MARKETING
                        </p>
                        <p class="text-grey">
                          Targeting marketing on Instagram transforming your followers into fans. 
                        </p>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-4 col-sm-4">
                        <h3 class="icon-use">
                          b
                        </h3>
                        <p class="head-sm">
                          WEB DESIGN
                        </p>
                        <p class="text-grey">
                          Responsive beautiful designs with high usability. 
                        </p>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-4 col-sm-4">
                        <h3 class="icon-use">
                          d
                        </h3>
                        <p class="head-sm">
                          BACK END
                        </p>
                        <p class="text-grey">
                          Delivering top of the notch back-end systems for your website, solution or web service. 
                        </p>
                      </div>
                    </li>
                  </ul>

                  <ul class="listing-item">
                    <li>
                      <div class="col-md-4 col-sm-4">
                        <p class="icon-use">
                          f
                        </p>
                        <p class="head-sm">
                          Photographer
                        </p>
                        <p class="text-grey">
                          Need someone to capture your best moments? Contact me!
                        </p>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-4 col-sm-4">
                        <h3 class="icon-use">
                          p
                        </h3>
                        <p class="head-sm">
                          LINUX ADMIN
                        </p>
                        <p class="text-grey">
                          Need adminstration help on your Linux server? Contact me!
                        </p>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-4 col-sm-4">
                        <h3 class="icon-use">
                          m
                        </h3>
                        <p class="head-sm">
                          FRONT END
                        </p>
                        <p class="text-grey">
                          Bootstrap expert here, Delivery of a beautiful, responsive and user friendly web pages is guaranteed.  
                        </p>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.SERVICES END-->

        <!--EMPLOYEMENT-->
        <section class="grey-bg" id="employement" style="display: none;">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Employement</span>
                </h3>
                <p class="content-detail">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2007 - 2009
                            </h2>
                            <p class="job">
                              web designer
                            </p>
                            <p class="company">
                              Corp Project
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanita per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2009 - 2010
                            </h2>
                            <p class="job">
                              web designer
                            </p>
                            <p class="company">
                              Google inc
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanita per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>  
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2010 - 2014
                            </h2>
                            <p class="job">
                              crative director 
                            </p>
                            <p class="company">
                              41 studio
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanita per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2014 - NOW
                            </h2>
                            <p class="job">
                              fullstack designer
                            </p>
                            <p class="company">
                              Freelance
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanita per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.EMPLOYEMENT END-->

        <!--SKILLS-->
        <section class="white-bg" id="skill">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Skills</span>
                </h3>
                <p class="content-detail">
                  
                </p>
              </div>
              <div class="col-md-9 content-right">
                <!--SKILLST-->
                <div class="skillst">
                  <div class="skillbar" data-percent="85%">
                    <div class="title head-sm">
                      HTML 5
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="70%">
                    <div class="title head-sm">
                      CSS 4
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="80%">
                    <div class="title head-sm">
                      jQuery
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="99%">
                    <div class="title head-sm">
                      PHP
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                  <div class="skillbar" data-percent="95%">
                    <div class="title head-sm">
                      Instagram
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                </div>
                <!--/.SKILLST END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.SKILLS END-->

        <!--EDUCATION-->
        <section class="grey-bg" id="education" style="display: none;">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Education</span>
                </h3>
                <p class="content-detail">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2002 - 2005
                            </h2>
                            <p class="job">
                              Information System
                            </p>
                            <p class="company">
                              Telkom University
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanita per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2005 - 2007
                            </h2>
                            <p class="job">
                              DKV
                            </p>
                            <p class="company">
                              UNIKOM
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanita per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2007 - 2009
                            </h2>
                            <p class="job">
                              Magister DKV 
                            </p>
                            <p class="company">
                              ITB
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanita per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2009 - 2010
                            </h2>
                            <p class="job">
                              Typhography Magister
                            </p>
                            <p class="company">
                              Florida University
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanita per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.EDUCATION END-->

        <!--TESTIMONIAL-->
        <section id="testimonial">
          <div class="container">
            <div class="row wrap-testimonial">
              <div class="col-md-10 col-md-offset-1">
                <div class="owl-carousel">
                  <div class="list-testimonial">
                    <div class="content-testimonial">
                      <h3 class="testi">
                        “ Photography is the story I fail to put into words. ”
                      </h3>
                      <p class="people">
                        Destin Sparks
                      </p>
                    </div>
                  </div>
                  <div class="list-testimonial">
                    <div class="content-testimonial">
                      <h3 class="testi">
                        “ When words become unclear, I shall focus with photographs. When images become inadequate, I shall be content with silence. ”
                      </h3>
                      <p class="people">
                         Ansel Adams
                      </p>
                    </div>
                  </div>
                  <div class="list-testimonial">
                    <div class="content-testimonial">
                      <h3 class="testi">
                        “ In photography there is a reality so subtle that it becomes more real than reality. ”
                      </h3>
                      <p class="people">
                        Alfred Stieglitz
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mask-testimonial"></div>
        </section>
        <!--/.TESTMONIAL END-->

        <!--BLOG-->
        <section class="grey-bg" id="blog">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h3 class="title-small-center text-center">
                  <span>Instagram</span>
                </h3>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <p class="content-details text-center">
                      Check out my latest posts.. 
                    </p>
                  </div>
                </div>
                <!--GRID BLOG-->
                <div class="grid">


                  <?php 
                    foreach ($media as $x) {

                      $url     = $x->display_src;
                      $caption = explode('#', $x->caption);
                      $caption = $caption[0];
                      $date    = date('m/d/Y', $x->date);
                      ?>

                      <div class="grid-item">
                        <div class="wrap-article">
                          <a target="_blank" href="https://www.instagram.com/p/<?= $x->code; ?>">
                            <img alt="blog-1" class=" text-center" src="<?= $url; ?>">
                          </a>
                          <p class="subtitle fancy">
                            <span><?= $date ?></span>
                          </p>
                          <a href="#">
                            <h3 class="title">
                              <?= $caption ?> 
                            </h3>
                          </a>
                          <p class="content-blog">
                            <!-- <?= $x->caption ?> -->
                          </p>
                        </div>
                      </div>

                      <?php
                    }
                   ?>
                      

                </div>
                <!--/.GRID BLOG END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.BLOG END-->

        <!--CONTACT-->
        <section id="contact" class="white-bg">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Contact</span>
                </h3>
                <p class="content-detail">
                  Send me a message and lets start working together.
                </p>

              </div>
              <div class="col-md-9 content-right">
                <form id="contactForm" novalidate>
                  <div class="form-group group">
                      <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                      <span class="highlight"></span><span class="bar"></span><label>Name</label>
                      <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group group">
                      <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your name.">
                      <span class="highlight"></span><span class="bar"></span><label>Email</label>
                      <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group group">
                      <input type="text" class="form-control" id="message" required data-validation-required-message="Please enter your message">
                      <span class="highlight"></span><span class="bar"></span><label>Message</label>
                      <p class="help-block text-danger"></p>
                  </div>
                  <!-- <div class="group">
                    <input required="" type="text" required data-validation-required-message="Please enter your name."><span class="highlight"></span><span class="bar"></span><label>Name</label>
                  </div>
                  <div class="group">
                    <input required="" type="email"><span class="highlight"></span><span class="bar"></span><label>Email</label>
                  </div>
                  <div class="group">
                    <textarea required=""></textarea><span class="highlight"></span><span class="bar"></span><label>Message</label>
                  </div> -->
                  <div id="success"></div>
                  <input id="sendMessage" name="sendMessage" type="submit" value="Send Message">
                </form>
              </div>
            </div>
          </div>
        </section>
        <!--/.CONTACT END-->
        
        <!--FOOTER-->
        <footer>
          <div class="footer-top">
            <ul class="socials">
              <li class="facebook">
                <a target="_blank" href="https://www.instagram.com/amr__p/" data-hover="Facebook">Facebook</a>
              </li>
              <li class="twitter">
                <a target="_blank" href="https://www.instagram.com/amr__p/" data-hover="Twitter">Twitter</a>
              </li>
              <li class="instagram">
                <a target="_blank" href="https://www.instagram.com/amr__p/" data-hover="Instagram">Instagram</a>
              </li>
            </ul>
          </div>

          <div class="footer-bottom">
            <div class="container">
              <div class="row" style="text-align: center;">
                <a href="https://dcrazed.com/">
                <span style="color:#337ab7;font-family: 'Above';line-height: 2.3;font-size: 130%;">Amr Fotography</span>
                <!-- <img src="images/logo-bottom.png" alt="crafted with love" class="center-block" /></a> -->
			 </div>
            </div>
          </div>
        </footer>
        <!--/.FOOTER-END-->

      <!--/.CONTENT END-->
      </div>
    <!--/.CONTENT-WRAP END-->
    </div>
    

    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.appear.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/masonry.js" type="text/javascript"></script>
    <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/jqBootstrapValidation.js"></script>



    <script type="text/javascript">
      // Contact Form Scripts

$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var message = $("input#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "contact_me.php",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    message: message
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
    </script>


  </body>
</html>