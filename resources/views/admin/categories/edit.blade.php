@extends('layouts.admin')

@section('page-heading', 'Editar categoria')

@section('content')

<section class="max-w-2xl space-y-6">

    <div>
        <h2 class="text-2xl font-bold">Editar categoria</h2>
        <p class="mt-1 text-sm text-gray-400">
            Atualize as informações da categoria.
        </p>
    </div>

    <form action="{{ route('admin.categories.update', $category->id) }}"
          method="POST"
          class="space-y-6 rounded-xl border border-white/10 bg-[#20221d] p-6">

        @csrf
        @method('PUT')

        <div>
            <label for="name" class="mb-2 block text-sm font-medium">
                Nome
            </label>

            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name', $category->name) }}"
                required
                class="w-full rounded-lg border border-white/10 bg-[#11120f] px-4 py-3 text-white outline-none transition focus:border-lime-400"
            >

            @error('name')
                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="mb-2 block text-sm font-medium">
                Descrição
            </label>

            <textarea
                name="description"
                id="description"
                rows="4"
                class="w-full rounded-lg border border-white/10 bg-[#11120f] px-4 py-3 text-white outline-none transition focus:border-lime-400"
            >{{ old('description', $category->description) }}</textarea>

            @error('description')
                <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.categories.index') }}"
               class="rounded-lg px-5 py-3 text-sm font-bold text-gray-400 transition hover:text-white">
                Cancelar
            </a>

            <button type="submit"
                    class="rounded-lg bg-lime-400 px-5 py-3 text-sm font-bold text-black transition hover:bg-lime-300">
                Salvar alterações
            </button>
        </div>

    </form>

</section>

@endsection