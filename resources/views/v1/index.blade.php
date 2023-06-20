<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Wildan LH | CRUD Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class=" h-screen flex justify-center items-center">
        <div class="container mx-auto lg:px-96">
            <div class="shadow-lg p-10 rounded">
                <div class="flex justify-between mb-5">
                    <a href="/" class="relative hover:text-[#007AFF] hover:duration-300 hover:ease-in-out before:absolute before:left-0 before:bottom-0 before:-z-10 before:h-0.5 before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-['']  before:hover:scale-x-100">Beranda</a>
                    <a href="/v1/create" class="relative hover:text-[#007AFF] hover:duration-300 hover:ease-in-out before:absolute before:left-0 before:bottom-0 before:-z-10 before:h-0.5 before:w-full before:origin-top-left before:scale-x-0 before:bg-[#007AFF] before:transition-transform before:duration-300 before:content-['']  before:hover:scale-x-100">Tambah Produk</a>
                </div>
                <hr>
                <div class="flex justify-between">
                    <h2 class="text-2xl font-bold justify-start mt-5">Tabel Produk &#x1F4E6;</h2><br />
                    @if(session('success'))
                    <div class="text-green-500 font-medium mt-5">
                        <p>{{ session('success') }}</p>
                    </div>
                    @endif
                </div>

                <div class="relative overflow-x-auto shadow-md rounded-lg mt-5">
                    <table class="w-full text-sm text-left text-black ">
                        <thead class="text-base text-white uppercase bg-blue-600">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                                <th scope="col" class="px-6 py-3">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td class="px-6 py-4">{{ $product['id'] }}</td>
                                <td class="px-6 py-4">{{ $product['name'] }}</td>
                                <td class="px-6 py-4">{{ $product['price'] }}</td>
                                <td class="px-6 py-4"><a href="{{ route('v1.edit', $product['id']) }}" class="text-blue-500">Ubah</a></td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('v1.destroy', $product['id']) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-500 font-medium py-2 px-4 relative border border-red-500 rounded bg-transparent transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:w-full before:origin-top-left before:scale-x-0 before:bg-red-500 before:transition-transform before:duration-300 before:content-[''] hover:text-white before:hover:scale-x-100" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>