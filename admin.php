<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Welcome-
        <?php echo $_SESSION['username']?>
    </title>
</head>

<body>
    <?php require 'partials/_nav.php'?>

     <div class="container my-3">
     
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading"> Welcome
                <?php echo $_SESSION['username']?>
            </h4>
            <p>Hey How are you <?php echo $_SESSION['username']?>. Welcome to Coder Blog. Youn are logged in as
                <?php echo $_SESSION['username']?>. yeah, you successfully read this important alert message. This
                example text is going to run a bit longer so
                that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to logout <a href="/Blog/logout.php">Using this link</a></p>
        </div>
        </div>


        <div class="container my-4">
            <div class="row featurette d-flex justify-content-center align-items-center">
                <div class="col-md-7">
                    <h2 class="featurette-heading">It all started with Coder's Blog idea. <span class="text-muted">It’ll
                            blow your
                            mind.</span>
                    </h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod
                        semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
                        ac
                        cursus
                        commodo.Coderz Solutions Pvt. Ltd. successfully built the product and launched it in the App
                        Store. The staff provided practical technological guidance and exhibited patience with an
                        inexperienced client. Their responsiveness and communication style are hallmarks of a sound
                        project management strategy.</p>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid" src="https://source.unsplash.com/500x500/?development,technology" alt="">
                </div>
            </div>
            <div class="row featurette d-flex justify-content-center align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">We started Coder's Blog in 1877. <span class="text-muted">It’ll blow your
                            mind.</span>
                    </h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod
                        semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
                        ac
                        cursus
                        commodo.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="img-fluid" src="https://source.unsplash.com/500x500/?program,laptop" alt="">
                </div>
            </div>
            <div class="row featurette d-flex justify-content-center align-items-center">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
                            mind.</span>
                    </h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                        euismod
                        semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
                        ac
                        cursus
                        commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid" src="https://source.unsplash.com/500x500/?technology,web" alt="">
                </div>
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">

            <!-- <div class="container my-4">
            <h2>Leave a Comment:</h2>
            <form>
                <div class="form-group">
                    <label for="name">Autor</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                        placeholder="Enter email">
                    <div class="form-group my-4">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div> -->

            <?php include 'partials/_footer.php';?>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
                crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>