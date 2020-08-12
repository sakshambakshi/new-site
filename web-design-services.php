<?php include("header.php");?>
<script type='text/javascript' src='assets/js/menu.js' defer onload=''></script>

        <!--
        End Fixed Navigation
        ==================================== -->
        
        <main class="site-content" role="main">
        
      <section id="" >
      <div class="container-fluid  bg-img-13" style=" height: 600px;">
                    <div class="banner-image-wrapper contact-wrapper ppc-wrapper">   
                    <div class="contact-banner-text-wrapper seo-text">
      <h4 id="point">DO YOU WANT…</h4>
      <form class="subscribe-news text-center ng-pristine ng-valid" id="my_form" novalidate="novalidate" style="text-align:left;text-decoration-color: #ffff;">
        <select id="detail" class="valid">
          <option value="" style="font-family: Open Sans,sans-serif; Font-size: 15px;color: #fd9a21; text-decoration-color: #ffff;">An amazing website Designing  for your business? </option>
          <option value=""  style="font-family: Open Sans,sans-serif; Font-size: 15px;color: #fd9a21;">Sell Stuff Online</option>
          <option value=""  style="font-family: Open Sans,sans-serif; Font-size: 15px;color: #fd9a21;">Need to start Your Own Successful Blog Designing</option>
        </select>
        <br>
       

      <input type="hidden" name="URL" value="seo" autocomplete="off"><input type="hidden" name="ip" value="" autocomplete="off"></form>
      <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-blue btn-effect" style=" border: 2px solid gray;
    background: #ff9900;
    border-radius: 7px;
    margin-top: 20px;
    height: 56px;
    width: 400px;
    font-weight: 500;
    color: #ffff;
    padding: 5px 10px;
    font-size: 15px;
    float: left;
    /* margin-left: 160px; */
    text-transform: uppercase;">HIRE A WEB DESIGNER</button>
    </div>
  </div>
           
   
             
      <!--container--></div>
    </section>
        <!-- model boxes section start-->
<div id="id01" class="modal">
  <div class="modal-dialog" role="document" style="margin: 70px auto;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal" style="color: black;font-size: 28px;border: none;">×</span></button>
            <h4 class="modal-title">Contact Form</h4>
          </div>
          <div class="modal-body">
            <form accept-charset="UTF-8" role="form" class="col-md-12 ng-pristine ng-valid" id="get_report" novalidate="novalidate" action="thank-you.php">
              <input type="hidden" id="slid1" name="slid1" autocomplete="off">
              <input type="hidden" id="slid2" name="slid2" autocomplete="off">
              <input type="hidden" id="slid3" name="slid3" autocomplete="off">
              <input type="hidden" id="slid4" name="slid4" autocomplete="off">
              <input type="hidden" id="btnclick" name="btnclick" autocomplete="off" value="">
              <div class="row ">
                <div class="form-group col-xs-6">
                  <input type="text" id="name" class="form-control" name="FirstName" placeholder="Name*"  title="insert valid name" required style="height: 50px;">
                  <span class="validate" id="nm"></span>
                </div>
                <div class="form-group col-xs-6">
                  <input type="text" class="form-control" name="phone" id="phn" placeholder="Phone*" required style="height: 50px;">
                  <span class="validate" id="ph"></span>
                </div>
              </div>
              <div class="row ">
                <div class="form-group col-xs-6">
                  <input type="email" class="form-control" name="Email" id="email" placeholder="Email*" required style="height: 50px;">
                  <span class="validate" id="em"></span>
                </div>
                <div class="form-group col-xs-6">
                  <input type="text" class="form-control" name="url" placeholder="Website" required style="height: 50px;">
                </div>
              </div>
              <p>Service Required *: </p>
              <div class="checkbox">
                <label>
                    <input name="type[]" id="quote_service" value="" data-smartlook_2fecb6293ed16="false" type="checkbox">
                      Web Design </label>
              
                <label>
                    <input name="type[]" id="quote_service" value="" data-smartlook_2fecb6293ed16="false" type="checkbox">
                      SEO </label>
               <label>
                    <input name="type[]" id="quote_service" value="" data-smartlook_2fecb6293ed16="false" type="checkbox">
                      SMM </label>
              
                <label>
                    <input name="type[]" id="quote_service" value="" data-smartlook_2fecb6293ed16="false" type="checkbox">
                      PPC </label>
              
                <label>
                    <input name="type[]" data-smartlook_2fecb6293ed16="false" id="isCheckBox" type="checkbox" onclick="otherservice($(this))" value="">
                      Other Services </label>
              

              </div>
              <div class="row">
                <div class="form-group col-xs-6">
                  <div id="otherServices" style="display:none">
                    <input type="text" class="form-control" name="other" id="othserv" placeholder="Other Services" disabled="disabled">
                  </div>
                </div>
              </div>
             <!-- <div class="row ">
                <div class="form-group col-sm-6">
                  <input type="text" class="form-control" name="budget" id="bugt" placeholder="Estimated Budget*">
                  <span class="validate" id="bt"></span>
                </div>
              </div>-->
              <div class="form-group">
                <textarea class="form-control" placeholder="Project Details *" name="msg" id="msg" value="" style="height: 105px;"></textarea>
                <span class="validate" id="ms"></span>
              </div>

              <div class="form-group" style="float:left">
                 <a href="thank-you.php" class="blls"><button type="submit" class="btn-outline2" style="width:200px;float:left;height: 60px;">
                            Submit</button></a>
                </div>
              <div id="replay" style=""></div>
            <input type="hidden" name="page_url" value="" autocomplete="off"></form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
