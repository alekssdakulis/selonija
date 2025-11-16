@extends('_layouts.main')

@section('navigation')
<nav id="main-nav" class="fixed top-0 w-full z-50 bg-neutral-800 shadow flex items-center justify-center py-1 opacity-95  h-auto">
    <!--Desktop-->
    <div class="w-full sm:w-4/5 md:w-full lg:w-2/3 m-auto items-center justify-center hidden md:flex">
        <img src="/assets/images/brand.png" class="h-20" alt="brand">
        <a href="#landing" class="flex-1 text-4xl font-bold text-accent">Selonija</a>
        <div class="space-x-1 text-stone-100 text-right">
            <a href="#about" class="px-1 hover:text-accent transition">Par Mums</a>
            <a href="#gallery" class="px-1 hover:text-accent transition">Galerija</a>
            <a href="#calendar" class="px-1 hover:text-accent transition">Kalendārs</a>
            <a href="#contacts" class="px-1 hover:text-accent transition">Kontakti</a>
            <a href="/zina" class="px-1 pr-3 hover:text-accent transition">Ziņa administratoram</a>
        </div>
    </div>

    <!--Mobile-->
    <div x-data="{showDropdown: false}" class="w-full flex flex-col items-center justify-between md:hidden p-1">
        <div class="w-full flex items-center justify-between">
            <a href="#landing" class="flex flex-row items-center">
                <img src="/assets/images/brand.png" class="h-15" alt="brand">
                <div class="text-accent font-bold text-3xl">Selonija</div>
            </a>
            
            <div class="flex flex-col gap-1 cursor-pointer pr-5" @click="showDropdown = ! showDropdown">
                <span class="w-7 h-0.5 bg-white"></span>
                <span class="w-7 h-0.5 bg-white"></span>
                <span class="w-7 h-0.5 bg-white"></span>
            </div>
        </div>
        <div x-show="showDropdown" class="w-full mt-2 text-stone-100 justify-start px-5">
            <ul>
                <li class="p-5 border-t border-t-stone-500 hover:text-accent"><a href="#about" @click="showDropdown = ! showDropdown">Par Mums</a></li>
                <li class="p-5 border-t border-t-stone-500 hover:text-accent"><a href="#gallery" @click="showDropdown = ! showDropdown">Galerija</a></li>
                <li class="p-5 border-t border-t-stone-500 hover:text-accent"><a href="#calendar" @click="showDropdown = ! showDropdown">Kalendārs</a></li>
                <li class="p-5 border-t border-t-stone-500 hover:text-accent"><a href="#contacts" @click="showDropdown = ! showDropdown">Kontakti</a></li>
                <li class="p-5 border-t border-t-stone-500 hover:text-accent"><a href="/zina" @click="showDropdown = ! showDropdown">Ziņa administratoram</a></li>
            </ul>
        </div>
    </div>
</nav>
@endsection

@section('landing')
<div id="landing" class="p-8 bg-cover bg-center h-[100vh] flex items-center grayscale-[40%]"
    style="background-image: url('/assets/images/slide1.jpg');">
    <div class="flex-3"></div>
    <div class="flex-2 text-stone-100 text-center">
        <h2 class="float-center text-6xl p-8">Laipni lūgts <span class="text-accent">Selonijā</span></h2>
        <div class="text-stone-300">
            Studentu korporācija Selonija ir akadēmiska mūža brālība ar mērķi attītstīt un atbalstīt savas sabiedrības locekļus, audzinot tos goda, augstas pašapziņas un latvietības vērtībās, kas ir svarīgas brīvas Latvijas valsts izaugsmei un ilgtspējīgai, uz mērķi orientētai attīstībai. Selonija sastāv no Selonijas konventa un Filistru biedrības.
        </div>
    </div>
    <div class="flex-3"></div>
</div>
@endsection

