<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Blog</title>
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
    <nav class="navbar navbar-expand-sm bg-light justify-content-center border-bottom">
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

    <h1 class="mt-5 text-center">The Feed</h1>

    <div class="" style="margin-left: auto; margin-right:auto; max-width:980px; ">
        <div class="my-4">
            <a style="text-decoration: none; color:black; float:left; margin-left: 20px;" href="#"> All Posts</a>
            <button type="submit" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#myModal"
                style="color:#bb5a3a; border: 1px solid #bb5a3a; float:right; margin-right: 20px;">Logn İn/Sign
                Up</button><br><br>
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Logn In</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form>
                                <div class="mb-3 mt-3">
                                    <label for="email"
                                        style="display: inline-block; margin-right:auto; margin-left:auto;">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email"
                                        name="email" style="width: 70%;">
                                </div>
                                <div class="mb-3">
                                    <label for="pwd" class="text-center">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                        name="pswd " style="width: 70%;">
                                </div>
                                <div class="form-check mb-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Logn In</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card" style="width: 18.4rem;">
                    <img src="https://static.wixstatic.com/media/75059a_cf2c39f511b6478eaea5b4f7713831c0~mv2.jpg/v1/fill/w_365,h_265,fp_0.50_0.50,q_90,enc_auto/75059a_cf2c39f511b6478eaea5b4f7713831c0~mv2.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title" style="font-size: 12px;"><small>Mar 22 . 2 min </small></p>
                        <div class="card-text">
                            <a href="#" style="text-decoration: none; color:black;">
                            <h3>Transform your winter blues into winter creativity </h3>
                            <p>Create a blog post subtitle that summarizes your post in a few short, punchy sentences
                                and...</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mt-4" style="width: 18.4rem;">
                    <img src="https://static.wixstatic.com/media/75059a_3a3953ba8daa4a419562db4e61c7bee7~mv2.jpg/v1/fill/w_365,h_548,fp_0.50_0.50,q_90,enc_auto/75059a_3a3953ba8daa4a419562db4e61c7bee7~mv2.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title" style="font-size: 12px;"><small>Mar 22 . 2 min </small></p>
                        <div class="card-text">
                            <a href="#" style="text-decoration: none; color:black;">
                            <h3>The things we carry, and what we can let go of</h3>
                            <p>Create a blog post subtitle that summarizes your post in a few short, punchy
                                sentences

<                            </a>                                and...</p>
                        </div>
                    </div>
                </div>

                <div class="card mt-4" style="width: 18.4rem;">
                    <img src="https://static.wixstatic.com/media/84770f_b4af8c9f339144fda2803e9d47f91507~mv2.jpg/v1/fill/w_365,h_413,fp_0.50_0.50,q_90,enc_auto/84770f_b4af8c9f339144fda2803e9d47f91507~mv2.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title" style="font-size: 12px;"><small>Mar 22 . 2 min </small></p>
                        <div class="card-text">
                            <a href="#" style="text-decoration: none; color:black;">
                            <h3>Join the re-commerce revolution</h3>
                            <p>Create a blog post subtitle that summarizes your post in a few short, punchy
                                sentences

<                            </a>                                and...</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card" style="width: 18.4rem;">
                    <img src="https://static.wixstatic.com/media/75059a_19d50c96541b4b1aa915d498b351bd17~mv2.jpg/v1/fill/w_365,h_479,fp_0.50_0.50,q_90,enc_auto/75059a_19d50c96541b4b1aa915d498b351bd17~mv2.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title" style="font-size: 12px;"><small>Mar 22 . 2 min </small></p>
                        <div class="card-text">
                            <a href="#" style="text-decoration: none; color:black;">
                            <h3>5 reasons to wake up at 5am</h3>
                            <p>Create a blog post subtitle that summarizes your post in a few short, punchy sentences
                                and...</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mt-4" style="width: 18.4rem;">
                    <img src="https://static.wixstatic.com/media/75059a_9f8cd2f1282c4dc7ae9a4bea155e2661~mv2.jpg/v1/fill/w_365,h_469,fp_0.50_0.50,q_90,enc_auto/75059a_9f8cd2f1282c4dc7ae9a4bea155e2661~mv2.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title" style="font-size: 12px;"><small>Mar 22 . 2 min </small></p>
                        <div class="card-text">
                            <a href="#" style="text-decoration: none; color:black;">
                            <h3>When expecting, expect the unexpected</h3>
                            <p>Create a blog post subtitle that summarizes your post in a few short, punchy
                                sentences

<                            </a>                                and...</p>
                        </div>
                    </div>
                </div>

                <div class="card mt-4" style="width: 18.4rem;">
                    <img src="https://static.wixstatic.com/media/75059a_f248dc4a291e436cbbd80630228e4359~mv2.gif"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title" style="font-size: 12px;"><small>Mar 22 . 2 min </small></p>
                        <div class="card-text">
                            <a href="#" style="text-decoration: none; color:black;">
                            <h3>Starting fresh: New Year resolutions</h3>
                            <p>Create a blog post subtitle that summarizes your post in a few short, punchy
                                sentences

<                            </a>                                and...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card" style="width: 18.4rem;">
                    <img src="https://static.wixstatic.com/media/a27d24_77c3bdd084c14f50a13aa9b44485c2e3~mv2.jpg/v1/fill/w_365,h_510,fp_0.50_0.50,q_90,enc_auto/a27d24_77c3bdd084c14f50a13aa9b44485c2e3~mv2.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title" style="font-size: 12px;"><small>Mar 22 . 2 min </small></p>
                        <div class="card-text">
                            <a href="#" style="text-decoration: none; color:black;">
                            <h3>How decluttering changed my life</h3>
                            <p>Create a blog post subtitle that summarizes your post in a few short, punchy sentences
                                and...</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-6">
                    <div class="card mt-4" style="width: 18.4rem;">
                        <img src="https://static.wixstatic.com/media/75059a_e8c32c1a6411479ab8c73d5bc733e4d7~mv2.jpg/v1/fill/w_365,h_504,fp_0.50_0.50,q_90,enc_auto/75059a_e8c32c1a6411479ab8c73d5bc733e4d7~mv2.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title" style="font-size: 12px;"><small>Mar 22 . 2 min </small></p>
                            <div class="card-text">
                                <a href="#" style="text-decoration: none; color:black;">
                                <h3>When expecting, expect the unexpected</h3>
                                <p>Create a blog post subtitle that summarizes your post in a few short, punchy
                                    sentences

<                            </a>                                    and...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4" style="width: 18.4rem;">
                    <img src="https://static.wixstatic.com/media/75059a_82b6baa053584f47bcf4098b43ea843b~mv2.jpg/v1/fill/w_365,h_244,fp_0.50_0.50,q_90,enc_auto/75059a_82b6baa053584f47bcf4098b43ea843b~mv2.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title" style="font-size: 12px;"><small>Mar 22 . 2 min </small></p>
                        <div class="card-text">
                            <a href="#" style="text-decoration: none; color:black;">
                            <h3>Top street markets in the Middle East</h3>
                            <p>Create a blog post subtitle that summarizes your post in a few short, punchy
                                sentences

<                            </a>and...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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