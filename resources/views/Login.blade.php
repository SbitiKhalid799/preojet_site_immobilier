<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link  href="/bootstrap-5.3.2-dist/css/bootstrap.css" rel="stylesheet">

    <title>Login</title>
    <style>
        body{
            overflow: hidden;
        }

        main div{
            height: 100vh;
        }
        #img{
            background-image: url('images/LoginImage.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .text-dark{
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
        }

        form{
            width: 70% ;
            border: 1px solid #424040;
            height: 250px;
            border-radius:10px;
        }

        form input{
            width: 100%;
            height:40px;
            border-radius:5px;
            border: 1px solid #424040;
        }

        form div{
            width: 80%;
        }
        @media (max-width: 700px) {
            form{
                width: 80%;
            }
        }
        .titleForm{
            margin-top:-30px;
            background: white;
            padding: 0 20px;
        }

        form button {
            background-color: #424040;
            padding :0 20px;
            border-radius:8px;
            color: white;
            border: 1px solid #424040;
            transform: scale(1.2,1.2);
        }

        form button:hover{
            color: #424040;
            background-color: white;

        }
        .bottom-content{
            margin-top: 2px;
            padding: 0px;
 
        }

    </style>
</head>
<body>
    <main class="row">
        <div id="img" class="col-lg-5 col-md-4 col-sm-2 d-sm-block d-none ">
        </div>
        <div class="col-lg-7 col-md-8 col-sm-10
        d-flex align-items-center justify-content-center">
            <form action="" class="d-flex flex-column align-items-center justify-content-center">
                <h1 class="titleForm">Log in</h1>
                <div>
                    <label for="">Username</label>
                    <br>
                    <input type="text"  class="form-control border-dark">
                </div>
                <div>
                    <label for="">Password</label>
                    <br>
                    <input type="text" class="form-control border-dark">
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center hover-zoom">
                    <button class="bg-dark text-light mt-2">Login</button>
                </div>
                <div class="bottom-content"> 
                    
                        <img src="images/icons8-back.gif" class="d-inline" > 
                        <a href="/" class="text-dark h4 blockquote d-inline">BACK</a>
                </div>
            </form>
        </div>
    </main>



   <link  href="/bootstrap-5.3.2-dist/js/bootstrap.js" rel="stylesheet">

</body>
</html>
