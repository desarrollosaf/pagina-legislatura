<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Palacio Legislativo</title>
    <script defer="defer" src="{{@mix("js/app.js")}}"></script>
    <link href="{{@mix("css/app.css")}}" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar border-bottom border-light navbar-expand-xl">
        <div class="container-xl"><a class="navbar-brand py-20 py-xl-0" href="#">
                <div class="d-flex align-items-center position-relative"><img src="./images/brand.svg" alt=""></div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <form class="search-form" role="search"><input class="form-control me-2 search-control" type="search"
                                                               placeholder="Explora tu legislativo" aria-label="Search">
                </form>
                <div class="navbar-nav"><a class="nav-link active" aria-current="page" href="#">Legislatura</a> <a
                        class="nav-link" href="#">Actividad</a> <a class="nav-link" href="#">Transparencia</a></div>
            </div>
        </div>
    </nav>
</header>

<footer>
    <div class="bg-lighter py-40 py-lg-60">
        <div class="container-xl">
            <div class="d-flex flex-column flex-lg-row align-items-center">
                <div class="col-12 col-lg-6 mb-16 mb-lg-0"><h4 class="text-center fs-16">Poder Legislativo del Estado de
                        México</h4>
                    <nav
                        class="d-flex align-items-center justify-content-center flex-wrap text-nowrap fs-12 nav-footer">
                        <a href="">Aviso de Privacidad</a> <a href="">Transparencia</a> <a href="">Dependencias</a>
                    </nav>
                </div>
                <div class="col-12 col-lg-3 mb-16 mb-lg-0">
                    <nav class="d-flex justify-content-center justify-content-lg-end social-icons"><a href=""
                                                                                                      class="d-flex align-items-center justify-content-center me-16"><i
                                class="icon-facebook-fill"></i> </a><a href=""
                                                                       class="d-flex align-items-center justify-content-center me-16"><i
                                class="icon-twitter-fill"></i> </a><a href=""
                                                                      class="d-flex align-items-center justify-content-center me-16"><i
                                class="icon-instagram-fill"></i> </a><a href=""
                                                                        class="d-flex align-items-center justify-content-center"><i
                                class="icon-youtube"></i></a></nav>
                </div>
                <div class="col-12 col-lg-3 fs-12 text-center text-lg-start order-lg-first lh-sm"><p class="mb-8">Plaza
                        Hidalgo s/n, Col. Centro<br>Toluca de Lerdo, Estado de México</p>
                    <p class="mb-0">Conmutador (722) 279-6400</p></div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
