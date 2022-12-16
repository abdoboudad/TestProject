<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlphaTub</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark text-white">
    <div class="container">
        <a class="navbar-brand text-white"  href="#"><img src="imgs/logo.svg" alt="Error"></a>
        <button class="navbar-toggler" data-bs-toggle='collapse' data-bs-target='#a'><span class="navbar-toggler-icon"></span></button>
        <div id="a" class="collapse navbar-collapse ">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active mx-3 px-2"href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link mx-3 px-2"  data-bs-toggle="modal"  href="#i">Sign in</a></li>
            <li class="nav-item"><a class="nav-link btn btn-outline-danger mx-3 text-start px-2" id="click_clean"  data-bs-toggle="modal"  href="#j">join</a></li>
        </ul>
        </div>
        
    </div>
    </nav> 
        <section class="bg-dark text-light text-center text-sm-start py-5">
            <div class="container">
                <div class="d-flex align-items-center justify-content-center">
                    <div>
                        <h1 class="display-5">Share your <span class="text-danger">link</span></h1>
                        <p class="py-1 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ex, molestias ducimus, quo nostrum animi hic veritatis corrupti perspiciatis laborum fugiat eius illo tempore, facilis distinctio. Rem quia quo rerum.</p>
                        <a href="#j" data-bs-toggle="modal" id="click_window" class="btn btn-danger">Get Started</a>
                        
                    </div>
                    <img class="d-none d-sm-block img-fluid w-50" src="imgs/logo2.svg" alt="Error">
                </div>
            </div>
        </section>
        <h1 class="text-center pt-5">Packages</h1>
        <h5 class="text-center ">____________________________</h5>
        <section class="py-5 text-dark">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm">
                        <div  id="card" class="card bg-light mb-3">
                            <div class="card-body text-center py-4">
                                <h1 class="card-title">Free</h1>
                                <h2 class="card-title text-warning">0$</h2>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim voluptatem expedita tempore? Beatae in aperiam nemo libero harum, cumque mollitia deserunt dolor quam architecto doloremque!</p>
                                <button class="btn btn-warning">Start</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div id="card1" class="card bg-light mb-3">
                            <div class="card-body text-center py-5">
                                <h1 class="card-title">Free</h1>
                                <h2 class="card-title text-warning">0$</h2>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim voluptatem expedita tempore? Beatae in aperiam nemo libero harum, cumque mollitia deserunt dolor quam architecto doloremque!</p>
                                <button class="btn btn-warning">Start</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div id="card2" class="card bg-light mb-3">
                            <div class="card-body text-center py-4">
                                <h1 class="card-title">Free</h1>
                                <h2 class="card-title text-warning">0$</h2>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim voluptatem expedita tempore? Beatae in aperiam nemo libero harum, cumque mollitia deserunt dolor quam architecto doloremque!</p>
                                <button class="btn btn-warning">Start</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="py-5 text-center text-sm-start">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md">
                    <img src="imgs/logo3.svg" alt="" class="img-fluid">
                </div>
                <div class="col-md py-4">
                    <h1>Why AlphaTub</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero eveniet, nulla est fugit vel rem. Perferendis nemo similique soluta quia doloremque cumque aliquid commodi perspiciatis voluptate, consequuntur aspernatur minima ullam.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut omnis perferendis maxime dolores commodi exercitationem corporis aspernatur dolorum sunt beatae.</p>
                </div>
            </div>
        </div>
        </section>



        <div class="container">
            <div id="i" class="modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sign in to AlphaTub</h5>
                        <button class="btn-close" id="btn_close_sign" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex align-items-center justify-content-center my-3">
                            <img src="imgs/logo.svg"  alt="" srcset="">
                        </div>
                        <form>
                            <div class="form-group">
                                <input type="text" autocomplete="none" placeholder="Username"  name="username" id="email">
                            </div>
                            <div class="form-group">
                                <input  type="password" placeholder="Password" class="my-3" id="pass" name="password">
                            </div>
                            <div class="form-check mx-4">
                                <input type="checkbox"name="" >
                                <label for="" class="form-check-label">Remember me</label>
                            </div>
                            <button id="btn-login" type="submit" class="btn btn-danger">Sign in</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <span id="sign" class="text-muted">Not a member yet ? <a data-bs-toggle="modal"  class="text-success" href="#j"> join</a> </span>
                    </div>
                </div>
            </div>
        </div>
        </div>




        <div class="container">
            <div id="j" class="modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">join to AlphaTub</h5>
                        <button id="btn_close_join" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex align-items-center justify-content-center my-3">
                            <img src="imgs/logo.svg"  alt="" srcset="">
                        </div>
                        <form method="POST" action="register.php">
                        <div class="form-group">
                                <input type="text" autocomplete="none" placeholder="Username"  name="username" id="email">
                                <?php
                                
                                if(isset($error_username)){
                                    echo $error_username;
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="email" class="my-3" autocomplete="none" placeholder="Email Address or number"  name="email" id="email">
                                <?php
                                
                                if(isset($error_email)){
                                    echo $error_email;
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="my-3" id="pass">
                                <?php
                                
                                if(isset($error_password_empty)){
                                    echo $error_password_empty;
                                }elseif(isset($error_password_bad)){
                                    echo $error_password_bad;
                                }
                                ?>
                            </div>
                            <div class="form-check mx-4">
                                <input type="checkbox">
                                <label  class="form-check-label">Remember me</label>
                            </div>
                            <button id="btn-login" type="submit" name="submit" class="btn btn-danger">join</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <span id="sign" class="text-muted">Already member ? <a data-bs-toggle="modal"  class="text-success" href="#i"> Sign in</a> </span>
                    </div>
                </div>
            </div>
        </div>
        </div>



        <footer class="py-3 bg-dark text-white text-center">
            <div class="container">
                <p class="lead">
                    Copyright &copy;
                </p>
            </div>

        </footer>




    
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>