<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Crea una web app in grado di leggere una lista di dischi presente nel vostro server">

    <title>PHP Dischi JSON</title>

    <!-- Link CDN Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Framework bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Framework bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- Framework Vuejs  -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Link CDN Axios  -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Custom css  -->
    <link rel="stylesheet" href="./css/style.css">

</head>


<body>

    <div id="app">

        <nav class="navbar " style="background-color: #05131F;">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="#">
                    <img src="./img/spotify-logo.png" alt="Bootstrap" width="70" height="70">
                </a>
            </div>
        </nav>

        <main>

            <div class="container mt-5">

                <div class="row row-cols-3">

                    <div class="col g-5" v-for="album in albums">

                        <div class="card py-5 text-center text-white" class="card-img-top" alt="">

                            <img :src="`./img/${album.poster}`" class="card-img-top" alt="">

                            <div class="card-body">

                                <div class="card-text">

                                    <h3 class="card-title">{{album.title}}</h3>
                                    <p class="card-text fs-5"> {{album.year}} </p>
                                    <p class="card-text fs-4">{{album.author}}</p>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </main>

    </div>

    <script src="js/main.js"></script>
</body>

</html>