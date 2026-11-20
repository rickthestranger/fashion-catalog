@extends('layouts.admin')

@section('page-heading', 'Categorias')

@section('content')

@if (session('success'))
    <div class="rounded-lg border border-lime-400/20 bg-lime-400/10 px-5 py-4 text-sm text-lime-400">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="rounded-lg border border-red-400/20 bg-red-400/10 px-5 py-4 text-sm text-red-400">
        {{ session('error') }}
    </div>
@endif

<section class="space-y-6">

    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold">Categorias</h2>
            <p class="mt-1 text-sm text-gray-400">
                Gerencie as categorias da loja.
            </p>
        </div>

        <a href="{{ route('admin.categories.create') }}"
        class="rounded-lg bg-lime-400 px-5 py-3 text-sm font-bold text-black transition hover:bg-lime-300">
            + Nova categoria
        </a>
    </div>

    <div class="overflow-hidden rounded-xl border border-white/10 bg-[#20221d]">

        <table class="w-full text-left">

            <thead class="border-b border-white/10 text-xs uppercase tracking-wider text-gray-500">
                <tr>
                    <th class="px-6 py-4">Nome</th>
                    <th class="px-6 py-4">Descrição</th>
                    <th class="px-6 py-4 text-right">Ações</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-white/5">

                @forelse ($categories as $category)

                    <tr>
                        <td class="px-6 py-4 font-medium">
                            {{ $category->name }}
                        </td>

                        <td class="px-6 py-4 text-sm text-gray-400">
                            {{ $category->description ?? 'Sem descrição' }}
                        </td>

                        <td class="px-6 py-4 text-right">

                            <a href="{{ route('admin.categories.edit', $category->id) }}"
                            title="Editar categoria"
                            class="inline-flex items-center justify-center rounded-lg p-2 text-gray-400 transition hover:bg-lime-400/10 hover:text-lime-400">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">

                                    <path d="M12 20h9"/>
                                    <path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L8 18l-4 1 1-4Z"/>

                                </svg>

                            </a>

                            <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                method="POST"
                                class="inline"
                                onsubmit="return confirm('Tem certeza de que deseja excluir esta categoria?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        title="Excluir categoria"
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

                @empty

                    <tr>
                        <td colspan="3" class="px-6 py-10 text-center text-gray-500">
                            Nenhuma categoria cadastrada.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</section>

@endsection