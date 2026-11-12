<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <header>
        <h1>Home</h1>

        <nav>
            <a href="/products">Produtos</a>
        </nav>    
    </header>
    <main>
        <section>
            <h2>Produtos em destaque</h2>
            <p>Nossos produtos mais desejados neste inverno</p>
            <div class="product-grid"> 

                @foreach ($products as $product)

                    <a href="/products/{{ $product->id }}">
                        <div class="bg-black rounded-lg p-4 text-white shadow-lg">
                            <img 
                            src="{{ $product->image_path }}"
                            alt="{{ $product->name}}"
                            class="w-full h-auto max-h-64 object-contain"
                            >
                            <h4>{{ $product->name }}</h4>
                            <p> {{ $product->formatted_price }}</p>
                        </div>
                    </a>    
                    
                @endforeach  

            </div>
        </section>
    </main>
</body>
</html>