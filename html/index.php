<!DOCTYPE html>
<?php
include("login.html");
include("signup.html")
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Anto-tech Electricals provides electrical repairs, new installations, and more in Kenya.">
    <meta name="keywords" content="Electrician, electrical repairs, new installations, Kenya, electrical products">
    <meta name="author" content="Anto-tech Electricals">
    <title>Anto-tech Electricals | Your Trusted Electricians in Kenya</title>
    <link rel="shortcut icon" href="Images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/main.css">
    <script src="scripts/js/Form_validation.js"></script>
    <script src="scripts/js/Live_chat_integration.js"></script>
        
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=YOUR_ANALYTICS_ID"></script>
    <script>
        <!--
         //Enable this script once you find your analytics ID
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'YOUR_ANALYTICS_ID');
        */
       
    </script>
</head>
<body>
<nav id="toolbox">
        <a href="form1.html">File</a>
        <a href="#home">Home</a>
        <a href="#services">Our Services</a>
        <a href="#gallery">Gallery</a>
        <a href="#contact">Contact Us</a>
        <a href="javascript:void(0);" onclick="openModal('loginModal')">Login</a>
        <a href="javascript:void(0);" onclick="openModal('signupModal')">Signup</a>
    </nav>
    
    <div id="screen-wrapper">
        <div id="screen">
            
            <!-- Home Section -->
            <section id="home">
                <div class="home-text">
                    <h2>Your Trusted Electrical Services in Kenya</h2>
                    <p>We specialize in repairs, installations, product sales, and more.</p>
                </div>
            </section>
            <!-- Add a link to google maps -->

        </div>
        <div id="screen">
            <?php
                include("flash_cards.html");
            ?>
        </div>
        <div id="screen">
            <!-- Gallery Section -->
            <section id="gallery">
                <h2>Gallery</h2>
                <div class="gallery">
                    <img src="Images/repair/repair1.jpg" alt="Repair work">
                    <img src="Images/installation/installation1.jpg" alt="Installation work">
                    <img src="Images/products/products1.png" alt="Product sales">
                    <img src="Images/construction/construction1.jpg" alt="Construction work">
                    <img src="Images/discover_new_products/discover_new_products1.png" alt="Products you might be interested in">
                    <img src="Images/consultation/consultation1.jpg" alt="Consultation">
                    <img src="Images/electrical_drawings/electrical_drawings1.jpg" alt="Electrical drawings">
                    <img src="Images/customized_services/customized_services1.jpg" alt="Customized services">
                </div>
            </section>
        </div>
        <div id="screen">
            <?php
                include("testimonies.html");
            ?>
        </div>
        
        <div id="screen">

            <?php
                include("contact_us.html")
            ?>
        </div>
        <div id="screen">
            <?php
                include("locations.html")
            ?>
        </div>
        <?php
            include("hide_button.html")
        ?>
</div>
</body>
</html>
<?php
//Hello

?>