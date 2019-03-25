<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts Assets</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="">
        <div id="app">
            <div class="container mx-auto">
                <header class="py-6 mb-8">
                    <h1>
                        <img src="/images/logo.svg" alt="Laracasts">
                    </h1>
                </header>

                <div class="main flex">
                    <aside class="w-1/5">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-4">The Brand</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/">Logo</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/about">Logo symbol</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/">Colors</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/about">Typography</router-link></li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-4">Doodles</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/">Mascot</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/about">Illustrations</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/about">Loaders and Animations</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/about">Wallpapers</router-link></li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
