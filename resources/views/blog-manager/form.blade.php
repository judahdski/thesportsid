<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog form') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden drop-shadow-md sm:rounded-lg">
                <div class="mt-5 md:mt-0 md:col-span-2 pt-5">
                    <a href="/blog" class="ml-3 px-3 py-3 text-red-500">Back..</a>

                    @if ($mode == 'create')
                    <form action="{{ url('/blog') }}" method="POST">
                        @csrf
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">

                                    @foreach ($users as $user)
                                        @if ($user->name === Auth::user()->name)
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        @endif
                                    @endforeach

                                    <div class="col-span-6">
                                        <label for="blog_title"
                                            class="block text-sm font-medium text-gray-700">Blog Title / Judul Blog</label>
                                        <input type="text" name="title" id="blog_title" placeholder="Masukan judul.."
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-2">
                                        <label for="read_time"
                                            class="block text-sm font-medium text-gray-700">Read time / Waktu baca</label>
                                        <input type="text" name="read_time" id="read_time" placeholder="Estimasi waktu baca.."
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="category"
                                            class="block text-sm font-medium text-gray-700">Sport Category / Kategori Olahraga</label>
                                        <select id="category" name="category"
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="0">-- Please Select --</option>
                                            @foreach ($categories as $c)
                                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="excerpt" class="block text-sm font-medium text-gray-700">
                                            Excerpt / Kutipan 
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="excerpt" name="excerpt" rows="3"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                                placeholder="Kutipan singkat dari blog.."></textarea>
                                        </div>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="body_blog" class="block text-sm font-medium text-gray-700">
                                            Blog Content / Isi blog (Harap masukan tag HTML jika diperlukan)
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="body_blog" name="body_blog" rows="6"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                                placeholder="Masukan isi keseluruhan blog.."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Buat
                                </button>
                            </div>
                        </div>
                    </form>
                    @else
                    <form action="/blog/{{ $blog->id }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">

                                    <div class="col-span-6">
                                        <label for="blog_title"
                                            class="block text-sm font-medium text-gray-700">Blog Title / Judul Blog</label>
                                        <input type="text" name="title" id="blog_title" value="{{ $blog->title }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-2">
                                        <label for="read_time"
                                            class="block text-sm font-medium text-gray-700">Read time / Waktu baca</label>
                                        <input type="text" name="read_time" id="read_time" value="{{ $blog->read_time }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="category"
                                            class="block text-sm font-medium text-gray-700">Sport Category / Kategori Olahraga</label>
                                        <select id="category" name="category"
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="0">-- Please Select --</option>
                                            @foreach ($categories as $c)
                                                <option value="{{ $c->id }}" {{ ($blog->category->name == $c->name) ? 'selected' : '' }}>{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="excerpt" class="block text-sm font-medium text-gray-700">
                                            Excerpt / Kutipan
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="excerpt" name="excerpt" rows="3"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                                placeholder="Kutipan singkat dari blog..">{{ $blog->excerpt }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="body_blog" class="block text-sm font-medium text-gray-700">
                                            Blog Content / Isi blog (Harap masukan tag HTML jika diperlukan)
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="body_blog" name="body_blog" rows="5"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                                placeholder="Please fill your blog here">{{ $blog->body }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Ubah
                                </button>
                            </div>
                        </div>
                    </form>
                    @endif
                    


                </div>
            </div>
        </div>
    </div>

</x-app-layout>