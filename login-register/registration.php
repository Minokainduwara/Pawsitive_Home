<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="registration.php" method ="post">
            <div class="form-group">
                <input type="text" name ="fullname" placeholder = "Full name" class = "form-control">
            </div>

            <div class="form-group">
                <input type="email" name ="fullname" placeholder = "Email" class = "form-control">
            </div>

            <div class="form-group">
                <input type="password" name ="password" placeholder = "Password" class = "form-control">
            </div>

            <div class="form-group">
                <input type="password" name ="repeat_password" placeholder = "Repeat Password" class = "form-control">
            </div>

            <div class="form-btn">
                <input type="submit" name ="submit1" value = "Register" class = "btn btn-primary">
            </div>
            
            
        </form>
    </div>
</body>
</html>