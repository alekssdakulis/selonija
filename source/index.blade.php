@extends('_layouts.main')

@section('navigation')
<nav id="main-nav" class="fixed top-0 w-full z-50 bg-neutral-800 shadow flex items-center justify-between py-1 opacity-90  h-20">
    <div class="flex-3"></div>
    <img src="{{ vite('source/assets/images/brand.png') }}" class="h-20" alt="brand">
    <a href="#landing" class="flex-1 text-4xl font-bold text-lime-600">Selonija</a>
    <div class="flex-5 space-x-1 text-stone-100 text-right">
        <a href="#about" class="px-1 hover:text-lime-600 transition">Par Mums</a>
        <a href="#gallery" class="px-1 hover:text-lime-600 transition">Galerija</a>
        <a href="/kalendars" class="px-1 hover:text-lime-600 transition">Kalendārs</a>
        <a href="/kontakti" class="px-1 hover:text-lime-600 transition">Kontakti</a>
        <a href="/zina" class="px-1 hover:text-lime-600 transition">Ziņa administratoram</a>
        <!--<a class="navigation">test</a>-->
    </div>
    <div class="flex-3"></div>
</nav>
@endsection

@section('landing')
<div id="landing" class="p-8 bg-cover bg-center h-[100vh] flex items-center grayscale-[40%]"
    style="background-image: url('{{ vite('source/assets/images/slide1.jpg') }}');">
    <div class="flex-3"></div>
    <div class="flex-2 text-stone-100 text-center">
        <h2 class="float-center text-6xl p-8">Laipni lūgts <span class="text-lime-600">Selonijā</span></h2>
        <div class="text-stone-300">
            Studentu korporācija Selonija ir akadēmiska mūža brālība ar mērķi attītstīt un atbalstīt savas sabiedrības locekļus, audzinot tos goda, augstas pašapziņas un latvietības vērtībās, kas ir svarīgas brīvas Latvijas valsts izaugsmei un ilgtspējīgai, uz mērķi orientētai attīstībai. Selonija sastāv no Selonijas konventa un Filistru biedrības.
        </div>
    </div>
    <div class="flex-3"></div>
</div>
@endsection

