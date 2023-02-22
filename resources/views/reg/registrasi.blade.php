<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/job-app1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:22:43 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESA.COM</title>
    
<link href="https://i.postimg.cc/wj308LVk/images.png" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme23.css">
    
</head>
<body>
    <div class="form-body on-top-mobile">
        <div class="website-logo">
                    <div><img src="https://i.postimg.cc/hGBKT07K/logo-removebg-preview.png" alt="" style="width:200px;"></div>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder simple-info">
                    <div><img src="image-reg/graphic6.svg" alt=""></div>
                    <div><h3>Registrasi</h3></div>
                    <div><p>Masukkan data yang sesuai untuk mendaftarkan desa anda</p></div>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <form style="margin-top: 90px;" action="/register" method="POST">
                            @csrf
                            <div class="row">
                                @if ($errors->has('username'))
                                    <div class="" style="font-size:16px">{{ $errors->first('username') }}</div>
                                @endif
                                <div class="col-12">
                                    <input type="text" value="{{old('username')}}"  class="form-control @error('username') is-invalid @enderror " placeholder="Nama Desa" name="username">
                                   
                                </div>
                               
                            </div>


                            <div class="row">
                                @if ($errors->has('email'))
                                <div class=""style="font-size: 16x">{{ $errors->first('email') }}</div>
                            @endif
                                <div class="col-12">
                                    <input type="text" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror " placeholder="Email Desa" name="email">
                                </div>
                            </div>

                            @if ($errors->has('password'))
                            <div class="" style="font-size:16px">{{ $errors->first('password') }}</div>
                        @endif
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-3">
                                    <select type="text" class="form-control" placeholder="Provinsi" name="provinsi">
                                        <option selected>Provinsi</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <select type="text" class="form-control" placeholder="Kabupaten/Kota" name="kabupaten">
                                        <option selected>Kabupaten/Kota</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <select type="text" class="form-control" placeholder="Kecamatan" name="kecamatan">
                                        <option selected>Kecamatan</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-3">
                                    @if ($errors->has('kode_pos'))
                                    <div class=" "style="font-size: 16px">{{ $errors->first('kode_pos') }}</div>
                                    @endif
                                    <input type="text" class="form-control" value="{{old('kode_pos')}}" placeholder="Kode Pos" name="kode_pos">
                                </div>
                            </div>
                        
                            @if ($errors->has('koordinat'))
                            <div class=""style="font-size: 16x">{{ $errors->first('koordinat') }}</div>
                            @endif
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Titik Koordinat" name="koordinat">
                                </div>
                            </div>
                            <div class="row">
                                @if ($errors->has('gambar'))
                                <div class="" style="font-size:16px">{{ $errors->first('gambar') }}</div>
                                @endif
                                <div class="col-12 ">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                        <label class="custom-file-label" for="validatedCustomFile">Unggah Persetujuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row top-padding">
                                <div class="col-12 col-sm-6">
                                    <label for="chk1">Sudah punya akun ? <a href="" style="text-decoration: none;">Kembali ke login</a></label>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-button text-right">
                                        <button id="submit" type="submit" class="ibtn less-padding" style="background-color: #F26522; "><a style="text-decoration: none;color: #ffffff">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/job-app1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:22:43 GMT -->
</html>