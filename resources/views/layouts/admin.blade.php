<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Administração') | URBAN.</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#11120f] text-[#f2f2ed]">

    <div class="min-h-screen">

        {{-- Sidebar --}}
        <aside class="fixed inset-y-0 left-0 z-40 flex w-64 flex-col border-r border-white/10 bg-[#0b0c0a] px-6 py-8">

            {{-- Logo --}}
            <a href="{{ route('admin.dashboard') }}" class="text-2xl font-black tracking-tight">
                URBAN<span class="text-lime-400">.</span>
                <span class="ml-1 text-xs font-medium text-gray-500">ADMIN</span>
            </a>

            {{-- Navegação --}}
            <nav class="mt-16 flex-1 space-y-2">

                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium transition
                    {{ request()->routeIs('admin.dashboard') ? 'bg-lime-400/10 font-bold text-lime-400' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                        Dashboard
                </a>

                <a href="{{ route('admin.products.index') }}"
                    class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium transition
                    {{ request()->routeIs('admin.products.*') ? 'bg-lime-400/10 font-bold text-lime-400' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                        Produtos
                </a>

                <a href="{{ route('admin.categories.index') }}"
                    class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium transition
                    {{ request()->routeIs('admin.categories.*') ? 'bg-lime-400/10 font-bold text-lime-400' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                        Categorias
                </a>

            </nav>

            {{-- Usuário --}}
            <div class="border-t border-white/10 pt-6">

                <p class="text-sm font-bold">
                    {{ auth()->user()->name }}
                </p>

                <p class="mt-1 text-xs text-gray-500">
                    {{ auth()->user()->email }}
                </p>

                <form action="{{ route('logout') }}" method="POST" class="mt-5">
                    @csrf

                    <button
                        type="submit"
                        class="w-full rounded-lg px-4 py-3 text-left text-sm font-medium text-gray-400 transition hover:bg-red-500/10 hover:text-red-400"
                    >
                        Sair da conta
                    </button>
                </form>

            </div>

        </aside>

        {{-- Área principal --}}
        <main class="min-h-screen pl-64">

            {{-- Header --}}
            <header class="flex h-20 items-center justify-between border-b border-white/10 px-10">

                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-lime-400">
                        Área administrativa
                    </p>

                    <h2 class="mt-1 text-lg font-bold">
                        @yield('page-heading', 'Dashboard')
                    </h2>
                </div>

                <a
                    href="/"
                    class="text-sm font-medium text-gray-400 transition hover:text-lime-400"
                >
                    Ver loja
                </a>

            </header>

            {{-- Conteúdo --}}
            <div class="px-10 py-10">
                @yield('content')
            </div>

        </main>

    </div>

</body>
</html>