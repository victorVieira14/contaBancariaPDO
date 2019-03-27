<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
        <title>Login | Sistema de Login</title>
    </head>
 
    <body style="background-image:url(img/teste.jpg); background-size:cover; background-repeat: no-repeat">
         
        <?php 
            include_once 'navbar.php';
        ?>


        <div style="visibility:hidden; height:50px;"></div>
        <div class="container ">
            <div class="row">
                <div class="container col-sm-6 mt-5 pb-5 text-light">

                        <div class="text-center display-4" style="font-family: myFirstFont;">Entrar</div>
                            <form  action="login.php" method="post" accept-charset="utf-8" class="form.group">
                                
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label for="email" style="font-size:2vw;">Email:</label>
                                        <input type="text" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label for="password" style="font-size:2vw;">Senha:</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="submit" name="btnLogin" value="ENTRAR" class="btn btn-danger d-flex mx-auto mt-3">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                
            </div>

 
    </body>
</html>