</div>
<!-- model boxes section-->


 <!-- about section page-->
 <section class="digital-marketing-info" style="padding-top: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                
                <div class="info-image">
                    <img src="img/services/services-page/1.png" class="img-responsive">
                </div>
            
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="info-data">
                    <h3>GET THE BEST OF WEB DESIGNING SERVICES IN INDIA TO CRAFT YOUR WEBSITE</h3>
                    <p style="font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;">Having a great website design ensures great user experience and user interaction. The users on the website can easily locate their desired elements which in turn improves the usability of the website. Great user experience has known to directly affect the conversion rates and user trust on the website. Our web design company has a team of creative individuals who are dedicated to design the best website for your website.</p>
                    <p style="font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;">We have a dedicated team of web designers who will help you create or improve your website design.
                        </p>
                        
                        <p style="font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;">	The resultant website will surely boost your conversion rate and improve your business.
                        </p>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
 <!--end-->
    <!-- service section start-->
    <div id="page" >
        <section class="features-4 about-us position-relative" >
            <div class="features4-block py-5">
        <h2 class="text-center w3layouts w3 w3l w3ls">EXPLORE OUR WEB DESIGNING SERVICE</h2>
  <span class="about-line"></span>
  <div class="row"><div class="col-md-1  "></div> 
            <div class="col-md-10 ">

  <p class="text-center w3layouts w3 w3l w3ls" style="font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a; text-align: justify;">We are a web design company that crafts compelling websites for the clients. The master wizards at our web design company have helped businesses to develop an amazing website. We have expertise in various sectors of web and graphic designing that can be beneficial to our clients in boosting their businesses. Here are some services that can be helpful for your design needs.</p>     
</div><div class="col-md-1"></div></div>  
<div class="container">
                    <div class="features4-grids text-center row ">
                        <div class="row">
                        <div class="col-lg-4 col-md-4 features4-grid">
                            <div class="features4-grid-inn" style="border-radius: 10px;">
                                <h5><a href="#URL">UI Design</a></h5>
                                
                                <img src="img/services/icon/1.png" style="width: 80px;">
                                <hr style="margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    width: 52px;
    border-top: 2px solid #a09c9c;">
                                <p style="font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;"> Get your website a user-centric design makeover improving your user interaction.</p>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 features4-grid sec-features4-grid">
                            <div class="features4-grid-inn" style="border-radius: 10px;">
                                <h5><a href="#URL">Responsive web design </a></h5>
                                <img src="img/services/icon/3.png" style="width: 80px;">
                                <hr style="margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    width: 52px;
    border-top: 2px solid #a09c9c;">
                                <p style="font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;">Go light on your website with our compelling design solutions.</p>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 features4-grid">
                            <div class="features4-grid-inn" style="border-radius: 10px;">
                                <h5><a href="#URL">E-commerce web design </a></h5>
                                <img src="img/services/icon/8.png" style="width: 80px;">
                                
                                <hr style="margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    width: 52px;
    border-top: 2px solid #a09c9c;">
                                <p style="font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;"> Showcase your products in the most compelling way possible with our design solutions.</p>

                            </div>
                        </div>
                       
                    </div>
                    </div>
                </div>
                <div class="icon-effects-w3l">

                <img src="img/icons/2.png" alt="" class="img-fluid  shape-w3-ten">
                <img src="img/icons/1.png" alt="" class="img-fluid shape-wthree shape-w3-eleven">
                <img src="img/shape3.png" alt="" class="img-fluid shape-wthree shape-w3-three">
                <img src="img/shape5.png" alt="" class="img-fluid shape-wthree shape-w3-four">
                <img src="img/shape4.png" alt="" class="img-fluid shape-wthree shape-w3-five">
                <img src="img/shape6.png" alt="" class="img-fluid shape-wthree shape-w3-six">
            </div>
            </div>
        </section>
        <!-- features-4 -->
    </div>
 
  <!-- process start-->

    <section class="about-us position-relative" style="margin-top: -59px; ">
    <h2 class="text-center w3layouts w3 w3l w3ls">OUR COMPLETE DIGITAL MARKETING PROCESS</h2>
  <span class="about-line"></span>
  <p class="text-center w3layouts w3 w3l w3ls" style="font-family: Open Sans,sans-serif; Font-size: 15px;Color: #546e7a;">We have an elaborate SEO and Digital Marketing with well-tested strategies and tactics.We employ a proven set of rules and process for a successful<br> digital marketing <approach class="T"></approach>his process promises a guaranteed  effect on your digital marketing effort.</p>   
                
<section  class="landing-page  hire-development   hidden-xs hidden-sm">
    
    <div class="container">
<div class="hiring-process">
        <div class="page-main" style="padding-top: 60px;">
            <div class="process-steps">
                <ul>
                    <li>
                        <div class="box">
                                <div class="details ptt" style="background: linear-gradient(110deg, #1ddcb4 45%, #08b1e7 60%);">
                                <img src="img/process/pp1.svg" style="    margin-top:1px;">


                                <h4 style="color: black;text-align: center;">Understand Client Business</h4>

                                <p class="vvv" style="font-family: Open Sans,sans-serif; Font-size: 15px;Color: #546e7a;">Our experts will carry out all needed analysis to understand your business.</p>

                                <h2>01</h2>

                            </div>
<img src="img/process/22.png" style="width: 194px;">

                            <span class="dots"></span>
 
                        </div>

                    </li>

                    <li>

                        <div class="box pro2">
    <div class="details" style="background: linear-gradient(110deg, #cfcfff 60%, #c8aeff 60%);">
                                <img src="img/process/pp.webp" style="    margin-top: 1px;">


                                <h4 style="color: black;text-align: center;">Analyze Opportunities</h4>

                                <p class="vvv" style="font-family: Open Sans,sans-serif; Font-size: 15px;Color: #546e7a;">The client needs and market condition would determine the basic strategy and tactics.</p>

                                <h2>02</h2>

                            </div>
<img src="img/process/21.png" style="width: 194px;">
                            <span class="dots"></span>

                        </div>

                    </li>

                    <li>

                        <div class="box pro3">
                            <div class="details" style="background: linear-gradient(110deg, #fa8887 60%, #fed04f 60%);">
<img src="img/process/pp2.svg" style="    margin-top: 1px;">

                                <h4 style="color: black;text-align: center;">Make a Plan</h4>

                                <p class="vvv" style="font-family: Open Sans,sans-serif; Font-size: 15px;Color: #546e7a;">Understanding the basic audience and focus the efforts on the target.</p>

                                <h2>03</h2>

                            </div>
<img src="img/process/23.png" style="width: 194px;">
                            <span class="dots"></span>

                        </div>

                    </li>

                    <li>

                        <div class="box pro4">
            <div class="details" style="background: linear-gradient(110deg, #39bffd 60%, #11e4fd 60%);">
<img src="img/process/pp3.webp" style="    margin-top: 1px;">
                                <h4 style="color: black;text-align: center;">Execute Strategy</h4>

                                <p class="vvv" style="font-family: Open Sans,sans-serif; Font-size: 15px;Color: #546e7a;">The experts will start executing their strategies based on the analysis.</p>

                                <h2>04</h2>

                            </div>
<img src="img/process/24.png" style="width: 194px;">
                            <span class="dots"></span>

                        </div>

                    </li>

                    <li>

                        <div class="box pro5">
                            <div class="details" style="background: linear-gradient(110deg, #f46183 60%, #f087dd 60%);">
<img src="img/process/pp4.svg" style="    margin-top: 1px;">
                                <h4 style="color: black;text-align: center;">Update Process Report</h4>

                                <p class="vvv" style="font-family: Open Sans,sans-serif; Font-size: 15px;Color: #546e7a;">Regular updates will be made available so that the client can track the result.</p>

                                <h2>05</h2>


                            </div>
                            <div class="pss">
<img src="img/process/25.png">
</div>

                            <span class="dots"></span>

                        </div>

                    </li>

                </ul>

            </div>
            
        </div>

    </div>
</div>

</section>

<section  class="landing-page   hidden-lg hidden-md">
    
    <div class="container">
        <div class="hiring-process">
                <div class="process-steps">
                    <center>
                        <div style="width:250px;" class="box">
                                <div class="details ptt" style="padding:20px;background: linear-gradient(110deg, #1ddcb4 45%, #08b1e7 60%);">
                                    <img src="img/process/pp1.svg" style="margin-top:1px;"><br><br>
    
                                    <center><h4 style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;Understand Client Business</h4></center>
    
                                    <p  style="font-family: Open Sans,sans-serif; Font-size: 15px;Color: #546e7a;">Our experts will carry out all needed analysis to understand your business.</p>
    
                                    <h2>01</h2>
    
                                </div>
                                <img src="img/process/22.png" style="">
    
                            <span class="dots"></span>
                        </div>
                        <div style="width:250px;" class="box pro2">
                                <div class="details" style="padding:20px;background: linear-gradient(110deg, #cfcfff 60%, #c8aeff 60%);">
                                    <img src="img/process/pp.webp" style="margin-top: 1px;"><br><br>
    
    
                                    <h4 style="color: black;text-align: center;">Analyze Opportunities</h4>
    
                                    <p style="font-family: Open Sans,sans-serif; Font-size: 15px;Color: #546e7a;">The client needs and market condition would determine the basic strategy and tactics.</p>
    
                                    <h2>02</h2>
                            
                                </div>
                            <img src="img/process/21.png">
                            <span class="dots"></span>

                        </div>
                        <div style="width:250px;" class="box pro3">
                                <div class="details" style="padding:20px;background: linear-gradient(110deg, #fa8887 60%, #fed04f 60%);">
                                    <img src="img/process/pp2.svg" style="margin-top: 1px;"><br><br>
    
    
                                    <h4 style="color: black;text-align: center;">Make a Plan</h4>
    
                                    <p style="font-family: Open Sans,sans-serif; Font-size: 15px;Color: #546e7a;">Understanding the basic audience and focus the efforts on the target.</p>
    
                                    <h2>03</h2>
                            
                                </div>
                            <img src="img/process/23.png">
                            <span class="dots"></span>

                        </div>
                        <div style="width:250px;" class="box pro4">
                                <div class="details" style="padding:20px;background: linear-gradient(110deg, #39bffd 60%, #11e4fd 60%);">
                                    <img src="img/process/pp3.webp" style="margin-top: 1px;"><br><br>
    
    
                                    <h4 style="color: black;text-align: center;">Execute Strategy</h4>
    
                                    <p style="font-family: Open Sans,sans-serif; Font-size: 15px;Color: #546e7a;">The experts will start executing their strategies based on the analysis.</p>
    
                                    <h2>04</h2>
                            
                                </div>
                            <img src="img/process/24.png">
                            <span class="dots"></span>

                        </div>
                        <div style="width:250px;" class="box pro5">
                                <div class="details" style="padding:20px;background: linear-gradient(110deg, #f46183 60%, #f087dd 60%);">
                                    <img src="img/process/pp4.svg" style="margin-top: 1px;"><br><br>
    
    
                                    <h4 style="color: black;text-align: center;">Update Process Report</h4>
    
                                    <p style="font-family: Open Sans,sans-serif; Font-size: 15px;Color: #546e7a;">Regular updates will be made available so that the client can track the result.</p>
    
                                    <h2>05</h2>
                            
                                </div>
                            <img src="img/process/25.png">
                            <span class="dots"></span>

                        </div>
                        
                    </center>
    
                </div>
        </div>
    </div>

</section>
<!--<div class="icon-effects-w3l">
    <img src="img/shape2.png" alt="" class="img-fluid shape-wthree shape-w3-two">
                <img src="img/shape3.png" alt="" class="img-fluid shape-wthree shape-w3-three">
                <img src="img/shape5.png" alt="" class="img-fluid shape-wthree shape-w3-four">
                <img src="img/shape4.png" alt="" class="img-fluid shape-wthree shape-w3-five">
                <img src="img/shape6.png" alt="" class="img-fluid shape-wthree shape-w3-six">


                <img src="img/icons/26.png" alt="" class="img-fluid shape-thr shape-w3-twices">
                <img src="img/icons/1.png" alt="" class="img-fluid shape-wthree shape-w3-eleven">
                <img src="img/icons/x5.png" alt="" class="img-fluid shape-wthree shape-w3-tt">
                
                </div>-->
</section>

