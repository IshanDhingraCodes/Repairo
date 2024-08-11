<?php
include 'header.php';
?>

<!-- carousel -->


<div id="carouselmain" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselmain" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselmain" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselmain" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselmain" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item caption1 active">
      <img src="./Images/c1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption caption1 ">
        <h2><span class="text-secondary">Black</span> Viper</h2>
        <p>We Love Modifying Vehicles</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Images/c2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption caption2 ">
        <h2><span class="text-danger">Red</span> Hawk</h2>
        <p>We Love Modifying Vehicles</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Images/c3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption caption3">
        <h2>Orange <span class="text-light"> Dragon</span></h2>
        <p>We Love Modifying Vehicles</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Images/c4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption caption4">
        <h2>Gang<span class="text-secondary">ster</span></h2>
        <p>We Love Modifying Vehicles</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselmain" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselmain" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- categories -->
    <div class="container mt-5"  >
      <div class="row">
        <h1 class="categories display-1 text-center text-light fw-bolder">categories</h1>
      </div>

      <div class="row mt-3">
        <p class="categories-text text-light text-center justify ">Below are our core competencies and some of our best creations.
          Feel free to scroll through:-
        </p>
      </div>
    </div>
    
<!-- modification -->

<div class="modification-area mt-5" id="Modification" >
  <div class="container">
    <div class="row ms-auto">
      <div class="col-lg-6 ">
        <div class="modification-text">
          <hr class="bg-light text-light" >
          <div class="text-center">
          <a href="modification.php" class="btn"><h1 class="display-2 text-center fw-bold">modification</h1></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="img-area text-center ">
          <img src="./Images/01.png" alt="01" height="100px" >
        </div>
      </div>
  </div>
    <div class=" mt-4" >
      <div id="carouselmodifier" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselmodifier" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselmodifier" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselmodifier" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./Images/BA1.png" class="d-block w-100" alt="BA1">
          </div>
          <div class="carousel-item">
            <img src="./Images/BA2.png" class="d-block w-100" alt="BA2">
          </div>
          <div class="carousel-item">
            <img src="./Images/BA3.png" class="d-block w-100" alt="BA3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselmodifier" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselmodifier" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> 
    </div>
  </div>
</div>

<!-- lounge -->

<div class="lounge-area  mt-5" id="lounge">
  <div class="container">
    <div class="row ">
        <div class="col-lg-6 ">
          <div class="img-area text-center">
            <img src="./Images/02.png" alt="01" height="100px">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="lounge-heading">
            <hr class="bg-light text-light" >
            <div class="text-center">
              <a href="lounge.php" class="btn"><h1 class="display-2 text-center fw-bold">lounge</h1></a>
            </div>
            <p class="mt-4 text-light lounge-text justify">
              An elegantly designed lounge fit for a king. Luxuriously hand crafted as per the customer’s needs that can be customized to the core. Get one for yourself now by clicking the link below.</p>
          </div>
        </div>
    </div>
    <div id="carousellounge" class="carousel slide mt-5" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousellounge" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousellounge" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousellounge" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./Images/l1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./Images/l2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./Images/l3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousellounge" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousellounge" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  </div>

  <hr class="bg-light text-light mt-5" >



  <!-- ABOUT -->
   
  <div class="about-area mt-5" id="about">
    <div class="container">
          <div class="row">
            <div class="col-lg-12">
            <h1 class="about-heading text-center fw-bold text-light">ABOUT <span class="text-danger">REP</span>AIRO</h1>
            </div>
          </div>
          <div class="row mt-5">
            <div class="container">
              <h2 class="about-heading text-light">We Make <span class="text-danger">Things Personal</span></h2>
              <p class="mt-4 text-light about-text justify">Repairo was founded in 2023 in Pune, Maharashtra. We are known among the world’s finest automotive personalization companies with over 20 years of experience in customization.</p>
              <p class="mt-4 text-light about-text justify">After working in the industry for over two decades, we saw a lot big gap between the supply and demand for customized automobiles. We pride our expertise to fulfil the demand and give users an experience of master pieces which they will treasures for years to come.</p>
            </div>
          </div>
    </div>   
  </div>

  <div class="container ">
    <div class="row">
      <div class="col-lg-8 mt-5">
        <h2 class="about-heading text-light ">Our <span class="text-danger">Leadership</span></h2>
        <p class="mt-4 text-light about-text justify">Repairo is a brainchild of "Mr. Arshdeep Singh Sandhu" who is the Founder and Director of the company. With a degree in Mechanical Engineering; he comes with experience of decades in high-end automobile customization, R & D and building a vehicle.</p>
        <p class="mt-4 text-light about-text justify">Arshdeep set out to pursue his dream to start an automobile personalization company with the vision to provide bespoke design especially to suit specific design requirements, customer style and comfort at highly competitive price.</p>
        <p class="mt-4 text-light about-text justify">Reddy customs was born out of the fact that there is a huge gap between supply and demand for vehicle customization in India. We take pride in our superior skill to fulfil the desires of our customers.</p>
      </div>
      <div class="col-lg-4">
        <img src="./Images/owner.png" alt="owner" height="400px" width="100%">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <h2 class="about-heading text-light">Why <span class="text-danger">"Repairo"</span></h2>
      </div>
    </div>
    <div class="row ">
      <div class="col-lg-6">
        
        <ul class="list text-light justify">
          <li class="list-item about-text"><i class="fa-solid fa-square" style="color: #ff0000;"></i> Always in - line with customers need</li>
          <li class="list-item about-text"><i class="fa-solid fa-square" style="color: #ff0000;"></i> Highly Competitive Pricing</li>
          <li class="list-item about-text"><i class="fa-solid fa-square" style="color: #ff0000;"></i> Updated with latest market trends</li>
          <li class="list-item about-text"><i class="fa-solid fa-square" style="color: #ff0000;"></i> Quick turnaround time</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <ul class="list text-light justify">
          <li class="list-item about-text"><i class="fa-solid fa-square" style="color: #ff0000;"></i> Attention to details.</li>
          <li class="list-item about-text"><i class="fa-solid fa-square" style="color: #ff0000;"></i> Best in Industry, after sales support</li>
          <li class="list-item about-text"><i class="fa-solid fa-square" style="color: #ff0000;"></i> High quality products</li>
        </ul>
      </div>
    </div>
  </div>  

  <hr class="bg-light text-light mt-5" >



