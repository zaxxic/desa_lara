<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/job-app1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:22:43 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESA.COM</title>
    
<link href="https://i.postimg.cc/wj308LVk/images.png" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" type="text/css" href="reg/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="reg/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="reg/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="reg/css/iofrm-login.css">
</head>
<body>
    <div class="form-body on-top-mobile">
        <div class="website-logo" style="margin-left: 1050px;">
                    <div><img src="https://i.postimg.cc/hGBKT07K/logo-removebg-preview.png" alt="" style="width:200px;"></div>
        </div>
        <div class="row">
            <div class="img-holder" style="margin-left: 800px;">
                <div class="bg"></div>
                <div class="info-holder simple-info" >
                    <div><img src="reg/image-reg/graphic6.svg" alt=""></div>
                    <div><h3>Login</h3></div>
                    <div><p>Masukkan email dan password untuk login</p></div>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="form-items" style="margin-left: 250px;">
                            <h3>Login</h3>
                        </div>
                        <form method="post" action="/login">
                            @csrf

                            <div class="row">
                                @if ($errors->has('email'))
                                <div class=""style="font-size: 16x">{{ $errors->first('email') }}</div>
                                @endif
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Email Desa" name="email">                                
                                </div>
                                
                            </div>
                            <div class="row">
                                @if ($errors->has('password'))
                                <div class=""style="font-size: 16x">{{ $errors->first('password') }}</div>
                                @endif
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Password" name="password">
                                </div>
                                
                            </div>
                            <div class="row top-padding">
                                <div class="col-12 col-sm-6">
                                    <label for="chk1">Belum punya akun ? <a href="registrasi.html" style="text-decoration: none;">Daftar sekarang</a></label>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-button text-right">
                                        <button id="submit" type="submit" class="ibtn less-padding" style="background-color: #F26522; color: #ffffff"><a style="text-decoration: none; color: #ffffff">Login</a></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="reg/js/jquery.min.js"></script>
<script src="reg/js/popper.min.js"></script>
<script src="reg/js/bootstrap.min.js"></script>
<script src="reg/js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/job-app1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:22:43 GMT -->
</html>