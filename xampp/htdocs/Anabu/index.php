<!DOCTYPE html>
<html>
<head>
    <title>Anabu 1-E Imus, Cavite</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400&display=swap" rel="stylesheet">
    <style>
 /* Reset CSS */
 body, h1, h2, h3, p, ul, li, img {
            margin: 0;
            padding: 0;
            border: 0;
        }

        /* General Styles */
        body {
            font-family: "Lexend", Arial, sans-serif;
            background-color: #2A246A;
            color: #fff;
        }

        header {
            padding: 10px;
        }

        /* Navigation Styles */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: inline-flex;
            align-items: center;
            padding-right: 20px;
        }

        .logo img {
            height: 50px;
            margin-right: 10px;
        }

        .logo h1 {
            font-size: 24px;
            font-weight: 400;
        }

        .navigation {
            list-style: none;
            display: flex;
            justify-content: flex-start;
        }

        .navigation li {
            margin-right: 20px;
        }

        .navigation li:last-child {
            margin-right: 0;
        }

        .navigation a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            transition: color 0.2s;
            font-weight: 300;
        }

        .navigation a:hover {
            color: #ddd;
        }

        /* Slideshow Styles */
        .slideshow-container {
            max-width: 100%;
            overflow: hidden;
            position: relative;
            height: 900px;
        }

        .slideshow-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        /* Slideshow animation styles */
        .fade-in {
            opacity: 1;
        }

        @keyframes fade {
            0%, 100% {
                opacity: 0;
            }
            25%, 75% {
                opacity: 1;
            }
        }

        .dot-container {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        .dot {
            height: 10px;
            width: 10px;
            margin: 0 5px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }

        .active {
            background-color: #717171;
        }

        /* Video Styles */
        .video-container {
            display: flex;
            justify-content: space-between;
            margin: 20px auto;
            max-width: 1200px;
        }

        .video {
            width: 30%;
            background-color: #2A246A;
            padding: 10px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .video img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 1px;
        }

        .video-description {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 22px;
            line-height: 1.5;
            margin-top: 10px;
            color: #fff;
        }

        .watch-button {
            font-family: 'Lexend', Arial, sans-serif;
            font-size: 24px;
            color: #fff;
            background-color: #B92A30;
            padding: 8px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            align-self: flex-end;
        }

        /* Content Section Styles */
        .content-section {
            display: flex;
            background-color: #fff;
            padding: 40px;
            color: #333;
        }

        .content-left {
            flex: 1;
            text-align: left;
            font-size: 28px;
            line-height: 2;
            margin-right: 380px;
            margin-left: 150px;
            border-right: 2px solid #2A246A;
            padding-right: 20px;
        }

        .content-right {
            flex: 1;
            display: flex;
            justify-content: flex-end;
        }

        .content-right img {
            max-width: 100%;
            margin-right: 150px;
        }

        .content-button-container {
            text-align: left;
            margin-top: 20px;
        }

        .content-button {
            display: inline-block;
            font-size: 22px;
            padding: 10px 20px;
            background-color: #B92A30;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .content-button:hover {
            background-color: #861F24;
        }

        /* Health Services Section Styles */
        .health-services {
            background-color: #B92A30;
            text-align: center;
            color: #fff;
            padding: 50px 0;
        }

        .health-services h2 {
            font-family: "Lexend", Arial, sans-serif;
            font-size: 36px;
            font-weight: 400;
            margin: 0;
            padding: 20px;
            background-color: #B92A30;
        }

        /* Text Containers Styles */
        .text-containers {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 40px 20px;
            background-color: #2A246A;
        }

        .container-line {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .text-box {
            flex: 0 0 calc(33.33% - 20px);
            background-color: #fff;
            padding: 80px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .text-box h3, .text-box h4 {
            font-family: "Lexend", Arial, sans-serif;
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .text-box ul {
            font-family: "Lexend", Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }

        .text-box li {
            list-style-type: disc;
            margin-left: 20px;
        }

        .text-box ul.sublist {
            list-style-type: none;
            margin-left: 20px;
        }

        .text-box ul.sublist li {
            list-style-type: none;
            margin-left: 0;
        }

        .text-box h4 {
            font-size: 22px;
            margin-top: 15px;
            color: #2A246A;
            background-color: #B92A30;
            padding: 10px 20px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <header>
        <nav>
        <div class="logo">
                <img src="anabu_logo.png" alt="Anabu 1-E Imus, Cavite Logo">
                <h1>Anabu 1-E Imus, Cavite</h1>
            </div>
            <ul class="navigation">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#book">Book Now</a></li>
            </ul>
        </nav>
    </header>

   <!-- Slideshow section -->
   <div class="slideshow-container">
        <img class="slideshow-img fade-in" src="sspic1.jpg" alt="Slide 1">
        <img class="slideshow-img" src="sspic2.jpg" alt="Slide 2">
        <img class="slideshow-img" src="sspic3.jpg" alt="Slide 3">

        <!-- Navigation indicator -->
        <div class="dot-container">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
    </header>
        <br>
        <br>
        <br>
        <br>
        <main>
        <div style="font-family: 'Lexend', Arial, sans-serif; text-align: center;">
            <div style="font-size: 28px; font-weight: 400; color: #fff; background-color: #B92A30; padding: 10px 20px; display: inline-block;">Recent News</div>
        </div>
            <br>
            <br>
        <!-- Video placeholders and descriptions -->
    <div class="video-container">
        <div class="video">
            <!-- Photo 1 Placeholder -->
            <img src="yt1.png" alt="Photo 1">
            <div class="video-description">
                <!-- Description for Photo 1 -->
            <br>
                <p>Bamban Aeta Medical Mission</p>
                <br>
                <a href="https://www.youtube.com/watch?v=CPLnxsgqjTc" target="_blank" class="watch-button">Watch</a>
            </div>
        </div>
        <div class="video">
            <!-- Photo 2 Placeholder -->
            <img src="yt2.png" alt="Photo 2">
            <div class="video-description">
                <!-- Description for Photo 2 -->
                <p>Anabu, Imus road repair</p>
                <br>
                <a href="https://www.youtube.com/watch?v=cXExjiLR2D0&t=2s" target="_blank" class="watch-button">Watch</a>
            </div>
        </div>
        <div class="video">
            <!-- Photo 3 Placeholder -->
            <img src="yt3.png" alt="Photo 3">
            <div class="video-description">
                <!-- Description for Photo 3 -->
                <p>Anabu Modular Treatment Plan</p>
                <br>
                <a href="https://www.youtube.com/watch?v=oerGhazoTUI&t=10s" target="_blank" class="watch-button">Watch</a>
            </div>
        </div>
    </div>

    <!-- Additional content sections -->
    <section class="content-section">
        <div class="content-left">
            <!-- Your text content goes here -->
            <h2 style="color: #2A246A;">About Us</h2>
            <br>
            <p>Imus's borders include the residential district of Barangay Anabu 1-E, which is home to a multicultural population. Professionals, business owners, and skilled employees are among the residents of the barangay. The community is richer and has a more varied cultural fabric as a result of this variety.</p>
            <div class="content-button-container">
            <a href="#" class="content-button">Know More</a>
        </div>
        </div>
        <div class="content-right">
            <!-- Your big photo goes here -->
            <img src="building.jpg" alt="Big Photo">
        </div>
    </section>
    <section class="health-services">
    <div class="section-header">
        <h2>Health Services</h2>
    </div>
    <!-- Your content for the Health Services section goes here -->
    </section>
    <section class="text-containers">
    <div class="container-line">
        <div class="text-box">
            <h4>For All</h4>
            <ul>
                <li>Medical Consultation</li>
                <li>Dental Consultation</li>
                <li>Dental Extraction</li>
                <li>Dental Fluoridation</li>
                <li>Dentures for Indigent Residents</li>
                <li>Discount on other Dental Services</li>
                <li>Fasting Blood Sugar (Digital FBS)</li>
                <li>Cholesterol Monitoring (Digital)</li>
            </ul>
        </div>
        <div class="text-box">
            <h4>For Women</h4>
            <ul>
                <li>Pap Smear & Vaginal Inspection with Acetic Acid (VIAA)</li>
                <li>Breast-I Examination and Palpation</li>
                <li>Pre-Natal Consultation</li>
                <li>Tetanus Toxoid Vaccination for Pregnant Women</li>
                <li>Supplementation of Vitamin A for Post-Partum Mothers (Within 1 Month upon Delivery)</li>
            </ul>
        </div>
        <div class="text-box">
            <h4>For Children</h4>
            <ul>
                <li>Purified Protein Derivate</li>
                <li>Vaccination for 0-15 Months </li>
                <br>
                <ul class="sublist">
                <li>- Barcille Calmette-Guerin</li>
                <li>- Hepatitis B Vaccine</li>
                <li>- Oral Polio Vaccine (1,2,3)</li>
                <li>- Pentavalent (Pental 1,2,3)</li>
                <li>- Inactive Poliomyelitis Vaccine (IPV)</li>
                <li>- Pneumococcal Conjugate Vaccine (PCV)</li>
                </ul>  
            </ul>
        </div>
    </div>
    <div class="container-line">
        <div class="text-box">
            <h4>For Men</h4>
            <ul>
                <li>Annual Digital Rectal Exam (DRE) for Prostate</li>
                <li>Annual Circumcision for Boys (9 Years & Above)</li>
            </ul>
        </div>
        <div class="text-box">
            <h4>Nutrition for All </h4>
            <ul>
                <li>Diet Counseling on Non-Communicable Diseases, Overweight and Obesity</li>
                <li>Micronutrients Powder for Kids</li>
                <li>Mag-Nanay Act Supplementation Feeding Program (First 1,000 Days)</li>
            </ul>
        </div>
        <div class="text-box">
            <h4>Yearly Activities</h4>
            <ul>
                <li>Annual Eye Checkup</li>
                <li>Annual Anti-Rabies Vaccination for Pets</li>
                <li>Annual Pet Blessing</li>
            </ul>
        </div>
    </div>
</section>
        <!-- Your other landing page content goes here -->
        </main>

         <script>
        // JavaScript for the slideshow and navigation indicator
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.getElementsByClassName("slideshow-img");
            let dots = document.getElementsByClassName("dot");

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.opacity = "0";
            }
            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            for (let i = 0; i < dots.length; i++) {
                dots[i].classList.remove("active");
            }

            slides[slideIndex - 1].style.opacity = "1";
            dots[slideIndex - 1].classList.add("active");

            setTimeout(showSlides, 3000); // Change slide every 3 seconds
        }
    </script>
    <footer>
        <!-- Your footer content goes here -->
    </footer>
</body>
</html>