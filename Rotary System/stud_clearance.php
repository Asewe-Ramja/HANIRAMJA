<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Clearance Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include("includes/header.php")?>
    <div class="container mt-5">
        <h2 class="mb-4">Student Clearance Form</h2>
        <form action="/submit-clearance" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="studentId">Student ID</label>
                    <input type="text" class="form-control" id="studentId" name="studentId" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                </div>
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control" id="department" name="department" required>
            </div>
            <div class="form-group">
                <label for="clearanceStatus">Clearance Status</label>
                <select class="form-control" id="clearanceStatus" name="clearanceStatus" required>
                    <option value="">Select Status</option>
                    <option value="cleared">Cleared</option>
                    <option value="pending">Pending</option>
                    <option value="notCleared">Not Cleared</option>
                </select>
            </div>
            <div class="form-group">
                <label for="comments">Comments</label>
                <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="approverName">Approver's Name</label>
                <input type="text" class="form-control" id="approverName" name="approverName" required>
            </div>
            <div class="form-group">
                <label for="approverSignature">Approver's Signature</label>
                <input type="text" class="form-control" id="approverSignature" name="approverSignature" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit Clearance</button>
        </form>
    </div>

    <?php include("includes/footer.php")?>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>