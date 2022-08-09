<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ubah Profil') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden drop-shadow-md sm:rounded-lg">
                <div class="px-12 py-10 bg-red-100 ">
                    <h2 class="text-2xl font-semibold pb-5">Ubah Profil</h2>
                    <form method="POST" action="{{ url('user/'.$user->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="w-auto flex flex-col mb-3">
                            <label class="pb-1" for="name">Nama</label>
                            <input class="bg-white overflow-hidden drop-shadow-md sm:rounded-lg border border-gray-200 "
                                type="text" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="w-auto flex flex-col mb-3">
                            <label class="pb-1" for="name">Email</label>
                            <input class="bg-white overflow-hidden drop-shadow-md sm:rounded-lg border border-gray-200 "
                                type="email" name="email" value="{{ $user->email }}" disabled>
                        </div>
                        <button type="submit" class="mt-5 py-2 px-5 bg-green-500 sm:rounded-md text-white">Save profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>