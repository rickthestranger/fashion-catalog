@extends('layouts.app')

@section('title', 'Início')

@section('content')

    <!-- Apresentação principal -->
        <section class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-24 md:grid-cols-2 md:py-32">

            <div>
                <p class="mb-5 text-sm font-bold uppercase tracking-[0.3em] text-lime-400">
                    Streetwear / Urban Culture
                </p>

                <h1 class="max-w-xl text-5xl font-black uppercase leading-[1.05] tracking-tight md:text-7xl">
                    Vista sua
                    <span class="text-lime-400">identidade.</span>
                </h1>

                <p class="mt-7 max-w-md text-base leading-7 text-gray-400">
                    Peças selecionadas para quem transforma estilo
                    em expressão pessoal.
                </p>

                <a href="/products"
                   class="mt-9 inline-flex items-center bg-lime-400 px-7 py-4 text-sm font-black uppercase tracking-wider text-black transition hover:bg-lime-300">
                    Explorar coleção
                </a>
            </div>

            <div class="relative flex min-h-80 items-center justify-center overflow-hidden bg-[#20221d] p-8 md:min-h-[440px]">

                <div class="absolute h-64 w-64 rounded-full bg-lime-400/10 blur-3xl"></div>

                <p class="relative text-center text-6xl font-black uppercase leading-none tracking-tighter text-white/10 md:text-8xl">
                    Urban<br>Culture
                </p>

                <span class="absolute bottom-6 right-6 text-xs font-bold uppercase tracking-[0.2em] text-lime-400">
                    Est. 2026
                </span>

            </div>

        </section>

        <!-- Produtos em destaque -->
        <section class="mx-auto max-w-7xl px-6 py-20">

            <div class="mb-12 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">

                <div>
                    <p class="mb-3 text-xs font-bold uppercase tracking-[0.25em] text-lime-400">
                        Seleção especial
                    </p>

                    <h2 class="text-3xl font-black uppercase tracking-tight md:text-4xl">
                        Produtos em destaque
                    </h2>
                </div>

                <a href="/products" class="text-sm font-bold text-gray-400 transition hover:text-lime-400">
                    Ver todos os produtos →
                </a>

            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

                @forelse ($products as $product)

                    <a href="/products/{{ $product->id }}"
                       class="group">

                        <div class="overflow-hidden bg-[#20221d]">

                            <div class="flex aspect-[4/5] items-center justify-center p-6">

                                <img
                                    src="{{ $product->image_url }}"
                                    alt="{{ $product->name }}"
                                    class="h-full w-full object-contain transition duration-500 group-hover:scale-105"
                                >

                            </div>

                        </div>

                        <div class="flex items-start justify-between gap-4 py-5">

                            <div>
                                <h3 class="font-bold transition group-hover:text-lime-400">
                                    {{ $product->name }}
                                </h3>

                                <p class="mt-2 text-sm text-gray-500">
                                    {{ $product->category->name }}
                                </p>
                            </div>

                            <p class="font-bold text-lime-400">
                                {{ $product->formatted_price }}
                            </p>

                        </div>

                    </a>

                @empty

                    <p class="text-gray-400">
                        Nenhum produto em destaque no momento.
                    </p>

                @endforelse

            </div>

        </section>


@endsection
