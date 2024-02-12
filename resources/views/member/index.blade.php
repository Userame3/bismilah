<html>
<!-- component -->
@extends('templates.layout')

<body>
    <div class="flex w-full bg-gray-800 " x-data="{ openMenu: 0 }">
        <!--Start SideBar-->
        @include('templates.sidebar')

        <!-- End Sidebar -->
        <div class="flex flex-col flex-1 w-full">
            <!--Start Topbar -->
            <!--End Topbar -->
            <main class="relative z-0 flex-1 pb-0 px-6 bg-white">
                <div class="grid  mt-4 ">
                    <!-- Start Content-->
                    <div class="mb-2">
                        <p class="text-lg font-semibold text-gray-400">Invoices</p>
                    </div>
                    <div class="grid grid-cols-12 gap-6 border-b-2 pb-5">
                        <div class="col-span-12 sm:col-span-12 md:col-span-8 lg:col-span-8 xxl:col-span-8">
                            <div
                                class="grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 mt-3">
                                <div class="p-4">
                                    <p class="text-xl font-bold">Data Member</p>
                                </div>
                                <div class="p-4">
                                    <!-- Modal toggle -->
                                    <button id="Modal" data-modal-target="ModalMember"
                                        data-modal-toggle="ModalMember" type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Add Member
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('member.data')
                    <!-- End Content-->
                </div>
            </main>
            @include('templates.footer')
        </div>
    </div>
    @include('member.form')

    <script>
        $(document).ready(function() {
            $('#data-member').DataTable();
        });
        var $j = jQuery.noConflict();

        $j(document).ready(function() {
            $j('#data-member').DataTable();
        });
    </script>

</body>

</html>
