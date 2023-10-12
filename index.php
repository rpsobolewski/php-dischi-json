<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Document</title>
    <link href='./style.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div id='app'>
        <header>
            <img class="logo" src="./spotify-logo-transparent-free-png.png" alt="">

        </header>

        <main>

            <div class="container">


                <div class="d-flex flex-wrap justify-content-center text-center" v-if="discs">
                    <div class="col-3 m-3  " v-for="(disc, index) in discs" :key="disc + index">
                        <img class="poster" :src="disc.poster" alt="">
                        <h3>{{disc.title}}</h3>
                        <p>{{disc.author}}</p>
                        <h3>{{disc.year}}</h3>

                    </div>
                </div>

            </div>

        </main>



    </div>
    <!-- Development only cdn, disable in production -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='./main.js'></script>
</body>

</html>