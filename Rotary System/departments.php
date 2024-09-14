<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments - Rotary Vocational Training College</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Header -->
    <?php include ('includes/header.php'); ?> <!-- Assuming you have a header.php file for the navigation bar -->

    <!-- Departments Section -->
    <section class="departments-section py-5">
        <div class="container">
            <h1 class="text-center mb-5">Our Departments</h1>
            <div class="row">

                <!-- Department 1 -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-laptop-code fa-3x mb-3"></i>
                            <h5 class="card-title">Information Technology</h5>
                            <p class="card-text">We offer cutting-edge IT courses to prepare students for the tech industry.</p>
                        </div>
                    </div>
                </div>

                <!-- Department 2 -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-hammer fa-3x mb-3"></i>
                            <h5 class="card-title">Engineering</h5>
                            <p class="card-text">Our Engineering department is known for hands-on technical skills and innovation.</p>
                        </div>
                    </div>
                </div>

                <!-- Department 3 -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-pencil-ruler fa-3x mb-3"></i>
                            <h5 class="card-title">Architecture & Design</h5>
                            <p class="card-text">We train future architects and designers to create innovative structures and designs.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-5">

                <!-- Department 4 -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-medkit fa-3x mb-3"></i>
                            <h5 class="card-title">Health Sciences</h5>
                            <p class="card-text">Our Health Sciences department is dedicated to training healthcare professionals.</p>
                        </div>
                    </div>
                </div>

                <!-- Department 5 -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-briefcase fa-3x mb-3"></i>
                            <h5 class="card-title">Business Studies</h5>
                            <p class="card-text">Offering top-tier business programs to shape future leaders and entrepreneurs.</p>
                        </div>
                    </div>
                </div>

                <!-- Department 6 -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fas fa-paint-brush fa-3x mb-3"></i>
                            <h5 class="card-title">Creative Arts</h5>
                            <p class="card-text">We nurture creativity and talent in various forms of artistic expression.</p>
                        </div>
                    </div>
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