<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edicao Especial</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f3ecd8] text-black antialiased">
    <main class="min-h-screen border-y-[10px] border-black">
        <div class="mx-auto max-w-7xl border-x-[10px] border-black bg-[#efe6cf] shadow-[14px_14px_0_#000]">
            <header class="border-b-[10px] border-black px-5 py-6 sm:px-8">
                <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                    <div>
                        <p class="inline-block border-[4px] border-black bg-[#ff4d00] px-3 py-1 text-xs font-black uppercase tracking-[0.35em] text-white">
                            Edicao de Rua
                        </p>
                        <h1 class="mt-4 max-w-4xl text-5xl font-black uppercase leading-none sm:text-7xl lg:text-8xl">
                            O futuro chegou em folhas grossas e tinta preta.
                        </h1>
                    </div>

                    <div class="grid gap-2 text-sm font-bold uppercase tracking-[0.2em] lg:text-right">
                        <p>Ano 1997</p>
                        <p>Cidade em estado bruto</p>
                        <p>Numero 001</p>
                    </div>
                </div>
            </header>

            <section class="grid border-b-[10px] border-black lg:grid-cols-[1.3fr_0.7fr]">
                <article class="border-b-[10px] border-black p-5 lg:border-b-0 lg:border-r-[10px] lg:border-black lg:p-8">
                    <p class="mb-4 text-sm font-black uppercase tracking-[0.3em] text-[#b00020]">
                        Manchete principal
                    </p>

                    <div class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
                        <div>
                            <p class="text-2xl font-black uppercase leading-tight sm:text-3xl">
                                Um layout sem polidez, sem brilho plastico e sem vergonha de ocupar espaco.
                            </p>
                            <p class="mt-6 max-w-2xl text-base leading-7 sm:text-lg">
                                Esta pagina apresenta uma linguagem visual direta, pesada e quase editorial. Tudo foi
                                pensado para parecer impresso, cortado a regua e montado com urgencia na bancada de um
                                jornal de bairro dos anos 90.
                            </p>
                        </div>

                        <div class="border-[6px] border-black bg-black p-4 text-[#f8f1dc]">
                            <p class="text-xs font-black uppercase tracking-[0.3em]">
                                Plantao
                            </p>
                            <p class="mt-4 text-4xl font-black leading-none sm:text-5xl">
                                24h
                            </p>
                            <p class="mt-4 text-sm font-bold uppercase leading-6 tracking-[0.2em]">
                                Tipografia grande. Blocos duros. Ritmo visual de primeira pagina.
                            </p>
                        </div>
                    </div>
                </article>

                <aside class="p-5 lg:p-8">
                    <div class="border-[6px] border-black bg-[#ffdf00] p-5">
                        <p class="text-xs font-black uppercase tracking-[0.3em]">
                            Extra
                        </p>
                        <p class="mt-4 text-3xl font-black uppercase leading-none">
                            Sem gradiente generico.
                        </p>
                        <p class="mt-4 text-sm leading-6">
                            A textura vem do contraste, da grade e da desproporcao, nao de efeitos decorativos.
                        </p>
                    </div>
                </aside>
            </section>

            <section class="grid lg:grid-cols-3">
                <article class="border-b-[10px] border-black p-5 lg:border-b-0 lg:border-r-[10px] lg:border-black lg:p-8">
                    <p class="text-xs font-black uppercase tracking-[0.3em] text-[#b00020]">Coluna 1</p>
                    <h2 class="mt-3 text-2xl font-black uppercase leading-tight">
                        Design como pancada visual.
                    </h2>
                    <p class="mt-4 text-base leading-7">
                        Bordas largas, letras pesadas, muito branco quebrado e hierarquia sem timidez. O objetivo aqui
                        nao e parecer limpo; e parecer memoravel.
                    </p>
                </article>

                <article class="border-b-[10px] border-black p-5 lg:border-b-0 lg:border-r-[10px] lg:border-black lg:p-8">
                    <p class="text-xs font-black uppercase tracking-[0.3em] text-[#b00020]">Coluna 2</p>
                    <h2 class="mt-3 text-2xl font-black uppercase leading-tight">
                        Tailwind com cara de impressora offset.
                    </h2>
                    <p class="mt-4 text-base leading-7">
                        Em vez de suavizar tudo, a pagina usa composicao rigida, alinhamentos secos e manchas fortes de
                        cor para imitar o impacto editorial de uma capa antiga.
                    </p>
                </article>

                <article class="p-5 lg:p-8">
                    <p class="text-xs font-black uppercase tracking-[0.3em] text-[#b00020]">Coluna 3</p>
                    <h2 class="mt-3 text-2xl font-black uppercase leading-tight">
                        Pronto para apresentar um produto, manifesto ou portfolio.
                    </h2>
                    <p class="mt-4 text-base leading-7">
                        A estrutura e simples de expandir: troque textos, inclua cards, metricas ou chamadas e mantenha
                        a linguagem dura para preservar a identidade brutalista.
                    </p>
                </article>
            </section>

            <footer class="border-t-[10px] border-black bg-black px-5 py-4 text-[#f8f1dc] sm:px-8">
                <div class="flex flex-col gap-3 text-sm font-bold uppercase tracking-[0.22em] sm:flex-row sm:items-center sm:justify-between">
                    <p>Impressao experimental para web</p>
                    <p>Brutalismo editorial em Tailwind</p>
                </div>
            </footer>
        </div>
    </main>
</body>

</html>
