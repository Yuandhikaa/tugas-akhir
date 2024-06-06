<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body{
        height: 100%;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    }
    .container{
        display: flex;
        justify-content: center;
        gap: 50px;
        margin-top: 40px;
    }
    .container img{
        width: 130%;
    }
    .container .txt{
        margin-top: 20px;
    }
</style>
<body>
@include('shared.header')

<div class="row mt-4 align-items-center">
     <div class="col-md-6">
          <div class="content-text">
               <div  class="content-text">
               Kamu boleh mempunyai harapan dan keinginan yang terlalu tinggi dalam hidup, tapi ingat kenyataan sekarang harus kamu terima dengan ikhlas baru damai akan menghampirimu.
               </div>
          </div>
          
     </div>

     <div class="d-flex justify-content-lg-between mt-5">
          <div class="d-flex align-items-center gap-4 border-primary">
               <i class="fa fa-users fa-2x"></i>
               <p class="m-0 fs-5">+ 2000 Followers</p>
          </div>
          <div class="d-flex align-items-center gap-4">
               <i class="fa-solid fa-house fa-2x"></i>
               <p class="m-0 fs-5">+ 850 Seller</p>
          </div>
          <div class="d-flex align-items-center gap-4">
               <i class="fa-solid fa-shoe-prints fa-2x"></i>
               <p class="m-0 fs-5">+ 600 Product</p>
          </div>
     </div>
</div>

<h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
<hr class="mb-5">
<div class="row mb-md-5">
<img  src="{{asset('assets/image/13.png ')}}"  align="left" style="width: 400px; height: 450px;">
     <div class="col-md-7">
          <div class="card">
               <div class="card-header text-center">
                    <h4>Kritik dan Saran</h4>
               </div>
              
               <div class="card-body">
                    <div class="mb-3 row">
                         <label for="email" class="col-sm-2 col-form-label">Email</label>
                         <div class="col-sm-10">
                              <input type="text" class="form-control" id="email" value="" placeholder="Masukkan email Anda">
                         </div>
                    </div>
                    <div class="mb-3 row">
                         <label for="pesan" class="col-sm-2 col-form-label">Password</label>
                         <div class="col-sm-10">
                              <input type="text" class="form-control" id="pesan" placeholder="Masukkan Pesan Anda">
                         </div>
                    </div>
                    <button class="btn btn-primary mt-5 w-100">Kirim pesan anda</button>
               </div>

          </div>
     </div>
</div>
</body>
</html>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>