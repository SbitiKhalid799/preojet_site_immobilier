<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favorites</title>
    <style>
        main{
            margin-top:100px; 
            padding: 0 40px; 
            
        }

        nav{
            z-index: 5;
            box-shadow: 0px 1px 3px 0px black;
            width: 100vw;
            padding:10px 40px;
            background-image: url('images/mainImage.jpg');
            background-size: cover; /* Ensure the image covers the entire container */
            background-position: center; /* Center the background image */
                        position: fixed;
            top: 0;
            left:0;
        }
        h1{
            text-shadow: 0px 2px 0px black ;
        }
        .Back a{
            color: white;
            text-decoration: underline
        }
        .flech{
            transform: scale(1.5,1.5)
        }

        .crd{
            box-shadow: 0px 1px 3px 0px black;
            height: 350px;
        }
    </style>
</head>
<body>
    <nav class="d-flex align-items-center justify-content-between divNav">
            <h1 class="text text-light">
                <img class="flech" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAATxJREFUSEu1lTtKBEEURc9dhZgqjpiKkSAD5hOZuwE34gJcigvwA4KITCYqYuoncAXic94wSrdd9araoQs66uKe970lBj4aWJ8OwMxWgNPZt5OA3wATSW+1gbUAC/ErYC0QeAZ2ayG/gErxH241pAm4BzZrUwcegHEpkybAEuKfgEc7yoCfgD1Jr7nAIsAHsCXp3cyOgJOMSJhJBLiQNHZRM9sAHoPyZSER4As4AK6B41mpDgv98QC8J61ylXrQo+fzq53pagLuvOZ9FRP3W5k0AavAOeD1XvZMJW27yN9NdsglsL4k4VbS3GpyXlSyi4jf2o2km/a0jSass3hZu/4HJLnV4XvQA5K1jOKDUwEJ/agIWFiFP0KpxtebXWksE5kUxZNjGoHMzPfkDHCf2pf0UgqsqkQlkej/4IBvSySGGWgwLSUAAAAASUVORK5CYII="/>            Favorites</h1>
                <h2 class="text text-light Back">
                    <a href="">
                        <img class="flech" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALZJREFUSEvtlDEKAkEMRf+/qI3aeATZVmwFC9FCPNV2nuXLwCwMA7OZuAYU3Dq89zeZhAj+GMzHX2B2+K0WSToDeJI8WQa3QNINwDaDDySHOYlLUMET90Jyt1ggKQW5Fsm74KnI/IMMfwBYFUnN5FPtrKABv5NcW8M1BS04gA1Jfb8gJQxt0dSC0CF/QmI+00ri3oVuQSEqT8WR5H7xJteAfDLGkGPX+/7NRfOCWvXuGXjFvy94AegUSBm+3xvZAAAAAElFTkSuQmCC"/>
                        Back
                    </a>
                </h2>
            </nav>
            <main class="row">
                {{-- hadi card li ghandiro flbocle --}}
                <div class=" col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card crd mx-1 my-3">
                    </div>
                </div>


            </main>
</body>
</html>