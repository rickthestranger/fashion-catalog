<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    
<body>
    <header>
        <h1>Catálogo</h1>

        <nav>
            <a href="/">Início</a>
            <a href="/products">Produtos</a>
        </nav>    
    </header>
    
    <main>
        <section>

            <p>{{ $product->category->name }}</p>
            <img
                src="{{ $product->image_path }}"
                alt="{{ $product->name }}"
                class="w-full h-auto max-h-64 object-contain"
            >
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->formatted_price }}</p>
            <p>{{ $product->description }}</p>
            <p>Tamanho: {{ $product->size }}</p>
    
        </section>
    </main>
</body>
</html>