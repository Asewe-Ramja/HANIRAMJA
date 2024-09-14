<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Rotary Vocational Training College</title>

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

    <!-- Contact Section -->
    <section class="contact-section py-5">
        <div class="container">
            <h1 class="text-center mb-5">Get in Touch with Us</h1>
            
            <div class="row">
                <!-- Contact Info -->
                <div class="col-md-6">
                    <h2>Contact Information</h2>
                    <p>Feel free to reach out to us through any of the following channels:</p>

                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 123 Rotary Street, Main Campus, Nairobi, Kenya</li>
                        <li><i class="fas fa-phone-alt"></i> <strong>Phone:</strong> +254 700 123 456</li>
                        <li><i class="fas fa-envelope"></i> <strong>Email:</strong> info@rotarycollege.com</li>
                    </ul>

                    <h3>Office Hours</h3>
                    <p>Monday - Friday: 8:00 AM to 5:00 PM</p>
                    <p>Saturday: 9:00 AM to 1:00 PM</p>
                    <p>Sunday: Closed</p>

                    <!-- Social Media -->
                    <h3>Follow Us</h3>
                    <p>
                        <a href="#" class="text-dark"><i class="fab fa-twitter fa-2x mr-2"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-linkedin fa-2x mr-2"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-facebook fa-2x"></i></a>
                    </p>
                </div>

                <!-- Contact Form -->
                <div class="col-md-6">
                    <h2>Send Us a Message</h2>
                    <form action="submit_contact.php" method="post">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
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