@extends('crud.brand-messagings.layouts.app')

@section('content')
<div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full mb-1">
        <div class="mb-4">
            <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                  <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                      <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                      Brand Messagings
                    </a>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                      <a href="#" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Pengelolaan Tentang Brand Messagings</a>
                    </div>
                  </li>
                </ol>
            </nav>
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Data Pengelolaan Tentang Brand Messagings</h1>
        </div>
        <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
            <div class="flex items-center mb-4 sm:mb-0">
                <form class="sm:pr-3" action="#" method="GET">
                    <label for="products-search" class="sr-only">Search</label>
                    <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                        <input type="text" name="email" id="products-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search for products">
                    </div>
                </form>
                <div class="flex items-center">
                    <div class="flex pl-2 space-x-1">
                        <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                            </svg>
                        </a>
                    </div>
                    <button id="selectProduct" class="ml-4 text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800" type="button" data-drawer-placement="right">
                        Pilih Checkbox
                    </button>
                </div>
            </div>
            <button id="createProductButton" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800" type="button" data-drawer-target="drawer-create-product-default" data-drawer-show="drawer-create-product-default" aria-controls="drawer-create-product-default" data-drawer-placement="right">
                Tambah Data
            </button>
        </div>
        
    </div>
</div>
<div class="flex flex-col">
    <div class="overflow-x-auto">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden shadow">
                <table id="data-table" class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600" style="width: 100%">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                Checkbox
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                No
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                Judul Brand Messagings
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                Content Brand Messagings
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                Content Footer
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="data-table-pagination" class="sticky bottom-0 right-0 w-full p-4 bg-white border-t border-gray-200 sm:flex sm:items-center sm:justify-between dark:bg-gray-800 dark:border-gray-700">
    <!-- Pagination Info and Pilih Item -->
    <div class="flex items-center justify-between w-full sm:w-auto">
        <!-- Pagination Info -->
        <div class="flex items-center">
            <!-- Previous Page Button -->
            <a href="#" id="prev-page" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <!-- Next Page Button -->
            <a href="#" id="next-page" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <!-- Showing Info -->
            <span class="ml-2 text-sm font-normal text-gray-500 dark:text-gray-400">
                Showing <span id="showing-info" class="font-semibold text-gray-900 dark:text-white"></span> of 
                <span id="total-info" class="font-semibold text-gray-900 dark:text-white"></span>
            </span>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="flex items-center mt-4 space-x-3 sm:mt-0">
        <!-- Previous Button -->
        <a href="#" id="prev-btn" class="inline-flex items-center justify-center px-3 py-2 text-sm font-medium text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            Previous
        </a>
        <!-- Next Button -->
        <a href="#" id="next-btn" class="inline-flex items-center justify-center px-3 py-2 text-sm font-medium text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            Next
        </a>
    </div>
</div>

<!-- BEGIN: Add Data -->
<div id="drawer-create-product-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Tambah Data</h5>
    <button type="button" data-drawer-dismiss="drawer-create-product-default" aria-controls="drawer-create-product-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form action="#">
        <div class="space-y-4">
            <div>
                <label for="judul-brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Brand Messagings</label>
                <input type="text" id="judul-brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-judul-brand" name="judul_brand" placeholder="Masukkan Judul Brand Messagins" required>
            </div>
            <div>
                <label for="content-brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content Brand Messagings</label>
                <textarea id="content-brand" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-content" name="content_brand" placeholder="Masukkan Content Brand Messagings" required></textarea>
            </div>
            <div>
                <label for="content-footer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content Footer</label>
                <textarea id="content-footer" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-content-footer" name="content_footer" placeholder="Masukkan Content untuk Footer" required></textarea>
            </div>
        </div>
        <div class="flex justify-center w-full pt-4 space-x-4">
            <button type="button" class="text-white w-full justify-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 btn-create">
                Tambah Data
            </button>
            <button type="button" data-drawer-dismiss="drawer-create-product-default" aria-controls="drawer-create-product-default" class="inline-flex w-full justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                Batal
            </button>
        </div>
    </form>