<!-- process end-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<!-- new industry -->
<section class="about-us banner_w3lspvt position-relative" style="margin-top: -120px;">
  <h2 class="text-center w3layouts w3 w3l w3ls">Industries We Serve</h2>
  <span class="about-line"></span>
    
<div class="home-industry-sec">
    <div class="container">
      <div class="home-industry clearfix">
        <ul>
          <li>
            <div class="box">
              <div class="icon">
                <picture>
                  <source srcset="img/industry/icon/4.png">
                  <source srcset="img/industry/icon/4.png">
                  <img src="img/industry/icon/4.png" style="width: 80px;">
                </picture>                
              </div>
              <h3>Retail, Ecommerce</h3>
            </div>
          </li>
          <li>
            <div class="box">
              <div class="icon">
                <img src="img/industry/icon/6.png" alt="" style="width: 80px;">
              </div>
              <h3>Education &amp; e-learning</h3>
            </div>
          </li>
          <li>
            <div class="box">
              <div class="icon">
                <img src="img/industry/icon/7.png" alt="" style="width: 80px;">
              </div>
              <h3>Healthcare &amp; Fitness</h3>
            </div>
          </li>
          <li>
            <div class="box">
              <div class="icon">
                <img src="img/industry/icon/8.png" alt="" style="width: 80px;">               
              </div>
              <h3>Logistics &amp; Distribution</h3>
            </div>
          </li>
          <li>
            <div class="box">
              <div class="icon">
                <img src="img/industry/icon/10.png" alt="" style="width: 80px;">  
              </div>
              <h3>Social Networking</h3>
            </div>
          </li>
          <li>
            <div class="box">
              <div class="icon">
                <img src="img/icon-one.png" alt="" style="width: 80px;">
              </div>
              <h3>Real Estate</h3>
            </div>
          </li>
          <li>
            <div class="box">
              <div class="icon">
                <img src="img/industry/icon/11.png" alt="" style="width: 80px;">
              </div>
              <h3>Travel &amp; Hospitality</h3>
            </div>
          </li>
          <li>
            <div class="box">
              <div class="icon">
                <img src="img/industry/icon/12.png" alt="" style="width: 80px;">
              </div>
              <h3>Food &amp; Restaurant</h3>
            </div>
          </li>
          <li>
            <div class="box">
              <div class="icon">
                <img src="img/industry/icon/13.png" alt="" style="width: 80px;">
              </div>
              <h3>On-Demand<br> Solutions</h3>
            </div>
          </li>
          <li>
            <div class="box">
              <div class="icon">
                <img src="img/industry/icon/17.png" alt="" style="width: 82px;">
              </div>
              <h3>Gaming</h3>
            </div>
          </li>
        </ul>
      </div>
    </div>
    
  </div>
  <div class="icon-effects-w3l">
        <img src="img/26.png" alt="" class="img-fluid shape-wthr shape-w3-thp1">
        </div>

  </section>
<!-- Industry----------------------------------------->

 <!-- marketing section page-->
 <section class="digital-marketing-info" style="margin-top: -50px;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="info-image">
          <img src="img/services/services-page/4.png" class="img-responsive" style="width: 100%;">
        </div>
      </div>
      <div class="col-md-6 col-xs-12">
        <div class="info-data">
          <h3>WHY OPT FOR DIGITAL INFOWAYS?</h3>
          <p style="font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;">We have a team of creative graphic designers and expert web designers who are up to date with the latest design trends. They can sense the taste of your communication with the audience and show you the best design idea and integrate it beautifully in your website. This is the reason we are the best web designing company in India.</p>
          <ul>
            <li style="padding-left: 0px;font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;">We have a list of services ranging from web designing, logo designing, and social media post designing.
            </li>
            <li style="padding-left: 0px;font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;">We have a round the clock service and dedicated designing service to completely satisfy your design needs.
            </li>
          </ul>
        </div>
      </div>
      
    </div>
  </div>
</section>
 <!--end-->

