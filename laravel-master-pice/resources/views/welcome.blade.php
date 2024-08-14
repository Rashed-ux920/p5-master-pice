<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" href="/mcss/main.css">
        <link rel="stylesheet" href="/mcss/header.css">
        <link rel="stylesheet" href="/mcss/footer.css">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/> --}}


        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> --}}
        <title>{{config('app.name')}}</title>
    </head>
    <body>
        <header>
            <h1><a href="#">logo</a></h1>
            <nav>
                <h2><a href="#">home</a></h2>
                <h2><a href="#">about</a></h2>
                <h2><a href="#">contact</a></h2>
            </nav>
            <div class="links">
                <h3><a href="#" class="getin">signin</a></h3>
                <h3><a href="#" class="getin">login</a></h3>
            </div>
        </header>
        <section class="section" id="home">
            <div class="info">
                <h3 class="title">home</h3>
            </div>

        </section>

        <footer>
            <div class="ssection">
                <div class="info">
                    <h3 class="title">our socialmedia</h3>
                </div>
                <div class="texticon-info">
                    <div class="icon">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-square-instagram"></i>
                        <i class="fa-brands fa-square-snapchat"></i>
                        <i class="fa-brands fa-linkedin"></i>
                    </div>
                    <div class="text">
                        <a href="#">facebook</a>
                        <a href="#">insegram</a>
                        <a href="#">snapchat</a>
                        <a href="#">linkedin</a>
                    </div>
                </div>
            </div>
            <div class="ssection">
                <div class="info">
                    <h3 class="title">contact methods</h3>
                </div>
                <div class="texticon-info">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                        <i class="fa-solid fa-fax"></i>
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="text">
                        <a href="#">06 663 219 5</a>
                        <a href="#">+962 79 663 219 5</a>
                        <a href="#">handyman@gmail.com</a>

                    </div>
                </div>

            </div>
        </footer>

    </body>
</html>