@section('about')
<div x-data="{readMore: false}" id="about" class="pb-8 min-h-screen flex items-center justify-center">
    <div class="w-full sm:w-4/5 md:w-4/5 lg:w-2/3 items-center text-center">
        <img src="/assets/images/gerbonis.png" class="mx-auto mt-30" alt="gerbonis">
        <h1 class="p-5 text-4xl font-bold">Draugam, Tēvijai<br class="lg:hidden"><span class="pl-0 lg:pl-15 text-accent">Virtute et Fide</span></h1>
        <div class="pb-2">
            Selonija ir vecākā latviešu studentu korporācija Latvijā, tā ir dibināta 1880.gada 24.novembrī pie Rīgas Politehnikuma. Korporācijas dibināšanu noteica latviešu pieaugošā tieksme pēc neatkarības, pašapliecināšanās un latviskas identitātes. 19.gs. beigas iezīmē pārmaiņas sabiedrībā, latviešiem arvien vairāk apzinoties savas saknes un kopību, dibinot intelektuālas un komerciālas apvienības, ieņemot arvien augstāku stāvokli un vairojot savu turīgumu. Latviešu korporācijas dibināšana bija veids kā izrauties no līdz šim dominējošo vācbaltiešu aizbildniecības un aizspriedumiem, aizsākot pašiem savu ceļu. Selonijas dibinātāji bija Puriņu Klāva 1878.gadā dibinātā Draugu pulciņa dalībnieki, kuriem gadu vēlāk pievienojās 19 no vācu korporācijām Concordia Rigensis, Fraternitas Baltica, Rubonia un Borystenia izstājušies burši. To skaitā bija arī vairāki vācbaltieši.
        </div>
        <div x-show="readMore" class="space-y-2">
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
        <div class="p-5 cursor-pointer hover:underline text-accent" @click="readMore = ! readMore" x-text="readMore ? 'Lasīt mazāk' : 'Lasīt vairāk'">Lasīt vairāk</div>
        <div class="flex flex-col lg:flex-row justify-center items-center mt-6">
            <img src="/assets/images/cepure.png" class="mx-auto" alt="cepure">
            <img src="/assets/images/vairogs.png" class="mx-auto" alt="vairogs">
            <img src="/assets/images/auseklis.png" class="mx-auto" alt="auseklis">
            <img src="/assets/images/cirkelis.png" class="mx-auto" alt="cirkelis">
        </div>
    </div>
</div>
@endsection

@section('gallery')
<div x-data="{ filter: 'visas', selectedImage: null }" id="gallery" class="h-auto items-center">
    <h1 class="text-4xl font-bold p-5 text-center pt-30">Ieskats Selonijas dzīvē</h1>
    <div class="flex w-full justify-center space-x-6 pt-11 uppercase font-bold">
        <span :class="filter === 'visas' ? 'text-accent' : ''"
              class="hover:text-accent transition cursor-pointer"
              @click="filter = 'visas'">visas</span>
        <span :class="filter === 'seli' ? 'text-accent' : ''"
              class="hover:text-accent transition cursor-pointer"
              @click="filter = 'seli'">sēļi</span>
        <span :class="filter === 'simboli' ? 'text-accent' : ''"
              class="hover:text-accent transition cursor-pointer"
              @click="filter = 'simboli'">simboli un vēsture</span>
        <span :class="filter === 'pasakumi' ? 'text-accent' : ''"
              class="hover:text-accent transition cursor-pointer"
              @click="filter = 'pasakumi'">pasākumi</span>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 pt-8">
        @foreach ($photos->sortBy('weight') as $photo)
            <template x-if="filter === 'visas' || '{{ $photo->tag }}' === filter">
                <div class="relative group" @click=" selectedImage = '{{ $photo->image }}'">
                    <img src="{{ $photo->image }}"
                         alt="{{ $photo->title ?? 'Selonijas galerijas attēls' }}"
                         class="w-full h-full object-cover grayscale-0 group-hover:grayscale cursor-pointer transition duration-600">
                    <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition duration-600 cursor-pointer bg-neutral-800 bg-opacity-50">
                        <h1 class="text-accent text-xl font-bold text-center px-2 pb-2 py-1 rounded">{{ $photo->title }}</h1>
                        <span class="text-neutral-300 px-8 text-sm text-center">{{ $photo->description }}</span>
                    </div>
                </div>
            </template>
        @endforeach
    </div>

    <div x-show="selectedImage" class="fixed inset-0 flex items-center justify-center z-50" @click="selectedImage = null">
    <!--<div class="w-full h-full bg-bla boldck"></div>    -->
        <div class="absolute inset-0 flex items-center justify-center z-10 bg-black/85"><!-- @click.stop-->
            <div class="relative bg-white rounded-lg max-w-5xl max-h-[90vh] overflow-hidden w-11/12">
                <button @click="selectedImage = null" class="absolute top-4 right-4 bg-accent text-white px-3 py-1 rounded font-bold text-xl hover:bg-lime-700 z-10">×</button>
                <img :src="selectedImage" class="w-full h-auto object-contain max-w-[100%] max-h-[100%]" @click.stop>
            </div>
        </div>
    </div>