<section class="service-content " style="margin-top: -35px;">
    <div class="container">
    
        <div class="row">
            <div class="col-md-7 " >
               


 <h1 style="    color: #070665;
    font-size: 33px;
    font-weight: 700;margin-bottom: 13px;text-transform: uppercase;">BENEFITS OF HIRING US</h1>
                <p style="margin-bottom:20px;text-align: justify;font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;">We are an expert team of digital marketing who use efficient methods to help our clients create a mark in the digital world.<br> </p><ul>
                <li >
                    <div class="row">
                    <div class="col-md-2"><img src="img/service-in/ana.png" style="width:70px;">
                        </div>
                        <div class="col-md-10">
                            <p style="text-align: justify; font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;">
                <span style=" font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;font-weight:bold">	Extensive experience –</span> We have been working in this industry for a long time. This has allowed us to work with many companies in distinct industry that helped us gather experience. This experience comes in handy when we accept new projects.
            </p>
            </div>
        </div>
    </li>
                <li>
                    <div class="row">
                <div class="col-md-2"><img src="img/service-in/target.png" style="width:70px;">
                        </div>
                        <div class="col-md-10">
                        <p style="text-align: justify;font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;"><span style=" font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;font-weight:bold">	Better results – </span>With extensive experience in the field we can cultivate better results for your brand’s online marketing. We use well tested methods that have shown results in the past and employ them to market your brand.
                        </p></div>
                    </li>
                    
                    <li>
                        <div class="row">
                    <div class="col-md-2"><img src="img/service-in/cont.png" style="width:70px;">
                        </div>
                        <div class="col-md-10">
                        <p style="text-align: justify;font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;"><span style=" font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;font-weight:bold">	One-stop solution – </span>Digital Infoways is a place where you can find the solution to all Digital marketing needs in one place. We cover all aspects of digital marketing which makes us a rare company in the industry.
                        </p></div>
                    </div>
                </li>
                </ul></div>
<div class="col-md-5  double-screenshot "> 
    <img src="img/service-in/21.webp" style="width: 300px;
    height: 280px;">
    <img src="img/service-in/21.webp" alt="Service Section Image" style="width: 300px;
    height: 280px;"></div>
</div>
</div></section>

<!-- why choose us-->
 <?php ('../why_work_with_us.php'); ?>
<!-- faQ section-->
<section class="about-us banner_w3lspvt position-relative">
    <div class="sha">
        <p>FAQ</p>
    <h2 class="text-center  w3 w3l w3ls">FAQ</h2>
    <span class="about-line"></span>
    <p class="text-center  w3 w3l w3ls" 

style="font-family: Open Sans,sans-serif; Font-size: 16px; Color: #546e7a;">Something on your mind? Find all your answers here!</p>
</div>
    <div class="container">
        
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 about-w3ls1">
                
                <!-- ACCORDION -->
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <h3 class="fq" style="    text-align: left;">Freequently Ask Questions</h3>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="panel-title asd" style="font-family: Open Sans,sans-serif; Font-size: 17px;text-align:left;">
                                    <!--<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><i class="glyphicon  glyphicon-chevron-up" aria-hidden="true"></i>-->
                                     Can I expect all my designing needs met through your services?
                                </h4>   
                            </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body panel_text">
                                <div class="scrollbar" id="style-2" style="text-align: justify;font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;">
                                   
Absolutely! Digital Infoways has one of the best designing teams in the country. We are here for all your designing needs starting from logo designing to UI/UX designing to everything.

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 class="panel-title asd" style="font-family: Open Sans,sans-serif; Font-size: 17px;text-align:left;">
                                    <!--<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><i class="glyphicon  glyphicon-chevron-up" aria-hidden="true"></i>-->
                                   Am I required to meet you in person?
                                </h4>   
                            </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body panel_text" style="font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a; text-align: justify;">
                                
It is not required for you to meet us but we will not discourage any moves from your side. According to standard protocol all the correspondence will be done through email, Skype, and via phone calls.

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="panel-title asd" style="font-family: Open Sans,sans-serif; Font-size: 17px;text-align:left;">  
                                    <!--<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><i class="glyphicon  glyphicon-chevron-up" aria-hidden="true"></i>-->
                                   Who will have the ownership of the work after designing?                                   
                                </h4>
                            </a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body panel_text" style="font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;text-align: justify;">
                                
After the work is done you will have the complete ownership of all the work. Although a good review will be appreciated if you like our work.

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfour">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                <h4 class="panel-title asd" style="font-family: Open Sans,sans-serif; Font-size: 17px;text-align:left;">  
                                    <!--<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><i class="glyphicon  glyphicon-chevron-up" aria-hidden="true"></i>-->
                                     How will you make sure that I am satisfied with the design work?                                  
                                </h4>
                            </a>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body panel_text" style="font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;text-align: justify;">
                               
Designing work has no quantifying base on which you can judge the work. Here your input comes really handy for us since it’s your project. You will have the last say in all the work done by us.

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                <h4 class="panel-title asd" style="font-family: Open Sans,sans-serif; Font-size: 17px;text-align:left;">  
                                   <!-- <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><i class="glyphicon  glyphicon-chevron-up" aria-hidden="true"></i>-->
                                   How do I hire Digital Infoways for web designing?                                 
                                </h4>
                            </a>
                        </div>
                        <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body panel_text" style="font-family: Open Sans,sans-serif; Font-size: 15px; Color: #546e7a;text-align: justify;">
                               
