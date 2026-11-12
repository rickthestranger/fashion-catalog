<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de produtos</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Catálogo</h1>

        <nav>
            <a href="/">Início</a>
        </nav>    
    </header>
    <main>
        <section>
            <h2>Nosso catálogo</h2>
            <p>Explore nossos produtos.</p>
            <h3>Produtos em destaque</h3>
            
            <div class="products-grid">

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
    <footer>
        <section>
            <h2>URBAN STORE</h2>
            <p>STREETWEAR - ESTILO URBANO</p>
        </section>
        <section>
            <h3>CONTATO</h3>
            <p>WhatsApp:(00)(0 0000-0000)</p>
            <p>E-mail:Contato@urbanstore.com</p>
        </section>
        <section>
            <h3>REDES SOCIAIS</h3>
            <p>@urbanstore</p>
        </section>
    </footer>
</body>
</html>