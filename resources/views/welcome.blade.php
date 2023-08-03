<!DOCTYPE html>
<html lang="en">

<head>

    <title>Bootstrap 5</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">

    <style>
    body, h1,h2,h3,h4, h5 {
        font-family: "Raleway", sans-serif
    }
    </style>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-sm bg-light justify-content-center border-bottom">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active text-dark me-2" href="#">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark me-2" href="#">Hobiler</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-dark me-2 " href="#">Paylaşımlar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-dark me-2" href="#">Hakkımda</a>
            </li>
        </ul>
    </nav>


    <h1 class="text-center mt-5">MY BLOG</h1>
    <p class="text-center mb-5">Welcome to the blog of <span class="bg-dark text-white p-1">unknown</span> </p>

    <div class="row">
        <div class="col-7">
            <img src="https://www.w3schools.com/w3images/woods.jpg" alt=""
                style="width: 100%; height: 283px; margin-left:75px;">
            <div style="margin-left:75px; border:1px solid black; width: 100%;">
                <div class="m-3">
                    <h3><b>TITLE HEADING</b></h3>
                    <h5>Title description, April 7, 2014</h5><br>
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem
                        euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed
                        ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo
                        condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <button class="p-2">READ MORE >></button>
                    <p style="float:right">Comments <span class="bg-dark text-white" style="padding:1px"> 0</span></p>
                </div>
            </div>
        </div>


        <div class="col-5 mb-5">
            <img src="https://www.w3schools.com/w3images/avatar_g.jpg" alt=""
                style="width: 75%; height: 270px; margin-left:75px">
            <div style="margin-left:75px; border:1px solid black; width:75%;">
                <div class="m-3">
                    <h4><b>My Name</b></h4><br>
                    <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a
                        interest
                        of lorem ipsum and mauris neque quam blog. I want to share my world with you.
                        Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a
                        interest
                        of lorem ipsum and mauris neque quam blog. I want to share my world with you</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-7 mt-5">
            <img src="https://www.w3schools.com/w3images/bridge.jpg" alt=""
                style="width: 100%; height: 283px; margin-left:75px;">
            <div style="margin-left:75px; border:1px solid black; width: 100%;">
                <div class="m-3">
                    <h3><b>TITLE HEADING</b></h3>
                    <h5>Title description, April 7, 2014</h5><br>
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem
                        euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed
                        ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae
                        justo
                        condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <button class="p-2">READ MORE >></button>
                    <p style="float:right">Comments <span class="bg-dark text-white" style="padding:1px"> 2</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-5 mb-5">
            <div style="margin-left:100px; border:1px solid black; width:75%;">
                <div class="m-4">
                    <h4>Popular Posts</h4>
                    <hr>
                    <ul style="list-style-type: none;">
                        <li class="my-4">
                            <img src="https://www.w3schools.com/w3images/workshop.jpg" style="width: 50px;">
                            <span>Sed mattis nunc</span>
                        </li>
                        <hr>
                        <li class="my-4 ">
                            <img src="https://www.w3schools.com/w3images/gondol.jpg" style="width: 50px;">
                            <span>Sed mattis nunc</span>
                        </li>
                        <hr>
                        <li class="my-4 ">
                            <img src="https://www.w3schools.com/w3images/skies.jpg" style="width: 50px;">
                            <span>Sed mattis nunc</span>
                        </li>
                        <hr>
                        <li class="my-4 ">
                            <img src="https://www.w3schools.com/w3images/rock.jpg" style="width: 50px;">
                            <span>Sed mattis nunc</span>
                        </li>
                        <hr>
                        <li class="my-4 ">
                            <img src="https://www.w3schools.com/w3images/rock.jpg" style="width: 50px;">
                            <span>Sed mattis nunc</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="row">
        <div class="col-8">
        <img src="https://picsum.photos/id/24/875/300" style="width: 100%px; margin-left:75px; margin-top:50px;">
        </div>
        <div class="col-3 border border-dark"><br>
        <h3>TITLE HEADING</h3>
            <br>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam illo totam, fugiat dolore odit,
                 reiciendis impedit nihil iure, autem delectus beatae incidunt? Nemo consequatur corporis repellendus
                  illo eius cupiditate, expedita sunt provident, dicta aut iure nostrum. Autem temporibus sit aliquid. 
                    aut numquam, saepe similique provident placeat impedit harum autem, incidunt minus distinctio laboriosam temporibus 
                    reprehenderit dolore mollitia quibusdam voluptatibus perferendis optio dicta?</p>

        </div>
    </div>




    <footer style="height:175px; padding:32px; background-color:gray; margin-top:20px;">
        <button class="btn btn-lg btn-dark disabled">Previos</button>
        <button class="btn btn-lg btn-dark ">Next>></button><br><br>
        <p>Powered by w3.css</p>

    </footer>












</body>

</html>