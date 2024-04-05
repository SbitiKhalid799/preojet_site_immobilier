<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <title>User Page</title>
   <style>
      .overlay {
         position: relative;
      }

      .overlay-content {
         position: absolute;
         top: 10%;
         left: 50%;
         transform: translate(-50%, -50%);
         text-align: center;
         color: white;
         width: 85vw;
         
      }
   </style>
</head>
<body>
   <div class="overlay">
      <img src="images/BigPhoto.jpg" style="width: 100vw; height: 80vh">
      <div class="overlay-content">
         <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <div class="container-fluid d-flex justify-content-between align-items-center">
               <div>
                  <img src="images/Daricon.png" class="d-inline">
                  <h1 class="d-inline fs-5 text-dark"> OKA</h1>
               </div>
               <div>
                  <ul class="navbar-nav me-auto ">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">dima</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
   </div>
</body>
</html>
