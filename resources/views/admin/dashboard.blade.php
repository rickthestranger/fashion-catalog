@extends('layouts.app')

@section('title', 'Painel Administrativo')

@section('content')

<section class="mx-auto max-w-7xl px-6 py-20">

    <div class="mb-12">
        <p class="text-xs font-bold uppercase tracking-[0.25em] text-lime-400">
            Administração
        </p>

        <h1 class="mt-3 text-4xl font-black">
            Painel de controle
        </h1>

        <p class="mt-3 text-gray-400">
            Gerencie os produtos e categorias da loja.
        </p>
    </div>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

        <div class="rounded-xl border border-white/10 bg-[#20221d] p-8">
            <h2 class="text-xl font-bold">Produtos</h2>

            <p class="mt-3 text-sm text-gray-400">
                Cadastre, edite e remova produtos do catálogo.
            </p>
        </div>

        <div class="rounded-xl border border-white/10 bg-[#20221d] p-8">
            <h2 class="text-xl font-bold">Categorias</h2>

            <p class="mt-3 text-sm text-gray-400">
                Organize os produtos por categorias.
            </p>
        </div>

    </div>

</section>

@endsection