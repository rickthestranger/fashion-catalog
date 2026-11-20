<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | URBAN STORE</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#11120f] text-[#f2f2ed] font-sans">

    <header class="border-b border-white/10">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">

            <a href="/" class="text-2xl font-black tracking-tight">
                URBAN<span class="text-lime-400">.</span>
            </a>

            <nav class="flex items-center gap-8 text-sm font-medium text-gray-300">
                <a href="/" class="transition hover:text-lime-400">Início</a>
                <a href="/products" class="transition hover:text-lime-400">Produtos</a>
                <a href="#contact" class="transition hover:text-lime-400">Contato</a>
            </nav>

        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer id="contact" class="border-t border-white/10 bg-[#0b0c0a]">

        <div class="mx-auto grid max-w-7xl gap-10 px-6 py-14 md:grid-cols-3">

            <section>
                <h2 class="text-2xl font-black">
                    URBAN<span class="text-lime-400">.</span>
                 </h2>

                <p class="mt-3 text-sm text-gray-500">
                    STREETWEAR — ESTILO URBANO
                </p>
            </section>

            <section>
                <h3 class="font-bold uppercase tracking-wider">
                    Contato
                </h3>

                <p class="mt-4 text-sm text-gray-400">
                    contato@urbanstore.com
                </p>
            </section>

            <section>
                <h3 class="font-bold uppercase tracking-wider">
                    Redes sociais
                </h3>

                <p class="mt-4 text-sm text-gray-400">
                    @urbanstore
                </p>
            </section>

        </div>

        <div class="flex flex-col items-center justify-between gap-3 border-t border-white/10 px-6 py-5 text-xs text-gray-600 sm:flex-row">

            <p>
                © 2026 Urban Store — Projeto demonstrativo.
            </p>

            <a
                href="{{ route('admin.dashboard') }}"
                class="transition hover:text-gray-300"
            >
                Acesso administrativo
            </a>

        </div>

    </footer>

</body>
</html>