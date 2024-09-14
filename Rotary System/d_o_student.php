<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dean of Students - Rotary Vocational Training College</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Header -->
    <?php include ('includes/header.php'); ?> <!-- Assuming you have a header.php file -->

    <!-- Dean of Students Section -->
    <section class="dean-section py-5">
        <div class="container">
            <h1 class="text-center mb-5">Meet the Dean of Students</h1>

            <!-- Dean Profile Section -->
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <img src="dean.jpg" alt="Dean of Students" class="img-fluid rounded-circle mb-4" style="width: 200px; height: 200px; object-fit: cover;">
                    <h3>Jane Smith</h3>
                    <p>Dean of Students</p>
                    <p>
                        <a href="#" class="text-dark"><i class="fab fa-twitter fa-2x mr-2"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-linkedin fa-2x mr-2"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-facebook fa-2x"></i></a>
                    </p>
                </div>

                <!-- Dean Message Section -->
                <div class="col-md-8">
                    <h4>Welcome Message from the Dean</h4>
                    <p class="mt-3">
                        Welcome to the Rotary Vocational Training College. As the Dean of Students, my primary role is to ensure the well-being, development, and success of our students. Our college is committed to providing a supportive and inclusive environment where all students can thrive, both academically and personally.
                    </p>
                    <p>
                        I encourage students to take full advantage of the resources, programs, and support services available to them. Whether you're seeking academic guidance, career development opportunities, or personal support, our team is here to help you succeed.
                    </p>
                    <p>
                        I am always available for any concerns or advice you may need. Together, we can make your time here at Rotary Vocational Training College a rewarding and transformative experience.
                    </p>
                    <p>
                        Feel free to visit my office or contact me at any time. I look forward to meeting you and helping you achieve your goals.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include ('includes/footer.php'); ?> <!-- Assuming you have a footer.php file -->

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>