<!-- services -->

  <div class="service-area " id="services">
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-12">
       <h1 class="service-heading text-center fw-bold text-light">OUR <span class="text-danger">SERVICES</span></h1> 
        </div>
      </div>
      <div class="row mt-5" data-aos="fade-up"  >
        <div class="col-lg-3 mt-5 " data-aos="fade-up" >
          <div class="text-center">
          <img src="./Images/s1.png"  alt="s1" height="100px"  >
            <h5 class="card-title text-light mt-3 service-heading">Personalised designs</h5>
          </div>
            <p class="card-text text-light p-3 justify ">Superior custom designs, built by dedicated and specialized team of auto-artisans to meet the exact needs of our customers imaginations.</p>
        </div>
        <div class="col-lg-3 mt-5" data-aos="fade-up">
          <div class="text-center">
          <img src="./Images/s2.png"  alt="s2" height="100px"  >
            <h5 class="card-title text-light mt-3 service-heading">Customer Comfort</h5>
          </div>
            <p class="card-text text-light p-3 justify">Premium interiors for a uber comfortable experience.</p>
        </div>
        <div class="col-lg-3 mt-5 " data-aos="fade-up">
          <div class="text-center">
          <img src="./Images/s3.png"  alt="s3" height="100px"  >
            <h5 class="card-title text-light mt-3 service-heading">Best Industry Quality</h5>
          </div>
            <p class="card-text text-light p-3 justify">Our team of highly trained technicians inspect each product at multiple check points to ensure best in industry quality.</p>
        </div>
        <div class="col-lg-3 mt-5" data-aos="fade-up">
          <div class="text-center">
          <img src="./Images/s4.png"  alt="s4" height="100px"  >
            <h5 class="card-title text-light mt-3 service-heading">Competitive Pricing</h5>
          </div>
            <p class="card-text text-light p-3 justify">Our refined production processes, helps us provide highly competitive pricing on our entire product line.</p>
        </div>
      </div>


      <div class="row mt-5 ">
        <!-- Button trigger modal -->
        <div class="text-center ">
          <button type="button" class="btn btn-danger button5" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="model-button service-heading">View All Services</span>
            <i class="fa-solid fa-arrow-right ps-2 m-0" style="color: #000000;"></i>
          </button>
        </div>
        <!-- Modal -->
        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content bg-dark">
              <div class="modal-body">

                <div class=" text-center">
                  <h5 class="modal-title text-light service-heading" id="exampleModalLabel">OUR <span class="text-danger">SERVICES</span></h5>
                </div>

                <hr class="bg-light text-light mt-4" >

                <div class="row mt-5">
                  <div  class="col-lg-6 mt-5" >
                    <img src="./Images/service-1.png"  alt="service-1" width="100%"  >
                  </div>
                  <div class="col-lg-6 mt-2">
                    <h2 class="text-center text-light service-heading">PERSONALISATION</h2>
                    <ul class="list text-light card-text justify">
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>It may be the car of your dream or a family legacy!</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>We can personalize it exactly the way you dreamt. You can rely on us for your complete comfort and luxury.</li>
                    </ul>
                    <hr class="bg-light text-light mt-5" >
                    <h4 class="text-center text-light service-heading">OUR CREATIVE FEATURES</h4>
                    <ul class="list text-light card-text justify">
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Premium leather seats</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Laminated trims</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Mood lights</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Reclining captain seats</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Hi-Tech entertainment systems</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Premium Paints</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Body Kits</li>
                    </ul>
                  </div>
                </div>

                <hr class="bg-light text-light mt-5" >

                <div class="row mt-5">
                  <div class="col-lg-6 mt-2">
                    <h2 class="text-center text-light service-heading">MOTOR HOMES & OFFICES</h2>
                    <ul class="list text-light card-text justify">
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Love to go on long drive with feel & all the comforts like at home! Your search will end up with our "Motor Home" segment & you can enjoy your trip to explore the world.</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Office On Wheels! we can make your workspace to move anywhere you desire to grow your business.</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Our specialization of customized "Vanity Vans" for the corporate industry to get more luxurious experience outdoors.</li>
                    </ul>
                    <hr class="bg-light text-light mt-5" >
                    <h4 class="text-center text-light service-heading">OUR CREATIVE FEATURES</h4>
                    <ul class="list text-light card-text justify">
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Lounge seating</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Mood lighting</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Shower cabins and Chemical toilets</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Conference tables and video conferencing capability</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Top of the line entertainment systems</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Comfortable sleeping areas</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Modern gadgetry like outdoor cameras, driver intercom and control of the interiors using handheld devices.</li>
                    </ul>
                  </div>
                  <div class="col-lg-6 mt-5">
                    <img src="./Images/service-2.png"  alt="service-2" width="100%">
                  </div>
                </div>

                <hr class="bg-light text-light mt-5" >

                <div class="row mt-5">
                  <div class="col-lg-6 mt-5">
                    <img src="./Images/service-3.png"  alt="service-3" width="100%">
                  </div>
                  <div class="col-lg-6 mt-2">
                    <h2 class="text-center text-light service-heading">BUS BODY BUILDING</h2>
                    <ul class="list text-light card-text justify">
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Our vast experience in building "Motor Homes" & "Office on Wheels" makes us one of the most sought after companies in India for premium body building of buses & travellers.</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Our vehicles to provide utmost luxury & Comfort</li>
                    </ul>
                    <hr class="bg-light text-light mt-5" >
                    <h4 class="text-center text-light service-heading">OUR CREATIVE FEATURES</h4>
                    <ul class="list text-light card-text justify">
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Reclinable Captain Seats</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Personal entertainment systems for every passenger</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>On - board chemical toilets</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>On - board pantry</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Aircraft - like reading lights</li>
                    </ul>
                  </div>
                </div>

                <hr class="bg-light text-light mt-5" > 

                <div class="row mt-5">
                  <div class="col-lg-6 mt-2">
                    <h2 class="text-center text-light service-heading">SPECIALISED ACCESSORIES</h2>
                    <ul class="list text-light card-text justify">
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>We develop & Build highly specialized accessories to make your travel ultra comfortable.</li>
                    </ul>
                    <hr class="bg-light text-light mt-5" >
                    <h4 class="text-center text-light service-heading">OUR CREATIVE FEATURES</h4>
                    <ul class="list text-light card-text justify">
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Motorised step</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Revolving seats</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Automatic Wheelchair Seat</li>
                    </ul>
                  </div>
                  <div class="col-lg-6 mt-5">
                    <img src="./Images/service-4.jpg"  alt="service-4" width="100%">
                  </div>
                </div>

                <hr class="bg-light text-light mt-5" >

                <div class="row mt-5">
                  <div class="col-lg-6 mt-5">
                    <img src="./Images/service-5.png"  alt="service-5" width="100%">
                  </div>
                  <div class="col-lg-6 mt-2">
                    <h2 class="text-center text-light service-heading">SPECIALISED VEHICLES</h2>
                    <ul class="list text-light card-text justify">
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>We Customized special purpose vehicles to promote and support the business</li>
                    </ul>
                    <hr class="bg-light text-light mt-5" >
                    <h4 class="text-center text-light service-heading">OUR CREATIVE FEATURES</h4>
                    <ul class="list text-light card-text justify">
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Product Display Vans</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>ATM Vans</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Ambulances</li>
                    </ul>
                  </div>
                </div>

                <hr class="bg-light text-light mt-5" >

                <div class="row mt-5">
                  <div class="col-lg-6 mt-2">
                    <h2 class="text-center text-light service-heading">VEHICLE BRANDING</h2>
                    <ul class="list text-light card-text justify">
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Your Company vehicle may reflect your brand image. We can portray it to look alike an eternal part of your organization</li>
                    </ul>
                    <hr class="bg-light text-light mt-5" >
                    <h4 class="text-center text-light service-heading">OUR CREATIVE FEATURES</h4>
                    <ul class="list text-light card-text justify">
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Digital stickering or badges for logo and company identity</li>
                      <li class="list-item"><i class="fa-solid fa-square" style="color: #ff0000;"></i>Paint schemes to match your company branding</li>
                    </ul>
                  </div>
                  <div class="col-lg-6 mt-5">
                    <img src="./Images/service-6.png"  alt="service-6" width="100%">
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>

  <hr class="bg-light text-light mt-5" >




