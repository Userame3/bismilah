<!-- component -->
<div class="flex min-h-full w-full">
  <div class="overflow-x-auto w-full">
    <table class="min-w-full w-full bg-white shadow-md rounded-xl">
      <thead>
        <tr class="bg-blue-gray-100 text-gray-700">
          <th class="py-3 px-4 text-left">No</th>
          <th class="py-3 px-4 text-left">Nama Member</th>
          <th class="py-3 px-4 text-left">Code Member</th>
          <th class="py-3 px-4 text-left">Alamat</th>
          <th class="py-3 px-4 text-left">Point</th>
          <th class="py-3 px-4 text-left">Action</th>
        </tr>
      </thead>
      <tbody class="text-blue-gray-900">
        @foreach ($member as $p )
            <tr class="border-b border-blue-gray-200">
              <td class="py-3 px-4">{{$i = (isset($i)?++$i:$i = 1)}}</td>
              <td class="py-3 px-4">{{$p -> nama}}</td>
              <td class="py-3 px-4">{{$p -> code_member}}</td>
              <td class="py-3 px-4">{{$p -> alamat}}</td>
              <td class="py-3 px-4">{{$p -> point}}</td>
          <td class="py-3 px-4">
            <a href="#" class="font-medium text-blue-600 hover:text-blue-800">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="w-full pt-5 px-4 mb-8 mx-auto ">
      <div class="text-sm text-gray-700 py-1 text-center">
      </div>
    </div>
  </div>
</div>