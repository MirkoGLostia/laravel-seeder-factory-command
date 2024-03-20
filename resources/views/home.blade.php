<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body class="bg-dark text-white">

    <main class="d-flex gap-2 p-5 justify-content-around">

        @foreach ($products as $product)
            <div class="card col-2">
                <p class="text-center text-uppercase fs-2">{{ $product->category->label }}</p>

                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $product->price }}</h6>
                    <h5 class="card-title text-capitalize">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="#" class="btn btn-dark">Get Started</a>
                </div>
            </div>
        @endforeach


    </main>
</body>

</html>
