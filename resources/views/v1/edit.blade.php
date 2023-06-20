<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Wildan LH | CRUD Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="h-screen flex justify-center items-center">
        <div class="container mx-auto lg:px-96">
            <div class="shadow-lg p-10 rounded">
                <div class="flex justify-between mb-5">
                    <a href="/v1" class="relative hover:text-[#007AFF] hover:duration-300 hover:ease-in-out before:absolute before:left-0 before:bottom-0 before:-z-10 before:h-0.5 before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-['']  before:hover:scale-x-100">Kembali</a>
                </div>
                <hr>
                <h2 class="text-2xl font-bold justify-start mt-5">Ubah Produk &#128260;</h2><br />

                <form method="post" action="{{ route('v1.update', $id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="grid grid-cols-1 gap-5">
                        <div class="relative">
                            <input id="name" name="name" type="text" name="name" value="{{ $product->name }}" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" placeholder="John Doe" />
                            <label for="name" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                Nama Produk
                            </label>
                        </div>

                        <div class="relative">
                            <input id="price" name="price" type="text" name="price" value="{{ $product->price }}" class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-[#007AFF]" placeholder="John Doe" />
                            <label for="price" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                Harga Produk
                            </label>
                        </div>
                    </div>
                    @if ($errors->any())
                    <div class="text-red-500 font-medium">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <button type="submit" class="text-[#007AFF] mt-10 font-medium py-2 px-4 relative border border-[#007AFF] rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100">
                        Update Produk
                    </button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>