</div>

<!-- END: Add Data -->

<!-- BEGIN: Notification success add data-->
<div id="success-add-data-notification-content" class="flex items-center hidden p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
    <svg class="flex-shrink-0 w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <div class="ml-2 text-sm font-medium">
        Data Berhasil di Tambahkan.
        <div class="text-slate-500 mt-1 add-data-pesan-sukses"></div> <!-- Elemen pesan sukses dipindahkan ke sini -->
    </div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
        <span class="sr-only">Dismiss</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>
<!-- END: Notification success add data-->

<!-- BEGIN: Notification failed add data-->
<div id="failed-add-data-notification-content" class="flex items-center hidden p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
    <svg class="flex-shrink-0 w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <div class="ml-2 text-sm font-medium">
        Data Gagal di Tambahkan.
        <div class="text-slate-500 mt-1 add-data-pesan-gagal"></div>
    </div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
        <span class="sr-only">Dismiss</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>
<!-- END: Notification failed add data-->


<!-- BEGIN: Update Data -->
<div id="drawer-update-product-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Update Product</h5>
    <button type="button" data-drawer-dismiss="drawer-update-product-default" aria-controls="drawer-update-product-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form action="#">
        <div class="space-y-4">
            <div>
                <label for="judul-brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Brand Messagings</label>
                <input type="hidden" class="form-control update-id">
                <input type="text" id="judul-brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 update-judul-brand" name="judul_brand" placeholder="Masukkan Judul Brand Messagins" required>
            </div>
            <div>
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content Brand Messagings</label>
                <textarea id="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 update-content-brand" name="content_brand" placeholder="Masukkan Content Brand Messagings" required></textarea>
            </div>
            <div>
                <label for="content-footer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content Footer</label>
                <textarea id="content-footer" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 update-content-footer" name="content_footer" placeholder="Masukkan Content untuk Footer" required></textarea>
            </div>
        </div>
        <div class="flex justify-center w-full pt-4 space-x-4">
            <button type="button" class="w-full justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 btn-update">
                Update
            </button>
            <button type="button" data-drawer-dismiss="drawer-update-product-default" aria-controls="drawer-update-product-default" class="inline-flex w-full justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                Batal
            </button>
        </div>
    </form>
</div>
<!-- END: Update Data -->

<!-- BEGIN: Notification success update data-->
<div id="success-update-data-notification-content" class="flex items-center hidden p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
    <svg class="flex-shrink-0 w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <div class="ml-2 text-sm font-medium flex-grow">
        Data Berhasil di Ubah.
        <div class="text-slate-500 mt-1 update-data-pesan-sukses"></div>
    </div>
    <button type="button" class="ml-2 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" aria-label="Close">
        <span class="sr-only">Dismiss</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>
<!-- END: Notification success update data-->

<!-- BEGIN: Notification failed update data-->
<div id="failed-update-data-notification-content" class="flex items-center hidden p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
    <svg class="flex-shrink-0 w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <div class="ml-2 text-sm font-medium">
        Data Gagal di Ubah.
        <div class="text-slate-500 mt-1 update-data-pesan-gagal"></div>
    </div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
        <span class="sr-only">Dismiss</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>
<!-- END: Notification failed update data-->

<!-- BEGIN: Delete Data -->
<div id="drawer-delete-product-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
    <h5 id="drawer-label" class="inline-flex items-center text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Delete item</h5>
    <button type="button" data-drawer-dismiss="drawer-delete-product-default" aria-controls="drawer-delete-product-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <svg class="w-10 h-10 mt-8 mb-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <h3 class="mb-6 text-lg text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
    <div class="bottom-0 left-0 flex justify-center w-full pb-4 mt-4 space-x-4 sm:absolute sm:px-4 sm:mt-0">
        <button type="button" class="w-full justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 btn-delete">
            Delete
        </button>
        <button type="button" data-drawer-dismiss="drawer-delete-product-default" aria-controls="drawer-delete-product-default" class="inline-flex w-full justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
            <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            Batal
        </button>
    </div>
