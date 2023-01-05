<x-app>
    <div class="w-full ">
        @if (session()->has('message'))
            <div class="flex bg-green-200 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <div>
                    <span class="font-medium">Sukses</span> {{ session()->get('message') }}
                </div>
            </div>
        @endif
        <div class="max-w-2xl  mx-auto bg-gray-200 rounded-lg p-16">

            <form action="{{ route('create.student') }}" method="POST">
                @csrf
                <div class="grid gap-6 mb-6 lg:grid-cols-2">
                    <div>
                        <label for="nama_depan" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Depan</label>
                        <input type="text" id="nama_depan" name="nama_depan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="John">
                        @error('nama_depan')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="nama_belakang" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                            Belakang</label>
                        <input type="text" id="nama_belakang" name="nama_belakang"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="Doe">
                    </div>
                    <div>
                        <label for="npm" class="block mb-2 text-sm font-medium text-gray-900 ">NPM</label>
                        <input type="text" id="npm" name="npm"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="">
                    </div>
                    <div>
                        <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900 ">Nomer Telpon</label>
                        <input type="tel" id="no_telp" name="no_telp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="123-45-678">
                    </div>
                    <div>
                        <label for="jenjang_studi" class="block mb-2 text-sm font-medium text-gray-900 ">jenjang
                            studi</label>
                        <select id="jenjang_studi" name="jenjang_studi"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">Pilih Jenjang
                            </option>
                            <option value="S1">S1</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                        </select>
                    </div>
                    <div>
                        <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 ">Semester</label>
                        <select id="semester" name="semester"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">Pilihan Semester
                            </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>

                    </div>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email
                        address</label>
                    <input type="email" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="john.doe@company.com">
                </div>


                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
            </form>
        </div>
    </div>
</x-app>
