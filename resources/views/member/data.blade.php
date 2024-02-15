<!-- component -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table id="data-member"
        class="table table-hover w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                    <td class="px-6 py-4 text-lg">
                        <button class="btn font-large text-green-500 dark:text-blue-500" data-modal-target="ModalMember"
                            data-modal-toggle="ModalMember" title="edit" data-mode="edit"
                            data-id="{{ $p->id }}" data-nama="{{ $p->nama }}"
                            data-code_member="{{ $p->code_member }}" data-alamat="{{ $p->alamat }}">
                            &nbsp;<i class="fas fa-edit"></i></button>
                        <button class="font-large text-red-600 dark:text-blue-500" title="Delete">
                            &nbsp;<i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