</div>
<!-- END: Delete Data -->

<!-- BEGIN: Notification success delete data-->
<div id="success-delete-data-notification-content" class="flex items-center hidden p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
    <svg class="flex-shrink-0 w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <div class="ml-2 text-sm font-medium">
        Data Berhasil di Hapus.
        <div class="text-slate-500 mt-1 delete-data-pesan-sukses"></div> <!-- Elemen pesan sukses dipindahkan ke sini -->
    </div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
        <span class="sr-only">Dismiss</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>
<!-- END: Notification success delete data-->

<!-- BEGIN: Notification failed delete data-->
<div id="failed-delete-data-notification-content" class="flex items-center hidden p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
    <svg class="flex-shrink-0 w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <div class="ml-2 text-sm font-medium">
        Data Gagal di Hapus.
        <div class="text-slate-500 mt-1 delete-data-pesan-gagal"></div>
    </div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
        <span class="sr-only">Dismiss</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>
<!-- END: Notification failed delete data-->
@endsection

<!-- BEGIN: create data -->
@push('create-data')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.js"></script>
<script>
    jQuery(document).ready(function() {
        function getCookie(name)
        {
            var cookieName = name + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var cookieArray = decodedCookie.split(';');

            for (var i = 0; i < cookieArray.length; i++)
            {
                var cookie = cookieArray[i];

                while (cookie.charAt(0) === ' ')
                {
                    cookie = cookie.substring(1);   
                }

                if (cookie.indexOf(cookieName) === 0)
                {
                    return cookie.substring(cookieName.length, cookie.length);
                }
            }
        }

        var token = getCookie('token');

        // console.log('Token: ', token);

        // BEGIN: Add-Data
        jQuery('.btn-create').click(function() {

            // show the modal
            event.preventDefault();

            // get form data
            var judul_brand = jQuery('.form-judul-brand').val();
            var content_brand = jQuery('.form-content').val();
            var content_footer = jQuery('.form-content-footer').val();

            var formData = new FormData();
            formData.append('title', judul_brand);
            formData.append('content', content_brand);
            formData.append('content_footer', content_footer);

            // kirim ke API untuk pembaruan data
            jQuery.ajax({
                url: 'http://127.0.01:8000/api/brand-messagings/add-data',
                type: 'POST',
                headers: {
                    'Authorization': 'Bearer ' + token,
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // show the modal
                    jQuery('.add-data-pesan-sukses').text(response.message);
                    Toastify({
                        node: $('#success-add-data-notification-content')
                            .clone()
                            .removeClass('hidden')[0],
                        duration: 3000,
                        newWindow: true,
                        gravity: 'top',
                        position: 'right',
                        stopOnFocus: true,
                        onClick: function() {
                            Toastify({
                                node: $('#success-add-data-notification-content').hide()
                            }).hideToast();
                        }
                    }).showToast();

                    setTimeout(function() {
                        location.reload();
                    }, 3000);
                },
                error: function(xhr, status, error) {
                    // show the modal
                    jQuery('.add-data-pesan-gagal').text(response.error);
                    Toastify({
                        node: $('#failed-add-data-notification-content')
                            .clone()
                            .removeClass('hidden')[0],
                        duration: 3000,
                        newWindow: true,
                        gravity: 'top',
                        position: 'right',
                        stopOnFocus: true,
                        onClick: function() {
                            Toastify({
                                node: $('#failed-add-data-notification-content').hide()
                            }).hideToast();
                        }
                    }).showToast();

                    setTimeout(function() {
                        location.reload();
                    }, 5000);
                }
            });
            
        });
        // END: Add-Data
    });
</script>
@endpush
<!-- END: create data -->

