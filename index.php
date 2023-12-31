<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formação em: Gestor de Marketing Digital | O Novo Mercado</title>
    <meta name="description" content="Conheça tudo sobre a formação e inscreva-se agora mesmo!">

    <!--    <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon.png">-->
    <!--    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">-->
    <!--    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">-->

    <meta name="msapplication-TileColor" content="#0070DF">
    <meta name="theme-color" content="#0070DF">

    <link rel="preload" href="src/fonts/Paralucent/Paralucent-Thin.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="src/fonts/Paralucent/Paralucent-Light.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="src/fonts/Paralucent/Paralucent-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="src/fonts/Paralucent/Paralucent-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="src/fonts/Paralucent/Paralucent-DemiBold.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="src/css/style.css">
</head>
<body class="landing">
<div class="container-bussola-background">
    <img src="src/img/bussola-background.png" alt="Bússula ilustrativa no topo da página" id="bussola-landing">
</div>
<div id="container-pop-up">
    <form id="pop-up-formulario" action="pre-obrigado" method="post">
        <p>Falta pouco para você dar início na sua jornada como Gestor de Marketing Digital e se tornar o profissional mais importante do mercado digital.</p>
        <p>Preencha os dados abaixo para prosseguir com sua inscrição.</p>
        <div class="campos">
            <div>
                <label for="input-nome">
                    <svg viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.1284 19.8751C20.7006 17.4067 18.5002 15.6367 15.9324 14.7976C17.2026 14.0415 18.1894 12.8893 18.7414 11.518C19.2933 10.1468 19.3799 8.63224 18.9878 7.20701C18.5957 5.78178 17.7466 4.52467 16.5709 3.62873C15.3951 2.73279 13.9578 2.24756 12.4796 2.24756C11.0014 2.24756 9.56412 2.73279 8.3884 3.62873C7.21267 4.52467 6.36356 5.78178 5.97144 7.20701C5.57933 8.63224 5.6659 10.1468 6.21786 11.518C6.76982 12.8893 7.75666 14.0415 9.02681 14.7976C6.459 15.6357 4.25869 17.4057 2.83087 19.8751C2.77851 19.9605 2.74378 20.0555 2.72873 20.1545C2.71368 20.2535 2.71861 20.3545 2.74324 20.4516C2.76787 20.5487 2.81169 20.6399 2.87212 20.7197C2.93255 20.7996 3.00836 20.8666 3.09508 20.9167C3.18181 20.9667 3.27769 20.999 3.37707 21.0114C3.47645 21.0238 3.57731 21.0163 3.67371 20.9891C3.7701 20.9619 3.86008 20.9157 3.93833 20.8532C4.01658 20.7907 4.08152 20.7131 4.12931 20.6251C5.89556 17.5726 9.01744 15.7501 12.4796 15.7501C15.9418 15.7501 19.0637 17.5726 20.8299 20.6251C20.8777 20.7131 20.9427 20.7907 21.0209 20.8532C21.0992 20.9157 21.1891 20.9619 21.2855 20.9891C21.3819 21.0163 21.4828 21.0238 21.5822 21.0114C21.6816 20.999 21.7774 20.9667 21.8642 20.9167C21.9509 20.8666 22.0267 20.7996 22.0871 20.7197C22.1476 20.6399 22.1914 20.5487 22.216 20.4516C22.2406 20.3545 22.2456 20.2535 22.2305 20.1545C22.2155 20.0555 22.1807 19.9605 22.1284 19.8751ZM7.22962 9.00011C7.22962 7.96176 7.53753 6.94672 8.11441 6.08337C8.69129 5.22001 9.51122 4.5471 10.4705 4.14974C11.4298 3.75238 12.4854 3.64841 13.5038 3.85099C14.5222 4.05356 15.4577 4.55357 16.1919 5.2878C16.9262 6.02202 17.4262 6.95748 17.6287 7.97589C17.8313 8.99429 17.7274 10.0499 17.33 11.0092C16.9326 11.9685 16.2597 12.7884 15.3964 13.3653C14.533 13.9422 13.518 14.2501 12.4796 14.2501C11.0877 14.2486 9.7532 13.695 8.76896 12.7108C7.78471 11.7265 7.23111 10.392 7.22962 9.00011Z" fill="#8E8E8E"/>
                    </svg>
                </label>
                <input type="text" name="input-nome" id="input-nome" placeholder="seu nome">
            </div>
            <div class="aviso-input-invalido">
                Seu nome não pode ficar vazio
            </div>
            <div>
                <label for="input-email">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.4795 4.5H3.47949C3.28058 4.5 3.08981 4.57902 2.94916 4.71967C2.80851 4.86032 2.72949 5.05109 2.72949 5.25V18C2.72949 18.3978 2.88753 18.7794 3.16883 19.0607C3.45014 19.342 3.83167 19.5 4.22949 19.5H20.7295C21.1273 19.5 21.5088 19.342 21.7902 19.0607C22.0715 18.7794 22.2295 18.3978 22.2295 18V5.25C22.2295 5.05109 22.1505 4.86032 22.0098 4.71967C21.8692 4.57902 21.6784 4.5 21.4795 4.5ZM19.5511 6L12.4795 12.4828L5.40793 6H19.5511ZM20.7295 18H4.22949V6.95531L11.9723 14.0531C12.1107 14.1801 12.2917 14.2506 12.4795 14.2506C12.6673 14.2506 12.8483 14.1801 12.9867 14.0531L20.7295 6.95531V18Z" fill="#8E8E8E"/>
                    </svg>
                </label>
                <input type="text" name="input-email" id="input-email" placeholder="seu melhor e-mail">
            </div>
            <div class="aviso-input-invalido">
                Preencha o campo com um email válido
            </div>
            <div>
                <label for="input-telefone">
                    <svg viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.0653 13.5787L15.0653 12.0787C14.9472 12.0199 14.8157 11.9933 14.684 12.0015C14.5523 12.0097 14.4251 12.0525 14.3153 12.1256L12.9381 13.0444C12.3059 12.6968 11.7856 12.1766 11.4381 11.5444L12.3569 10.1672C12.4299 10.0573 12.4728 9.93016 12.481 9.79848C12.4892 9.6668 12.4626 9.53528 12.4037 9.41719L10.9037 6.41719C10.8416 6.29163 10.7455 6.186 10.6263 6.11226C10.5072 6.03853 10.3698 5.99964 10.2297 6C9.23511 6 8.28128 6.39509 7.57802 7.09835C6.87476 7.80161 6.47967 8.75544 6.47967 9.75C6.48215 11.9373 7.35214 14.0343 8.89878 15.5809C10.4454 17.1275 12.5424 17.9975 14.7297 18C15.2221 18 15.7098 17.903 16.1647 17.7145C16.6197 17.5261 17.0331 17.2499 17.3813 16.9017C17.7295 16.5534 18.0058 16.14 18.1942 15.6851C18.3827 15.2301 18.4797 14.7425 18.4797 14.25C18.4798 14.1107 18.4411 13.9741 18.3679 13.8555C18.2947 13.7369 18.1899 13.6411 18.0653 13.5787ZM14.7297 16.5C12.9401 16.498 11.2243 15.7862 9.95889 14.5208C8.69345 13.2553 7.98165 11.5396 7.97967 9.75C7.97952 9.2298 8.15963 8.72562 8.48935 8.32326C8.81907 7.9209 9.27802 7.64521 9.7881 7.54313L10.8644 9.69938L9.94842 11.0625C9.87997 11.1652 9.83792 11.2831 9.82598 11.406C9.81404 11.5288 9.83259 11.6526 9.87998 11.7666C10.4166 13.0419 11.4312 14.0565 12.7065 14.5931C12.8208 14.6426 12.9456 14.6629 13.0697 14.6521C13.1937 14.6413 13.3132 14.5998 13.4172 14.5312L14.7869 13.6181L16.9431 14.6944C16.8402 15.205 16.5633 15.6642 16.1597 15.9935C15.756 16.3228 15.2506 16.5018 14.7297 16.5ZM12.4797 2.25C10.7964 2.24963 9.14162 2.68508 7.67653 3.51396C6.21144 4.34285 4.9859 5.53692 4.1192 6.97997C3.25251 8.42301 2.77418 10.0659 2.73078 11.7486C2.68738 13.4314 3.08039 15.0967 3.87154 16.5825L2.80748 19.7747C2.71934 20.039 2.70655 20.3226 2.77054 20.5938C2.83453 20.8649 2.97278 21.1129 3.16978 21.3099C3.36678 21.5069 3.61476 21.6451 3.88591 21.7091C4.15707 21.7731 4.44069 21.7603 4.70498 21.6722L7.89717 20.6081C9.20476 21.3036 10.6536 21.6921 12.1338 21.744C13.6139 21.7959 15.0864 21.51 16.4395 20.9079C17.7927 20.3057 18.9908 19.4033 19.9431 18.269C20.8954 17.1346 21.5767 15.7983 21.9354 14.3613C22.2941 12.9244 22.3207 11.4246 22.0132 9.97578C21.7057 8.52701 21.0722 7.16732 20.1608 5.99992C19.2494 4.83253 18.084 3.88811 16.7531 3.23836C15.4222 2.58861 13.9607 2.25061 12.4797 2.25ZM12.4797 20.25C11.0293 20.251 9.60445 19.8691 8.34904 19.1428C8.25713 19.0895 8.15493 19.0563 8.04923 19.0455C7.94353 19.0347 7.83673 19.0464 7.73592 19.08L4.22967 20.25L5.39873 16.7438C5.43243 16.643 5.44434 16.5362 5.43367 16.4305C5.42301 16.3248 5.39 16.2226 5.33685 16.1306C4.42745 14.5584 4.06233 12.7299 4.29813 10.929C4.53393 9.12801 5.35747 7.4552 6.641 6.17006C7.92453 4.88491 9.59629 4.05925 11.3969 3.82118C13.1976 3.5831 15.0265 3.94591 16.5999 4.85333C18.1733 5.76074 19.4033 7.16204 20.0991 8.83983C20.7948 10.5176 20.9174 12.3781 20.4479 14.1327C19.9783 15.8873 18.9429 17.4379 17.5022 18.5439C16.0615 19.65 14.296 20.2497 12.4797 20.25Z" fill="#8E8E8E"/>
                    </svg>
                </label>
                <input type="text" name="input-telefone" id="input-telefone" placeholder="seu whatsapp">
            </div>
            <div class="aviso-input-invalido">
                O WhatsApp inserido é inválido
            </div>
        </div>
        <p>Clicando no botão, você concorda com nossos termos e política.</p>
        <button id="btn-continuar" type="submit">
            CONTINUAR
        </button>
    </form>
