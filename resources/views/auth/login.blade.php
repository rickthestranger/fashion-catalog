<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | URBAN.</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#11120f] text-[#f2f2ed]">

    <main class="flex min-h-screen items-center justify-center px-6 py-12">

        <div class="w-full max-w-md">

            <a href="/" class="text-2xl font-black tracking-tight">
                URBAN<span class="text-lime-400">.</span>
            </a>

            <div class="mt-10">
                <p class="text-xs font-bold uppercase tracking-[0.25em] text-lime-400">
                    Área administrativa
                </p>

                <h1 class="mt-3 text-3xl font-black">
                    Acesse sua conta
                </h1>

                <p class="mt-3 text-sm text-gray-400">
                    Entre com suas credenciais para continuar.
                </p>
            </div>
            <form action="{{ route('login') }}" method="POST" class="mt-10 space-y-6">

                @csrf
                @if ($errors->any())
                    <div class="rounded-lg border border-red-500/20 bg-red-500/10 px-5 py-4 text-sm text-red-400">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div>
                    <label for="email" class="mb-2 block text-sm font-bold">
                        E-mail
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="seu@email.com"
                        class="w-full rounded-lg border border-white/10 bg-[#20221d] px-5 py-4 text-white placeholder-gray-500 outline-none transition focus:border-lime-400"
                    >
                </div>

                <div>
                    <label for="password" class="mb-2 block text-sm font-bold">
                        Senha
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Digite sua senha"
                        class="w-full rounded-lg border border-white/10 bg-[#20221d] px-5 py-4 text-white placeholder-gray-500 outline-none transition focus:border-lime-400"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full rounded-lg bg-lime-400 px-6 py-4 font-bold text-black transition hover:bg-lime-300"
                >
                    Entrar
                </button>

            </form>
        </div>

    </main>

</body>
</html>
