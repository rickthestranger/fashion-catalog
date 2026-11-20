@extends('layouts.admin')

@section('title', 'Produtos')
@section('page-heading', 'Produtos')



@section('content')

@if (session('success'))
    <div class="mt-6 rounded-lg border border-lime-400/20 bg-lime-400/10 px-5 py-4 text-sm text-lime-400">
        {{ session('success') }}
    </div>
@endif

    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-black">Produtos</h1>
            <p class="mt-2 text-sm text-gray-400">
                Gerencie os produtos do catálogo.
            </p>
        </div>

        <a href="{{ route('admin.products.create') }}"
            class="rounded-lg bg-lime-400 px-5 py-3 text-sm font-bold text-black transition hover:bg-lime-300">
                + Novo produto
        </a>
    </div>

    <div class="mt-10 overflow-hidden rounded-xl border border-white/10">
        <table class="w-full text-left">
            <thead class="bg-[#20221d] text-xs uppercase tracking-wider text-gray-400">
                <tr>
                    <th class="px-6 py-4 text-left">Imagem</th>
                    <th class="px-6 py-4">Produto</th>
                    <th class="px-6 py-4">Categoria</th>
                    <th class="px-6 py-4">Preço</th>
                    <th class="px-6 py-4">Destaque</th>
                    <th class="px-6 py-4">Açôes</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-white/10">
                @foreach ($products as $product)
                    <tr>
                        <td class="px-6 py-4">
                            @if ($product->image_path)
                                <img
                                    src="{{ $product->image_url }}"
                                    alt="{{ $product->name }}"
                                    class="h-14 w-14 rounded-lg border border-white/10 bg-[#20221d] object-contain p-1"
                                >
                            @else
                                <div class="flex h-14 w-14 items-center justify-center rounded-lg bg-[#20221d] text-xs text-gray-500">
                                    Sem foto
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4 font-medium">
                            {{ $product->name }}
                        </td>

                        <td class="px-6 py-4 text-gray-400">
                            {{ $product->category->name }}
                        </td>

                        <td class="px-6 py-4 text-lime-400">
                            {{ $product->formatted_price }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $product->is_featured ? 'Sim' : 'Não' }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('admin.products.edit', $product->id) }}"
                                title="Editar produto"
                                class="inline-flex items-center justify-center rounded-lg p-2 text-gray-400 transition hover:bg-lime-400/10 hover:text-lime-400">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 20h9"/>
                                    <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L8 18l-4 1 1-4Z"/>
                                </svg>

                            </a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}"
                                method="POST"
                                class="inline"
                                onsubmit="return confirm('Tem certeza de que deseja excluir este produto?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        title="Excluir produto"
                                        class="inline-flex items-center justify-center rounded-lg p-2 text-gray-400 transition hover:bg-red-500/10 hover:text-red-400">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M3 6h18"/>
                                        <path d="M8 6V4h8v2"/>
                                        <path d="M19 6l-1 14H6L5 6"/>
                                        <path d="M10 11v5"/>
                                        <path d="M14 11v5"/>
                                    </svg>

                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection