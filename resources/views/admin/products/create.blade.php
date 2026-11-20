@extends('layouts.admin')

@section('title', 'Novo Produto')
@section('page-heading', 'Novo Produto')



@section('content')
    @if ($errors->any())
    <div class="mb-6 rounded-lg border border-red-500/20 bg-red-500/10 px-5 py-4">
        <p class="mb-2 text-sm font-bold text-red-400">
            Verifique os seguintes campos:
        </p>

        <ul class="list-inside list-disc text-sm text-red-300">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="max-w-3xl">

        <div class="mb-10">
            <a href="{{ route('admin.products.index') }}"
               class="text-sm font-medium text-gray-400 transition hover:text-lime-400">
                ← Voltar para produtos
            </a>

            <h1 class="mt-5 text-3xl font-black">Novo produto</h1>

            <p class="mt-2 text-sm text-gray-400">
                Preencha as informações para adicionar um produto ao catálogo.
            </p>
        </div>

        <form action="{{ route('admin.products.store') }}" method="POST" class="space-y-6" enctype="multipart/form-data">

            @csrf

            <div>
                <label class="mb-2 block text-sm font-bold">Nome do produto</label>
                <input type="text" name="name"
                        value="{{ old('name') }}"
                        class="w-full rounded-lg border border-white/10 bg-[#20221d] px-4 py-3 text-white outline-none focus:border-lime-400">
            </div>

            <div>
                <label class="mb-2 block text-sm font-bold">Categoria</label>
                <select name="category_id"
                        class="w-full rounded-lg border border-white/10 bg-[#20221d] px-4 py-3 text-white outline-none focus:border-lime-400">
                    <option value="">Selecione uma categoria</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            @selected(old('category_id') == $category->id)>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-bold">Preço</label>
                    <input type="number" name="price" step="0.01"
                            value="{{ old('price') }}"
                            class="w-full rounded-lg border border-white/10 bg-[#20221d] px-4 py-3 text-white outline-none focus:border-lime-400">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-bold">Tamanho</label>
                    <input type="text" name="size"
                            value="{{ old('size') }}"
                            class="w-full rounded-lg border border-white/10 bg-[#20221d] px-4 py-3 text-white outline-none focus:border-lime-400">
                </div>
            </div>

            <div>
                <label class="mb-2 block text-sm font-bold">Descrição</label>
                <textarea name="description" rows="4"
                    class="w-full rounded-lg border border-white/10 bg-[#20221d] px-4 py-3 text-white outline-none focus:border-lime-400">{{ old('description') }}</textarea>
            </div>

            <div>
                <label for="image" class="mb-2 block text-sm font-medium text-gray-300">
                    Imagem do produto
                </label>

                <input
                    type="file"
                    name="image"
                    id="image"
                    accept="image/jpeg,image/png,image/webp"
                    class="w-full rounded-lg border border-white/10 bg-[#20221d] px-4 py-3 text-sm text-gray-300"
                >
                <p class="mt-2 text-xs text-gray-500">
                    Formatos aceitos: JPG, JPEG, PNG e WEBP. Tamanho máximo: 5 MB.
                </p>

                @error('image')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <label class="flex items-center gap-3 text-sm text-gray-300">
                <input type="checkbox" name="is_featured" value="1"
                        @checked(old('is_featured'))
                        class="h-4 w-4 accent-lime-400">
                Exibir como produto em destaque
            </label>

            <button type="submit"
                    class="rounded-lg bg-lime-400 px-6 py-3 font-bold text-black transition hover:bg-lime-300">
                Cadastrar produto
            </button>

        </form>

    </div>

@endsection