@section('about')
<div id="about" class="p-8 min-h-screen flex items-center">
    <div class="flex-2"></div>
    <div class="flex-3 text-center">
        <img src="{{ vite('source/assets/images/gerbonis.png') }}" class="mx-auto mt-40" alt="gerbonis">
        <h1 class="p-5 text-4xl font-bold">Draugam, Tēvijai<span class="p-15 text-lime-600">Virtute et Fide</span></h1>
        <div class="pb-2">
            Selonija ir vecākā latviešu studentu korporācija Latvijā, tā ir dibināta 1880.gada 24.novembrī pie Rīgas Politehnikuma. Korporācijas dibināšanu noteica latviešu pieaugošā tieksme pēc neatkarības, pašapliecināšanās un latviskas identitātes. 19.gs. beigas iezīmē pārmaiņas sabiedrībā, latviešiem arvien vairāk apzinoties savas saknes un kopību, dibinot intelektuālas un komerciālas apvienības, ieņemot arvien augstāku stāvokli un vairojot savu turīgumu. Latviešu korporācijas dibināšana bija veids kā izrauties no līdz šim dominējošo vācbaltiešu aizbildniecības un aizspriedumiem, aizsākot pašiem savu ceļu. Selonijas dibinātāji bija Puriņu Klāva 1878.gadā dibinātā Draugu pulciņa dalībnieki, kuriem gadu vēlāk pievienojās 19 no vācu korporācijām Concordia Rigensis, Fraternitas Baltica, Rubonia un Borystenia izstājušies burši. To skaitā bija arī vairāki vācbaltieši.
        </div>
        <div id="more-text" class="hidden space-y-2">
            <div>
                Pēc korporācijas dibināšanas bija nepieciešams iegūt oficiālu atzīšanu no jau eksistējošām vācbaltiešu korporācijām. Tikai šādi bija iespējams pilnvērtīgi iekļauties korporāciju sabiedriskajā dzīvē un veidot attiecības atbilstoši buršu principiem. Korporāciju nozīme Rīgas Politehnikumā šajā laikā bija ievērojami lielāka nekā mūsdienu Latvijas universitātēs un vairākums no studentiem bija korporāciju locekļi. Tomēr neskatoties uz vairākkārtīgiem Selonijas iesniegumiem, korporāciju apvienība Šaržēto Konvents (C!C!) 17 gadus atteicās atzīt latviešu korporāciju. Šāda stāvokļa sekas bija daudzās menzūras (attiecību atrisināšana paukojot), ko seloņi izcirta ar vācbaltiešu korporāciju locekļiem, kuri atteicās paciest seloņu eksistenci.
            </div>
            <div>
                Korporācijas oficiāla atzīšana C!C! nāca tikai 1897.gada 24.novembrī, kad būtiski bija mainījies gan C!C! sastāvs, gan situācija Rīgas Politehniskajā institūtā (RPI). C!C! tolaik bez vācu Fraternitas Baltica, Concordia Rigesis un Rubonia bija uzņemtas arī krievu Fraternitas Arctica un poļu Arconia un Veletia. Nevācu korporācijas atbalstīja Seloniju. Savukārt RPI studējošu skaits bija audzis tik ļoti, ka studējošie vairs nebija gatavi samierināties ar korporāciju ietekmi, šādā situācijā Selonijas atbalsts C!C! bija kļuvis noderīgs. Turklāt Rubonia vadībā bija nonācis latviešu izcelsmes seniors Renze, kura ietekmē balsu pārsvars C!C! balsojumā beidzot nosliecās Selonijas labā.
            </div>
            <h1 class="text-4xl font-bold p-5">
                Selonijas loma Latvijas neatkarības izcīnīšanā
            </h1>
            <div>
                Studējošie latvieši veidoja nākamo latviešu inteliģenci un viņiem bija ievērojama loma Latvijas valsts tapšanā. Līdz ar Pirmā pasaules kara kara sākumu un frontes pietuvošanos Rīgai Krievijas impērija 1915.gada rudenī evakuēja RPI uz Maskavu, kur līdz 1917.gada rudenim uzturējās arī Selonija. Kad gadu vēlāk Vācijas impērijas karaspēka joprojām kontrolētajā Rīgā agrākā RPI vietā tika nodibināta Baltishe Technishe Hochshule, tajā iestājās prāvs skaits komiltoņu un Selonijas konvents atsāka darbību Rīgā.
            </div>
            <div>
                Seloņi aktīvi piedalījās latviešu sabiedriskās dzīves organizēšanā, iesaistoties arī dažādās latviešu politiskajās apvienībās. Kad 1918.gada 18.novembrī tiek proklamēta Latvijas Republika (LR), Selonijas krustdēli iesaistās Nacionālā teātra apsargāšanā, kā arī uzvelk Latvijas karogus pie bijušās RPI ēkas galvenās ieejas. Seloņi piedalījās arī pašā proklamēšanas aktā, bet Selonijas filistrs Spricis Paegle kļūst par tirdzniecības un rūpniecības ministru pirmajā Latvijas valdībā.
            </div>
            <div>
                Jauno Latvijas Republiku tolaik apdraud spēki gan no austrumiem, gan rietumiem. Jau ar 1918.gada decembri Latvijā no austrumiem ar karaspēku ienāk komunistiskā Pētera Stučkas valdība un ātri pārņem kontrolē lielāko Latvijas daļu. LR spēki kopā ar vācbaltiešu vienībām atkāpjas uz Liepājas apvidu, kur fronti izdodas noturēt uz Ventas upes.
            </div>
            <div>
                1918.gada 29.novembrī Selonijas Ģenerālsapulcē nolemj, ka visiem aktīvajiem komiltoņiem jānododas Latvijas valdības apsardzības ministra rīcībā cīņai pret ienaidnieku. Līdzīgu lēmumu pieņem arī latviešu studentu korporācija Talavija un kopīgi tiek izveidota brīvprātīgo karaspēka vienība – atsevišķā studentu rota, kas ir tieši pakļauta Ģenerālā štāba priekšniekam. Vēlāk rotā iesaistās arī Lettonia, Lettgallia un Fraternitas Moscoviensis (kopš 1920.gada Fraternitas Lettica) locekļi, kā arī ārpus korporācijām esoši studenti. Par pirmo rotas komandieri tika ievēlēts Selonijas krustdēls kapteinis Nikolajs Grundmanis. Decembra beigās vienībā bija aptuveni 210 karavīri, bet 1919. gada 21. martā tā jau tiek pārformēta par atsevišķo studentu bataljonu. Ņemot vērā rotas kaujasspējas un augsto motivāciju, tā sākotnēji nodrošina apsardzi pagaidu valdībai, bet vēlāk tiek iesaistīta kaujās par Latvijas atbrīvošanu. Par varonību Latvijas atbrīvošanas cīņās 40 seloņi apbalvoti ar Lāčplēša kara ordeni.
            </div>
            <h1 class="text-4xl font-bold p-5">
                Selonija trimdā
            </h1>
            <div>
                Kad 1940.gada 17.jūnijā PSRS karaspēks okupē Latviju, tiek uzsākta valsts un sabiedrības institūciju iznīcināšana. Korporāciju darbība tiek ar pārtraukta, bet to īpašums konfiscēts, tiek apcietināti, deportēti vai nogalināti Latvijas valsts sabiedriskie, politiskie un militārie darbinieki. Vācijas okupācijas laikā korporāciju atjaunošana netiek atļauta un korporācija faktiski var darboties tikai pagrīdē. Neformālajās tikšanās reizēs biežs referents bija bijušais satiksmes ministrs, filistrs Bernhards Einbergs. Viņš iesaistījās arī uz neatkarības atjaunošanu vērstās Latvijas centrālās padomes darbībā, 1944. gadā Gestapo apcietināts, 1945. gadā Einbergs mira Štuthofas koncentrācijas nometnē.
            </div>
            <div>
                Atjaunot Selonijas dzīvi izdodas tikai trimdā. 1946.gada 31.augustā sanāksmē Eslingenā pie Nekaras, Vācijā, tika nodibināts Selonijas Apvienotais Konvents (S!A!K!), kas pārņēma Selonijas vadību trimdā. Latviešiem izplūstot pa plašo pasauli, Selonijas kopas tiek izveidotas vairākās ASV, Kanādas, Austrālijas pilsētās, Vācijā, Lielbritānijā, Zviedrijā un arī Venecuēlā. Kopš 1950.gada S!A!K! sēdes notika Ņujorkā.
            </div>
            <h1 class="text-4xl font-bold p-5">
                Darbības atjaunošana Latvijā
            </h1>
            <div>
                Līdz ar tautas atmodu un PSRS sabrukuma iesākumu, Selonijai 1989. gadā izdodas atjaunot darbību pie Rīgas Politehniskā institūta (tagadējās Rīgas Tehniskā universitātes). Tiek turpinātas sen iedzīvinātās Selonijas tradīcijas, caur patriotismu un godprātību veicinot katra sabiedrības locekļa un Latvijas izaugsmi kopumā. Selonijas komāna garanti ir Fraternitas Vesthardiana, Salgalia, Fraternitas Imantica, Gersicania, Fraternitas Vanenica un Vendia.
            </div>
        </div>
        <div class="p-5 cursor-pointer hover:underline text-lime-600" id="show-more">Lasīt vairāk</div>
        <div class="flex justify-center items-center mt-6">
            <img src="{{ vite('source/assets/images/cepure.png') }}" class="mx-auto" alt="cepure">
            <img src="{{ vite('source/assets/images/vairogs.png') }}" class="mx-auto" alt="vairogs">
            <img src="{{ vite('source/assets/images/auseklis.png') }}" class="mx-auto" alt="auseklis">
            <img src="{{ vite('source/assets/images/cirkelis.png') }}" class="mx-auto" alt="cirkelis">
        </div>
    </div>
    <div class="flex-2"></div>
</div>
@endsection

@section('gallery')
<div id="gallery" class="min-h-screen flex items-center bg-neutral-800">

</div>
@endsection

@section('tester')
<div class="h-[100vh]">
    <div>testetsetst</div>
</div>
@endsection