Fill out the form below to get in touch with us. We will get back to you soon and we can discuss further about your needs.

                            </div>
                        </div>
                    </div>

                </div>
            
        </div>
            <div class="col-lg-6 col-md-6 col-sm-6 ">
                <div id="Fader" class="fader"> 
                    <img class="slide img-responsive" src="img/services/services-page/2.png" alt="" title=""> 
                    <div class="fader_controls">
                        <ul class="pager_list">
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
   <!-- <div class="icon-effects-w3l">

                <img src="img/shape1.png" alt="" class="img-fluid shape-wthree shape-w3-one">
                <img src="img/shape2.png" alt="" class="img-fluid shape-wthree shape-w3-two">
                <img src="img/shape3.png" alt="" class="img-fluid shape-wthree shape-w3-three">
                <img src="img/shape5.png" alt="" class="img-fluid shape-wthree shape-w3-four">
                <img src="img/shape4.png" alt="" class="img-fluid shape-wthree shape-w3-five">
                <img src="img/shape6.png" alt="" class="img-fluid shape-wthree shape-w3-six">
            </div> --> 

</section>
<!--end-->
<!-- testimonial section ----------------------------------------------------->
<section class="testimonials banner_w3lspvt position-relative" style="margin-top: -40px;">
    <div class="sha">
        <p>CLIENTS AND TESTIMONIAL</p>
    <h3 class="text-center agileits agileinfo wthree w3-agileits" >Clients and Testimonial</h3>
    <p class="text-center agileits agileinfo wthree w3-agileits" 

style="font-family: Open Sans,sans-serif; Font-size: 16px; Color: #546e7a;">Listen to what our happy clients have to say about us.</p>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="space">
                                <img src="img/Picture.png" style="width: 182px;">
                                <img src="img/Picture3.png" style="width: 167px;">
                                <img src="img/Picture2.png" style="width: 182px;">
                                
                            </div>
                            <div class="space">
                                <img src="img/bans.png" style="width: 170px ;margin-right: 10px;">
                                <img src="img/Picture4.png" style="width: 157px;margin-right:8px;">
                                <img src="img/Picture5.png" style="width: 162px;">
                               
                            </div>
        <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover" style="background: #f2f4f5;
    border: ipx solid gray;
    
    border-radius: 10px;
    border-top: 2px solid #5c2082;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel1" data-slide-to="1"></li>
                <li data-target="#myCarousel1" data-slide-to="2"></li>
                <li data-target="#myCarousel1" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <blockquote>" Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. "</blockquote>
                    <img src="img/test1.png" alt="test1" class="img-responsive test">
                    <h4 class="text-center"><span>Johnny Blaze</span> - Business Man</h4>
                </div>
                <div class="item">
                    <blockquote>" Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. "</blockquote>
                    <img src="img/test2.png" alt="test1" class="img-responsive test">
                    <h4 class="text-center"><span>Kate Winslet</span> - Executive Manager</h4>
                </div>
                <div class="item">
                    <blockquote>" Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. "</blockquote>
                    <img src="img/test3.png" alt="test1" class="img-responsive test">
                    <h4 class="text-center"><span>Max Payne</span> - CEO</h4>
                </div>
                <div class="item">
                    <blockquote>" Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. "</blockquote>
                    <img src="img/test4.png" alt="test1" class="img-responsive test">
                    <h4 class="text-center"><span>Britney Spears</span> - Marketing Manager</h4>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <div class="ss_new" style="text-align: center;">

<div class="rate0">
<span><img width="16" height="27" src="img/stars.png" alt="Rating"></span>
<span><img width="16" height="27" src="img/stars.png" alt="Rating"></span>
<span><img width="16" height="27" src="img/stars.png" alt="Rating"></span>
<span><img width="16" height="27" src="img/stars.png" alt="Rating"></span>
<span><img width="16" height="27" src="img/stars.png" alt="Rating"></span>
</div>
<div class="rate1">
<span itemscope="" itemtype=""><span itemprop="name" style="display:none">ResultFirst</span><meta itemprop="url" content=""><span itemprop="aggregateRating" itemscope="" itemtype=""><span itemprop="ratingValue">4.9</span>/<span itemprop="bestRating">5</span> based on<span itemprop="ratingCount"> 43 </span>ratings and reviews</span></span>
</div>
</div>
        </div>
    </div>

