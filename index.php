<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
        include "assets/include/css.php";
    ?>
    
    <!-- <link rel="stylesheet" href="style.css"> -->
    
    <style>
        .dataimg{
            background-image: url('data.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 400px;
            /* background-position: center center; */
            /* background-attachment: fixed; */
        }
    </style>
    <title>Home page</title>
</head>
<body>
<section class="content">
    <?php
        include "assets/include/header.php";
    ?>
        
        

     

        <div class="container-fluid text-light bg-dark dataimg border">

            <div class="row align-items-center g-lg-5 py-5 container-fluid border-light m-0" >
                <div class="col-lg-9 col-12 col-sm-6 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3 text-center">This is home of real homez</h1>
                    <p class="col-lg-10 fs-4 text-center">This is demo tesing</p>
                </div>

                <!-- <div class="col-lg-3 col-12 col col-sm-6 d-block ">
                    <form id="myForm" method="post" action="send.php" class="mx-auto d-block">
                        <h3 class="text-center">contact us</h3>
                        <div class="form-group">
                           
                            <input type="text" class="form-control mb-3" id="name" placeholder="Your Name" name="name">
                             <span id="nameError" class="error text-danger"></span>
                        </div>
                        <div class="form-group">
                            
                            <input type="email" class="form-control mb-3" id="email" placeholder="Your Email" name="email">
                            <span id="emailError" class="error text-danger"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="phone" placeholder="Your Phone Number" name="number">
                            <span id="phoneError" class="error text-danger"></span>
                        </div>
                        <input value="submit" type="submit" class="btn btn-primary my-btn" name="submit">
                    </form>
                </div> -->

            </div>

        </div>
</section>    

<!-- overview section -->
<section class="mt-5" id="overview">
    <div class="container">
        <h2>About Gaur Yamuna City Mall</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.:</p>
        <div id="moreText"> Ipsum illo distinctio fugit officiis mollitia facilis cupiditate quasi harum perspiciatis molestias fuga, architecto iste? Quasi hic vel exercitationem enim! Animi, ea.</div>
        <button id="readMoreBtn" class="btn btn-primary" type="btn">Read More</button>

        
    </div>

    <div class="container mt-5">
        <table class="table table-striped table-hover border">
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Renox</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Department Status</td>
                    <td>Under Construction</td>
                </tr>
                <tr>
                    <td>Rera Approved</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Rera Number</td>
                    <td>Comming Soon</td>
                </tr>
                <tr>
                    <td>3041 SQFT</td>
                    <td>4BHK</td>
                </tr>
                <tr>
                    <td>Price per Sqft</td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            <div class="col col-12 col-lg-4 col-md-4 mb-4 text-center">
                <div class="card h-100 shadow1  p-4 border">
                    <div class="lc-block card-body ">
                        <div class="lc-block mb-4">
                            <i class="fa-brands fa-youtube" style="font-size: 100px;"></i>
                        </div>
                        <div class="lc-block">
                            <div editable="rich">
                                <h3>hello world my</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-4 col-md-4 mb-4 text-center ">
                <div class="lc-block card h-100 shadow1  p-4 link-info">
                    <div class="lc-block card-body ">
                        <div class="lc-block mb-4">
                            <i class="fa-brands fa-youtube" style="font-size: 100px;"></i>
                        </div>
                        <div class="lc-block">
                            <div editable="rich">
                                <h3>hello world my</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-4 col-md-4 mb-4 text-center ">
                <div class="lc-block card h-100 shadow1  p-4 link-danger">
                    <div class="lc-block card-body ">
                        <div class="lc-block mb-4">
                            <i class="fa-brands fa-youtube" style="font-size: 100px;"></i>
                        </div>
                        <div class="lc-block">
                            <div editable="rich">

                                <h3>hello world my</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 


</section>

<section class="container-fluid key-featur-color" id="keyfeautre">
    
    <div class="key-featur-color">
        <div class="container p-2">
                <h2 class="text-center text-light"> The Key Features of The Islands by Gaurs</h2>
            <div class="row">
                <div class="col col-12 col-lg-6 col-md-6 p-0 p-md-3 text-light">
                    <div class="bg-light p-3 w-100">
                        <img src="https://gaurstheislands.in/landing-page/img/2nd-img.webp" class="w-100" alt="">
                    </div>
                </div>
                <div class="col col-12 col-lg-6 col-md-6 text-light align-self-center">
                    <div class="lists ">
                        <ul class="list-unstyled">
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                        </ul>
                    </div>
                    
                    <button class="btn-dsn get-price-offer pointer btn-dsn get-price-offer pointer d-block mx-auto mx-sm-0 ml-auto">Download Brochure</button>                  
                </div>
            </div>
        </div>
    </div>

</section>

<section class="container-fluid mt-5">
    <div class="container ">

    <h1 class="text-center">Why invest in Gaurs The Islands </h1>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-2">
            <p>Investment in real estate is now something that has become a trending practice for many millennials in and around the nation. Noida, in particular, has developed into a prospering hub of realty properties. Different high-end developers have established their elite properties in Noida.
                The Gaursons India’s property is the one that comes on this list and is the best option for investment.</p>
            <p>
            </p>
            <button class="buttons get-price-offer pointer" >Book Now</button>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-2">
            <img src="https://gaurstheislands.in/landing-page/img/anim-2.webp" class="w-100" alt="">
        </div>
    </div>
</div>

</section>

<section class="container-fluid key-featur-color pb-5" id="floorplan">

    
    <div class=" mt-5">
        <h2 class="text-center text-light"> Specifications of The Islands by Gaurs</h2>
        <div class="container">
            <div class="gallery row">
               <p style="color:#fff">Specifications of The Islands by Gaurs are high grade Italian marble, VRV, modular kitchen, fitted wardrobes, walk-in closets, security systems, grand entrance lobby, beautiful decks etc.  Some more specifation are given below : </p>
               <div class="col-md-12">
                  <div class="card p-3 shadow">
                     <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                           <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">DOORS AND WINDOWS</button>
                           <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">WALL FINISH</button>
                           <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">FLOORING</button>
                           <button class="nav-link" id="nav-contact-tab1" data-bs-toggle="tab" data-bs-target="#nav-contact1" type="button" role="tab" aria-controls="nav-contact1" aria-selected="false">ELECTRICAL FITTINGS</button>
                           <button class="nav-link" id="nav-contact-tab2" data-bs-toggle="tab" data-bs-target="#nav-contact2" type="button" role="tab" aria-controls="nav-contact2" aria-selected="false">RAILING</button>
                           <button class="nav-link" id="nav-contact-tab3" data-bs-toggle="tab" data-bs-target="#nav-contact3" type="button" role="tab" aria-controls="nav-contact3" aria-selected="false">WOODWORK</button>
                        </div>
                     </nav>
                     <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                           <ul>
                              <li><strong>External</strong> - Aluminium/UPVC Sliding/Openable doors &amp; windows</li>
                              <li><strong>Internal</strong> - Elegant designer flush doors in polish/ deco paint fixed in hardwood</li>
                           </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                           <ul>
                              <li><strong>External</strong> - Elegant finish with high quality texture paint</li>
                              <li><strong>Internal</strong> - All internal walls of rooms, drawing, dining will be painted using OBD</li>
                           </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <ul>
                              <li><strong>Drawing</strong> - Imported marble</li>
                              <li><strong>Dining</strong> - Imported marble</li>
                              <li><strong>Kitchen</strong> - Vitrified tiles</li>
                              <li><strong>All Bedrooms</strong> - Laminated Wooden Flooring</li>
                              <li><strong>Balcony</strong> - Anti-skid tiles</li>
                              <li><strong>Toilets</strong> - Vitrified tiles</li>
                           </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab1">
                           <ul>
                              <li><strong>Exhaust Fan</strong> - In Kitchen &amp; Toilets</li>
                              <li><strong>Light Fixtures</strong> - Ceiling lights in drawing room &amp; master bedroom</li>
                              <li><strong>Fans</strong> - In bedrooms, D/D and utility</li>
                              <li><strong>External</strong> - Adequate lighting in common areas</li>
                           </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab2">
                           <ul>
                              <li>Balcony - Glass railing</li>
                              <li>Staircase - Mild steel railing</li>
                           </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-contact3" role="tabpanel" aria-labelledby="nav-contact-tab3">
                           <ul>
                              <li><strong>Wardrobe</strong> - In all dressing rooms</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="clearing"></div>
            </div>
            <div class="gallery row pt-3">
               <div class="col-md-12">
                  <div class="card p-3 shadow">
                     <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                           <button class="nav-link" id="nav-home-tab4" data-bs-toggle="tab" data-bs-target="#nav-home4" type="button" role="tab" aria-controls="nav-home4" aria-selected="false">POP WORK</button>
                           <button class="nav-link" id="nav-profile-tab5" data-bs-toggle="tab" data-bs-target="#nav-profile5" type="button" role="tab" aria-controls="nav-profile5" aria-selected="false">SANITARY WORK</button>
                           <button class="nav-link" id="nav-contact-tab6" data-bs-toggle="tab" data-bs-target="#nav-contact6" type="button" role="tab" aria-controls="nav-contact6" aria-selected="false">WIRING &amp; SWITCHES</button>
                           <button class="nav-link" id="nav-contact-tab7" data-bs-toggle="tab" data-bs-target="#nav-contact7" type="button" role="tab" aria-controls="nav-contact7" aria-selected="false">KITCHEN</button>
                           <button class="nav-link active" id="nav-contact-tab8" data-bs-toggle="tab" data-bs-target="#nav-contact8" type="button" role="tab" aria-controls="nav-contact8" aria-selected="true">SECURITY</button>
                           <button class="nav-link" id="nav-contact-tab9" data-bs-toggle="tab" data-bs-target="#nav-contact9" type="button" role="tab" aria-controls="nav-contact9" aria-selected="false">CLUB</button>
                           <button class="nav-link" id="nav-contact-tab10" data-bs-toggle="tab" data-bs-target="#nav-contact10" type="button" role="tab" aria-controls="nav-contact10" aria-selected="false">AC &amp; GEYSERS</button>
                        </div>
                     </nav>
                     <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-home4" role="tabpanel" aria-labelledby="nav-home-tab4">
                           <ul>
                              <li><strong>Internal</strong> - Good quality POP, False ceiling in all rooms and drawing, dining</li>
                           </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-profile5" role="tabpanel" aria-labelledby="nav-profile-tab5">
                           <ul>
                              <li><strong>Internal</strong> - Piping Corrosion free CPVC pipes and fittings</li>
                              <li><strong>Fittings</strong> - All taps and fittings of reputed brands in C.P., Wash Basins, Wall mounted W/C of reputed brands</li>
                           </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-contact6" role="tabpanel" aria-labelledby="nav-contact-tab6">
                           <ul>
                              <li><strong>Wiring</strong> - Fire resistant copper wiring in concealed PVC conduits</li>
                              <li><strong>Switches</strong> - Modular switches and sockets in adequate numbers</li>
                              <li><strong>TV Points</strong> - In all rooms</li>
                              <li><strong>Tel. Points</strong> - In all rooms</li>
                           </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-contact7" role="tabpanel" aria-labelledby="nav-contact-tab7">
                           <ul>
                              <li>Counter - Kitchen counter with stainless steel sink fitted with R.O. Hob, Chimney with exhaust pipe</li>
                              <li>Wood Work - Modular Cabinet</li>
                              <li>Wall Tile - Designer ceramic tiles up to 2ft. above working counter</li>
                           </ul>
                        </div>
                        <div class="tab-pane fade active show" id="nav-contact8" role="tabpanel" aria-labelledby="nav-contact-tab8">
                           <ul>
                              <li><strong>Internal</strong> - Video Intercom Phone</li>
                           </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-contact9" role="tabpanel" aria-labelledby="nav-contact-tab9">
                           <ul>
                              <li><strong>Club Area</strong> - Outdoor Pools, Indoor Pools with temperature control system, Steam &amp; Sauna, Gym</li>
                           </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-contact10" role="tabpanel" aria-labelledby="nav-contact-tab10">
                           <ul>
                              <li><strong>VRV ACs</strong> - In bedrooms, D/D, Kitchen</li>
                              <li><strong>Geysers</strong> - In Toilets &amp; Kitchen</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="clearing"></div>
            </div>
         </div>
    </div>

    
</section>

<section class="container-fluid">
    <div class="container">
        <h2 class="mt-5 text-center floor-bold">Floor Plan</h2>
        <table class="table table-striped table-hover border">
            <thead>
                <tr>
                    <th>Configuration</th>
                    <th>Size (sq. mt.)</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>4BHK</td>
                    <td>3681 - 4866 342 - 452</td>
                    <td>
                        <div class="get-price-offer pointer">Get price offer</div>
                    </td>
                </tr>
                <tr>
                    <td>5BHK</td>
                    <td>6011 to 560</td>
                    <td>
                        <div class="get-price-offer pointer">Get price offer</div>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <!-- Form Popup -->
        <div id="form-popup">
            <div class="popup-content">
                <span class="close" id="close-button">&times;</span>
                <form id="myForm" method="post" action="popup.php" class="mx-auto d-block">
                    <h3 class="text-center">Contact Us</h3>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                        <span id="nameError" class="error text-danger"></span>
                    </div> 
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                        <span id="emailError" class="error text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" placeholder="Your Phone Number" name="number">
                        <span id="phoneError" class="error text-danger"></span>
                    </div>
                    <input value="Submit" type="submit" class="btn btn-primary my-btn" name="submit">
                </form>
            </div>
        </div>
        
    </div>
</section>



<section class="container-fluid key-featur-color text-light" id="amenities">
    <div class="pt-5">
        <h2 class="text-center floor-bold">Amenities</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-sm-2 g-4 mt-3 justify-content-center">

            <div class="col align-items-center text-dark g-col-6 mb-5">
                <div class="card animation-grow shadow border-0 h-100 p-4">
                    
                    <div class="card-body px-0">
                        <h3 class="card-title text-success text-center">The Orbit (THE SKYWALK) </h3>
                        <p class="card-text  text-black text-center">The Skywalk lifts your spirits to cloud nine with high fervour and gusto. It’s the bridge that bridges the gap between you and your loved ones. The 23rd floor at The Islands by Gaurs hosts The Skywalk, offering a walk comfort and convenience between all the eight towers.</p>
                        <div id="moreText1">
                            <p class="text-center"> The Islands by Gaurs is loaded with state-of-the-art amenities and luxuries, spending time here itself is a privilege only for you and your loved ones. </p>
                            <span>
                                WORKSTATION PODS <br>
                                TOT LOT AREA <br>
                                CELEBRATION PAVILLION <br>
                                MULTIPURPOSE COURT <br>
                                OBSERVATORY DECK <br>
                                OPEN AIR THEATRE <br>
                                FESTIVAL GARDEN <br>
                                JOGGING/WALKING TRACK <br>
                                PADDLE COURT <br>
                                LIBRARY & READING ZONE <br>
                                OPEN WATER BODIES <br>
                            </span>
                            </div>
                        <button id="readMoreBtn1" class="btn btn-primary mx-auto d-block" type="btn">Read More</button>
                    </div>
                </div>
            </div>

            <div class="col align-items-center text-dark g-col-6 mb-5">
                <div class="card animation-grow shadow border-0 h-100 p-4">
                    
                    <div class="card-body px-0">
                        <h3 class="card-title text-success text-center">The Orbit (THE SKYWALK) </h3>
                        <p class="card-text  text-black text-center">The Skywalk lifts your spirits to cloud nine with high fervour and gusto. It’s the bridge that bridges the gap between you and your loved ones. The 23rd floor at The Islands by Gaurs hosts The Skywalk, offering a walk comfort and convenience between all the eight towers.</p>
                        <div id="moreText2">
                            <p class="text-center"> The Islands by Gaurs is loaded with state-of-the-art amenities and luxuries, spending time here itself is a privilege only for you and your loved ones. </p>
                            <span>
                                WORKSTATION PODS <br>
                                TOT LOT AREA <br>
                                CELEBRATION PAVILLION <br>
                                MULTIPURPOSE COURT <br>
                                OBSERVATORY DECK <br>
                                OPEN AIR THEATRE <br>
                                FESTIVAL GARDEN <br>
                                JOGGING/WALKING TRACK <br>
                                PADDLE COURT <br>
                                LIBRARY & READING ZONE <br>
                                OPEN WATER BODIES <br>
                            </span>
                            </div>
                        <button id="readMoreBtn2" class="btn btn-primary mx-auto d-block" type="btn">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col align-items-center text-dark g-col-6 mb-5">
                <div class="card animation-grow shadow border-0 h-100 p-4">
                    
                    <div class="card-body px-0">
                        <h3 class="card-title text-success text-center">The Orbit (THE SKYWALK) </h3>
                        <p class="card-text  text-black text-center">The Skywalk lifts your spirits to cloud nine with high fervour and gusto. It’s the bridge that bridges the gap between you and your loved ones. The 23rd floor at The Islands by Gaurs hosts The Skywalk, offering a walk comfort and convenience between all the eight towers.</p>
                        <div id="moreText3">
                            <p class="text-center"> The Islands by Gaurs is loaded with state-of-the-art amenities and luxuries, spending time here itself is a privilege only for you and your loved ones. </p>
                            <span>
                                WORKSTATION PODS <br>
                                TOT LOT AREA <br>
                                CELEBRATION PAVILLION <br>
                                MULTIPURPOSE COURT <br>
                                OBSERVATORY DECK <br>
                                OPEN AIR THEATRE <br>
                                FESTIVAL GARDEN <br>
                                JOGGING/WALKING TRACK <br>
                                PADDLE COURT <br>
                                LIBRARY & READING ZONE <br>
                                OPEN WATER BODIES <br>
                            </span>
                            </div>
                        <button id="readMoreBtn3" class="btn btn-primary mx-auto d-block" type="btn">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="container-fluid mt-5 mb-5">
    <div class="container">
        <h3 class="text-center"> About Gaurs Group (Developer) </h3>
        <div>
            <p>
                Incorporated in 1995, the Gaursons India is a public limited company founded by Mr. B. L. Gaur. The organisation is based out of Ghaziabad, Uttar Pradesh. Manoj Gaur (Chairman & Managing Director), Mr. Manju Gaur (Director), and Mr. Sarthak Gaur (Director) are the key people of this amazing real estate group. The aim of the company is to drive out the best customer experience by integrating their demands and delivering futuristic, technologically equipped projects. 
            </p>
            <p>
                The conglomerate is extensively in construction, real estate, contracting, hotels, education & infrastructure. The corporation has successfully covered more than 5.5 million sq. ft. of real estate expansions in the Delhi NCR region, predominantly in Noida, Ghaziabad & Yamuna Expressway regions. Approx. 65 projects, including both commercial & residential development, have been established by the Gaurs.
            </p>
        </div>
    </div>
</section>

<section class="container-fluid mt-5 mb-5 pt-5 pb-5 key-featur-color text-light">
    <div class="container ">
        <h3 class="text-center"> About RERA </h3>
        <div>
            <p>
                Real Estate Regulatory Authority (RERA) came into being on 1st May 2016 under the Real Estate (Regulation and Development) Act, 2016. There are a total of 92 sections mentioned in the Act, out of which only 59 were notified on 1st May 2016, and the remaining sections were implemented from 1st May 2017. This regulatory authority was set up to protect the interests of the ones buying homes and/or investing in any kind of realty project. The Islands by Gaurs is RERA approved project it means you can see every information of this project on the state RERA website.
            </p>
        </div>
    </div>
</section>


<section class="container-fluid mt-5 mb-5">
    <div class="container">
        <h3 class="text-center">About Greater Noida </h3>
        <div>
            <p>
                The point of convergence, the center of gravity for a never-ending journey of growth and development, offers the destined location for India’s growth engine. Noida - the nation’s IT capital, is where the ancient meets the modern and the journey for a complete overhaul is always exceptional and exuberant. It is a well-planned city situated in the Gautam Buddha Nagar, commonly known as Noida.
            </p>
            <p>
                The city is part of expansion plans created to expand the Noida region and build a fully developed locale with modern infrastructure and state-of-the-art facilities. A quaint place with lush green surroundings and hassle-free zones not only eases the mind of the dwellers but also rejuvenates them from within. It is indeed a place to spend life with loved ones.
            </p>
        </div>
    </div>
</section>




<section class="container-fluid key-featur-color" id="location">
    
        <div class="container p-2">
                <h2 class="text-center text-light"> location advantage</h2>
            <div class="row">
                <div class="col col-12 col-lg-6 col-md-6 p-2 text-light">
                    <div class="w-100">
                        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14008.53156150333!2d77.3631847!3d28.625779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1697802688477!5m2!1sen!2sin" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 col-md-6 text-light align-self-center my-3">
                    <div class=" w-100  lists ">
                        <ul class="list-unstyled ">
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                            <li class="color-red mb-1 font-my-size">
                                <i class="fas fa-arrow-right"></i> <span class="text-light bolder">List item 1</span>
                            </li>
                        </ul>
                        <button class="btn-dsn get-price-offer pointer d-block mx-auto mx-sm-0 ml-auto mb-2">Get visit site</button>
                          
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col align-items-center text-dark g-col-6 mb-5">
                    <div class="card animation-grow shadow border-0 h-100 p-4">
                        
                        <div class="card-body px-0">
                            <h3 class="card-title text-success text-center">The Orbit (THE SKYWALK) </h3>
                           <div id="moreText4">
                                <span>
                                    WORKSTATION PODS <br>
                                    TOT LOT AREA <br>
                                    CELEBRATION PAVILLION <br>
                                    MULTIPURPOSE COURT <br>
                                    OBSERVATORY DECK <br>
                                    OPEN AIR THEATRE <br>
                                    FESTIVAL GARDEN <br>
                                    JOGGING/WALKING TRACK <br>
                                    PADDLE COURT <br>
                                    LIBRARY & READING ZONE <br>
                                    OPEN WATER BODIES <br>
                                </span>
                                </div>
                            <button id="readMoreBtn4" class="btn btn-primary mx-auto d-block" type="btn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col align-items-center text-dark g-col-6 mb-5">
                    <div class="card animation-grow shadow border-0 h-100 p-4">
                        
                        <div class="card-body px-0">
                            <h3 class="card-title text-success text-center">The Orbit (THE SKYWALK) </h3>
                            <div id="moreText5">
                                <span>
                                    WORKSTATION PODS <br>
                                    TOT LOT AREA <br>
                                    CELEBRATION PAVILLION <br>
                                    MULTIPURPOSE COURT <br>
                                    OBSERVATORY DECK <br>
                                    OPEN AIR THEATRE <br>
                                    FESTIVAL GARDEN <br>
                                    JOGGING/WALKING TRACK <br>
                                    PADDLE COURT <br>
                                    LIBRARY & READING ZONE <br>
                                    OPEN WATER BODIES <br>
                                </span>
                                </div>
                            <button id="readMoreBtn5" class="btn btn-primary mx-auto d-block" type="btn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col align-items-center text-dark g-col-6 mb-5">
                    <div class="card animation-grow shadow border-0 h-100 p-4">
                        
                        <div class="card-body px-0">
                            <h3 class="card-title text-success text-center">The Orbit (THE SKYWALK) </h3>
                            <div id="moreText6">
                                <span>
                                    WORKSTATION PODS <br>
                                    TOT LOT AREA <br>
                                    CELEBRATION PAVILLION <br>
                                    MULTIPURPOSE COURT <br>
                                    OBSERVATORY DECK <br>
                                    OPEN AIR THEATRE <br>
                                    FESTIVAL GARDEN <br>
                                    JOGGING/WALKING TRACK <br>
                                    PADDLE COURT <br>
                                    LIBRARY & READING ZONE <br>
                                    OPEN WATER BODIES <br>
                                </span>
                                </div>
                            <button id="readMoreBtn6" class="btn btn-primary mx-auto d-block" type="btn">Read More</button>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
</section>
<section class="container mt-5 mb-5">
    <h3 class="text-center mb-5">FAQ</h3>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Accordion Item #1
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Accordion Item #3
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
          </div>
        </div>
      </div>
</section>
<?php
    include "assets/include/footer.php";
?>

<style>
    .pointer{
        cursor: cursor;
    }
</style>