</div>
@endsection

@section('calendar')
    <div class="min-h-screen flex flex-col items-center justify-center pb-12">
        <h1 class="text-center font-bold text-4xl pt-30">Seko līdzi</h1>
        <div class="text-center text-xl pt-5 pb-8 text-accent font-bold">tuvākajiem pasākumiem Selonijā</div>
        <div class="max-w-7xl w-full " x-data="fullCalendar">
            <div x-ref="calendar"></div>
        </div>
    </div>
@endsection

@section('contacts')
<div id="contacts" class="flex flex-col items-center justify-center bg-neutral-800">
    <h1 class="text-center font-bold text-4xl pt-25 text-white">Amatpersonas</h1>
    <span class="text-center text-xl text-accent font-bold pt-3">Selonijas prezidijs</span>
    <div class="w-full sm:w-4/5 md:w-4/5 lg:w-2/3 pb-25">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 pl-1 pr-1 pt-8">
            @foreach ($prezidijs->sortBy('weight') as $amatpersona)
                    <div class="relative group">
                        <div>
                        <img src="{{ $amatpersona->image }}"
                            alt="{{ $amatpersona->title ?? 'Selonijas galerijas attēls' }}"
                            class="w-full h-full object-cover grayscale-0 group-hover:grayscale transition duration-600">
                        </div>
                        <span class="absolute inset-x-0 bottom-8 flex flex-col items-center justify-center font-bold text-l text-accent group-hover:hidden">{{ $amatpersona->name }}</span>
                        <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-60 transition duration-300 bg-neutral-800 bg-opacity-50">
                        <h1 class="text-accent text-xl font-bold text-center px-2 py-1 rounded pb-23 mt-auto">{{ $amatpersona->title }}</h1>
                        <!--span class="text-neutral-300 px-8 text-sm text-center">{{ $amatpersona->name }}</span-->
                        </div>
                    </div>
                
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('facebook-embed')
<div class="pt-25 pb-25 w-full">
    <h1 class="text-center text-4xl font-bold pb-8">Seko līdzi Facebook</h1>
    <div class="flex justify-center items-center">
        <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/Selonija/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Selonija/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Selonija/">Selonija</a></blockquote></div>    
    </div>
</div>
@endsection

