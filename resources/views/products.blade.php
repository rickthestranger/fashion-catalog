
@extends('layouts.app')

@section('title', 'Produtos')

@section('content')


<section class="mx-auto max-w-7xl px-6 py-20">

    <div class="mb-12">
        <p class="mb-3 text-xs font-bold uppercase tracking-[0.25em] text-lime-400">
            Nossa coleção
        </p>

        <h1 class="text-4xl font-black uppercase tracking-tight md:text-5xl">
            Todos os produtos
        </h1>

        <p class="mt-4 text-gray-400">
            Explore nossa seleção de peças.
        </p>
    </div>

    <form action="{{ url('/products') }}" method="GET" class="mb-8 flex gap-3">

        <input
            type="text"
            name="search"
            value="{{ $search }}"
            placeholder="Buscar produtos..."
            class="w-full rounded-lg border border-white/10 bg-[#20221d] px-5 py-3 text-white placeholder-gray-500 outline-none transition focus:border-lime-400"
        >

        @if ($categoryId)
            <input type="hidden" name="category" value="{{ $categoryId }}">
        @endif

        <button
            type="submit"
            class="rounded-lg bg-lime-400 px-6 py-3 font-bold text-black transition hover:bg-lime-300"
        >
            Buscar
        </button>

    </form>

    <nav class="mb-12 flex flex-wrap gap-3">

        <a href="/products"
           class="rounded-full px-5 py-2 text-sm font-bold transition
           {{ !$categoryId ? 'bg-lime-400 text-black' : 'bg-[#20221d] text-gray-400 hover:text-lime-400' }}">
            Todos
        </a>

        @foreach ($categories as $category)

            <a href="{{ url('/products') . '?category=' . $category->id }}"
               class="rounded-full px-5 py-2 text-sm font-bold transition
               {{ $categoryId == $category->id ? 'bg-lime-400 text-black' : 'bg-[#20221d] text-gray-400 hover:text-lime-400' }}">

                {{ $category->name }}

            </a>

        @endforeach

    </nav>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

        @foreach ($products as $product)

            
            <a href="/products/{{ $product->id }}" class="group">

                <div class="overflow-hidden bg-[#20221d]">

                    <div class="flex aspect-[4/5] items-center justify-center p-6">

                        <img
                            src="{{ $product->image_path }}"
                            alt="{{ $product->name }}"
                            class="h-full w-full object-contain transition duration-500 group-hover:scale-105"
                        >

                    </div>

                </div>

                <div class="flex items-start justify-between gap-4 py-5">

                    <div>
                        <h2 class="font-bold transition group-hover:text-lime-400">
                            {{ $product->name }}
                        </h2>

                        <p class="mt-2 text-sm text-gray-500">
                            {{ $product->category->name }}
                        </p>
                </div>

                <p class="font-bold text-lime-400">
                    {{ $product->formatted_price }}
                </p>

            </div>

        </a>


        @endforeach

    </div>

</section>


@endsection
