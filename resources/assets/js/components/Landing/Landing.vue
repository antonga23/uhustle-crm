<template>
<div class="row" id="top-landing">
    <section id="Top-Page">
        <div class="col col-6 col-md-4" id="top-landing-1">
                <img id="top-landing-logo" :src="'/images/SVG_Images/Logo.svg'" >
                <h2>Welcome to</h2>
                <h1>SIAREM</h1>
                <h2>A platform supplying all the tools</h2>
                <h2>for you to work from home</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt it laoreet dolore magna aliquam.</p>
                <a data-aos="flip-left" href="/login" id="top-landing-btn">GET STARTED</a>
        </div>
        <div class="col col-12 col-md-8"  id="top-landing-2">
            <div id="top-landing-menu">
                <ul>
                    <li>
                        <a href="#offer">How It Works</a>
                    </li>
                    <li>
                        <a href="#offer">About Us</a>
                    </li>
                    <li>
                        <a href="#boxes">Our Services</a>
                    </li>
                    <li>
                        <a href="#offer">Contact Us</a>
                    </li>
                </ul>
                <hr>
                <img id="top-landing-image-phone" :src="'/images/Asset_5A.png'" >
            </div>
        </div>
    </section>
    <section id="boxes">
      <div class="container">
            <div data-aos="fade-up" data-aos-duration="700" data-aos-offset="700" class="box" id="box-edu">
            <img :src="'/images/Asset 18.png'">
            <h3>EDUCATION</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy nibh eu-ismod tincidunt ut laoree sit amet, consetetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscript</p>
                <h2>. . .</h2>
            </div>
          <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="850" data-aos-offset="720" class="box">
            <img :src="'/images/Asset 19.png'">
            <h3>CLIENTS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy nibh eu-ismod tincidunt ut laoree sit amet, consetetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscript</p>
            <h2>. . .</h2>
            </div>
            <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-offset="730" class="box">
            <img :src="'/images/Asset 20.png'">
            <h3>COMMISSION</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy nibh eu-ismod tincidunt ut laoree sit amet, consetetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscript</p>
            <h2>. . .</h2>
            </div>
      </div>
    </section>
    <section class="row" id="guide">
        <div  class="col" id="guide-left">
             <img data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700" data-aos-offset="600" id="guide-left-img" :src="'/images/Asset 23.png'">
        </div>
        <div data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700" data-aos-offset="600" class="col" id="guide-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy nibh eu-ismod tincidunt ut laoree sit amet, consetetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscript lobortis nist ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hen drerit in vulputate velit esse molestie consequat</p>
        </div>
    </section>
    <section id="offer">
        <div  id="offer-heading">
            <h1><span>W</span>hat we offer</h1>
        </div>
        <div id="offer-details">
            <div class="container">
                <div class="offer-details-box" id="box-sup">
                    <img :src="'/images/Asset 27.png'" class="offer-details-box-img">
                    <h3 data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="750" >SUPPORT</h3>
                    <div class="offer-details-box-inner">
                                <p data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1050" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy nibh eu-ismod tincidunt ut laoree sit amet, consetetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscript</p>
                                <ul id="offer-details-box-inner-ul1">
                                    <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1050" >
                                        24h help line
                                    </li>
                                    <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1050" >
                                        Technical assistance
                                    </li>
                                    <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1050">
                                        Advice on installation
                                    </li>
                                </ul>
                    </div>
                </div>
                <div class="offer-details-box">
                    <img :src="'/images/Asset 28.png'" class="offer-details-box-img">
                    <h3 data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1050" data-aos-offset="150">GUIDANCE</h3>
                    <div class="offer-details-box-inner">
                        <p data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1050" data-aos-offset="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy nibh eu-ismod tincidunt ut laoree sit amet, consetetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscript</p>
                        <ul id="offer-details-box-inner-ul2">
                            <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1050" data-aos-offset="350">
                                Guidance through sales
                            </li>
                            <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1050" data-aos-offset="480">
                                What to say
                            </li>
                            <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1050" data-aos-offset="500">
                                When to say it
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="offer-details-box">
                    <img :src="'/images/Asset 29.png'" class="offer-details-box-img">
                    <h3 data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1150" data-aos-offset="150">NETWORK</h3>
                        <div class="offer-details-box-inner">
                            <p data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1050" data-aos-offset="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy nibh eu-ismod tincidunt ut laoree sit amet, consetetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscript</p>
                            <ul id="offer-details-box-inner-ul3">
                                <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1050" data-aos-offset="350">
                                    Bringing clients to you
                                </li>
                                <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1050" data-aos-offset="480">
                                    Bringing clients to you
                                </li>
                                <li data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1050" data-aos-offset="500">
                                    Bringing clients to you
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row" id="take">
        <div  class="col" id="take-left">
            <h2>TAKE CONTROL</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy nibh eu-ismod tincidunt ut laoree sit amet, consetetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscript</p>
        </div>
        <div id="take-right">
          <img :src="'/images/Asset 34.png'" class="take-right-img">
        </div>
    </section>
    <section class="row" id="how-it-works">
        <div  class="col" id="how-it-works-left">
            <h2>How it works</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy nibh eu-ismod tincidunt ut laoree sit amet, consetetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscript</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy nibh eu-ismod tincidunt ut laoree sit amet, consetetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscript</p>
        </div>
        <div id="how-it-works-right">
          <img :src="'images/SVG_Images/Numbers.svg'" class="how-it-works-right-img">
          <ul id="how-it-works-right-ul">
                                <li data-aos="fade-right" data-aos-easing="ease-in-sine" >
                                    <h3>Sign up</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy nibh eu-ismod tincidunt ut laoree sit amet, consetetuer adipiscing elit, sed diam nonummy.</p>
                                    </li>
                                <li data-aos="fade-right" data-aos-easing="ease-in-sine" >
                                    <h3>Add your bank details</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy nibh eu-ismod tincidunt ut laoree sit amet, consetetuer adipiscing elitt.</p>
                                </li>
                                <li data-aos="fade-right" data-aos-easing="ease-in-sine" >
                                    <h3>Start selling</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy nibh eu-ismod tincidunt ut laoree sit amet.</p>
                                </li>
            </ul>
        </div>
        <div class="offer-details-box-inner-video">
                                    <img :src="'/images/video.png'" id="offer-details-box-inner-video-img">
        </div>
    </section>
    <section  id="subscribers">
        <div class="row">
            <div  class="col" id="subscribers-left">
                <h2>321978</h2>
            </div>
            <div class="col" id="subscribers-right">
                <h2>Subscribers</h2>
            </div>
        </div>
        <div class="row subscribers-ball-div">
                                <div class="col subscribers-ball" data-aos="fade-up" data-aos-easing="ease-in-sine" >
                                    <h3>140</h3>
                                    <p>countries</p>
                                </div>
                                <div  class="col subscribers-ball" data-aos="fade-up" data-aos-easing="ease-in-sine" >
                                    <h3>32</h3>
                                     <p>nationalities</p>
                                </div>
                                <div class="col subscribers-ball" data-aos="fade-up" data-aos-easing="ease-in-sine" >
                                    <h3>16</h3>
                                     <p>languages</p>
                                </div>
            </div>
    </section>
    <section  id="second-last">
        <div class="row second-last-div">
            <ul>
              <li class="col" data-aos="fade-right" data-aos-easing="ease-in-sine" >Innovative.</li>
              <li class="col" data-aos="fade-right" data-aos-easing="ease-in-sine" >Creative.</li>
              <li class="col" data-aos="fade-right" data-aos-easing="ease-in-sine" >Responsive.</li>
            </ul>
        </div>
    </section>
    <section  id="footer">
        <div class="row">
            <div class="col footer-header">
                <h3>Become an agent today.</h3>
                </div>

            <!-- Force next columns to break to new line -->
            <div class="w-100"></div>

            <div class="col footer-btn">
                <a data-aos="flip-left" href="/login" id="footer-btn">GET STARTED</a>
            </div>
        </div>
        <div class="row footer-menu">
            <div class="col-6 footer-menu-left">
                <ul>
                    <li>Sign up</li>
                    <li>About</li>
                    <li>Support</li>
                    <li>Contact</li>
                    <li>Privacy Policy</li>
                    <li>Terms and Conditions</li>

                </ul>
            </div>
            <div class="col-6 footer-menu-right">
                <ul>
                    <li id="li-one">Login</li>
                    <li>Blog <img :src="'/images/blog.png'" id="footer-blog-img"></li>
                    <li>Twitter<img :src="'/images/twitter.png'" id="footer-twit-img"></li>
                    <li>Facebook<img :src="'/images/facebook.png'" id="footer-fb-img"></li>
                    <li>Instagram<img :src="'/images/insta.png'" id="footer-insta-img"></li>
                    <li>LinkedIn<img :src="'/images/linked.png'" id="footer-linked-img"></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col footer-bottom-img">
                <img :src="'/images/logo.png'" id="footer-logo-img">
            </div>
            <div class="col footer-bottom-res">
               <p>All Rights Reserved</p>
            </div>
        </div>
    </section>
  </div>
</template>

