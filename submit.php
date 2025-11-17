<!DOCTYPE html>
<html>
<head>
    <title>Student Registration - Output</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Student Registration Form</h2>

    <p><b>Full Name:</b> <?php echo $_POST['fullname']; ?></p>
    <p><b>Nationality:</b> <?php echo $_POST['nationality']; ?></p>
    <p><b>Email:</b> <?php echo $_POST['email']; ?></p>
    <p><b>Phone:</b> <?php echo $_POST['phone']; ?></p>
    <p><b>Gender:</b> <?php echo $_POST['gender']; ?></p>
    <p><b>10th Marks (%):</b> <?php echo $_POST['marks10']; ?></p>
    <p><b>12th Marks (%):</b> <?php echo $_POST['marks12']; ?></p>
    <p><b>Current Age:</b> <?php echo $_POST['age']; ?></p>
    <p><b>CGPA (College):</b> <?php echo $_POST['cgpa']; ?></p>
    <p><b>Course:</b> <?php echo $_POST['course']; ?></p>
    <p><b>Address:</b> <?php echo $_POST['address']; ?></p>

</div>

</body>
</html>

