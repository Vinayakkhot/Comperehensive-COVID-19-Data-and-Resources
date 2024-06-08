<!DOCTYPE hTML>
<html lang="en">
<?php include('link.php'); ?>

<body>
    <?php include('header.php'); ?>


    <div class="container-fluid " style="background-color:#9EF5F5;">
        <style>
        .container-fluid {
            border-radius: 0px 0px 150px 0px;
        }
        </style>
        <div class="row">
            <div class="col-md-6">
                <p style=" color:gray ; margin-top: 1rem;">covid-19 Awareness </p>
                <div class="slider-content">

                    <style>
                    .slider-content {
                        text-align: center;
                        margin-top: 5rem;
                    }
                    </style>

                    <h1 Style="color: blue;"><b>Stay Safe. Stay Home.</b></h1>
                    <p>In The Face Of Uncertainty, Our Actions Can Make A Difference. </p>
                    <button style="style=display: inline-block;
                                       margin-top: 1rem;
                                       padding:1rem 4rem;
                                       border-radius: 3rem;
                                       background:var(--red);
                                       color:#fff;
                                       overflow: hidden;
                                       font-size: 1.0rem;" class="blue-button"
                        onclick="window.location.href='https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public'">
                        Learn More
                    </button>

                    <style>
                    .btn {
                        display: inline-block;
                        margin-top: 1rem;
                        padding: 1rem 4rem;
                        border-radius: 3rem;
                        background: var(--red);
                        color: #fff;
                        overflow: hidden;
                        font-size: 1.0rem;
                    }
                    </style>
                </div>
            </div>


            <div class="col-md-6">
                <div class="img">
                    <img style="width:105%;   border-radius:0px 0px 150px 0px" src="./img/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!---Coronavirus Statistics--->
    <div class="container pt-4">
        <div class="row">
            <div class="col">
                <style>
                .col {
                    text-align: center;

                }
                </style>
                <h2 Style="color:blue" ;>Coronavirus Statistics</h2>
                <h6 style="color:gray">coronavirus (COVID-19) Dashboard</h6>
            </div>
        </div>

        <?php
        
        // Initialize cURL session
        $ch = curl_init();
        
        // Set the cURL options
        curl_setopt($ch, CURLOPT_URL, 'https://disease.sh/v3/covid-19/all'); // Replace with the API URL you want to call
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string instead of outputting it
        
        // Optional: If the API requires authentication, you can set the username and password here
        // curl_setopt($ch, CURLOPT_USERPWD, 'username:password');
        
        // Optional: Set additional cURL options as needed, such as headers, request type, etc.
        
        // Execute the cURL session and store the result in $response
        $response = curl_exec($ch);
        
        // Check for cURL errors
        if (curl_errno($ch)) {
            echo 'cURL error: ' . curl_error($ch);
        }
        
        // Close the cURL session
        curl_close($ch);
        
        // Now, $response contains the API response data
        // You can parse and process the data as needed
    
        
        
        ?>
        <div class="container pb-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-4">
                    <div class="cases text-center">
                        <i class="fa-solid fa-virus"></i>
                        <h5><b><?php echo json_decode($response)->active;?></b></h5>
                        <p>Active Cases</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cases text-center">
                        <i class="fa-solid fa-virus"></i>
                        <h5><b><?php echo json_decode($response)->deaths;?></b></h5>
                        <p>Death Cases</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cases text-center">
                        <i class="fa-solid fa-virus"></i>
                        <h5><b><?php echo json_decode($response)->recovered;?></b></h5>
                        <p>Recovered Cases</p>
                    </div>
                </div>
            </div>
        </div>


        <style>
        .green-icon-list {
            list-style-type: none;
            padding-left: 0;
        }

        .green-icon {
            color: green;
            margin-right: 10px;
        }
        </style>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="img" style="position:relative; z-index:1;">
                        <video style="border-radius:50px 50px 50px 50px" controls src="img/123.mp4" width="600">
                            <div style="position:absolute;left:30%;top:50%;z-index:3;">
                                <h3 style="color:#fff;">What is corona virus?</h3>
                            </div>
                        </video>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 style="color:blue"><b>Symptoms Of Coronavirus</b></h3>
                    <ul class="col-md-6">
                        <li> Fever or chill</li>
                        <li> Cough</li>
                        <li>Shortness of breath </li>
                        <li> Fatigue</li>
                        <li> Muscle or body aches</li>
                        <li> Loss of taste or smell</li>
                    </ul>
                    <a href="#section" class="btn">How to prevent</a>
                </div>
            </div>
        </div>

        <!--second section-->

        <!--    <div class="container pt-2">-->
        <div class="container py-4"></div>
        <div class="row">
            <div class="col-md-6">
                <h3 style="color: blue;"><b>Millions globally affected by COVID-19</b></h3>
                <ul class="col-md-7">
                    <!-- Added "list-unstyled" class to remove bullets -->
                    <li> Pandemic Impact: COVID-19 affects millions worldwide
                        through illness and disruption.</li>

                    <li> Health Strain: Global health systems strained by
                        COVID-19's widespread impact.</li>
                    <li> Shortness of breath or difficulty breathing</li>
                </ul>
                <a href="#section1" class="btn">PROTECT</a>
            </div>
            <div class="col-md-6">
                <div class="img">
                    <video style="border-radius:50px 50px 50px 50px" controls src="img/prevent.mp4" width="900"></video>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--cards section-->
    <div class="container pt-4">
        <div class="row">
            <div class="col">
                <style>
                .col {
                    text-align: center;

                }
                </style>
                <section id="section">
                </section>
                <h4 Style="color:blue" ;>How To Prevent Coronavirus?</h4>
                <p style="color:gray;">Wearing a mask is not just a sign of caution; it's a symbol of compassion for the
                    health of others.</p>

            </div>
        </div>
    </div>

    <style>
    .card {
        position: relative;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 2rem;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {}

    .main {
        position: relative;
        background-color: #C9FBFB;
        width: 100%;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .fa-solid {
        font-size: 40px;
        color: blue;
    }
    </style>
    <div class="conatiner">
        <div class="row">
            <div class="col-md-3">
                <div class="container pt-2"></div>

                <div class="card" style="width: 18rem;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

                    <div class="main">

                        <i class="fa-solid fa-house"></i>

                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Stay at Home</h5>
                        <p class="card-text">Stay-at-home measures during COVID-19 involved working remotely, essential
                            outings only, distancing, masks, and hygiene to curb virus spread, adapting to changing
                            guidelines.</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container pt-2"></div>
                <div class="card" style="width: 18rem;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="main">
                        <i class="fa-sharp fa-solid fa-people-arrows"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Physical distance</h5>
                        <p class="card-text"> The recommended distance for physical distancing varies by health
                            authorities and circumstances, but a common guideline is to maintain at least 6 feet  of distance from others. .</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container pt-2"></div>
                <div class="card" style="width: 18rem;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="main">
                        <i class="fa-solid fa-mask-face"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Mask Usage</h5>
                        <p class="card-text">Stay-at-home measures during COVID-19 involved working remotely,Wear masks
                            in public settings, especially when maintaining physical distance is challenging.</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container pt-2"></div>
                <div class="card" style="width: 18rem;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="main">
                        <i class="fa-solid fa-syringe"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Vaccination</h5>
                        <p class="card-text"> Vaccination for COVID-19 involves administering vaccines that have been
                            developed to provide immunity against the virus responsible for the COVID-19 disease, </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--4 card section-->
    <Symptoms id="Symptoms">
        <div class="container pt-4">
            <div>

                <h3 style="color:blue;text-align:center;">Symptoms Of Coronavirus </h3>
            </div>
            </br>
            <p style="text-align:center; color:gray;"> COVID's invisible grip reveals itself through diverse symptoms,
                urging caution
                and care.</p>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class=""
                            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius: 30px 30px 30px 30px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="img/23.png" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">High Fever</h5>
                                        <p class="card-text">High fever, often a sign of underlying infection, demands
                                            prompt medical attention to prevent complications and ensure proper
                                            treatment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class=""
                            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius: 30px 30px 30px 30px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="img/12.png" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Shortness of Breath</h5>
                                        <p class="card-text">Caused by respiratory distress due to lung inflammation.
                                            Seek
                                            medical attention if you experience difficulty breathing, persistent chest
                                            pain,
                                            or
                                            bluish lips.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-md-6">
                        <div class=""
                            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius: 30px 30px 30px 30px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="img/34.png" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Cough</h5>
                                        <p class="card-text">Characterized by a dry, persistent hacking cough. If you
                                            develop a new,
                                            continuous cough, it could be a sign of infection; consider testing and
                                            self-isolation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=""
                            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius: 30px 30px 30px 30px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="img/12.png" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Shortness of Breath</h5>
                                        <p class="card-text">Caused by respiratory distress due to lung inflammation.
                                            Seek
                                            medical attention if you experience difficulty breathing, persistent chest
                                            pain,
                                            or
                                            bluish lips.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-md-6">
                        <div class=""
                            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius: 00px 30px 30px 00px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="img/45.png" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Respiratory Symptoms</h5>
                                        <p class="card-text">
                                        <p>COVID-19 respiratory symptoms include cough, especially if accompanied by
                                            chest
                                            pain or
                                            bluish lips.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        </div>

        <!-- <div class="container pt-4">-->
        <div class="row">
            <div class="col-md-7">
                <br>
                <p style="margin-left:10rem">If you or someone you know is experiencing symptoms that could be related
                    to
                    COVID-19, it's important to seek medical advice, especially if you have underlying health
                    conditions.
                </p></br>
            </div>
            <div class="col-md-4 text-md-end">
                <a class="btn btn-primary" href="https://covid19.karnataka.gov.in/page/Helpline/en"
                    role="button">HelpLine</a>
            </div>
        </div>
        </div>


        </div>
        <!--end of 4 card section-->
        <!--how to protect-->
        <section1 id="section1">
            <div class="container pt-4"></div>
            <h3 style="color: blue;text-align:center;">How To Protect Yourself?</h3>
            <p style="color:gray; text-align:center;"> In the face of COVID-19, protection begins with knowledge and
                ends with
                responsible action.</p>

            <div class="container pt-2">
                <div class="col-md-6">
                </div>
            </div>
            <div class="row">

                <br>
                <div class="col-md-3" Style="margin-left:7rem">
                    <h4><b>You Should Do</b></h4>
                    <ul>
                        <li>Wear Mask</li>
                        <li>Social Distance</li>
                        <li>Wash Hands Frequently</li>
                        <li>Travel Safety</li>
                        <li>Vaccination</li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h4><b>You Should Not Do</b></h4>
                    <ul>
                        <li>Avoid Close Contact </li>
                        <li>Avoid Crowded Places</li>
                        <li>Avoid Non-Essential Travel</li>
                        <li>Avoid Touching Your Face</li>
                        <li>Avoid Handshakes And Hugs</li>
                    </ul>
                </div>
                </br>
                <div class="col-md-4">
                    <div class="img">
                        <img style="width: 60%;" src="./img/12" alt="">
                    </div>
                </div>
            </div>
            </div>


            <!--news and articale-->

            <div class="container pt-4">
                <div class="slider-content">
                    <h3 Style="color:blue;">News And Articles</h3>
                    <p Style="color:gray;">COVID's invisible grip reveals itself through diverse symptoms, urging
                        caution and
                        care.</p>
                </div>
            </div>

            <div class="video-container">
                <style>
                .video-container {
                    display: flex;
                    justify-content: space-between;
                    gap: 20px;
                    /* Adjust the spacing as needed */
                    max-width: 1440px;
                    margin: 0 auto;
                }

                video {
                    width: calc(300.33% - 20px);
                    /* Adjust width and gap values */
                }
                </style>


                <div class="container pt-4">
                    <div class="video-container">
                        <div class="video-item">
                            <video id="video1" controls>
                                <source src="img/n1.mp4" type="video/mp4">
                            </video>
                            <br>
                            <h6 style="text-align:center">How Corona Virus Is Very Contigous</h6></br>
                        </div>

                        <div class="video-item">
                            <video id="video2" controls>
                                <source src="img/news2.mp4" type="video/mp4">
                            </video>
                            <br>
                            <h6 style="text-align:center">Additional information about Video 2.</h6></br>
                        </div>

                        <div class="image-item">
                            <a
                                href="https://www.gavi.org/vaccineswork/alpha-omicron-everything-you-need-know-about-coronavirus-variants-concern?gclid=Cj0KCQjwi7GnBhDXARIsAFLvH4mF0BwiBskYOXrzyT9Qm52ve0uJyZ-vuqGYWyf0pyf29xe0eqM1ssEaAnh9EALw_wcB">
                                <img src="./img/article3.png" alt="Clickable Image" width="300" height="200">
                            </a>
                            <br>
                            <h6 style="text-align:center">Click The Image For Additional Information About The Covid-19.
                                The
                                Worlds New Center Of Attention </h6></br>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer section-->
            <div class="container pt-4"></div>
            <style>
            /* Styling for the footer box */
            .footer-box {
                background-color: #C9FBFB;
                /* Grey background color */
                padding: 40px 0;
                /* Adding padding for spacing */
            }

            /* Styling for the footer sections */
            .footer-section {
                color: #000;
                /* Black text color */
                padding: 0 20px;
                /* Adding padding for spacing */
            }

            /* Styling for the footer heading */
            .footer-heading {
                font-size: 1.2rem;
                font-weight: bold;
            }

            /* Styling for the footer links */
            .footer-links {
                list-style: none;
                padding: 0;
            }

            .footer-links li {
                margin-bottom: 8px;
            }

            .footer-links a {
                text-decoration: none;
                color: #000;
                /* Black link color */
                transition: color 0.3s ease;
            }

            .footer-links a:hover {
                color: #007bff;
            }

            /* Styling for the entire footer */
            .bg-grey {
                background-color: #54547a;
                /* Grey background color */
            }

            /* Basic styling for the entire page */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            .container {
                margin-top: 40px;
            }

            /* Additional styling for larger screens */
            @media (min-width: 768px) {
                .container {
                    margin-top: 60px;
                }
            }
            </style>
            <About id="About">
                <div class="footer-box">
                    <div class="container">
                        <div class="row">
                            <!-- About Section -->

                            <div class="col-md-3 footer-section">
                                <h4 class="footer-heading">About COVID-19</h4>

                                <p>Explore insights into the symptoms, and preventive measures.follow official
                                    guidelines, and
                                    contribute to the collective effort to curb the spread of COVID-19.</p>
                            </div>

                            <!-- Links Section -->
                            <div class="col-md-3 footer-section">
                                <h4 class="footer-heading">Links</h4>
                                <ul class="footer-links list-unstyled">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Reports</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>

                            <!-- Resources Section -->
                            <div class="col-md-3 footer-section">
                                <h4 class="footer-heading">Resources</h4>
                                <ul class="footer-links list-unstyled">
                                    <li><a href="https://covid19.india.gov.in/documents/">Documentation</a></li>
                                    <li><a href="https://www.youtube.com/watch?v=bLfkYg4TUXY">Tutorials</a></li>
                                    <li><a
                                            href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/donate">Support</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 footer-section">
                                <h4 class="footer-heading">Social Media</h4>
                                <ul class="footer-links list-unstyled">
                                    <li><a href="https://www.facebook.com/LongCovidPage/"><i
                                                class="fab fa-facebook"></i>
                                            Facebook</a></li>
                                    <li><a href="https://www.instagram.com/preventcovid19/?hl=en"><i
                                                class="fab fa-instagram"></i>
                                            Instagram</a></li>
                                    <li><a href="https://www.longcovid.org/"><i class="fab fa-google"></i>Google</a>
                                    </li>
                                </ul>
                            </div>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <footer class="bg-grey text-white text-center py-3">
                    <p>&copy; copyright @ 2023 designed by VS. All rights reserved.</p>
                </footer>
                <!--footer section end-->
</body>

</html>