<!-- testimonials -->

  <div class="container mt-5">
    <div class="testimonial-area" id="testimonial">
      
      <div class="row">
        <div class="col-lg-6 p-3">
          <h1 class="display-1 text-center text-light fw-bolder float-start overview-header ">an overview</h1>
        </div>
        <div class="col-lg-6 p-3">
          <div class="verticalLine">
            <div class="explore-content p-3">
             <p class="explore-text text-light justify ">We Repairo, an Executive Group Company that was launched to satisfy your passion and introduce in India unique innovations for lovers of novel feature on automobiles . . .</p>
             <a href="index.php">
               <button type="button"  class="btn btn-transparent explore-button" >
                  <span class="explore-link text-danger">Explore More</span>
                  <i class="fa-solid fa-arrow-right ps-2 m-0" style="color: #ff0303;"></i>
               </button>
              </a>
           </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 text-center mt-5">
          <video  controls loop>
            <source src="./Images/crysta-lounge.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
        </div>
      </div> 

      <div class="row">
        <div class="col-lg-12  mt-4 ">
          <h1 class="display-1  text-light fw-bolder testimonial-text ">testimonial</h1>
        </div>
      </div>

    </div>
  </div>

  <hr class="bg-light text-light mt-5" >



  
<!--reviews-->

