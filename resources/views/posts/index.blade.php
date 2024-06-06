<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HYPERSHOES</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    body,
    html {
        height: 100%;
        font-family: Arial, sans-serif;
        background-color: #ffff;

    }

    .container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        height: 100%;
        margin-left: 50px;
        gap: 20px;
    }

    .container img {
        width: 30%;
        left: 10%;
    }

    .btn1 {
        padding: 15px 35px;
        background-color: #696969;
        border-radius: 30px;
    }
    .btnn{
        position: absolute;
        display: flex;
        gap: 20px;
        left: 20%;
        top: 70%;
    }
    
    .btn1 a{
        text-decoration: none;
        font-size: 1.5vw;
        color: #4B0909;
        font-weight: 700;
    }
    .txt{
        font-size: 3.5vw;
        width: 30%;
        margin-top: 20px;
        line-height: 60px;
        font-weight: 500;
    }
    

</style>

<body>
    @include('shared.header')
    <h4 class="mt-5">Sneakers</h4>
<div class="col-md-16 d-flex flex-wrap gap-4 mb-3">
          <div class="card" style="width: 165px;">
               <div class="card-header m-auto" style="border-radius:10px;">
               <img src="{{asset('assets/image/1.png')}}"  style="width: 130px; height: 165px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jordan Air Legacy 312 Low </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 99+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 165px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/2.png')}}"  style="width: 130px; height: 165px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Adidas Breaknet fx8707 </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 75+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 165px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                 <img src="{{asset('assets/image/3.png')}}"  style="width: 130px; height: 165px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Nike Dunk Low Junior </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 99+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 165px;">
               <div class="card-header m-auto" style="border-radius:10px;">
               <img src="{{asset('assets/image/4.png')}}"  style="width: 130px; height: 165px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Nike Airmax 97 </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 80+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 165px;">
               <div class="card-header m-auto" style="border-radius:10px;">
               <img src="{{asset('assets/image/5.png')}}"  style="width: 130px; height: 165px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify">New Balance 1906R </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 95+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 165px;">
               <div class="card-header m-auto" style="border-radius:10px;">
               <img src="{{asset('assets/image/6.png')}}"  style="width: 130px; height: 165px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> New Balance 550 Junior</p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 89+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 165px;">
               <div class="card-header m-auto" style="border-radius:10px;">
               <img src="{{asset('assets/image/7.png')}}"  style="width: 130px; height: 165px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Lacoste Lineshot 223 3 SMA </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 99+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 165px;">
               <div class="card-header m-auto" style="border-radius:10px;">
               <img src="{{asset('assets/image/8.png')}}"  style="width: 130px; height: 165px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Lacoste T-Clip 223 1 JD SMA </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 99+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 165px;">
               <div class="card-header m-auto" style="border-radius:10px;">
               <img src="{{asset('assets/image/9.png')}}"  style="width: 130px; height: 165px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> SL 72 RS SHOES </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 99+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 165px;">
               <div class="card-header m-auto" style="border-radius:10px;">
               <img src="{{asset('assets/image/10.png')}}"  style="width: 130px; height: 165px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify">GAZELLE SHOES</p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 99+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 165px;">
               <div class="card-header m-auto" style="border-radius:10px;">
               <img src="{{asset('assets/image/11.png')}}"  style="width: 130px; height: 165px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> SAMBA OG </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 99+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 165px;">
               <div class="card-header m-auto" style="border-radius:10px;">
               <img src="{{asset('assets/image/12.png')}}"  style="width: 130px; height: 165px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Nike ER 041 </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 99+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
</body>

</html>


{{ $posts->links() }}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>