<html>
<head>
    <title>Contact us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
      
<center>
        <form action="form-process.php" method="POST">
        <h2>  Contact Us </h3>
            
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
           
            
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
           
            
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            
           
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
          
           
                <label for="message">Message</label>
                <input type="text" name="message" id="message" class="form-control" required>
            
            
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
        
        </form>
        </center>
    
</body>

</html>