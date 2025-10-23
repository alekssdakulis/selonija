@extends('_layouts.main')

@section('landing')
<div class="p-8 bg-cover bg-center h-[100vh]"
    style="background-image: url('{{ vite('source/assets/images/slide1.jpg') }}');"
>
    <h1 class="text-3xl font-bold">Selonija</h1>
    <h2 class="float-center">Laipni lūgts Selonijā</h2>
    <div>
        Studentu korporācija Selonija ir akadēmiska mūža brālība ar mērķi attītstīt un atbalstīt savas sabiedrības locekļus, audzinot tos goda, augstas pašapziņas un latvietības vērtībās, kas ir svarīgas brīvas Latvijas valsts izaugsmei un ilgtspējīgai, uz mērķi orientētai attīstībai. Selonija sastāv no Selonijas konventa un Filistru biedrības.
    </div>
</div>
@endsection

@section('navigation')
<nav id="main-nav" class="fixed top-0 w-full z-50 bg-neutral-800 shadow flex items-center justify-between py-1 opacity-90  h-20">
    <div class="flex-3"></div>
    <img src="{{ vite('source/assets/images/brand.png') }}" class="h-20" alt="test">
    <div class="flex-1 text-4xl font-bold text-lime-600">Selonija</div>
    <div class="flex-5 space-x-1 text-stone-100 text-right">
        <a href="/about" class="px-1 hover:text-lime-600 transition">Par Mums</a>
        <a href="/galerija" class="px-1 hover:text-lime-600 transition">Galerija</a>
        <a href="/kalendars" class="px-1 hover:text-lime-600 transition">Kalendārs</a>
        <a href="/kontakti" class="px-1 hover:text-lime-600 transition">Kontakti</a>
        <a href="/zina" class="px-1 hover:text-lime-600 transition">Ziņa administratoram</a>
        <!--<a class="navigation">test</a>-->
    </div>
    <div class="flex-3"></div>
</nav>
@endsection

@section('about')
<div class="p-8 h-screen">
    <h1>Draugam, Tēvijai     Virtute et Fide</h1>
    <div>Selonija ir vecākā latviešu studentu korporācija Latvijā, tā ir dibināta 1880.gada 24.novembrī pie Rīgas Politehnikuma. Korporācijas dibināšanu noteica latviešu pieaugošā tieksme pēc neatkarības, pašapliecināšanās un latviskas identitātes. 19.gs. beigas iezīmē pārmaiņas sabiedrībā, latviešiem arvien vairāk apzinoties savas saknes un kopību, dibinot intelektuālas un komerciālas apvienības, ieņemot arvien augstāku stāvokli un vairojot savu turīgumu. Latviešu korporācijas dibināšana bija veids kā izrauties no līdz šim dominējošo vācbaltiešu aizbildniecības un aizspriedumiem, aizsākot pašiem savu ceļu. Selonijas dibinātāji bija Puriņu Klāva 1878.gadā dibinātā Draugu pulciņa dalībnieki, kuriem gadu vēlāk pievienojās 19 no vācu korporācijām Concordia Rigensis, Fraternitas Baltica, Rubonia un Borystenia izstājušies burši. To skaitā bija arī vairāki vācbaltieši.</div>
</div>
@endsection

@section('tester')
<div class="h-[100vh]">
    <div>testetsetst</div>
</div>
@endsection