
{{-- @section('title', 'Halaman resmi IK2T - KP Tanjuang') --}}
{{-- @section('description', 'Halaman resmi IK2T Kampuang tanjuang, IV koto Aur Malintang. kab Padang pariaman.') --}}
{{-- @section('keywords', 'sharing, sharing text, text, sharing photo, photo,') --}}

@push('styles')
{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> --}}
<style>
        /* ----------------------------------------------
        * Generated by Animista
        * w: http://animista.net, t: @cssanimista
        * ---------------------------------------------- */

    .slide-in-bottom{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) both}
    .slide-in-bottom-h1{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .5s both}
    .slide-in-bottom-subtitle{-webkit-animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both;animation:slide-in-bottom .5s cubic-bezier(.25,.46,.45,.94) .75s both}
    .fade-in{-webkit-animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both;animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) 1s both}
    .bounce-top-icons{-webkit-animation:bounce-top .9s 1s both;animation:bounce-top .9s 1s both}

    @-webkit-keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}
    @-webkit-keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}@keyframes bounce-top{0%{-webkit-transform:translateY(-45px);transform:translateY(-45px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:1}24%{opacity:1}40%{-webkit-transform:translateY(-24px);transform:translateY(-24px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}65%{-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}82%{-webkit-transform:translateY(-6px);transform:translateY(-6px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}93%{-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}25%,55%,75%,87%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}}
    @-webkit-keyframes fade-in{0%{opacity:0}100%{opacity:1}}@keyframes fade-in{0%{opacity:0}100%{opacity:1}}

</style>
@endpush

<x-website-layout>
    <div class="bg-right bg-cover" style="background-image:url('https://raw.githubusercontent.com/tailwindtoolbox/App-Landing-Page/master/bg.svg');">

        <!--Main-->
        <div class="container flex flex-col flex-wrap items-center max-w-screen-xl min-h-screen px-2 pt-10 pb-20 mx-auto xl:pt-28 lg:px-6 md:flex-row">

            <!--Left Col-->
            <div class="flex flex-col justify-center w-full overflow-y-hidden lg:w-3/6 xl:w-2/5 lg:items-start">
                <h1 class="my-4 text-3xl font-bold leading-tight text-center text-red-700 uppercase md:text-5xl lg:text-left slide-in-bottom-h1">Ikatan keluarga Kampung Tanjung</h1>
                <p class="mb-8 text-base italic leading-normal text-center text-gray-500 md:text-2xl lg:text-left slide-in-bottom-subtitle">
                    Duduk surang basampik-sampik <br>
                    Duduk basamo balapang-lapang <br>
                    Duduk baiyo tagak bamolah <br>
                    Bulek aie dek pambuluah <br>
                    Bulek kato dek mufakat <br>
                    Tambilang samo tatagak Jahe samo bahelo. <br>
                </p>

                {{-- <p class="pb-8 font-bold text-center text-red-400 lg:pb-6 md:text-left fade-in">Dunsanak belum terdaftar ?</p> --}}
                <div class="flex justify-center w-full pb-24 lg:justify-start lg:pb-0 fade-in">
                    {{-- <img src="https://raw.githubusercontent.com/tailwindtoolbox/App-Landing-Page/master/App Store.svg" class="h-12 pr-4 bounce-top-icons"> --}}
                    {{-- <img src="https://raw.githubusercontent.com/tailwindtoolbox/App-Landing-Page/master/Play Store.svg" class="h-12 bounce-top-icons"> --}}
                    <a href="{{route('members.register')}}" class="flex-col px-6 py-4 m-2 text-white bg-yellow-600 md:flex-row ring ring-yellow-600 hover:ring ring-offset-4 focus:outline-none bounce-top-icons">
                        <div>Dunsanak belum terdaftar ?</div>
                        <div class="font-semibold">Daftar Sekarang!</div>
                    </a>
                </div>
            </div>

            <!--Right Col-->
            <div class="w-full py-6 lg:w-3/6 xl:w-3/5">
                {{-- <img class="w-4/6 mx-auto lg:mr-0 slide-in-bottom" src="https://raw.githubusercontent.com/tailwindtoolbox/App-Landing-Page/master/devices.svg"> --}}
                {{-- <img class="w-4/6 mx-auto lg:mr-0 slide-in-bottom" src="{{url('/img/p.png')}}"> --}}
                <div class="mx-auto lg:w-4/6 lg:mr-0 slide-in-bottom">
                    <div class="flex mb-5">
                        <div class="w-1/2 px-1">
                            <a href="#" class="block p-5 mb-2 overflow-hidden transition-all duration-300 transform scale-100 rounded hover:scale-95" style="background: url({{url('/img/p4.jpg')}}) center; background-size: cover;">
                                <div class="h-24"></div>
                                <h3 class="text-lg font-bold leading-tight text-white">Congrats</h3>
                            </a>
                            <a href="#" class="block p-5 mb-2 overflow-hidden transition-all duration-300 transform scale-100 rounded hover:scale-95" style="background: url({{url('/img/p5.jpg')}}) center; background-size: cover;">
                                <div class="h-32"></div>
                                <h3 class="text-lg font-bold leading-tight text-white">Barakallah..</h3>
                            </a>
                        </div>
                        <div class="w-1/2 px-1">
                            <a href="#" class="block p-5 mb-2 overflow-hidden transition-all duration-300 transform scale-100 rounded hover:scale-95" style="background: url({{url('/img/p3.jpg')}}) center; background-size: cover;">
                                <div class="h-32"></div>
                                <h3 class="text-lg font-bold leading-tight text-white">Pulang Basamo</h3>
                            </a>
                            <a href="#" class="block p-5 mb-2 overflow-hidden transition-all duration-300 transform scale-100 rounded hover:scale-95" style="background: url({{url('/img/p6.jpg')}}) center; background-size: cover;">
                                <div class="h-28"></div>
                                <h3 class="text-lg font-bold leading-tight text-white">Makan basamo</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid max-w-screen-xl grid-cols-1 gap-2 px-2 pt-4 pb-20 mx-auto overflow-y-auto md:grid-cols-2 lg:grid-cols-4 lg:px-6">
            <div class="">
                <a href="#" class="relative block p-5 transition-all duration-300 transform scale-100 rounded-lg hover:scale-95"
                    style="background: url({{url('/img/p1.jpg')}}) center; background-size: cover;"
                >
                    <div class="h-48"></div>
                    <h2 class="pr-5 text-2xl font-bold leading-tight text-white">Pelantikan pengurus</h2>
                </a>
            </div>
            <div class="">
                <a href="#" class="relative block p-5 transition-all duration-300 transform scale-100 rounded-lg hover:scale-95"
                    style="background: url({{url('/img/p7.jpg')}}) center; background-size: cover;"
                >
                    <div class="h-48"></div>
                    <h2 class="pr-5 text-2xl font-bold leading-tight text-white">Bandung on the way</h2>
                </a>
            </div>

            <div class="">
                <a href="#" class="relative block p-5 transition-all duration-300 transform scale-100 rounded-lg hover:scale-95"
                    style="background: url({{url('/img/p8.jpg')}}) center; background-size: cover;"
                >
                    <div class="h-48"></div>
                    <h2 class="pr-5 text-2xl font-bold leading-tight text-white">IK2T on Futsal</h2>
                </a>
            </div>

            <div class="">
                <a href="#" class="relative block p-5 transition-all duration-300 transform scale-100 rounded-lg hover:scale-95"
                    style="background: url({{url('/img/p2.jpg')}}) center; background-size: cover;"
                >
                    <div class="h-48"></div>
                    <h2 class="pr-5 text-2xl font-bold leading-tight text-white">Tarian anak nagari</h2>
                </a>
            </div>
        </div>
    </div>
</x-website-layout>
