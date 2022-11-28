@extends('template.main')

@section('content')
     <section class="container welcome mx-auto px-3 max-w-md flex h-[100vh] justify-evenly md:max-w-full md:flex-wrap-reverse lg:flex-nowrap lg:flex-row-reverse">

        <div class="m-auto text-center text-gray-800 lg:text-left md:m-0 md:my-auto md:max-w-lg lg:translate-y-0">
                <span data-aos="fade-down font-medium">Periksa</span>
                <h1 class="text-4xl font-semibold lg:text-left md:text-5xl lg:text-4xl">Yuk Cek <span class="text-sky-500">Berat Badan</span> mu Sekarang!</h1>

                @if (session('nama'))
                <div class="flex flex-col items-center mt-4">
                    <div class="bg-white shadow-lg rounded-xl">
                        <div class="flex flex-col items-center p-9">
                            <h1 class="text-2xl font-medium text-slate-800">Hasil</h1>
                            <p class="text-lg text-slate-800">{{ session('nama') }}, Berat Badanmu {{ session('status') }}</p>
                            <a href="/" class="w-28 bg-sky-500 mt-4 shadow-lg text-white p-3 rounded-xl"><i class="bi bi-arrow-clockwise"></i> Refresh</a>
                        </div>
                    </div>
                </div>
                @else
                <form action="/proses" method="POST" class="mt-4">
                    @csrf
                    <div class="flex flex-col text-left">
                        <label for="nama" class="text-lg font-medium text-slate-800 mt-2">Nama</label>
                        <input type="text" name="nama" id="nama" class="border-2 border-sky-500 rounded-md p-2" required autocomplete="off" autofocus>

                        <label for="tinggi" class="text-lg font-medium text-slate-800 mt-2">Tinggi Badan</label>
                        <input type="number" name="tinggi" id="tinggi" class="border-2 border-sky-500 rounded-md p-2" required autocomplete="off">

                        <label for="berat" class="text-lg font-medium text-slate-800 mt-2">Berat Badan</label>
                        <input type="number" name="berat" id="berat" class="border-2 border-sky-600 rounded-md p-2" required autocomplete="off">
                    </div>
                    <button name="tombol" class="align-center mt-3 py-2 px-3 bg-blue-500 shadow-lg rounded-full text-white">check <i class="bi bi-arrow-right-short"></i></button>
                </form>
                @endif

                <div class="social-media flex gap-4 mt-4 justify-center lg:justify-start">
                    <a href="www.linkedin.com/in/muhammad-erlangga-1b72801b1" target="_blank" class="sm:text-xl text-lg text-blue-600"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.instagram.com/muhammaderlangga99/" target="_blank" class="sm:text-xl text-lg text-red-600"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.github.com/muhammaderlangga99/" target="_blank" class="sm:text-xl text-lg text-gray-600"><i class="bi bi-github"></i></a>
                    <a href="" target="_blank" class="sm:text-xl text-lg text-blue-500"><i class="bi bi-twitter"></i></a>
                </div>

                {{-- licence --}}
                <div class="mt-4 text-center text-gray-500 text-xs">
                    <p>© 2022 <a href="https://muhammaderlangga99.github.io">Muhamad Erlangga</a></p>
                </div>
            </div>

            <img src="{{ asset('img/Coaches-pana.svg') }}" alt="web dev" class="hidden max-w-md md:inline-block md:max-w-lg lg:max-w-lg">
     </section>
@endsection