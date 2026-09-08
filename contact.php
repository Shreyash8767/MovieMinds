<html>
<head>
    <title>Contact us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <center><h2><b>Contact Us</b></h2></center>
        <form action="form-process.php" method="POST">
            <div class="form-group">
                <label for="firstname"><b>Firstname</b></label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname"><b>Lastname</b></label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone"><b>Phone</b></label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message"><b>Message</b></label>
                <input type="text" name="message" id="message" class="form-control" required>
            </div>
            <div class="form-group">
       <center> <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button></center>
    </div>
        </form>
    </div>
</body>

</html>