<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;0,800;1,700&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: 'Montserrat', sans-serif;
            }
        </style>
        <title>Laravel Vue SPA</title>
    </head>
    <body>
       <div id="app" class="container-fluid">
        <header class="ml-5 mt-2">
            <h4> Laravel Vue SPA</h4>
        </header>
        <div class="row m-3">

            <div class="col-sm-3">

                <ul class="m-1 nav flex-column">

                    <li class="nav-item font-weight-bold "> The Brand </li>

                    <li class="nav-item ">
                        <router-link to= "/"  exact class="nav-link text-dark"> Logo </router-link>
                    </li>

                    <li class="nav-item " >
                         <router-link :to="{name:'logo-symbol'}" class="nav-link text-dark"> Logo Symbol </router-link>
                    </li>

                    <li class="nav-item ">
                        <router-link to= "/colors" class="nav-link text-dark"> Colors </router-link>
                    </li>

                    <li class="nav-item " >
                         <router-link to="/typography" class="nav-link text-dark"> Typography </router-link>
                    </li>

                    <li class="nav-item mt-4 font-weight-bold "> Doodles </li>

                    <li class="nav-item ">
                        <router-link to= "/mascot" class="nav-link text-dark"> Mascot </router-link>
                    </li>

                    <li class="nav-item " >
                         <router-link to="/illustration" class="nav-link text-dark"> Illustration </router-link>
                    </li>

                    <li class="nav-item">
                        <router-link to= "/Loaders-animation" class="nav-link text-dark"> Loaders and Animation </router-link>
                    </li>

                    <li class="nav-item" >
                         <router-link to="/wallpapers" class="nav-link text-dark"> Wallpapers </router-link>
                    </li>



                    <li class="nav-item font-weight-bold "> Site </li>

                    <li class="nav-item ">
                        <router-link to= "/sitestats"  exact class="nav-link text-dark"> Site Stats </router-link>
                    </li>

                </ul>

            </div>

            <div class="col mt-2">

                <router-view></router-view>

            </div>

        </div>


       </div>
       <script src="/js/app.js"></script>
    </body>
</html>