</div>
<header>
    <img src="src/img/header/logo-empresa.png" alt="Logo da empresa: O Novo Mercado" title="Empresa: O Novo Mercado">
    <img src="src/img/header/logo-curso.png" alt="Logo do curso: Gestor de Marketing Digital" title="Curso: Gestor de Marketing Digital">
</header>
<main>
    <section id="introducao">
        <h1>
            <b>Assista ao vídeo</b> abaixo que preparei para tirar <b>todas as suas dúvidas</b> sobre a Formação.
        </h1>
        <div id="video-placeholder">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tTNyNHkr6DQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <button class="btn-inscricao" type="button">
            QUERO GARANTIR MINHA VAGA NA FORMAÇÃO
        </button>
    </section>
    <section id="duvidas">
        <h2>
            <b>TIRE TODAS AS SUAS DÚVIDAS</b>
        </h2>
        <p>
            Encontre respostas às dúvidas mais comuns sobre a formação.
        </p>
        <div id="container-topicos">
            <div class="duvida ativa">
                <div class="pergunta">
                    <p>
                        “Por que devo entrar para a Formação em Gestor de Marketing?”
                    </p>
                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.7081 12.7081L18.7081 22.7081C18.6152 22.801 18.5049 22.8748 18.3835 22.9251C18.2621 22.9754 18.132 23.0013 18.0006 23.0013C17.8691 23.0013 17.739 22.9754 17.6176 22.9251C17.4962 22.8748 17.3859 22.801 17.2931 22.7081L7.29306 12.7081C7.10542 12.5204 7 12.2659 7 12.0006C7 11.7352 7.10542 11.4807 7.29306 11.2931C7.4807 11.1054 7.73519 11 8.00056 11C8.26592 11 8.52042 11.1054 8.70806 11.2931L18.0006 20.5868L27.2931 11.2931C27.386 11.2001 27.4963 11.1264 27.6177 11.0762C27.7391 11.0259 27.8692 11 28.0006 11C28.132 11 28.2621 11.0259 28.3835 11.0762C28.5048 11.1264 28.6151 11.2001 28.7081 11.2931C28.801 11.386 28.8747 11.4963 28.9249 11.6177C28.9752 11.7391 29.0011 11.8692 29.0011 12.0006C29.0011 12.132 28.9752 12.2621 28.9249 12.3835C28.8747 12.5048 28.801 12.6151 28.7081 12.7081Z" fill="#0070DF"/>
                    </svg>
                </div>
                <div class="resposta">
                    <div>
                        A Formação em Gestor de Marketing pode realmente ser uma virada de chave na sua carreira. É um novo mundo de possibilidades por meio do digital, que permite trabalhar com salários muito acima das outras profissões.
                        <br>
                        A Formação te prepara para ser o profissional que o mercado digital exige: completo e versátil, que saiba atuar em todas as frentes do marketing e que atenda os mais variados clientes - de lançamentos, a multinacionais e negócios locais. O foco da nossa Formação é qualificar profissionais para se destacar no mercado.
                    </div>
                </div>
            </div>
            <div class="duvida">
                <div class="pergunta">
                    <p>
                        “E se não tiver tempo de assistir às aulas?"
                    </p>
                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.7081 12.7081L18.7081 22.7081C18.6152 22.801 18.5049 22.8748 18.3835 22.9251C18.2621 22.9754 18.132 23.0013 18.0006 23.0013C17.8691 23.0013 17.739 22.9754 17.6176 22.9251C17.4962 22.8748 17.3859 22.801 17.2931 22.7081L7.29306 12.7081C7.10542 12.5204 7 12.2659 7 12.0006C7 11.7352 7.10542 11.4807 7.29306 11.2931C7.4807 11.1054 7.73519 11 8.00056 11C8.26592 11 8.52042 11.1054 8.70806 11.2931L18.0006 20.5868L27.2931 11.2931C27.386 11.2001 27.4963 11.1264 27.6177 11.0762C27.7391 11.0259 27.8692 11 28.0006 11C28.132 11 28.2621 11.0259 28.3835 11.0762C28.5048 11.1264 28.6151 11.2001 28.7081 11.2931C28.801 11.386 28.8747 11.4963 28.9249 11.6177C28.9752 11.7391 29.0011 11.8692 29.0011 12.0006C29.0011 12.132 28.9752 12.2621 28.9249 12.3835C28.8747 12.5048 28.801 12.6151 28.7081 12.7081Z" fill="#0070DF"/>
                    </svg>
                </div>
                <div class="resposta">
                    <div>
                        Não se preocupe, o acesso à Formação dura 1 ano. São 365 dias de acesso às disciplinas, os materiais didáticos, a comunidade exclusiva, e os bônus. De qualquer lugar que estiver, basta ter acesso a internet. Isso te permite assistir as aulas no seu próprio ritmo, quantas vezes quiser.
                    </div>
                </div>
            </div>
            <div class="duvida">
                <div class="pergunta">
                    <p>
                        “Estou começando do zero. É pra mim?”
                    </p>
                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.7081 12.7081L18.7081 22.7081C18.6152 22.801 18.5049 22.8748 18.3835 22.9251C18.2621 22.9754 18.132 23.0013 18.0006 23.0013C17.8691 23.0013 17.739 22.9754 17.6176 22.9251C17.4962 22.8748 17.3859 22.801 17.2931 22.7081L7.29306 12.7081C7.10542 12.5204 7 12.2659 7 12.0006C7 11.7352 7.10542 11.4807 7.29306 11.2931C7.4807 11.1054 7.73519 11 8.00056 11C8.26592 11 8.52042 11.1054 8.70806 11.2931L18.0006 20.5868L27.2931 11.2931C27.386 11.2001 27.4963 11.1264 27.6177 11.0762C27.7391 11.0259 27.8692 11 28.0006 11C28.132 11 28.2621 11.0259 28.3835 11.0762C28.5048 11.1264 28.6151 11.2001 28.7081 11.2931C28.801 11.386 28.8747 11.4963 28.9249 11.6177C28.9752 11.7391 29.0011 11.8692 29.0011 12.0006C29.0011 12.132 28.9752 12.2621 28.9249 12.3835C28.8747 12.5048 28.801 12.6151 28.7081 12.7081Z" fill="#0070DF"/>
                    </svg>
                </div>
                <div class="resposta">
                    <div>
                        Uma das coisas que nos deixa orgulhosos sobre a nossa Formação é que ela atende tanto quem está começando agora, quanto quem já é experiente no mercado digital.
                        <br>
                        Temos aulas que vão do básico ao avançado, com conteúdos que vão dos fundamentos do marketing à gestão estratégica, de produto, de pessoas, de qualidade… Além disso, temos exercícios práticos e monitoria frequente com gestores de marketing experientes, que irão te ajudar com todas as dúvidas, além de fazer lives sobre temas específicos. É o ambiente perfeito para te levar do zero ao profissional.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="detalhes">
        <div id="mini-card">
            <b>A primeira e única Formação em Gestor de Marketing Digital do Brasil</b> que te transformará no profissional mais importante e bem pago do mercado digital, capaz de navegar por todas as áreas de um negócio e atender qualquer empresa, de qualquer segmento - de lançamentos, a multinacionais e negócios locais.
            <hr>
        </div>
        <div id="container-detalhes">
            <div id="beneficios">
                <h2>Você receberá</h2>
                <ul>
                    <li>
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_305_165" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                <rect x="0.416016" y="0.214264" width="21.0108" height="21.0108" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_305_165)">
                                <path d="M9.69588 14.7468L15.8678 8.57484L14.6422 7.34921L9.69588 12.2955L7.20084 9.80047L5.97521 11.0261L9.69588 14.7468ZM10.9215 19.4742C9.71047 19.4742 8.57238 19.2444 7.50725 18.7848C6.44211 18.3252 5.51559 17.7014 4.72769 16.9135C3.93978 16.1256 3.31602 15.1991 2.85641 14.134C2.3968 13.0688 2.16699 11.9307 2.16699 10.7197C2.16699 9.50865 2.3968 8.37057 2.85641 7.30543C3.31602 6.2403 3.93978 5.31378 4.72769 4.52588C5.51559 3.73797 6.44211 3.11421 7.50725 2.6546C8.57238 2.19499 9.71047 1.96518 10.9215 1.96518C12.1326 1.96518 13.2706 2.19499 14.3358 2.6546C15.4009 3.11421 16.3274 3.73797 17.1153 4.52588C17.9032 5.31378 18.527 6.2403 18.9866 7.30543C19.4462 8.37057 19.676 9.50865 19.676 10.7197C19.676 11.9307 19.4462 13.0688 18.9866 14.134C18.527 15.1991 17.9032 16.1256 17.1153 16.9135C16.3274 17.7014 15.4009 18.3252 14.3358 18.7848C13.2706 19.2444 12.1326 19.4742 10.9215 19.4742Z" fill="#0070DF"/>
                            </g>
                        </svg>
                        <div>
                            5 currículos
                        </div>
                    </li>
                    <li>
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_305_165" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                <rect x="0.416016" y="0.214264" width="21.0108" height="21.0108" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_305_165)">
                                <path d="M9.69588 14.7468L15.8678 8.57484L14.6422 7.34921L9.69588 12.2955L7.20084 9.80047L5.97521 11.0261L9.69588 14.7468ZM10.9215 19.4742C9.71047 19.4742 8.57238 19.2444 7.50725 18.7848C6.44211 18.3252 5.51559 17.7014 4.72769 16.9135C3.93978 16.1256 3.31602 15.1991 2.85641 14.134C2.3968 13.0688 2.16699 11.9307 2.16699 10.7197C2.16699 9.50865 2.3968 8.37057 2.85641 7.30543C3.31602 6.2403 3.93978 5.31378 4.72769 4.52588C5.51559 3.73797 6.44211 3.11421 7.50725 2.6546C8.57238 2.19499 9.71047 1.96518 10.9215 1.96518C12.1326 1.96518 13.2706 2.19499 14.3358 2.6546C15.4009 3.11421 16.3274 3.73797 17.1153 4.52588C17.9032 5.31378 18.527 6.2403 18.9866 7.30543C19.4462 8.37057 19.676 9.50865 19.676 10.7197C19.676 11.9307 19.4462 13.0688 18.9866 14.134C18.527 15.1991 17.9032 16.1256 17.1153 16.9135C16.3274 17.7014 15.4009 18.3252 14.3358 18.7848C13.2706 19.2444 12.1326 19.4742 10.9215 19.4742Z" fill="#0070DF"/>
                            </g>
                        </svg>
                        <div>
                            28 disciplinas
                        </div>
                    </li>
                    <li>
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_305_165" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                <rect x="0.416016" y="0.214264" width="21.0108" height="21.0108" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_305_165)">
                                <path d="M9.69588 14.7468L15.8678 8.57484L14.6422 7.34921L9.69588 12.2955L7.20084 9.80047L5.97521 11.0261L9.69588 14.7468ZM10.9215 19.4742C9.71047 19.4742 8.57238 19.2444 7.50725 18.7848C6.44211 18.3252 5.51559 17.7014 4.72769 16.9135C3.93978 16.1256 3.31602 15.1991 2.85641 14.134C2.3968 13.0688 2.16699 11.9307 2.16699 10.7197C2.16699 9.50865 2.3968 8.37057 2.85641 7.30543C3.31602 6.2403 3.93978 5.31378 4.72769 4.52588C5.51559 3.73797 6.44211 3.11421 7.50725 2.6546C8.57238 2.19499 9.71047 1.96518 10.9215 1.96518C12.1326 1.96518 13.2706 2.19499 14.3358 2.6546C15.4009 3.11421 16.3274 3.73797 17.1153 4.52588C17.9032 5.31378 18.527 6.2403 18.9866 7.30543C19.4462 8.37057 19.676 9.50865 19.676 10.7197C19.676 11.9307 19.4462 13.0688 18.9866 14.134C18.527 15.1991 17.9032 16.1256 17.1153 16.9135C16.3274 17.7014 15.4009 18.3252 14.3358 18.7848C13.2706 19.2444 12.1326 19.4742 10.9215 19.4742Z" fill="#0070DF"/>
                            </g>
                        </svg>
                        <div>
                            21 professores
                        </div>
                    </li>
                    <li>
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_305_165" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                <rect x="0.416016" y="0.214264" width="21.0108" height="21.0108" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_305_165)">
                                <path d="M9.69588 14.7468L15.8678 8.57484L14.6422 7.34921L9.69588 12.2955L7.20084 9.80047L5.97521 11.0261L9.69588 14.7468ZM10.9215 19.4742C9.71047 19.4742 8.57238 19.2444 7.50725 18.7848C6.44211 18.3252 5.51559 17.7014 4.72769 16.9135C3.93978 16.1256 3.31602 15.1991 2.85641 14.134C2.3968 13.0688 2.16699 11.9307 2.16699 10.7197C2.16699 9.50865 2.3968 8.37057 2.85641 7.30543C3.31602 6.2403 3.93978 5.31378 4.72769 4.52588C5.51559 3.73797 6.44211 3.11421 7.50725 2.6546C8.57238 2.19499 9.71047 1.96518 10.9215 1.96518C12.1326 1.96518 13.2706 2.19499 14.3358 2.6546C15.4009 3.11421 16.3274 3.73797 17.1153 4.52588C17.9032 5.31378 18.527 6.2403 18.9866 7.30543C19.4462 8.37057 19.676 9.50865 19.676 10.7197C19.676 11.9307 19.4462 13.0688 18.9866 14.134C18.527 15.1991 17.9032 16.1256 17.1153 16.9135C16.3274 17.7014 15.4009 18.3252 14.3358 18.7848C13.2706 19.2444 12.1326 19.4742 10.9215 19.4742Z" fill="#0070DF"/>
                            </g>
                        </svg>
                        <div>
                            1 ano de acesso
                        </div>
                    </li>
                    <li>
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_305_165" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                <rect x="0.416016" y="0.214264" width="21.0108" height="21.0108" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_305_165)">
                                <path d="M9.69588 14.7468L15.8678 8.57484L14.6422 7.34921L9.69588 12.2955L7.20084 9.80047L5.97521 11.0261L9.69588 14.7468ZM10.9215 19.4742C9.71047 19.4742 8.57238 19.2444 7.50725 18.7848C6.44211 18.3252 5.51559 17.7014 4.72769 16.9135C3.93978 16.1256 3.31602 15.1991 2.85641 14.134C2.3968 13.0688 2.16699 11.9307 2.16699 10.7197C2.16699 9.50865 2.3968 8.37057 2.85641 7.30543C3.31602 6.2403 3.93978 5.31378 4.72769 4.52588C5.51559 3.73797 6.44211 3.11421 7.50725 2.6546C8.57238 2.19499 9.71047 1.96518 10.9215 1.96518C12.1326 1.96518 13.2706 2.19499 14.3358 2.6546C15.4009 3.11421 16.3274 3.73797 17.1153 4.52588C17.9032 5.31378 18.527 6.2403 18.9866 7.30543C19.4462 8.37057 19.676 9.50865 19.676 10.7197C19.676 11.9307 19.4462 13.0688 18.9866 14.134C18.527 15.1991 17.9032 16.1256 17.1153 16.9135C16.3274 17.7014 15.4009 18.3252 14.3358 18.7848C13.2706 19.2444 12.1326 19.4742 10.9215 19.4742Z" fill="#0070DF"/>
                            </g>
                        </svg>
                        <div>
                            + de 100h de conteúdo
                        </div>
                    </li>
                    <li>
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_305_165" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                <rect x="0.416016" y="0.214264" width="21.0108" height="21.0108" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_305_165)">
                                <path d="M9.69588 14.7468L15.8678 8.57484L14.6422 7.34921L9.69588 12.2955L7.20084 9.80047L5.97521 11.0261L9.69588 14.7468ZM10.9215 19.4742C9.71047 19.4742 8.57238 19.2444 7.50725 18.7848C6.44211 18.3252 5.51559 17.7014 4.72769 16.9135C3.93978 16.1256 3.31602 15.1991 2.85641 14.134C2.3968 13.0688 2.16699 11.9307 2.16699 10.7197C2.16699 9.50865 2.3968 8.37057 2.85641 7.30543C3.31602 6.2403 3.93978 5.31378 4.72769 4.52588C5.51559 3.73797 6.44211 3.11421 7.50725 2.6546C8.57238 2.19499 9.71047 1.96518 10.9215 1.96518C12.1326 1.96518 13.2706 2.19499 14.3358 2.6546C15.4009 3.11421 16.3274 3.73797 17.1153 4.52588C17.9032 5.31378 18.527 6.2403 18.9866 7.30543C19.4462 8.37057 19.676 9.50865 19.676 10.7197C19.676 11.9307 19.4462 13.0688 18.9866 14.134C18.527 15.1991 17.9032 16.1256 17.1153 16.9135C16.3274 17.7014 15.4009 18.3252 14.3358 18.7848C13.2706 19.2444 12.1326 19.4742 10.9215 19.4742Z" fill="#0070DF"/>
                            </g>
                        </svg>
                        <div>
                            Materiais complementares de todas as disciplinas
                        </div>
                    </li>
                    <li>
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_305_165" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                <rect x="0.416016" y="0.214264" width="21.0108" height="21.0108" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_305_165)">
                                <path d="M9.69588 14.7468L15.8678 8.57484L14.6422 7.34921L9.69588 12.2955L7.20084 9.80047L5.97521 11.0261L9.69588 14.7468ZM10.9215 19.4742C9.71047 19.4742 8.57238 19.2444 7.50725 18.7848C6.44211 18.3252 5.51559 17.7014 4.72769 16.9135C3.93978 16.1256 3.31602 15.1991 2.85641 14.134C2.3968 13.0688 2.16699 11.9307 2.16699 10.7197C2.16699 9.50865 2.3968 8.37057 2.85641 7.30543C3.31602 6.2403 3.93978 5.31378 4.72769 4.52588C5.51559 3.73797 6.44211 3.11421 7.50725 2.6546C8.57238 2.19499 9.71047 1.96518 10.9215 1.96518C12.1326 1.96518 13.2706 2.19499 14.3358 2.6546C15.4009 3.11421 16.3274 3.73797 17.1153 4.52588C17.9032 5.31378 18.527 6.2403 18.9866 7.30543C19.4462 8.37057 19.676 9.50865 19.676 10.7197C19.676 11.9307 19.4462 13.0688 18.9866 14.134C18.527 15.1991 17.9032 16.1256 17.1153 16.9135C16.3274 17.7014 15.4009 18.3252 14.3358 18.7848C13.2706 19.2444 12.1326 19.4742 10.9215 19.4742Z" fill="#0070DF"/>
                            </g>
                        </svg>
                        <div>
                            Suporte técnico e pedagógico <span>(7 dias por semana de 8h às 20h)</span>
                        </div>
                    </li>
                    <li>
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_305_165" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                <rect x="0.416016" y="0.214264" width="21.0108" height="21.0108" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_305_165)">
                                <path d="M9.69588 14.7468L15.8678 8.57484L14.6422 7.34921L9.69588 12.2955L7.20084 9.80047L5.97521 11.0261L9.69588 14.7468ZM10.9215 19.4742C9.71047 19.4742 8.57238 19.2444 7.50725 18.7848C6.44211 18.3252 5.51559 17.7014 4.72769 16.9135C3.93978 16.1256 3.31602 15.1991 2.85641 14.134C2.3968 13.0688 2.16699 11.9307 2.16699 10.7197C2.16699 9.50865 2.3968 8.37057 2.85641 7.30543C3.31602 6.2403 3.93978 5.31378 4.72769 4.52588C5.51559 3.73797 6.44211 3.11421 7.50725 2.6546C8.57238 2.19499 9.71047 1.96518 10.9215 1.96518C12.1326 1.96518 13.2706 2.19499 14.3358 2.6546C15.4009 3.11421 16.3274 3.73797 17.1153 4.52588C17.9032 5.31378 18.527 6.2403 18.9866 7.30543C19.4462 8.37057 19.676 9.50865 19.676 10.7197C19.676 11.9307 19.4462 13.0688 18.9866 14.134C18.527 15.1991 17.9032 16.1256 17.1153 16.9135C16.3274 17.7014 15.4009 18.3252 14.3358 18.7848C13.2706 19.2444 12.1326 19.4742 10.9215 19.4742Z" fill="#0070DF"/>
                            </g>
                        </svg>
                        <div>
                            Comunidade exclusiva
                        </div>
                    </li>
                    <li>
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_305_165" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                <rect x="0.416016" y="0.214264" width="21.0108" height="21.0108" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_305_165)">
                                <path d="M9.69588 14.7468L15.8678 8.57484L14.6422 7.34921L9.69588 12.2955L7.20084 9.80047L5.97521 11.0261L9.69588 14.7468ZM10.9215 19.4742C9.71047 19.4742 8.57238 19.2444 7.50725 18.7848C6.44211 18.3252 5.51559 17.7014 4.72769 16.9135C3.93978 16.1256 3.31602 15.1991 2.85641 14.134C2.3968 13.0688 2.16699 11.9307 2.16699 10.7197C2.16699 9.50865 2.3968 8.37057 2.85641 7.30543C3.31602 6.2403 3.93978 5.31378 4.72769 4.52588C5.51559 3.73797 6.44211 3.11421 7.50725 2.6546C8.57238 2.19499 9.71047 1.96518 10.9215 1.96518C12.1326 1.96518 13.2706 2.19499 14.3358 2.6546C15.4009 3.11421 16.3274 3.73797 17.1153 4.52588C17.9032 5.31378 18.527 6.2403 18.9866 7.30543C19.4462 8.37057 19.676 9.50865 19.676 10.7197C19.676 11.9307 19.4462 13.0688 18.9866 14.134C18.527 15.1991 17.9032 16.1256 17.1153 16.9135C16.3274 17.7014 15.4009 18.3252 14.3358 18.7848C13.2706 19.2444 12.1326 19.4742 10.9215 19.4742Z" fill="#0070DF"/>
                            </g>
                        </svg>
                        <div>
                            Certificação exclusiva o'Novo Mercado Carreiras
                        </div>
                    </li>
                </ul>
                <h2>Bônus</h2>
                <ul>
                    <li>
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_305_165" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                <rect x="0.416016" y="0.214264" width="21.0108" height="21.0108" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_305_165)">
                                <path d="M9.69588 14.7468L15.8678 8.57484L14.6422 7.34921L9.69588 12.2955L7.20084 9.80047L5.97521 11.0261L9.69588 14.7468ZM10.9215 19.4742C9.71047 19.4742 8.57238 19.2444 7.50725 18.7848C6.44211 18.3252 5.51559 17.7014 4.72769 16.9135C3.93978 16.1256 3.31602 15.1991 2.85641 14.134C2.3968 13.0688 2.16699 11.9307 2.16699 10.7197C2.16699 9.50865 2.3968 8.37057 2.85641 7.30543C3.31602 6.2403 3.93978 5.31378 4.72769 4.52588C5.51559 3.73797 6.44211 3.11421 7.50725 2.6546C8.57238 2.19499 9.71047 1.96518 10.9215 1.96518C12.1326 1.96518 13.2706 2.19499 14.3358 2.6546C15.4009 3.11421 16.3274 3.73797 17.1153 4.52588C17.9032 5.31378 18.527 6.2403 18.9866 7.30543C19.4462 8.37057 19.676 9.50865 19.676 10.7197C19.676 11.9307 19.4462 13.0688 18.9866 14.134C18.527 15.1991 17.9032 16.1256 17.1153 16.9135C16.3274 17.7014 15.4009 18.3252 14.3358 18.7848C13.2706 19.2444 12.1326 19.4742 10.9215 19.4742Z" fill="#0070DF"/>
                            </g>
                        </svg>
                        <div>
                            Livro Marketing de Influência
                        </div>
                    </li>
                    <li>
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_305_165" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                <rect x="0.416016" y="0.214264" width="21.0108" height="21.0108" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_305_165)">
                                <path d="M9.69588 14.7468L15.8678 8.57484L14.6422 7.34921L9.69588 12.2955L7.20084 9.80047L5.97521 11.0261L9.69588 14.7468ZM10.9215 19.4742C9.71047 19.4742 8.57238 19.2444 7.50725 18.7848C6.44211 18.3252 5.51559 17.7014 4.72769 16.9135C3.93978 16.1256 3.31602 15.1991 2.85641 14.134C2.3968 13.0688 2.16699 11.9307 2.16699 10.7197C2.16699 9.50865 2.3968 8.37057 2.85641 7.30543C3.31602 6.2403 3.93978 5.31378 4.72769 4.52588C5.51559 3.73797 6.44211 3.11421 7.50725 2.6546C8.57238 2.19499 9.71047 1.96518 10.9215 1.96518C12.1326 1.96518 13.2706 2.19499 14.3358 2.6546C15.4009 3.11421 16.3274 3.73797 17.1153 4.52588C17.9032 5.31378 18.527 6.2403 18.9866 7.30543C19.4462 8.37057 19.676 9.50865 19.676 10.7197C19.676 11.9307 19.4462 13.0688 18.9866 14.134C18.527 15.1991 17.9032 16.1256 17.1153 16.9135C16.3274 17.7014 15.4009 18.3252 14.3358 18.7848C13.2706 19.2444 12.1326 19.4742 10.9215 19.4742Z" fill="#0070DF"/>
                            </g>
                        </svg>
                        <div>
                            Livro exclusivo do o’ Novo Mercado (nunca publicado antes) <b>Manual do Gestor de Marketing Digital</b>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="valores">
                <img src="src/img/landing/itens-diversos.png" alt="Itens diversos envolvidos no curso" title="Itens diversos envolvidos no curso">
                <div id="preco-cortado">
                    De R$3.997
                </div>
                <p>
                    Por apenas 10x de <b>R$349,70</b> ou R$2.997 à vista.
                </p>
                <button class="btn-inscricao" type="button">
                    QUERO GARANTIR A MINHA VAGA AGORA
                </button>
            </div>
        </div>
    </section>
