<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotary Vocational Training College</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
       <?php include("includes/header.php")?>

        <!-- Notice -->
        <div class="notice bg-warning text-center py-2">
            <marquee><p class="mb-0">Our Institution boasts of comprehensive vocational training with a focus on practical skills. Apply now for the upcoming intake!</p></marquee>
        </div>

        <!-- Hero Section -->
        <div class="hero-section position-relative text-center text-white" style=";">
            <img src="images/P6.jpeg" alt="Hero Image" class="img-fluid w-100" style="opacity: 0.8;">
            <div class="hero-text position-absolute w-100" style="top: 50%; transform: translateY(-50%);">
            <h2 class="display-4">ROTARY VOCATIONAL TRAINING COLLEGE, KISUMU</h2>
                <p class="lead">Apply Now for September Intake</p>
            </div>

        </div>
    </header>

    <!-- Vision, Mission, and Goal Section -->
    <section class="vision-mission-goal py-5 bg-light">
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card mission-card">
                <div class="card-body">
                    <h5 class="card-title">Mission</h5>
                    <p class="card-text">Our mission is to provide high-quality vocational training and education to empower individuals and enhance their career prospects.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card goal-card">
                <div class="card-body">
                    <h5 class="card-title">Goal</h5>
                    <p class="card-text">Our goal is to equip students with the necessary skills and knowledge to succeed in their chosen fields and contribute to the growth of their communities.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card vision-card">
                <div class="card-body">
                    <h5 class="card-title">Vision</h5>
                    <p class="card-text">Our vision is to be a leading institution in vocational training, known for our innovative approach, skilled faculty, and the success of our graduates.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>

    <!-- Welcoming Message Section -->
    <section class="welcoming-message py-5">
    <div class="container mt-5">
    <!-- Existing welcoming message here -->

    <div class="row">
        <div class="col-md-6">
            <div class="card admin-block-card">
                <img src="images/rotary.jpg" class="card-img-top" alt="Rotary Admin Block">
                <div class="card-body">
                    <h5 class="card-title">Welcome to Rotary Vocational Training College</h5>
                    <p class="card-text">Discover our state-of-the-art facilities and vibrant campus life. At Rotary Vocational Training College, we are committed to providing high-quality vocational education that prepares our students for the demands of the modern workforce. Our dedicated team of educators and state-of-the-art facilities ensure that our students receive the best training possible, helping them achieve their career aspirations
                    <!-- Our Training Sections -->. Our admin block is the heart of our institution, where we manage and coordinate all our training programs and activities.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
    
    <section class="training-sections py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Our Training Sections</h2>
            <div id="trainingCarousel" class="carousel slide" data-ride="carousel">
            <div class="container mt-5">
    <div class="row">
        <!-- Card for Training Program 1 -->
        <div class="col-md-4 mb-4">
            <div class="card training-card">
                <div id="carouselTraining1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/mec1.jpg" class="d-block w-100" alt="Training Program 1 Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/mec2.jpg" class="d-block w-100" alt="Training Program 1 Image 2">
                        </div>
                        <!-- Add more items if needed -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselTraining1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTraining1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Mechanical Engineering</h5>
                    <p class="card-text">Brief description of Training Program 1, highlighting key features and benefits.</p>
                </div>
            </div>
        </div>

        <!-- Card for Training Program 2 -->
        <div class="col-md-4 mb-4">
            <div class="card training-card">
                <div id="carouselTraining2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/elec2.jpg" class="d-block w-100" alt="Training Program 2 Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/elec1.png" class="d-block w-100" alt="Training Program 2 Image 2">
                        </div>
                        <!-- Add more items if needed -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselTraining2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTraining2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Electrical Engineering</h5>
                    <p class="card-text">Brief description of Training Program 2, highlighting key features and benefits.</p>
                </div>
            </div>
        </div>

        <!-- Card for Training Program 3 -->
        <div class="col-md-4 mb-4">
            <div class="card training-card">
                <div id="carouselTraining3" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/ict2.jpg" class="d-block w-100" alt="Training Program 3 Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/ict.jpg" class="d-block w-100" alt="Training Program 3 Image 2">
                        </div>
                        <!-- Add more items if needed -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselTraining3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTraining3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Information Communication Technology(ICT)</h5>
                    <p class="card-text">Brief description of Training Program 3, highlighting key features and benefits.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
                <a class="carousel-control-prev" href="#trainingCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#trainingCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <footer class="footer bg-dark py-4">
    <div class="container">
        <div class="row">
            <!-- Contact Information -->
            <div class="col-md-6 mb-4" style="color:white">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <li><strong>Address:</strong> 1234 Example Road, City, Country</li>
                    <li><strong>Phone:</strong> (123) 456-7890</li>
                    <li><strong>Email:</strong> info@example.com</li>
                </ul>
            </div>

            <!-- Map -->
            <div class="col-md-6 mb-4" style="color:white">
                <h5>Our Location</h5>
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234567.890123456!2d-0.1276478!3d51.507351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b27cddf6eaf%3A0x53f4c5d4f0e3b8!2sRotary%20Vocational%20Training%20College!5e0!3m2!1sen!2sus!4v1634153776793!5m2!1sen!2sus"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>