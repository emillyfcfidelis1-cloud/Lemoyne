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


                <button type="button" class="btn btn-outline-dark d-flex align-items-center gap-2" style="margin-top: 620px; margin-left: 600px;">
                    <i class="bi bi-plus-square fs-5"></i>
                    <span>Novo Post</span>
                </button>
            </div>

        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>

    </html>
</div>
