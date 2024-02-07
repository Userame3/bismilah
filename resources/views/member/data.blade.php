<!-- component -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table id="datatable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <caption
            class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            Our products
            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products
                designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and
                more.</p>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Member
                </th>
                <th scope="col" class="px-6 py-3">
                    Point
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($member as $p)
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $i = isset($i) ? ++$i : ($i = 1) }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $p->nama }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $p->point }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $p->alamat }}
                    </td>
                    <td class="px-6 py-4 ">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- <script>
    let data = ;
    $(document).ready(() => {
        $('#datatable').DataTable({
            data: data,
            columns: [{
                    data: 'id',
                    title: "awhfia"
                },
                {
                    data: 'nama',
                    title: "ANJING"
                },
                {
                    data: 'action',
                    title: "AN ahhhh"
                }
            ]
        });
    })
</script> --}}
