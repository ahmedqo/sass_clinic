@extends('shared.guest.base')
@section('title', __('Accueil'))

@section('header')
    <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-12">
        <div class="lg:col-span-7 flex flex-col gap-6 lg:pb-20 relative">
            <h1 class="text-x-black font-x-huge text-[2rem] leading-[3rem] lg:text-[3.6rem] lg:leading-[4rem]">
                Optimisez la Gestion de votre <span class="text-x-acent">Cabinet d'Urologie</span> avec notre SaaS tout-en-un
            </h1>
            <div class="flex flex-col lg:flex-row lg:flex-wrap gap-4 lg:items-center">
                <p class="flex-1 text-base font-x-thin text-x-black text-opacity-70">
                    Découvrez une solution innovante pour simplifier la gestion de votre cabinet d’urologie. Gérez
                    facilement les infirmières, les stocks, les rendez-vous, et suivez les paiements avec précision.
                    Concentrez-vous sur vos patients, notre SaaS s’occupe du reste.
                </p>
                <a href=""
                    class="mt-2 lg:mt-0 flex flex-wrap w-max items-center rounded-full p-[4px] bg-x-white text-x-black outline-none hover:bg-x-prime focus:bg-x-prime">
                    <span class="flex items-center justify-center bg-x-prime text-x-black rounded-full aspect-square w-8">
                        <svg class="block pointer-events-none w-5 h-5" viewBox="0 -960 960 960" fill="currentColor">
                            <path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z" />
                        </svg>
                    </span>
                    <span class="text-base font-x-thin ps-4 pe-5">En savoir plus</span>
                </a>
            </div>
            <div
                class="hidden lg:block font-x-huge text-x-black text-opacity-70 text-9xl absolute left-0 -bottom-20 z-[-10]">
                Medicalink
            </div>
        </div>
        <div class="lg:col-span-4 lg:col-start-9 xl:col-span-3 xl:col-start-10 flex">
            <div class="w-full mt-10 lg:mt-auto flex gap-2 lg:flex-col">
                <img src="{{ asset('img/doc-1.webp') }}" loading="lazy"
                    class="flex-1 w-0 lg:w-full h-44 rounded-x-huge object-cover border border-x-x-white border-y-x-white" />
                <img src="{{ asset('img/doc-2.webp') }}" loading="lazy"
                    class="flex-1 w-0 lg:w-full h-44 rounded-x-huge object-cover border border-x-x-white border-y-x-white" />
            </div>
        </div>
        <div class="lg:col-span-7 mt-10">
            <ul class="grid grid-rows-1 grid-cols-1 lg:grid-cols-12 gap-6">
                <li
                    class="lg:col-span-4 rounded-x-huge bg-x-prime bg-opacity-30 border border-x-x-white border-y-x-white text-x-black flex flex-col">
                    <div class="flex flex-col gap-3 p-4">
                        {{-- <div class="flex items-center justify-between gap-4">
                            <span class="text-lg text-x-black font-x-thin">99%</span>
                            <span class="w-6 h-6 rounded-full flex items-center justify-center bg-x-acent text-x-white">
                                <svg class="block pointer-events-none w-4 h-4" viewBox="0 -960 960 960" fill="currentColor">
                                    <path
                                        d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z" />
                                </svg>
                            </span>
                        </div> --}}
                        <span class="text-sm font-x-thi text-center text-x-black text-opacity-70n">
                            Simplifiez votre pratique médicale avec une solution intelligente et efficace.
                        </span>
                    </div>
                    <img src="{{ asset('img/docs.webp') }}" loading="lazy"
                        class="w-full lg:flex-1 h-44 lg:h-auto rounded-x-huge object-cover border border-x-x-white border-y-x-white -mb-px -mx-px" />
                </li>
                <li
                    class="lg:col-span-8 rounded-x-huge bg-x-prime bg-opacity-30 border border-x-x-white border-y-x-white p-4 flex flex-col gap-2 text-x-black">
                    <div class="text-[2rem] items-center flex flex-wrap gap-2 text-x-black font-x-huge">
                        <span>RÉVOLUTIONNEZ</span>
                        <div class="inline-flex">
                            <img src="{{ asset('img/faces/1.webp') }}" loading="lazy"
                                class="inline-block w-12 h-10 rounded-full object-cover border border-x-x-white border-y-x-white" />
                            <img src="{{ asset('img/faces/2.webp') }}" loading="lazy"
                                class="-ms-4 inline-block w-12 h-10 rounded-full object-cover border border-x-x-white border-y-x-white" />
                            <img src="{{ asset('img/faces/3.webp') }}" loading="lazy"
                                class="-ms-4 inline-block w-12 h-10 rounded-full object-cover border border-x-x-white border-y-x-white" />
                            <span
                                class="-ms-4 inline-flex w-12 h-10 rounded-full bg-x-white border border-x-x-white border-y-x-white items-center justify-center">
                                <svg class="block pointer-events-none w-6 h-6" viewBox="0 -960 960 960" fill="currentColor">
                                    <path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z" />
                                </svg>
                            </span>
                        </div>
                        LA GESTION
                        <img src="{{ asset('img/owl.webp') }}" loading="lazy"
                            class="inline-block w-16 h-10 rounded-full bg-cover border border-x-x-white border-y-x-white" />
                        <span>DE VOTRE</span> <span>CABINET</span> <span>MÉDICAL</span> <span>DÈS</span>
                        <span>AUJOURD'HUI!</span>
                    </div>
                    <a href="" class="ms-auto flex w-max items-center gap-2">
                        <span class="text-sm font-x-thin text-x-black text-opacity-70 underline">
                            Commencez ici
                        </span>
                        <span class="w-4 h-4 rounded-full flex items-center justify-center bg-x-white text-x-black">
                            <svg class="block pointer-events-none w-2 h-2" viewBox="0 -960 960 960" fill="currentColor">
                                <path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z" />
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="lg:col-span-4 lg:col-start-9 xl:col-span-3 xl:col-start-10 mt-10 mx-auto flex flex-col">
            <div class="lg:mt-auto w-full text-[2.3rem] items-center flex flex-wrap gap-2 text-x-black font-x-huge">
                <span>Voix</span>
                <span>de</span>
                <div class="w-max inline-flex rounded-full bg-x-prime p-[3px] border border-x-x-white border-y-x-white">
                    <img src="{{ asset('img/faces/4.webp') }}" loading="lazy"
                        class="inline-block w-10 h-10 rounded-full object-cover border border-x-x-white border-y-x-white" />
                    <img src="{{ asset('img/faces/5.webp') }}" loading="lazy"
                        class="-ms-4 inline-block w-10 h-10 rounded-full object-cover border border-x-x-white border-y-x-white" />
                    <img src="{{ asset('img/faces/6.webp') }}" loading="lazy"
                        class="-ms-4 inline-block w-10 h-10 rounded-full object-cover border border-x-x-white border-y-x-white" />
                    <span
                        class="-ms-4 inline-flex w-12 h-10 rounded-full bg-x-white border border-x-x-white border-y-x-white items-center justify-center">
                        <svg class="block pointer-events-none w-6 h-6" viewBox="0 -960 960 960" fill="currentColor">
                            <path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="lg:mb-8 w-full text-[2rem] items-center flex flex-wrap gap-2 text-x-black font-x-huge">
                <div
                    class="text-xs font-x-huge leading-[1] text-x-black text-opacity-70 flex flex-wrap w-max items-center justify-center">
                    Commençons <br /> avec Medicalink
                    <svg class="block pointer-events-none w-5 h-5" viewBox="0 -960 960 960" fill="currentColor">
                        <path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z" />
                    </svg>
                </div>
                <span class="lg:ms-auto">Satisfaction</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="container mx-auto p-4 w-full">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-0 items-start">
            <div class="flex flex-col gap-6 lg:col-span-8">
                <h2 class="text-2xl font-x-thin text-x-black">
                    Pourquoi <br /> choisir notre solution?
                </h2>
                <h3 class="text-xl lg:text-4xl font-x-huge text-x-black my-auto lg:me-16">
                    Bénéficiez d'une solution complète et intuitive, conçue pour optimiser la gestion de votre cabinet.
                    Simplifiez vos processus, gagnez du temps et concentrez-vous sur l'essentiel : vos patients.
                    {{-- Innovative
                    <div class="relative inline-block">
                        <span
                            class="absolute -top-2 left-1/2 -translate-x-1/2 w-max flex px-4 rounded-full bg-x-prime bg-opacity-20 border border-x-x-white border-y-x-white text-xl text-x-black font-x-thin">
                            Health
                        </span> Solutions
                    </div>
                    <br /> for
                    <div class="relative inline-block">
                        <span
                            class="absolute -bottom-3 -left-16 w-max flex px-4 rounded-full bg-x-prime bg-opacity-20 border border-x-x-white border-y-x-white text-xl text-x-black font-x-thin">
                            Trust
                        </span> Personalized
                    </div>
                    <div class="relative inline-block">
                        <span
                            class="absolute -top-2 -right-8 lg:-right-12 w-max flex px-4 rounded-full bg-x-prime bg-opacity-20 border border-x-x-white border-y-x-white text-xl text-x-black font-x-thin">
                            Support
                        </span> Health.
                    </div> --}}
                </h3>
            </div>
            <ul class="w-full mx-auto lg:col-span-4 grid grid-rows-1 grid-cols-12 gap-6">
                <li class="col-span-5 rounded-x-huge bg-x-prime p-4 flex flex-col gap-8 text-x-black">
                    <span class="text-3xl font-x-huge">20+</span>
                    <span class="text-base font-x-thin">
                        Disponible <br /> Spécialistes
                    </span>
                </li>
                <li
                    class="col-span-5 rounded-x-huge bg-x-prime bg-opacity-30 border border-x-x-white border-y-x-white p-4 flex flex-col gap-8 text-x-black">
                    <span class="text-3xl font-x-huge">85%</span>
                    <span class="text-base font-x-thin">
                        Taux de <br /> Satisfaction
                    </span>
                </li>
                <li
                    class="col-span-5 col-start-3 rounded-x-huge bg-x-prime bg-opacity-70 p-4 flex flex-col gap-8 text-x-black">
                    <span class="text-3xl font-x-huge">70%</span>
                    <span class="text-base font-x-thin">
                        Rapide <br /> Diagnostics
                    </span>
                </li>
                <li class="col-span-5 rounded-x-huge bg-x-acent p-4 flex flex-col gap-8 text-x-white">
                    <span class="text-3xl font-x-huge">15M</span>
                    <span class="text-base font-x-thin">
                        Patients <br /> Servi
                    </span>
                </li>
            </ul>
        </div>
    </section>
    {{-- <section class="container mx-auto p-4 w-full">
        <div class="flex flex-col gap-16">
            <h3 class="text-x-black font-x-huge text-6xl text-center">Notre Service</h3>
            <ul class="grid grid-rows-1 grid-cols-1 lg:grid-cols-2 gap-6">
                <li>
                    <a href="" class="grid grid-rows-1 grid-cols-3 h-40">
                        <img src="{{ asset('img/services/1.webp') }}" loading="lazy"
                            class="h-40 w-full col-span-3 col-start-1 row-start-1 object-cover rounded-x-huge border-2 border-x-x-white border-y-x-white" />
                        <div
                            class="col-span-2 col-start-2 row-start-1 flex items-center justify-center rounded-x-huge border-2 border-x-x-white border-y-x-white isolate relative before:absolute before:content-[''] before:bg-x-light before:bg-opacity-50 before:inset-0 before:blur-sm before:-z-10">
                            <span class="font-x-thin text-x-black text-3xl">Instant Consult</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="grid grid-rows-1 grid-cols-3 h-40">
                        <img src="{{ asset('img/services/2.webp') }}" loading="lazy"
                            class="h-40 w-full col-span-3 col-start-1 row-start-1 object-cover rounded-x-huge border-2 border-x-x-white border-y-x-white" />
                        <div
                            class="col-span-2 col-start-2 row-start-1 flex items-center justify-center rounded-x-huge border-2 border-x-x-white border-y-x-white isolate relative before:absolute before:content-[''] before:bg-x-light before:bg-opacity-50 before:inset-0 before:blur-sm before:-z-10">
                            <span class="font-x-thin text-x-black text-3xl">Personalized Care</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="grid grid-rows-1 grid-cols-3 h-40">
                        <img src="{{ asset('img/services/3.webp') }}" loading="lazy"
                            class="h-40 w-full col-span-3 col-start-1 row-start-1 object-cover rounded-x-huge border-2 border-x-x-white border-y-x-white" />
                        <div
                            class="col-span-2 col-start-2 row-start-1 flex items-center justify-center rounded-x-huge border-2 border-x-x-white border-y-x-white isolate relative before:absolute before:content-[''] before:bg-x-light before:bg-opacity-50 before:inset-0 before:blur-sm before:-z-10">
                            <span class="font-x-thin text-x-black text-3xl">AI Assisted</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="grid grid-rows-1 grid-cols-3 h-40">
                        <img src="{{ asset('img/services/4.webp') }}" loading="lazy"
                            class="h-40 w-full col-span-3 col-start-1 row-start-1 object-cover rounded-x-huge border-2 border-x-x-white border-y-x-white" />
                        <div
                            class="col-span-2 col-start-2 row-start-1 flex items-center justify-center rounded-x-huge border-2 border-x-x-white border-y-x-white isolate relative before:absolute before:content-[''] before:bg-x-light before:bg-opacity-50 before:inset-0 before:blur-sm before:-z-10">
                            <span class="font-x-thin text-x-black text-3xl">Symptoms Checker</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section> --}}
    <section class="container mx-auto p-4 w-full">
        <div class="flex flex-col gap-16">
            <h3 class="text-x-black font-x-huge text-4xl lg:text-6xl text-center">Comment Fonctionne Medicalink</h3>
            <ul class="grid grid-rows-1 grid-cols-1 lg:grid-cols-3 gap-6">
                <li>
                    <a href=""
                        class="flex flex-col gap-20 rounded-x-huge border-2 border-x-x-white border-y-x-white bg-x-light p-6">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-lg text-x-black text-opacity-70 font-x-thin">Gestion des Infirmières</span>
                            <span class="w-8 h-8 rounded-full flex items-center justify-center bg-x-prime text-x-black">
                                <svg class="block pointer-events-none w-5 h-5" viewBox="0 -960 960 960"
                                    fill="currentColor">
                                    <path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z" />
                                </svg>
                            </span>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h4 class="text-2xl font-x-huge text-x-black">
                                Coordination, suivi et optimisation des services de soins
                            </h4>
                            <p class="text-base font-x-thin text-x-black text-opacity-70">
                                Assurer une gestion et une coordination efficaces du personnel </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=""
                        class="flex flex-col gap-20 rounded-x-huge border-2 border-x-x-white border-y-x-white bg-x-prime bg-opacity-30 p-6">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-lg text-x-black text-opacity-70 font-x-thin">Gestion des Stocks</span>
                            <span class="w-8 h-8 rounded-full flex items-center justify-center bg-x-acent text-x-white">
                                <svg class="block pointer-events-none w-5 h-5" viewBox="0 -960 960 960"
                                    fill="currentColor">
                                    <path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z" />
                                </svg>
                            </span>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h4 class="text-2xl font-x-huge text-x-black">
                                Suivi, contrôle et optimisation des ressources disponibles en temps réel
                            </h4>
                            <p class="text-base font-x-thin text-x-black text-opacity-70">
                                Suivi des produits, alertes et contrôle des niveaux.
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=""
                        class="flex flex-col gap-20 rounded-x-huge border-2 border-x-x-white border-y-x-white bg-x-light p-6">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-lg text-x-black text-opacity-70 font-x-thin">Salle d’Attente Dynamique</span>
                            <span class="w-8 h-8 rounded-full flex items-center justify-center bg-x-prime text-x-black">
                                <svg class="block pointer-events-none w-5 h-5" viewBox="0 -960 960 960"
                                    fill="currentColor">
                                    <path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z" />
                                </svg>
                            </span>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h4 class="text-2xl font-x-huge text-x-black">
                                Optimisation de l'expérience patient grâce à une gestion intelligente
                            </h4>
                            <p class="text-base font-x-thin text-x-black text-opacity-70">
                                Suivi en temps réel et gestion optimisée de l’ordre des patients
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=""
                        class="flex flex-col gap-20 rounded-x-huge border-2 border-x-x-white border-y-x-white bg-x-prime bg-opacity-30 p-6">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-lg text-x-black text-opacity-70 font-x-thin">Système d’Imagerie
                                Médicale</span>
                            <span class="w-8 h-8 rounded-full flex items-center justify-center bg-x-acent text-x-white">
                                <svg class="block pointer-events-none w-5 h-5" viewBox="0 -960 960 960"
                                    fill="currentColor">
                                    <path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z" />
                                </svg>
                            </span>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h4 class="text-2xl font-x-huge text-x-black">
                                Acquisition, gestion et analyse avancées des images diagnostiques
                            </h4>
                            <p class="text-base font-x-thin text-x-black text-opacity-70">
                                Téléchargez et visualisez des DICOM en toute simplicité.
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=""
                        class="flex flex-col gap-20 rounded-x-huge border-2 border-x-x-white border-y-x-white bg-x-light p-6">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-lg text-x-black text-opacity-70 font-x-thin">Gestion des Paiements</span>
                            <span class="w-8 h-8 rounded-full flex items-center justify-center bg-x-prime text-x-black">
                                <svg class="block pointer-events-none w-5 h-5" viewBox="0 -960 960 960"
                                    fill="currentColor">
                                    <path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z" />
                                </svg>
                            </span>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h4 class="text-2xl font-x-huge text-x-black">
                                Simplification, suivi et sécurisation des transactions financières
                            </h4>
                            <p class="text-base font-x-thin text-x-black text-opacity-70">
                                Suivez les paiements, gérez les dettes et les historiques.
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=""
                        class="flex flex-col gap-20 rounded-x-huge border-2 border-x-x-white border-y-x-white bg-x-prime bg-opacity-30 p-6">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-lg text-x-black text-opacity-70 font-x-thin">Prise de Rendez-vous</span>
                            <span class="w-8 h-8 rounded-full flex items-center justify-center bg-x-acent text-x-white">
                                <svg class="block pointer-events-none w-5 h-5" viewBox="0 -960 960 960"
                                    fill="currentColor">
                                    <path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z" />
                                </svg>
                            </span>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h4 class="text-2xl font-x-huge text-x-black">
                                Planification simplifiée et gestion optimisée des consultations
                            </h4>
                            <p class="text-base font-x-thin text-x-black text-opacity-70">
                                Simplifiez la planification pour vos patients et votre équipe.
                            </p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="container mx-auto p-4 w-full">
        <div class="flex flex-col gap-6 rounded-x-huge bg-x-acent py-20 px-10">
            <h3 class="text-x-white font-x-thin text-4xl lg:text-6xl text-center">Commencez Votre Parcours de Santé</h3>
            <p class="text-lg font-x-thin text-x-white text-center text-opacity-70 lg:w-7/12 mx-auto">
                Bénéficiez d'un suivi continu avec des professionnels de santé dédiés pour vous accompagner tout au long de
                votre parcours.
            </p>
            <a href="{{ route('views.guest.trial') }}"
                class="mx-auto mt-3 flex flex-wrap w-max items-center rounded-full p-[4px] bg-x-white text-x-black outline-none hover:bg-x-black hover:text-x-white focus:bg-x-black focus:text-x-white">
                <span class="flex items-center justify-center bg-x-black text-x-white rounded-full aspect-square w-8">
                    <svg class="block pointer-events-none w-5 h-5" viewBox="0 -960 960 960" fill="currentColor">
                        <path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z" />
                    </svg>
                </span>
                <span class="text-base font-x-thin ps-4 pe-5">Rejoignez Medicalink Maintenant</span>
            </a>
        </div>
    </section>
@endsection
