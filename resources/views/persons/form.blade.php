<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lapor</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('images/report.png') }}">

</head>
<body>
    <nav class="md:px-[60px] md:py-[15px] ">
        <div class="flex justify-between">
            <a href="{{ route('person.index') }}"><img class="w-[40px]" src="{{ asset('images/report.png') }}" alt=""></a>

            <a class="font-[500] text-[1.2rem]" href="{{ route('person.index') }}">SafeReport</a>


        </div>

    </nav>
    <section class="md:mx-[60px] md:py-[20px]">
        <div class="">
            <h1 class="font-[500] text-center text-[3.4rem] my-[20px]">Mari Berterus terang</h1>
            <div class="grid-cols-6 grid my-[30px]">
                <div class="col-span-2">

                </div>
                <div class="col-span-1 ">
                    <ul class="space-y-[10px]">
                        <li>✓ Data pribadi anda aman</li>
                        <li>✓ 20.000 > Pengadu</li>
                    </ul>
                </div>
                <div class="col-span-1">
                    <ul class="space-y-[10px]">
                        <li>✓ Respon Cepat</li>
                        <li>✓ Tim terdedikasi</li>
                    </ul>


                </div>
                <div class="col-span-2"></div>
            </div>
            <div class="grid-cols-4 grid">

                <div class="col-span-1">

                </div>
                <div class="col-span-2 m-[10px] p-[30px] rounded-md text-black  my-[20px] bg-[#ebe7e1] ">
                    <form class="" method="post" action="{{ route('person.store') }}">
                        @csrf
                        @method ('post')
                        <div class="py-[10px] relative">
                            <label class="font-[400] text-[1rem] t" for="name">Nama :</label><br>
                            <input class="px-[40px] my-[5px] rounded-md py-[8px] w-full" type="text" name="name" placeholder="Masukan nama anda" />

                        </div>
                        <div class="py-[10px] relative">
                            <label class="font-[400] text-[1rem]" for="name">Email :</label><br>
                            <input class="px-[40px] my-[5px] rounded-md py-[8px] w-full" type="text" name="email" placeholder="Masukan Email anda" />
                        </div>


                       <div class="py-[10px]  relative">
                        <label class="font-[400] text-[1rem]" for="name">Deskripsi Pelecehan :</label><br>
                        <textarea class="h-full  min-h-[100px] w-full resize-none rounded-[7px] border border- bg-white px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 my-[5px]" name="description" id="" cols="30" rows="10"> </textarea>
                       </div>
                       <div>
                          <input class="px-[40px] py-[10px] my-[10px] bg-black rounded-3xl text-white" type="submit" value="Kirim" />
                       </div>

                    </form>




                </div>
                <div class="col-span-1">

                </div>
            </div>


        </div>
    </section>

</body>
</html>