<!-- BEGIN: list data -->
@push('list-data')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.29.1/dist/feather.min.js"></script>
<script>
    jQuery(document).ready(function() {
        // Get Cookie
        function getCookie(name) {
            var cookieName = name + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var cookieArray = decodedCookie.split(';');

            for (var i = 0; i < cookieArray.length; i++) 
            {
                var cookie = cookieArray[i];

                while (cookie.charAt(0) === ' ') {
                    cookie = cookie.substring(1);
                }

                if (cookie.indexOf(cookieName) === 0) {
                    return cookie.substring(cookieName.length, cookie.length);
                }
            }
        }
        var token = getCookie('token');
        console.log('Token: ', token);
        
        // dark-mode data-table
        document.addEventListener('dark-mode', function() {
            const isDarkMode = document.documentElement.classList.constains('dark');
            toggleDataTablesDarkMode(isDarkMode);
        });

        // fungsi menyesuaikan data table
        function toggleDataTablesDarkMode(isDarkMode) {
            const dataTable = document.querySelector('#data-table');
            if (dataTable)
            {
                if (isDarkMode)
                {
                    dataTable.classList.add('dark-mode');
                }
                else
                {
                    dataTable.classList.remove('dark-mode');
                }
            }
        }
        // END: dark-mode data-table

        // BEGIN: get selected data checkbox
        function getSelectedCheckboxIds()
        {
            var selectedIds = [];
            $('.row-checkbox:checked').each(function() {
                selectedIds.push(parseInt($(this).val())); // memastikan ID di konversi menjadi Integer
            });

            return selectedIds;
            console.log(selectedIds);
        }

        $(document).on('change', '.row-checkbox', function() {
            $('.row-checkbox').not(this).prop('checked', false);
        });

        // BEGIN: Get Selected Data
        $('#selectProduct').on('click', function() {
            var selectedCheckboxIds = getSelectedCheckboxIds();
            // console.log('selected checkbox: ', selectedCheckboxIds);
            if (selectedCheckboxIds.length > 0)
            {
                jQuery.ajax({
                    url: 'http://127.0.0.1:8000/api/brand-messagings/update-selection',
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Content-Type': 'application/json',
                    },
                    data: JSON.stringify({
                        id: selectedCheckboxIds[0]
                    }),
                    success: function(response) {
                        alert('Data berhasil dipilih dan disimpan');
                        // location.reload();
                    },
                    error: function(xhr, status, error) {
                        alert('Data gagal dipilih, terjadi kesalahan dalam melakukan checkbox data: '+ error);
                        console.error('Error: ', error);
                    }
                });
                // console.log('IDs: ', getSelectedCheckboxIds);
            }
            else
            {
                alert('Silahkan pilih satu item');
            }

            console.log(selectedCheckboxIds);
        });
        // END: Get Selected Data

        // BEGIN: Get list Data
        var table = $('#data-table').DataTable({
            'processing': true,
            'serverSide': true,
            'ajax': {
                'url': 'http://127.0.0.1:8000/api/brand-messagings/list-data',
                'dataType': 'JSON',
                'type': 'POST',
                'headers': {
                    'Authorization': 'Bearer ' + token
                }
            },
            'columns': [
                {
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row){
                        return '<input type="checkbox" class="row-checkbox" value="' + row.id + '">';
                    },
                    orderable: false,
                },
                { data: 'id', className: 'text-center' },
                { data: 'judul_brand', className: 'text-center' },
                { data: 'content_brand', className: 'text-center' },
                { data: 'content_footer', className: 'text-center' },
                {
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row) {
                        // create action button
                        var editBtn = '<button type="button" id="updateProductButton" data-drawer-target="drawer-update-product-default" data-drawer-show="drawer-update-product-default" aria-controls="drawer-update-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 update-btn" data-id="' + data.id + '" data-judul-brand="' + data.judul_brand + '" data-content-brand="' + data.content_brand + '" data-content-footer="' + data.content_footer + '" ><svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>Update</button>';
                        var deleteBtn = '<button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900 delete-btn" data-id="' + data.id + '"><svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>Delete</button>';

                        // combine the buttons
                        var action = editBtn + ' ' + deleteBtn;
                        return action;
                    }
                }
            ],

            searching: false,
            paging: true,
            pageLength: 20, // jumlah data per halaman
            dom: 'lrtip', // menampilkan tombol previous dan next

            drawCallback: function(settings) {
                var info = table.page.info();
                
                $('#showing-info').text(info.start + 1 + '-' + info.end);
                $('#total-info').text(info.recordsTotal);

                // nonaktif previous dan next jika halaman sudah max
                $('#prev-btn').prop('disabled', info.page === 0);
                $('#next-btn').prop('disabled', info.page === info.pages - 1);
            }
        });

        // tombol previous
        $('#prev-btn').on('click', function() {
            table.page('previous').draw('page');
        });

        // tombol next
        $('#next-btn').on('click', function() {
            table.page('next').draw('page');
        });
        
        // END: Get list Data
        
    });
