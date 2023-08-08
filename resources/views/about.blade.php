<!DOCTYPE html>
<html lang="en">

<head>

    <title>Hakkımda</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-sm bg-light justify-content-center border-bottom mb-5">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active text-dark me-2" href="#">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark me-2 active" href="#">Hobiler</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-dark me-2 " href="#">Paylaşımlar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-dark me-2" href="#">Hakkımda</a>
            </li>
        </ul>
    </nav>

    <h1>Hello, {{ $name }}</h1>

    <div style="background-color:#fef2f0; width:936px; margin-left:auto; margin-right:auto; position:relative;">
        <div style=" width:45%;  " class="p-5">
            <h1>
                Meet the face
                behind the posts</h1>
            <p>L'm a paragraph. Click here to add your own text and edit me.
                It’s easy. Just click “Edit Text” or double click me to add your
                own content and make changes to the font. Feel free to drag and
                drop me anywhere you like on your page. I’m a great place for you
                to tell a story and let your users know a little more about you.</p>
            <p>This is a great space to write a long text about your company and your
                services. You can use this space to go into a little more detail about
                your company. Talk about your team and what services you provide. Tell
                your visitors the story of how you came up with the idea for your business
                and what makes you different from your competitors. Make your company stand
                out and show your visitors who you are.</p>
        </div>


    </div>
    <div style="position: absolute; top:30%; right:10%">
        <img src="https://static.wixstatic.com/media/75059a_837c609e5bfe43c69662dcb5fd611e96~mv2.jpg/v1/crop/x_1023,y_136,w_4032,h_3011/fill/w_613,h_455,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/GettyImages-962633986.jpg"
            alt="" style="float: right; width:80%">
    </div>
    <div style="height:680px; width:100%; margin-top:100px; background-color:#fef2f0; position: relative;">
        <h1 class="text-center" style="padding-top:100px;"> Let me know what's on your mind</h1>
        <div style="max-width: 614px; margin-left:auto; margin-right:auto; margin-top:100px;">
            <div class="row">
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
                <div class="row" style="margin-top:50px;">
                    <div class="col-md">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="col-md">
                        <input type="text" class="form-control" placeholder="Leave us a message..."
                            aria-label="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <button type="submit" class="btn btn-white mt-5 px-5 py-2"
                            style="background-color:#bb5a3a; color:white; border: 1px solid #bb5a3a; margin-left:35%;"><b>Submit</b></button><br><br>
                    </div>
                </div>
            </div>
        </div>

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top"
            style="background-color:#bb5a3a; position:absolute; bottom:0px;width:100%;">
            <p class="col-md-4 mb-0 text-dark">&copy; 2022 Company, Inc</p>

            <a href="#"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
        </footer>
    </div>



</body>

</html>