<div class="col-md-6">
    <h2 class=" get agileinfo wthree w3-agileits agileits-w3layouts agile w3-agile">Get In Touch</h2>
                <form action="thank-you.php" method="post">
                    <div class="row">
                        <div class=" col-md-12">
                            <input type="text" class="form-control user-name" placeholder="Your Name" required style="margin-bottom: 13px;" />
                        </div>
                        <div class=" col-md-12">
                            <input type="email" class="form-control mail" placeholder="Your Email" required style="margin-bottom: 13px;"/>
                        </div>
                        <div class=" col-md-12">
                            <input type="tel" class="form-control pno" placeholder="Your Phone Number" required style="margin-bottom: 13px;"/>
                        </div>
                        <div class="clearfix"></div>
                        <div class=" col-md-12">
                            <textarea class="form-control" rows="6" placeholder="Your Message" required style="margin-bottom: 13px;"></textarea>
                        </div>
                        <div class=" col-md-12" >
                            <button type="submit" class="btn-outline2" style="width:200px;float:left;    height: 51px;">Submit</button>

                        </div>
                    </div>
                </form>
                
                
        

    </div>
    </div>
</div>
<div class="icon-effects-w3l">

            
<img src="img/shape1.png" alt="" class="img-fluid shape-wthree shape-w3-one">
                <img src="img/shape2.png" alt="" class="img-fluid shape-wthree shape-w3-two">
                <img src="img/shape3.png" alt="" class="img-fluid shape-wthree shape-w3-three">
                <img src="img/shape5.png" alt="" class="img-fluid shape-wthree shape-w3-four">
                <img src="img/shape4.png" alt="" class="img-fluid shape-wthree shape-w3-five">
                <img src="img/shape6.png" alt="" class="img-fluid shape-wthree shape-w3-six">

                
                
            </div>  

</section>-->
</main>

<?php include('footer.php'); ?>


          <script src="js/jquery-1.11.1.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
         <script src="js/jquery.singlePageNav.min.js"></script>
         <script src="js/jquery.fancybox.pack.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
         <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
         <script src="js/wow.min.js"></script>
         <script src="js/main.js"></script>
       
<script src="js/slideshow.js"></script>
<script type="text/javascript">
                            $(window).load(function() {
                                $("#flexiselDemo1").flexisel({
                                    visibleItems: 4,
                                    animationSpeed: 1000,
                                    autoPlay: true,
                                    autoPlaySpeed: 3000,            
                                    pauseOnHover: true,
                                    enableResponsiveBreakpoints: true,
                                    responsiveBreakpoints: { 
                                        portrait: { 
                                            changePoint:480,
                                            visibleItems: 1
                                        }, 
                                        landscape: { 
                                            changePoint:640,
                                            visibleItems:2
                                        },
                                        tablet: { 
                                            changePoint:768,
                                            visibleItems: 3
                                        }
                                    }
                                });
                                
                            });
                    </script>
                    <script type="text/javascript" src="js/jquery.flexisel.js"></script>

<script>
function ratestar() {
  var a;
  a = document.getElementById("div1");
  a.innerHTML = "&#xf006;";
  setTimeout(function () {
      a.innerHTML = "&#xf123;";
    }, 1000);
  setTimeout(function () {
      a.innerHTML = "&#xf005;";
    }, 2000);
}
ratestar();
setInterval(ratestar, 3000);
</script>
                <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
                    <script type="text/javascript">
                    $(function () {
                        
                        var filterList = {
                        
                            init: function () {
                            
                                $('#portfoliolist').mixitup({
                                    targetSelector: '.portfolio',
                                    filterSelector: '.filter',
                                    effects: ['fade'],
                                    easing: 'snap',
                                    onMixEnd: filterList.hoverEffect()
                                });             
                            
                            },
                            
                            hoverEffect: function () {
                            
                                // Simple parallax effect
                                $('#portfoliolist .portfolio').hover(
                                    function () {
                                        $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                        $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');             
                                    },
                                    function () {
                                        $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                        $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');                               
                                    }       
                                );              
                            
                            }
                
                        };
                        
                        // Run the show!
                        filterList.init();
                        
                        
                    }); 
                    </script>
                     <script>
        (function() {
            var cx = '017313756277451895803:q7p-r6s0cbq';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
        })();
    </script>
   <script src="js/jquery.waypoints.min.js"></script>
 <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<script>
var modal = document.getElementById('id01');

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ef1e1ae9e5f6944229122fc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>
</html>