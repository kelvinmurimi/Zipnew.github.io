<style>
    .black{
        color: black;
    }
    #showcase{
        background-image: url(<?php //echo base_url();?>'assets/pics/slide2.jpg'); 
    }
    .white{
        color: #fff;
    }
</style>
   <div class="nav-wrapper">

        <!-- Link around dots-wrapper added after tutorial video -->
        <a href="<?php echo base_url();?>posts">
            <div class="dots-wrapper">
                <div id="dot-1" class="browser-dot"></div>
                <div id="dot-2" class="browser-dot"></div>
                <div id="dot-3" class="browser-dot"></div>
            </div>
        </a>

        <ul id="navigation">
            <li><a href="<?php echo base_url();?>#contact">Contact</a></li>
            <li><a href="<?php echo base_url();?>posts">Blog</a></li>
            

        </ul>
    </div>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/about.css">
    <!--header -->
    <header id="showcase class="grid" >
        <div class="bg-image"></div>
        <div class="content-wrap">
            <h1 class="home"> ZIP NEWS</h1>
            <P  class="white">
                "Dont let Yesterday Take too Much of your Today"-Will Rogers
            </P>
            <a href="" class="btn">read more</a>
        </div>
    </header>
    <main id="main">
        <section id="section-a" class="grid">
            <div class="content-wrap">
                <h2 class="content-title black">
                   We are.
                </h2>
                <div class="content-text">
                    <p  class="black">

                      Hi We are Happy that You are Finnally Here ,ZipNews is a New News/Blogs/Articles and Advertising company.

                    Our Aim is to make Everyone with Desire to be a Blogger an Oportunity to create and Publish Blogs Absolutely for free.
                    We also offer Advertisement , Web design and development if You Need a  Blog website ,Company/Bussiniss Website :
                        <a href="<?php echo base_url();?>#contact">Contact Us</a>
                   
                    
                        You can login to start adding Post/articles/blogs <a href="<?php echo base_url();?>users/login">Login</a> or Read Blogs Here <a href="<?php echo base_url();?>posts">Blog</a>
                 
                    </p>
                </div>

            </div>
        </section>

        <section id="section-b" class="grid">
            <ul>
                <li>
                    <div class="card">
                        <img src="<?php echo base_url();?>assets/pics/166A0118.JPG" alt="">
                        <div class="card-content">
                            <h3 class="card-title black">
                               Quote of the Day.
                            </h3>
                            <p  class="black">
                                "We may Encounter Many Defeats but we Must Not be Defeated"<b>-Maya ANgelou</b>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <img src="<?php echo base_url();?>assets/pics/slide5.jpg" alt="">
                        <div class="card-content">
                            <h3 class="card-title black">
                                Our Goals
                            </h3>
                            <p  class="black">
                                 To make <b> "Yes we Can" </b>Youths National anthem by Creating opportunities in 
                                 every internet nche we find.

                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <img src="<?php echo base_url();?>assets/pics/slide2.jpg" alt="">
                        <div class="card-content">
                            <h3 class="card-title black">
                               Our Vission.
                            </h3>
                            <p   class="black">
                                To be one of the most trusted source of<b> information,<br>inspiration, motivation</b> and <strong> empowerement .</strong>
                               
                            </p>
                        </div>
                    </div>
                </li>
            </ul>

        </section>

        <section id="section-c" class="grid">
            <div class="content-wrap">
                <h2 class="content-title black">Our Mission</h2>
                <p  class="black">To Inspire each and every person willing or desires  to be 
                  a writer or a blogger or interested in any of midea carreer paths .
               </p>
            </div>

        </section>
        <section id="section-d" class="grid">
            <div class="box">
                <h2 class="content-title">
                    contact us
                </h2>
                <p class="white" style="color: white !important;">
                    for any enquiries contact us on:
                    infor@cyprosefortunes.co.ke
                    kinyuacodes@gmail.com
                    or send us a message,<a class="black" href="<?php echo base_url();?>#contact">SendMessage</a>
                </p>
                <p>contact </p>
            </div>
            <div class="box">
                <h2 class="content-title">Quote </h2>
                <p id="NewQuoteSection" style="color: white !important;">
                    " The pessimist sees Difficulty in Every Opportunity.The optimist sees Oportunity in Every Difficulty."-Winston Churchil
                </p>
                  <button   id="btn-quote" onclick="getQuote()">NewQuote</button>
            </div>
        </section>


       
    </main>
    