</script>
@endpush
<!-- END: list data -->

<!-- BEGIN: Update Data -->
@push('update-data')
<script src="https://cdn.jsdelivr.net/npm/flowbite@latest/dist/flowbite.min.js"></script>
<script>
    jQuery(document).ready(function() {

        // Get Cookie
        function getCookie(name)
        {
            var cookieName = name + '=';
            var decodedCookie = decodeURIComponent(document.cookie);
            var cookieArray = decodedCookie.split(';');

            for (var i = 0; i < cookieArray.length; i++)
            {
                var cookie = cookieArray[i];
                
                while (cookie.charAt(0) === ' ')
                {
                    cookie = cookie.substring(1);   
                }

                if (cookie.indexOf(cookieName) === 0)
                {
                    return cookie.substring(cookieName.length, cookie.length);
                }
            }
        }

        var token = getCookie('token');
        // console.log('Token Update: ', token);
        
        jQuery('#data-table').on('click', '#updateProductButton', function() {
            var id = jQuery(this).attr('data-id');
            var judul_brand = jQuery(this).attr('data-judul-brand');
            var content_brand = jQuery(this).attr('data-content-brand');
            var content_footer = jQuery(this).attr('data-content-footer');

            // handle update-btn action
            jQuery('.update-id').val(id);
            jQuery('.update-judul-brand').val(judul_brand);
            jQuery('.update-content-brand').val(content_brand);
            jQuery('.update-content-footer').val(content_footer);

            // show drawer using id
            $('#drawer-update-product-default').removeClass('translate-x-full');
           
            // console.log(
            //     ['ID: ', id],
            //     ['Judul Brand: ', judul_brand,],
            //     ['Content: ', content_brand],
            //     ['Content Footer: ', content_footer]
            // );
            
        });

        // handle BATAL button action
        jQuery(document).on('click', '[data-drawer-dismiss="drawer-update-product-default"]', function() {
            $('#drawer-update-product-default').addClass('translate-x-full');
        });
        
        // hadnle btn-update
        jQuery('.btn-update').click(function() {
            var id = jQuery('.update-id').val();
            var judul_brand = jQuery('.update-judul-brand').val();
            var content_brand = jQuery('.update-content-brand').val();
            var content_footer = jQuery('.update-content-footer').val();

            // submit request to API
            jQuery.ajax({
                url: 'http://127.0.0.1:8000/api/brand-messagings/update-data/' + id,
                type: 'PUT',
                beforeSend: function(xhr)
                {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token);
                },
                data: 
                {
                    judul_brand: judul_brand,
                    content_brand: content_brand,
                    content_footer: content_footer,
                },
                success: function(response) {
                    // show the modal
                    jQuery('.update-data-pesan-sukses').text(response.message);
                    Toastify({
                        node: $('#success-update-data-notification-content')
                            .clone()
                            .removeClass('hidden')[0],
                        duration: 3000,
                        newWindow: true,
                        close: false,
                        gravity: 'top',
                        position: 'right',
                        stopOnFocus: true,
                        onClick: function() {
                            Toastify({
                                node: $('#success-update-data-notification-content').hide()
                            }).hideToast();
                        }
                    }).showToast();

                    setTimeout(function() {
                        location.reload;
                    }, 3000);
                },
                error: function(xhr, status, error) {
                    // show the modal
                    jQuery('.update-data-pesan-gagal').text(error);
                    Toastify({
                        node: $('#failed-update-data-notification-content')
                            .clone()
                            .removeClass('hidden')[0],
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: 'top',
                        position: 'right',
                        stopOnFocus: true,
                        onClick: function() {
                            Toastify({
                                node: $('#failed-update-data-notification-content').hide()
                            }).hideToast();
                        }
                    }).showToast();

                    setTimeout(function() {
                        location.reload();
                    }, 5000);
                } 
            }); 
        });
        
    });
