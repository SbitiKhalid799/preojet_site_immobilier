<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
    <style>
        body{
            overflow: hidden;
        }

        main div{
            height: 100vh;
        }
        #img{
            background-image: url('images_login/LoginImage.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        form{
            width: 70% ;
            height: 40px;
            border: 1px solid #424040;
            height: 300px;
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
            border-radius:4000px;
            color: white;
            border: 1px solid #424040;
            transform: scale(1.2,1.2);
        }

        form button:hover{
            color: #424040;
            background-color: white;

        }

    </style>
</head>
<body>
    <main class="row">
        <div id="img" class="col-lg-5 col-md-4 col-sm-2 d-sm-block d-none bg-primary">
        </div>
        <div class="col-lg-7 col-md-8 col-sm-10
        d-flex align-items-center justify-content-center">
            <form action="" class="d-flex flex-column align-items-center justify-content-center">
                <h1 class="titleForm">Log in</h1>
                <div>
                    <label for="">Use Name</label>
                    <br>
                    <input type="text">
                </div>
                <div>
                    <label for="">Password</label>
                    <br>
                    <input type="text">
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <button>Login</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