<div id="carouselExampleControls" class="carousel reviews slide mt-5 mb-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <div class="container">
          <h5 class="mb-3 text-light text-center">Utshek Jain</h5>
          <p class="text-muted p-3 justify">
            <i class="fas fa-quote-left pe-2"></i>
            I've modified my THAR with hardtop. This hardtop is almost similar to Mopar Wrangler Hard Top.
						Work includes half body change, all new glasses, full body paint. All these customizations are done by Repairo. They did a very good job. I thank them and appreciate their efforts. Good luck for their future.
          </p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <div class="container">
          <h5 class="mb-3 text-light text-center">DK Prajapati</h5>
          <p class="text-muted p-3 justify">
            <i class="fas fa-quote-left pe-2"></i>
            For providing the awesome dream cars in the budget segment of people. They're doing a good job. Thank for doing this. 
          </p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <div class="container">
          <h5 class="mb-3 text-light text-center">Sachin Mendon</h5>
          <p class="text-muted p-3 justify">
            <i class="fas fa-quote-left pe-2"></i>
            Really excellent work done here at reasonable rates. The owner is very helpful and guides in various processes, giving ideas and suggestions for designing and modeling of the car. 
          </p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <div class="container">
          <h5 class="mb-3 text-light text-center">Fareed Ali Khan</h5>
          <p class="text-muted p-3 justify">
            <i class="fas fa-quote-left pe-2"></i>
            Repairo team covering the field of creating conceptualized rich, lavish, comfortable, interiors on several vehicles.
          </p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <div class="container">  
            <h5 class="mb-3 text-light text-center">Sumit Talwar</h5>
            <p class="text-muted p-3 justify">
              <i class="fas fa-quote-left pe-2"></i>
              Mera naam Sumit Talwar hai. Maine apni car ka mumbai me Repairo se modification karwaya tha meri car Repairo ne bahut osm banai hai jaise main chahta tha mujhe vaisi hi car bna ke di hai. Car me material bahut acha or solid lagaya hai or minimum price me mujhe car mili hai.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="text-center">
<a href="feedback.php" class="btn button-62 text-light fw-bold">More Feedbacks ...</a>
</div>


<?php
include 'footer.php';
?>
