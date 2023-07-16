<!DOCTYPE html>
<html>
<head>
    <title>Anabu 1-E Imus, Cavite</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400&display=swap" rel="stylesheet">
    <style>

        body, h1, h2, h3, p, ul, li, img {
            margin: 0;
            padding: 0;
            border: 0;
        }

        body {
            font-family: "Lexend", Arial, sans-serif;
            background-color: #2A246A;;
        }

        header {
            background-color: #2A246A;
            color: #fff;
            padding: 10px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: inline-flex; /* Change to inline-flex to make logo and name on the same line */
            align-items: center;
            padding-right: 20px; /* Added padding to move logo and name to the center */
        }

        .logo img {
            height: 50px;
            margin-right: 10px;
        }

        .logo h1 {
            font-size: 24px;
            font-weight: 400; /* Lexend Regular */
        }

        .navigation {
            list-style: none;
            display: flex;
            justify-content: flex-start;
            padding-right: 20px; /* Added padding to move right-side texts to the center */
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
            font-weight: 300; /* Lexend Light */
        }

        .navigation a:hover {
            color: #ddd;
        }

        .slideshow-container {
            max-width: 100%;
            overflow: hidden; /* Added to stretch images */
            position: relative;
            height: 900px; /* Set the height of the slideshow */
        }
        .slideshow-img {
            width: 100%;
            height: 100%; /* Updated to take full height of the container */
            object-fit: cover; /* Added to stretch images */
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
            bottom: 10px; /* Adjusted to move dots to the bottom front */
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

        /* Video container styles */
        .video-container {
            display: flex;
            justify-content: space-between;
            margin: 20px auto;
            max-width: 1200px; /* Adjust the width based on your preference */
        }

        .video {
            width: 30%; /* Adjust the width of each video container */
            background-color: #2A246A; /* Set the background color of video containers */
            padding: 10px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column; /* Align the contents vertically */
            justify-content: space-between; /* Space the elements evenly */
        }

        .video img {
            width: 100%;
            height: 200px; /* Adjust the height of each photo */
            object-fit: cover;
            margin-bottom: 1px;
        }

        .video-description {
            font-family: Georgia, 'Times New Roman', Times, serif; /* Use "Georgia" font */
            font-size: 22px;
            line-height: 1.5;
            margin-top: 10px;
            color: #fff; /* Change the text color to white */
        }
        /* "Watch" button styles */
        .watch-button {
            font-family: 'Lexend', Arial, sans-serif;
            font-size: 24px;
            color: #fff;
            background-color: #B92A30;
            padding: 8px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            align-self: flex-end; /* Align the button to the bottom */
        }
        .content-section {
            background-color: #fff; /* Change this to the desired background color */
            padding: 40px;
            color: #333; /* Adjust the text color to your preference */
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
        <img class="slideshow-img fade-in" src="pic1.png" alt="Slide 1">
        <img class="slideshow-img" src="pic2.png" alt="Slide 2">
        <img class="slideshow-img" src="pic3.png" alt="Slide 3">

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
        <!-- Your content goes here -->
        <h2>Section 1</h2>
        <p>This is your content for Section 1. You can add any text, images, or other elements here.</p>
    
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