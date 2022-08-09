<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog\'s Manager') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg drop-shadow-lg">
                <div class="flex flex-col px-8 py-6">
                    <div class="px-3 py-3.5">
                        <a href="/blog/create" class="bg-blue-500 hover:bg-blue-600 rounded-lg py-2 px-3.5 text-white">+ Tambah Blog</a>
                    </div>
                    <div class="px-3.5 py-5">
                        <h1 class="text-4xl mb-1">Blog Kamu</h1>
                        <div class="mt-5">
                            @foreach ($users as $user)
                            @if ($user->name === Auth::user()->name)
                            @foreach ($user->blogs as $blog)
                                    <div class="col-span-4 shadow-md rounded-md">
                                        <div class="h-36 mt-5 px-7 pt-8 bg-white relative">
                                            <h1 class="text-2xl">{{ $blog->title }}</h1>
                                            <div class="absolute bottom-3 left-6 flex flex-row items-center">
                                                <div class="flex flex-row">
                                                    <div class="update-btn mt-2 mr-3">
                                                        <a href="/blog/{{ $blog->id }}/edit" class="bg-blue-500 hover:bg-blue-600 text-white rounded-md px-4 py-2">Ubah</a>
                                                    </div>
                                                    <div class="delete-btn">
                                                        <form action="blog/{{ $blog->id }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button class="bg-red-500 hover:bg-red-600 text-white rounded-md px-4 py-2" type="submit">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>