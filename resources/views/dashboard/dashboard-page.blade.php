<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
    <div class="py-5">
        <a href="{{ route('home') }}" class="cursor-pointer">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-6 py-8 bg-white border-b bg-red-500 text-center text-white font-semibold">
                        Klik di sini untuk pergi ke beranda!
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden drop-shadow-md sm:rounded-lg">
                <div class="px-10 py-8 border-gray-200">
                    <h2 class="text-2xl font-semibold pb-5">Masukan</h2>

                    <form action="{{ url('/feedback') }}" method="POST">
                        @csrf
                        <div class="w-96 flex flex-col pb-3">
                            <label class="text-gray-600" for="name">Nama</label>
                            <input class="bg-white overflow-hidden drop-shadow-md sm:rounded-lg border border-gray-200 " type="text" name="author_name" placeholder="Siapa kamu?">
                        </div>
                        
                        <div class="flex flex-col pt-3">
                            <label class="text-gray-600" for="name">Ulasan</label>
                            <textarea class="bg-white overflow-hidden drop-shadow-md sm:rounded-lg border border-gray-200" name="comment" cols="30" placeholder="Apa pendapatmu tentang website ini?"></textarea>
                        </div>

                        <button type="submit" class="mt-5 py-2 px-5 bg-green-500 sm:rounded-md text-white">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>