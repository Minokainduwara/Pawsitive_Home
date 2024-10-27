<?php require("./views/partials/header.php") ?>
    <div class="container">
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" name="fullname" placeholder="Full name" class="form-control">
            </div>

            <div class="form-group">
                <input type="email" name="fullname" placeholder="Email" class="form-control">
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>

            <div class="form-group">
                <input type="password" name="repeat_password" placeholder="Repeat Password" class="form-control">
            </div>

            <div class="form-btn">
                <input type="submit" name="submit1" value="Register" class="btn btn-primary">
            </div>


        </form>
    </div>
<?php require("./views/partials/footer.php") ?>