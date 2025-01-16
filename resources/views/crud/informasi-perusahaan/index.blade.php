@extends('crud.informasi-perusahaan.layouts.app')

@section('content')
<div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full mb-1">
        <div class="mb-4">
            <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                  <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                      <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                      Informasi Perusahaan
                    </a>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                      <a href="#" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Pengelolaan Informasi Perusahaan</a>
                    </div>
                  </li>
                  {{-- <li>
                    <div class="flex items-center">
                      <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                      <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Products</span>
                    </div>
                  </li> --}}
                </ol>
            </nav>
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Data Pengelolaan Informasi Perusahaan</h1>
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
                            {{-- <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all" class="sr-only">checkbox</label>
                                </div>
                            </th> --}}
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                Checkbox
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                No
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                Nama Perusahaan
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                Visi
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                Misi
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                Alamat
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                No Telephone
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                Email
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                profile Perusahaan
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                profile Singkat
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                Deskripsi
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-white-500 uppercase dark:text-white-400">
                                Actions
                            </th>
                            {{-- <th>Nama Perusahaan</th>
                            <th>Visi</th>
                            <th>Misi</th>
                            <th>Alamat</th>
                            <th>No Telephone</th>
                            <th>Deskripsi</th>
                            <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                            {{-- <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="" aria-describedby="checkbox-1" type="checkbox"
                                        class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                <div class="text-base font-semibold text-gray-900 dark:text-white"></div>
                                <div class="text-sm font-normal text-gray-500 dark:text-gray-400"></div> 
                            </td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white"></td> 
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white"></td> 
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white"></td> 
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white"></td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white"></td> 
                            <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400"></td> --}}

                            {{-- <td class="p-4 space-x-2 whitespace-nowrap">
                                <button type="button" id="updateProductButton" data-drawer-target="drawer-update-product-default" data-drawer-show="drawer-update-product-default" aria-controls="drawer-update-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                    Update Data
                                </button>
                                <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                    Delete Data
                                </button>
                            </td> --}}
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
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Perusahaan</label>
                <input type="hidden" class="form-control update-id">
                <input type="text" name="nama-perusahaan" id="nama-perusahaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 update-nama-perusahaan" placeholder="Masukkan Nama Perusahaan" required="">
            </div>
            <div>
                <label for="visi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visi</label>
                <input type="text" name="visi" id="visi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 update-nama-perusahaan update-visi" placeholder="Masukkan Visi Perusahaan" required="">
            </div>
            <div>
                <label for="misi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Misi</label>
                <input type="text" name="misi" id="misi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 update-nama-perusahaan update-misi" placeholder="Masukkan Misi Perusahaan" required="">
            </div>
            <div>
                <label for="misi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 update-nama-perusahaan update-alamat" placeholder="Masukkan Alamat Perusahaan" required="">
            </div>
            <div>
                <label for="telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telephone</label>
                <input type="number" name="telephone" id="telephone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 update-telephone" placeholder="Masukkan No Telephone" required="">
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <textarea id="email" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 update-email" placeholder="Masukkan Email Perusahaan"></textarea>
            </div>
            <div>
                <label for="profile_perusahaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">profilee Perusahaan</label>
                <textarea id="profile_perusahaan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 update-profile-perusahaan" placeholder="Masukkan Proile Perusahaan Perusahaan"></textarea>
            </div>
            <div>
                <label for="profile_singkat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">profilee Singkat</label>
                <textarea id="profile_singkat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 update-profile-singkat" placeholder="Masukkan profilee Singkat Perusahaan"></textarea>
            </div>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 update-deskripsi" placeholder="Masukkan Deskripsi Perusahaan"></textarea>
            </div>
        </div>
        <div class="bottom-0 left-0 flex justify-center w-full pb-4 mt-4 space-x-4 sm:absolute sm:px-4 sm:mt-0">
            <button type="button" class="w-full justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 btn-update">
                Update
            </button>
            <button type="button" data-drawer-dismiss="drawer-create-product-default" aria-controls="drawer-create-product-default" class="inline-flex w-full justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
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
    <a href="#" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-900 btn-delete">
        Yes, I'm sure
    </a>
    <a href="#" class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2.5 text-center dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700" data-drawer-hide="drawer-delete-product-default">
        No, cancel
    </a>
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


<!-- BEGIN: Add Data -->
<div id="drawer-create-product-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Tambah Data</h5>
    <button type="button" data-drawer-dismiss="drawer-create-product-default" aria-controls="drawer-create-product-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form action="#">
        <div class="space-y-4">
            {{-- <div>
                <label for="select" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select</label>
                <input type="text" id="select" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-nama_perusahaan" placeholder="Masukkan Nama Perusahaan" required>
            </div> --}}
            <div>
                <label for="nama_perusahaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Perusahaan</label>
                <input type="text" id="nama_perusahaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-nama-perusahaan" placeholder="Masukkan Nama Perusahaan" required>
            </div>
            <div>
                <label for="visi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visi</label>
                <input type="text" id="visi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-visi" placeholder="Masukkan Visi Perusahaan" required>
            </div>
            <div>
                <label for="misi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Misi</label>
                <input type="text" id="misi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-misi" placeholder="Masukkan Misi Perusahaan" required>
            </div>
            <div>
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                <input type="text" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-alamat" placeholder="Masukkan Alamat Perusahaan" required>
            </div>
            <div>
                <label for="telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telephone</label>
                <input type="number" id="telephone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-telephone" placeholder="Masukkan No Telephone" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-email" placeholder="Masukkan Email Perusahaan" required>
            </div>
            <div>
                <label for="profile_perusahaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">profile Perusahaan</label>
                <textarea id="profile_perusahaan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-profile-perusahaan" placeholder="Masukkan profile Perusahaan Perusahaan" required></textarea>
            </div>
            <div>
                <label for="profile_singkat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">profile Singkat</label>
                <textarea id="profile_singkat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-profile-singkat" placeholder="Masukkan profile Perusahaan Perusahaan" required></textarea>
            </div>
            <div>
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <textarea id="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-deskripsi" placeholder="Masukkan Deskripsi Perusahaan" required></textarea>
            </div>
            <div class="bottom-0 left-0 flex justify-center w-full pb-4 space-x-4 md:px-4 md:absolute">
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
{{-- @yield('create') --}}
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

@endsection

@push('create-data')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.js"></script>
<script>
    jQuery(document).ready(function() {

        //get cookie
        function getCookie(name) {
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

        // if (token)
        // {
        //     console.log('Token: ', token);
        // } else
        // {
        //     window.location.href = "{{ route('user.login') }}";
        // }

        // BEGIN: ADD-DATA
        jQuery('.btn-create').click(function() {
            //show the modal
            event.preventDefault();
            
            // get form data
            var nama = jQuery('.form-nama-perusahaan').val();
            var visi = jQuery('.form-visi').val();
            var misi = jQuery('.form-misi').val();
            var alamat = jQuery('.form-alamat').val();
            var telephone = jQuery('.form-telephone').val();
            var email = jQuery('.form-email').val();
            var profile_perusahaan = jQuery('.form-profile-perusahaan').val();
            var profile_singkat = jQuery('.form-profile-singkat').val();
            var deskripsi = jQuery('.form-deskripsi').val();

            var formData = new FormData();
            formData.append('nama', nama);
            formData.append('visi', visi);
            formData.append('misi', misi);
            formData.append('alamat', alamat);
            formData.append('telephone', telephone);
            formData.append('email', email);
            formData.append('profile_perusahaan', profile_perusahaan);
            formData.append('profile_singkat', profile_singkat);
            formData.append('deskripsi', deskripsi);

            // API
            jQuery.ajax({
                url: 'http://127.0.0.1:8000/api/informasi-perusahaan/add-data',
                type: 'POST',
                headers: {
                    'Authorization': 'Bearer ' + token
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
                            .removeClass("hidden")[0],
                        duration: 3000,
                        newWindow: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                        onClick: function() {
                            Toastify({
                                node: $("#success-add-data-notification-content").hide()
                            }).hideToast();
                        }
                    }).showToast();

                    setTimeout(function() {
                        location.reload();
                    }, 3000);
                },
                error: function(xhr, status, error) {
                    // show the modal
                    jQuery('.add-data-pesan-gagal').text(error);
                    Toastify({
                        node: $('#failed-add-data-notification-content')
                            .clone()
                            .removeClass("hidden")[0],
                        duration: 3000,
                        newWindow: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                        onClick: function() {
                            Toastify({
                                node: $("#failed-add-data-notification-content").hide()
                            }).hideToast();
                        }
                    }).showToast();

                    setTimeout(function() {
                        // location.reload();
                    }, 5000);
                }
            });
        });
        // END: ADD-DATA
    });
</script>
@endpush

@push('list-data')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.29.1/dist/feather.min.js"></script>

<script>
    jQuery(document).ready(function() {

        // Fungsi untuk mendapatkan nilai cookie
        function getCookie(name) {
            var cookieName = name + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var cookieArray = decodedCookie.split(';');

            for (var i = 0; i < cookieArray.length; i++) {
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

        if (token) {
            // Token ada dalam cookie, lakukan tindakan yang sesuai
            console.log('Token:', token);
        } else {
            window.location.href = "{{ route('user.login') }}";
        }

        document.addEventListener('dark-mode', function () {
            const isDarkMode = document.documentElement.classList.contains('dark');
            toggleDataTablesDarkMode(isDarkMode);
        });

        // Fungsi untuk menyesuaikan DataTables
        function toggleDataTablesDarkMode(isDarkMode) {
            const dataTable = document.querySelector('#data-table');
            if (dataTable) {
                if (isDarkMode) {
                    dataTable.classList.add('dark-mode');
                } else {
                    dataTable.classList.remove('dark-mode');
                }
            }
        }

        function getSelectedCheckboxIds()
        {
            var selectedIds = [];
            $('.row-checkbox:checked').each(function() {
                selectedIds.push($(this).val());
            });
            return selectedIds;
        }

        $(document).on('change', '.row-checkbox', function() {
            $('.row-checkbox').not(this).prop('checked', false);
        });

        $('#selectProduct').on('click', function() { 
            // var selectedCheckbox = $('.row-checkbox:checked').val(); 
            var selectedCheckboxIds = getSelectedCheckboxIds();
            if (selectedCheckboxIds.length > 0) { 
                jQuery.ajax({
                    url: 'http://127.0.0.1:8000/api/informasi-perusahaan/update-selection',
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Content-Type': 'application/json',
                    },
                    data: JSON.stringify({
                        id: selectedCheckboxIds[0] // hanya satu yang dipilih
                    }),
                    success: function(response) {
                        alert('Data berhasil dipilih dan disimpan');
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error: ', error);
                    }
                });
            } else { alert('Silakan pilih satu item.'); 

            } 
        });

        // jQuery('#data-table').DataTable({
        var table = $('#data-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": 'http://127.0.0.1:8000/api/informasi-perusahaan/list-data',
                "dataType": "json",
                "type": "POST",
                "headers": {
                    'Authorization': 'Bearer ' + token
                }
            },
            "columns": [
                {
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row) {
                        return '<input type="checkbox" class="row-checkbox" value="' + row.no + '">';
                    },
                    orderable: false
                },
                { data: 'no', className: 'text-center' },
                { data: 'nama_perusahaan', className: 'text-center' },
                { data: 'visi', className: 'text-center' },
                { data: 'misi', className: 'text-center' },
                { data: 'alamat', className: 'text-center' },
                { data: 'telephone', className: 'text-center' },
                { data: 'email', className: 'text-center' },
                { data: 'profile_perusahaan', className: 'text-center' },
                { data: 'profile_singkat', className: 'text-center' },
                { data: 'deskripsi', className: 'text-center' },
                {
                    data: null,
                    render: function(data, type, row) {
                        // create action button
                        var editBtn = '<button type="button" id="updateProductButton" data-drawer-target="drawer-update-product-default" data-drawer-show="drawer-update-product-default" aria-controls="drawer-update-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 update-btn" data-id="' + data.no + '" data-nama-perusahaan="' + data.nama_perusahaan + '" data-visi="' + data.visi + '" data-misi="' + data.misi + '" data-alamat="' + data.alamat + '" data-telephone="' + data.telephone + '" data-email="' + data.email + '" data-profile-perusahaan="' + data.profile_perusahaan + '" data-profile-singkat="' + data.profile_singkat + '" data-deskripsi="' + data.deskripsi + '"><svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>Update</button>';
                        var deleteBtn = '<button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900 delete-btn" data-id="' + data.no + '"><svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>Delete</button>';

                        // combine the buttons
                        var actions = editBtn + ' ' + deleteBtn;
                        return actions;
                    }
                }
            ],

            searching: false,
            paging: false,
            paging: true,
            pageLength: 20,  // Menentukan jumlah item per halaman
            dom: 'lrtip',  // Menggunakan default tanpa pagination control
            drawCallback: function(settings) {
                var info = table.page.info();

                // var currentPage = info.page; // halaman saat ini
                // var totalPages = info.pages; // jumlah total halaman

                $('#showing-info').text(info.start + 1 + '-' + info.end);
                $('#total-info').text(info.recordsTotal);

                // menonaktifkan previous dan next jika sudah mencapai halaman pertama atau terakhir
                $('#prev-btn').prop('disabled', info.page === 0);
                $('#next-btn').prop('disabled', info.page === info.pages - 1);

            }
        });

        // $(document).on('change', '.row-checkbox', function() { 
        //     $('.row-checkbox').not(this).prop('checked', false); 
        // }); 

        // function showSelectedData(id) {
        //     console.log('ID yang dipilih: ', id);
        //     jQuery.ajax({
        //         url: 'http://127.0.0.1:8000/api/informasi-perusahaan/get-selected-data',
        //         method: 'POST',
        //         headers: {
        //             'Authorization': 'Bearer ' + token,
        //         },
        //         data: JSON.stringify ({
        //             ids: [id]
        //         }),
        //         contentType: "application/json",
        //         success: function(response) {
        //             console.log('Response: ', response);
        //             if (response.length > 0)
        //             {
        //                 var data = response[0]; // asumsi hanya satu perusahaan yang di pilih
        //                 $('#nama_perusahaan').text(data.nama_perusahaan);    
        //                 $('#visi_nama_perusahaan').text(data.nama_perusahaan);    
        //                 $('#misi_nama_perusahaan').text(data.nama_perusahaan);    
        //                 $('#deskripsi').text(data.deskripsi);
        //                 alert('Data berhasil ditampilkan di landing-page.');
        //             }
        //             else
        //             {
        //                 console.log('Data tidak ada');
        //             }
        //         },
        //         error: function(xhr, status, error) {
        //             console.error('Error: ', error);
        //         }
        //     });
        // }

        // Tombol Previous
        $('#prev-btn').click(function() {
            table.page('previous').draw('page');
        });

        // Tombol Next
        $('#next-btn').click(function() {
            table.page('next').draw('page');
        });

    });
    
</script>
@endpush

@push('update-data')
<script src="https://cdn.jsdelivr.net/npm/flowbite@latest/dist/flowbite.min.js"></script>

<script>
    jQuery(document).ready(function() {
        // get cookie
        function getCookie(name) {
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
        // console.log(token);

        jQuery('#data-table').on('click', '#updateProductButton', function() {
            var id = jQuery(this).attr("data-id");
            var nama = jQuery(this).attr("data-nama-perusahaan");
            var visi = jQuery(this).attr("data-visi");
            var misi = jQuery(this).attr("data-misi");
            var alamat = jQuery(this).attr("data-alamat");
            var telephone = jQuery(this).attr("data-telephone");
            var email = jQuery(this).attr("data-email");
            var profile_perusahaan = jQuery(this).attr("data-profile-perusahaan");
            var profile_singkat = jQuery(this).attr("data-profile-singkat");
            var deskripsi = jQuery(this).attr("data-deskripsi");

            // handle update-btn action
            jQuery('.update-id').val(id);
            jQuery('.update-nama-perusahaan').val(nama);
            jQuery('.update-visi').val(visi);
            jQuery('.update-misi').val(misi);
            jQuery('.update-alamat').val(alamat);
            jQuery('.update-telephone').val(telephone);
            jQuery('.update-email').val(email);
            jQuery('.update-profile-perusahaan').val(profile_perusahaan);
            jQuery('.update-profile-singkat').val(profile_singkat);
            jQuery('.update-deskripsi').val(deskripsi);

            // show drawer (id)
            $('#drawer-update-product-default').removeClass('translate-x-full');
        });

        // handle 'batal' button action
        jQuery(document).on('click', '[data-drawer-dismiss="drawer-create-product-default"]', function() { // reset all input fields in the form 
            jQuery('.update-id').val(''); 
            jQuery('.update-nama-perusahaan').val(''); 
            jQuery('.update-visi').val(''); 
            jQuery('.update-misi').val(''); 
            jQuery('.update-alamat').val(''); 
            jQuery('.update-telephone').val(''); 
            jQuery('.update-email').val(''); 
            jQuery('.update-profile-perusahaan').val(''); 
            jQuery('.update-profile-singkat').val(''); 
            jQuery('.update-deskripsi').val(''); 
            // hide drawer (id) 
            $('#drawer-update-product-default').addClass('translate-x-full'); 
        });

        // btn-update
        jQuery('.btn-update').click(function() {
            // ajax update
            var id = jQuery('.update-id').val();
            var nama = jQuery('.update-nama-perusahaan').val();
            var visi = jQuery('.update-visi').val();
            var misi = jQuery('.update-misi').val();
            var alamat = jQuery('.update-alamat').val();
            var telephone = jQuery('.update-telephone').val();
            var email = jQuery('.update-email').val();
            var profilee_perusahaan = jQuery('.update-profile-perusahaan').val();
            var profilee_singkat = jQuery('.update-profilee-singkat').val();
            var deskripsi = jQuery('.update-deskripsi').val();
            
            // console.log(id);
            // submit request to API
            jQuery.ajax({
                url: 'http://127.0.0.1:8000/api/informasi-perusahaan/update-data/' + id,
                type: 'PUT',
                beforeSend: function(xhr)
                {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token);
                },
                data: {
                    nama: nama,
                    visi: visi,
                    misi: misi,
                    alamat: alamat,
                    telephone: telephone,
                    email: email,
                    profilee_perusahaan: profilee_perusahaan,
                    profilee_singkat: profilee_singkat,
                    deskripsi: deskripsi,
                },
                success: function(response) {
                    // Show the modal
                    // console.log('Response: ', response);
                    jQuery('.update-data-pesan-sukses').text(response.message);
                    Toastify({
                        node: $("#success-update-data-notification-content")
                            .clone()
                            .removeClass("hidden")[0],
                        duration: 3000,
                        newWindow: true,
                        close: false,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                        onClick: function() {
                            Toastify({
                                node: $("#success-update-data-notification-content").hide()
                            }).hideToast();
                        }
                    }).showToast();
                    
                    setTimeout(function() {
                        location.reload();
                    }, 3000);
                },
                error: function(xhr, status, error) {
                    // Show the modal
                    jQuery('.update-data-pesan-gagal').text(error);
                    Toastify({
                        node: $("#failed-update-data-notification-content")
                            .clone()
                            .removeClass("hidden")[0],
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                        onClick: function() {
                            Toastify({
                                node: $("#failed-update-data-notification-content").hide()
                            }).hideToast();
                        }
                    }).showToast();
                    
                    setTimeout(function() {
                        // location.reload();
                    }, 5000);
                }
            });
        });

    });
</script>
@endpush

@push('delete-data')
<script src="https://cdn.jsdelivr.net/npm/flowbite@latest/dist/flowbite.min.js"></script>

<script>
    jQuery(document).ready(function() {
        //get cookie
        function getCookie(name) {
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
        // console.log('Token Delete : ', token);

        jQuery('#data-table').on('click', '#deleteProductButton', function() {
            var id = jQuery(this).attr("data-id");

            // show drawer (using id)
            $('#drawer-delete-product-default').removeClass('translate-x-full');

            jQuery('.btn-delete').click(function() {
                //ajax
                jQuery.ajax({
                    url: 'http://127.0.0.1:8000/api/informasi-perusahaan/delete-data/' + id,
                    type: 'DELETE',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                    },
                    success: function(response) {
                        // show the modal
                        jQuery('.delete-data-pesan-sukses').text(response.message);
                        Toastify({
                            node: $("#success-delete-data-notification-content")
                                .clone()
                                .removeClass("hidden")[0],
                            duration: 3000,
                            newWindow: true,
                            close: false,
                            gravity: "top",
                            position: "right",
                            stopOnFocus: true,
                            onClick: function() {
                                Toastify({
                                    node: $("#success-delete-data-notification-content").hide()
                                }).hideToast();
                            }
                        }).showToast();

                        setTimeout(function() {
                            location.reload();
                        }, 3000);
                    },
                    error: function(xhr, status, error) {
                        // Show the modal
                        jQuery('.delete-data-pesan-gagal').text(response.message);
                        Toastify({
                            node: $("#failed-delete-data-notification-content")
                                .clone()
                                .removeClass("hidden")[0],
                            duration: 3000,
                            newWindow: true,
                            close: true,
                            gravity: "top",
                            position: "right",
                            stopOnFocus: true,
                            onClick: function() {
                                Toastify({
                                    node: $("#failed-delete-data-notification-content").hide()
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

        // handle cance button action
        jQuery('[data-drawer-hide="drawer-delete-product-default"]').click(function() {
            // hide drawer (using id)
            $('#drawer-delete-product-default').addClass('translate-x-full');
        });
    });
</script>
@endpush

{{-- @push('get-selected-data')
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
        // console.log('Token Get Selected Data: ', token);

        
    });
</script>
@endpush --}}