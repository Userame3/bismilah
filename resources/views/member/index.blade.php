<html>
<!-- component -->
@extends('templates.layout')
<body>
    <div class="flex h-screen w-full bg-gray-800 " x-data="{openMenu:0}">
        <!--Start SideBar-->
        @include('templates.sidebar')
        
        <!-- End Sidebar -->
        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            <!--Start Topbar -->
            <!--End Topbar -->
          <main class="relative z-0 flex-1 pb-8 px-6 bg-white">
              <div class="grid pb-10  mt-4 ">
                  <!-- Start Content-->
                    <div class="mb-2">
                      <p class="text-lg font-semibold text-gray-400">Invoices</p>
                    </div>
                    <div class="grid grid-cols-12 gap-6 border-b-2 pb-5">
                      <div class="col-span-12 sm:col-span-12 md:col-span-8 lg:col-span-8 xxl:col-span-8">
                        <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 mt-3">
                           <div class="p-4">
                              <p class="text-xl font-bold">Data Member</p>
                           </div>
                           <div class="p-4">
                             <!-- Modal toggle -->
                            <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="  text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                              Create product
                            </button>
                           </div>
                        </div>
                      </div>
                    </div>
                    @include('member.data')
                  <!-- End Content-->
              </div>
          </main>
        </div>
    </div>
@include('member.form')
</body>
</html>