</script>
@endpush
<!-- END: Update Data -->

<!-- BEGIN: Delete Data -->
@push('delete-data')
<script src="https://cdn.jsdelivr.net/npm/flowbite@latest/dist/flowbite.min.js"></script>
<script>
    jQuery(document).ready(function() {
        // get cookie
        function getCookie(name){
            var cookieName = name + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var cookieArray = decodedCookie.split(';');
            
            for (var i = 0; i < cookieArray.length; i++)
            {
                var cookie = cookieArray[i];
                
                while (cookie.charAt(0) === ' ')
                {
                    cookie = cookie.substring(1);   
                }

                if (cookie.indexOf(cookieName) === 0)
                {
                    return cookie.substring(cookieName.length, cookie.length);
                }
            }
        }

        var token = getCookie('token');
        // console.log('Token Delete: ', token);
        
        jQuery('#data-table').on('click', '#deleteProductButton', function() {
            var id = jQuery(this).attr('data-id');
            
            // show drawer (using id)
            $('#drawer-delete-product-default').removeClass('translate-x-full');

            jQuery('.btn-delete').click(function() {
                jQuery.ajax({
                    url: 'http://127.0.0.1:8000/api/brand-messagings/delete-data/' + id,
                    type: 'DELETE',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                    },
                    success: function(response) {
                        // show the modal
                        jQuery('.delete-data-pesan-sukses').text(response.message);
                        Toastify({
                            node: $('#success-delete-data-notification-content')
                                .clone()
                                .removeClass('hidden')[0],
                            duration: 3000,
                            newWindow: true,
                            close: false,
                            gravity: 'top',
                            position: 'right',
                            stopOnFocus: true,
                            onClick: function() {
                                Toastify({
                                    node: $('success-delete-data-notification-content').hide()
                                }).hideToast();
                            }
                        }).showToast();

                        setTImeout(function() {
                            location.reload();
                        }, 3000);
                    },
                    error: function(xhr, status, error) {
                        // show the modal
                        jQuery('.delete-data-pesan-gagal').text(error);
                        Toastify({
                            node: $('#failed-delete-data-notification-content')
                                .clone()
                                .removeClass('hidden')[0],
                            duration: 3000,
                            newWindow: true,
                            close: false,
                            gravity: 'top',
                            position: 'right',
                            stopOnFocus: true,
                            onClick: function() {
                                Toastify({
                                    node: $('#failed-delete-data-notification-content').hide()
                                }).hideToast();
                            }
                        }).showToast();

                        setTImeout(function() {
                            location.reload();
                        }, 5000);
                    }
                });
            });
        });
        
        // handle cancel button action
        jQuery('[data-drawer-hide="drawer-delete-product-default"]').click(function() {
            $('#drawer-delete-product-default').addClass('translate-x-full');
        });
    });
</script>
@endpush
<!-- END: Delete Data -->