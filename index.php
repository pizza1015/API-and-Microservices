<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>index</title>
</head>
<body style="background-color:#E7E7E7";>
    <div class="app flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="card-group">
                        <!-- card p-2 is padding to $spacer * .5-->
                        <div class="card p-2">
                            <div class="card-body">
                                <form action="conn_login.php" method="post">
                                    <!-- mb-2 is margin-bottom to $spacer * .5 -->
                                    <div class="text-center mb-2">
                                        <img src="image/logo-mfu-v2.png" height="200px">
                                    </div>
                                    <!-- text-muted used to display messages that are on hold. -->
                                    <p class="text-muted text-center font-6xl">Request Form Online</p>

                                    <div role="group" class="input-group mb-3">
                                        <!--สิ่งที่เป็นสีเทาตรงหัว input-->
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <img src="image/icon-user.png" height="24px">
                                            </div>
                                        </div>
                                        <!-- autocomplete="..." คือการเดาคำ-->
                                        <input type="text" id="Username" require name="Username" placeholder="ID User" class="form-control" >
                                    </div>

                                    <div role="group" class="input-group mb-3">
                                        <!--สิ่งที่เป็นสีเทาตรงหัว input pass-->
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <img src="image/icon-lock.png" height="24px">
                                            </div>
                                        </div>
                                        <input type="password" id="Password" require name="Password" placeholder="Password" class="form-control" >
                                    </div>

                                    <p class="text-muted font-lg">Username / Password <br> use the same as the
                                        registration system </p>

                                    <div class="row">
                                        <div class="text-right col-6"></div>
                                        <div class="col-6">
                                            <button type="submit" name = "b_login"
                                                class="btn w-100 text-white btn-primary">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        
                        <div class="card text-white bg-mfu py-5 d-md-down-none">
                            <div class="card-body">
                                <div><br>
                                    <h3 class="text-center">Request Form for Student Online</h3>
                                </div><br><br><br><br>
                                <p class="text-center"> If you found any mistake or have any question, please contact
                                    division of registrar – registration section via</p><br><br><br><br><br>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="text-right"> Hotline registration section : 053-916369, 6370-72</p>
                                        <p class="text-right"> Email : registration.reg@mfu.ac.th</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>