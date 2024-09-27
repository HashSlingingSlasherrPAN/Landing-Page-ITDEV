<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SafeReport</title>
    <link rel="icon" href="{{ asset('images/report.png') }}">
    @vite('resources/css/app.css')
    

</head>
<body>
    <nav class="md:px-[60px] sticky bg-white z-[9] top-0 md:py-[15px] ">
        <div class="flex justify-between">
            <a href=""><img class="w-[40px]" src="{{ asset('images/report.png') }}" alt=""></a>

              <a class="font-[500] text-[1.2rem]" href="{{ route('person.index') }}">SafeReport</a>
              <a class="font-[500] text-[1rem] px-[10px] py-[5px] rounded-full hover:bg-transparent hover:text-black hover:border-[2px] hover:border-[black]  bg-black text-white" href="{{ route('person.form') }}">Mulai Laporkan!</a>

        </div>

    </nav>
    <section class="md:mx-[60px] px-[290px] text-center md:my-[50px]">
        <p><a class="font-[400] text-[0.7rem] px-[9px] py-[2px] rounded-full bg-slate-200" href="">bantu komunitas</a></p>
        <h1 class="font-[500] text-[3.9rem]">Laporkan Segala Tindak Pelecehan</h1>
        <img class="w-[160px] hidden md:block left-[90px] opacity-[50%] top-[190px] absolute" src="{{ asset('images/scroll.png') }}" alt="">
        <p class="font-[400] my-[30px] text-[1.4rem]"> Kami menghargai keberanian Anda.Platform ini membantu Anda melaporkan tindakan pelecehan dengan mudah dan aman. Setiap laporan membawa kita lebih dekat ke dunia yang lebih baik.</p>
        <a class="font-[400] text-[1.5rem]  px-[20px] py-[9px] bg-transparent  hover:border-[2px] hover:font-[500] border-[1px] border-[black] rounded-full" href="">learn more  ⭣</a>
        <a class="font-[500] text-[1.5rem] px-[25px] mx-[20px] py-[10px] rounded-full hover:bg-transparent hover:text-black hover:border-[2px] hover:border-[black]  bg-black text-white" href="{{ route('person.form') }}">Mulai Laporkan!</a>

    </section>
    <section class="mx-[170px] my-[40px]">
        <div class="grid-cols-3 grid-rows-2 gap-[15px] grid">
            <div class="col-span-1 row-span-1 bg-gradient-to-br shadow-md  from-[#3647f6] p-[40px] to-[#4760f5] rounded-md   ">
                <p><a class="font-[400] text-[0.7rem] text-white px-[9px] py-[2px] rounded-full bg-transparent border-[1px] border-white " href="">Dapatkan Konseling Psikologis</a></p>

                <p class="font-[500] text-[3rem] text-white">❝</p>
                <p class="font-[400] text-[1.2rem] text-white">Trauma akibat kekerasan seksual atau pelecehan bisa sangat mendalam. Menghubungi psikolog atau terapis dapat membantu dalam proses penyembuhan emosional dan mental.</p>

            </div>
            <div class="col-span-2 row-span-1">
                <div class="grid-cols-2  bg-gradient-to-r from-[#dce02d] rounded-md to-[#ecfa68] gap-[0px] grid">
                    <div class="col-span-1 m-[10px] rounded-md">
                        <img class="object-cover rounded-md" src="{{ asset('images/no.jpg') }}" alt="">

                    </div>
                    <div class="col-span-1 m-[40px]">
                        <p><a class="font-[400] text-[0.7rem] px-[9px] py-[2px] rounded-full bg-transparent border-[1px] border-black" href="">Cari Tempat Aman</a></p>
                        <p class="font-[500] text-[2.5rem]">⥮</p>
                        <p class="font-[400] text-[1.2rem]">Segera tinggalkan lokasi kejadian jika memungkinkan dan cari tempat yang aman. Keamanan fisik adalah prioritas utama.</p>
                    </div>

                </div>

            </div>
            <div class="col-span-3  row-span-2 bg-gradient-to-br from-[#c74c5c] to-[#fbe0e3] rounded-md">
                <div class=" grid grid-cols-3 ">
                    <div class="col-span-1 p-[10px] ">
                        <img class="rounded-md" src="{{ ('images/women.jpg') }}" alt="">
                    </div>
                    <div class="col-span-2 m-[40px]">
                        <p><a class="font-[400] text-[0.7rem] px-[9px] py-[2px] text-white rounded-full bg-transparent border-[1px] border-white" href="">Quote</a></p>
                        <p class="font-[300] text-white text-[4.5rem]">↴</p>

                        <p class="font-[400] text-white justify-center items-center text-[1.4rem]">"By speaking up, you not only stand for yourself, but for countless others who may suffer in silence."</p>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <footer class="md:px-[60px] grid md:grid-cols-6 md:grid-rows-2 md:py-[40px] bg-black   text-white ">
        <div class="col-span-4 row-span-1 ">


        </div>
        <div class="col-span-1 row-span-1">

            <p class="font-[500] text-[1.5rem]">Socials</p>
            <ul class="font-[400] text-[1rem]">
                <li>insta</li>
                <li>github</li>
            </ul>
        </div>
        <div class="col-span-1 row-span-1">
            <p class="font-[500] text-[1.5rem]">team</p>
            <ul class="font-[400] text-[1rem]">
                <li><a href="">Muhammad Nofan R</a></li>
                <li><a href="">Arya Aji Pamungkas</a></li>
                <li><a href="">Arya Aji Pamungkas</a></li>
            </ul>

        </div>

    </footer>
    @if(session('success'))
    <div class="alert alert-success">
        <strong>Success!</strong> {{ session('success') }}
    </div>
    @endif

</body>
</html>