</main>
<footer>
    <div id="detalhes-garantia">
        <img src="src/img/footer/bussola.png" alt="Imagem de uma bússola" title="Nossa bússola">
        <div>
            <h2>
                GARANTIA INCONDICIONAL DE 7 DIAS
            </h2>
            <p>
                Você pode entrar, acessar o conteúdo e, se não se adaptar, entender que não é para você ou até mesmo se arrepender nos primeiros 7 dias, devolvemos 100% do dinheiro investido. Simples assim, sem complicação ou letras miúdas.
            </p>
        </div>
    </div>
    <div class="instrucoes-contato">
        <img src="src/img/footer/icone-whatsapp.png" alt="Ícone do WhatsApp" title="Fale com nossa equipe pelo WhatsApp">
        <div class="complemento-contato">
            <p>ALGUMA DÚVIDA NA HORA DE FAZER A SUA INSCRIÇÃO?</p>
            <p>Envie uma mensagem para a nossa equipe clicando no botão no canto da página.</p>
            <a href="https://wa.me/5513996608684" target="_blank" title="Abrir conversa no WhatsApp com nossa equipe de atendimento" class="link-whatsapp">
                Clique aqui para acessar
            </a>
        </div>
    </div>
    <script src="src/js/script.js"></script>
</footer>
</body>
</html>