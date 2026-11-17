
@extends('layouts.app')

@section('title', $product->name)

@section('content')

    
<section class="mx-auto max-w-7xl px-6 py-20">

    <a href="/products" class="text-sm font-bold text-gray-400 transition hover:text-lime-400">
        ← Voltar para produtos
    </a>

    <div class="mt-10 grid grid-cols-1 gap-12 md:grid-cols-2">

        <!-- Imagem do produto -->
        <div class="flex min-h-[450px] items-center justify-center bg-[#20221d] p-10">

            <img
                src="{{ $product->image_path }}"
                alt="{{ $product->name }}"
                class="h-full max-h-[550px] w-full object-contain"
            >

        </div>

        <!-- Informações do produto -->
        <div class="flex flex-col justify-center">

            <p class="text-sm font-bold uppercase tracking-[0.25em] text-lime-400">
                {{ $product->category->name }}
            </p>

            <h1 class="mt-5 text-4xl font-black uppercase tracking-tight md:text-5xl">
                {{ $product->name }}
            </h1>

            <p class="mt-6 text-2xl font-bold text-lime-400">
                {{ $product->formatted_price }}
            </p>

            <div class="mt-8 border-t border-white/10 pt-8">

                <h2 class="text-sm font-bold uppercase tracking-wider">
                    Descrição
                </h2>

                <p class="mt-4 leading-7 text-gray-400">
                    {{ $product->description }}
                </p>

            </div>

            <div class="mt-8 border-t border-white/10 pt-8">

                <p class="text-sm font-bold uppercase tracking-wider">
                    Tamanho
                </p>

                <p class="mt-3 text-gray-400">
                    {{ $product->size }}
                </p>

            </div>

        </div>

    </div>

</section>


@endsection