@section('map')
<div class="bg-neutral-800">
    <div class="flex items-center justify-center">
        <div class="
                w-full sm:w-4/5 md:w-4/5 lg:w-2/3 items-center text-stone-300
                flex justify-evenly py-20 max-sm:flex-col gap-10
                ">
                <div class="flex gap-4 items-center">
                        <i data-lucide="mail" class="size-[60px] text-accent stroke-1"></i>
                        <a class="text-accent" href="mailto:prezidijs@selonija.lv">prezidijs@selonija.lv</a>
                </div>
                <div class="flex gap-4 items-center">
                        <i data-lucide="map-pin" class="size-[60px] text-accent stroke-1"></i>
                        <div>
                            <p>Stabu iela 17</p>
                            <p>Rīga</p>
                        </div>
                </div>
                <div class="flex gap-4 items-center">
                        <i data-lucide="phone" class="size-[60px] text-accent stroke-1"></i>
                        <div>Telefons: (+371) 6727-3303</div>
                </div>
        </div>
    </div>
    <div class="gmap js-gmap" id="map"></div>
    <div class="flex flex-col items-center justify-center text-stone-300">
        <div class="w-full sm:w-4/5 md:w-4/5 lg:w-2/3 items-center">
            <div class="grid grid-cols-1 lg:grid-cols-2 h-auto pt-12 pb-10">
                <div class="text-center lg:text-left flex flex-col">
                    <div class="flex gap-4 pb-2 justify-center lg:justify-start">
                        <a href="https://x.com/selonija" alt="Twitter" class="h-10 w-10 text-accent flex justify-center items-center border-2 rounded-full">
                            <i data-lucide="twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/Selonija/" alt="Facebook" class="h-10 w-10 text-accent flex justify-center items-center border-2 rounded-full">
                            <i data-lucide="facebook"></i>
                        </a>
                        <a href="http://www.pk.lv/">
                            <img src="/assets/images/pk.png" alt="PK logo" class="h-10">
                        </a>
                        <a href="http://www.spk.lv/">
                            <img src="/assets/images/spk.png" alt="SPK logo" class="h-10">
                        </a>
                    </div>
                    <a class="text-accent pb-2" href="/privacy-policy">Privacy Policy</a>
                    <a class="text-accent" href="/terms-of-service">Terms of Service</a>
                </div>
                <div class="text-center lg:text-right">
                    <div class="pb-6">
                        STUDENTU KORPORĀCIJA SELONIJA BIEDRĪBA<br>
                        Reģ. Nr.:40008181369<br>
                        LV29HABA0551036152947<br>
                        Swedbank: HABALV22<br>
                        <a class="text-accent" href="mailto:prezidijs@selonija.lv">prezidijs@selonija.lv</a>
                    </div>
                    <div>
                        KORPORĀCIJAS SELONIJA FILISTRU PALĪDZĪBAS BIEDRĪBA<br>
                        Reģ. Nr.: 50008005671<br>
                        LV34HABA0551026002874<br>
                        Swedbank: HABALV22<br>
                        <a class="text-accent" href="mailto:valde@selonija.lv">valde@selonija.lv</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-4/5 md:w-4/5 lg:w-2/3 items-center" x-data="{ currentYear: new Date().getFullYear() }">
            <div class="w-full text-center p-10 border-t border-t-stone-300"><span class="font-bold text-accent">Selonija</span> © 1880-<span x-text="currentYear"></span>. Visas tiesības aizsargātas.</div>
        </div>
    </div>
</div>

<script>
        var map;
        var image = 'img/map-label.png';
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 56.9576517,lng: 24.1256158},
            zoom: 15,
            styles: [{
              "featureType": "road",
              "stylers": [{
                "color": "#333333"
              }]
            }, {
              "featureType": "landscape",
              "stylers": [{
                "color": "#1F1F1F"
              }]
            }, {
              "featureType": "water",
              "stylers": [{
                "color": "#D4B068"
              }]
            }, {
              "elementType": "labels.text.fill",
              "stylers": [{
                "color": "#808080"
              }]
            }, {
              "featureType": "poi",
              "stylers": [{
                "color": "#232323"
              }]
            }, {
              "elementType": "labels.text",
              "stylers": [{
                "saturation": 1
              }, {
                "weight": 0.1
              }, {
                "color": "#999999"
              }]
            }]
          });

          marker = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            position: {lat: 56.9576517, lng: 24.1256158},
            icon: image,
            verticalAlign: 'bottom',
            horizontalAlign: 'center',
            backgroundColor: '#d3cfcf',
            infoWindow: {
              content: '<div class="map-info">Stabu 17, Rīga<br>Latvijas Republika</div>'
            }
          });

        }
        // $('.debase64').each(function(){
        //   var mail = window.atob($(this).data('mailto'));
        //   $(this).attr("href", "mailto:"+mail);
        //   $(this).html(mail);
        // });
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBx6QH29dnJtaXcwJui9pIIXe3RydftOAc&callback=initMap"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-62276173-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', ['UA','62276173','1'].join('-'));
    </script>
@endsection

@section('tester')
<div class="h-[100vh]">
    <div>testetsetst</div>
</div>
@endsection