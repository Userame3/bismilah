<!-- component -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table id="data-menu" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Menu
                </th>
                <th scope="col" class="px-6 py-3">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3">
                    Deskripsi
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menu as $p)
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $i = isset($i) ? ++$i : ($i = 1) }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $p->nama_menu }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $p->kategori }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $p->deskripsi }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $p->harga }}
                    </td>
                    <td class="px-6 py-4 ">
                        <a class="fa-solid fa-pen-to-square"></a>
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
