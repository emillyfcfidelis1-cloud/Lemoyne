<div>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    </head>

    <body>
        <nav class="navbar" style="background-color: #ED1C24; height: 60px; display: flex; align-items: center;">

            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="SESI1.png" alt="Bootstrap" width="100" height="40" />

                    <img src="LOGOO.png" alt="Bootstrap" width="200" height="40" style="margin-left: 1030px;" />




                </a>

                <link rel="stylesheet" href="https://jsdelivr.net">


                <a type="button" class=" d-flex align-items-center"
                    style="margin-top: 620px; margin-left: 620px;">
                    <i class="bi bi-plus-square fs-5"></i>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px"
                            class="bi bi-plus-square" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                        </svg></span>
                    </a>
            </div>

        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>

    </html>
</div>
