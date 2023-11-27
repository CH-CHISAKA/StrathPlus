<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                    <a href="{{route('admin.categories.create')}}" class="px-4 py-2 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg text-white ">New Category</a>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Categories


                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 ">
                                        FoodPlus
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        LOCATION
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- Adding The Food Pluses -->
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <a href="">Strathmore Cafeteria</a>
                                    </th>
                                    <td class="px-6 py-4">
                                        STC Ground Floor
                                    </td>
                                    <td class="px-6 py-4">
                                        Food
                                    </td>
                                    <td class="px-6 py-4">
                                        Kes. -
                                    </td>
                                </tr>

                                <!-- Adding The Food Pluses -->
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <a href="">Strathmore Coffee Shop </a>
                                    </th>
                                    <td class="px-6 py-4">
                                        STC Ground Floor
                                    </td>
                                    <td class="px-6 py-4">
                                        Coffee
                                    </td>
                                    <td class="px-6 py-4">
                                        Kes.150-300
                                    </td>
                                </tr>

                                <!-- Adding The Food Pluses -->
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <a href="">Springs Of Olive</a>
                                    </th>
                                    <td class="px-6 py-4">
                                        STC 1st Floor
                                    </td>
                                    <td class="px-6 py-4">
                                        Food
                                    </td>
                                    <td class="px-6 py-4">
                                        Kes.
                                    </td>
                                </tr>

                                <!-- Adding The Food Pluses -->
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <a href="">Pate Cafeteria</a>
                                    </th>
                                    <td class="px-6 py-4">
                                        STC 1st Floor
                                    </td>
                                    <td class="px-6 py-4">
                                        Food
                                    </td>
                                    <td class="px-6 py-4">
                                        Kes.
                                    </td>
                                </tr>

                                <!-- Adding The Food Pluses -->
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <a href="">Pate Cafe</a>
                                    </th>
                                    <td class="px-6 py-4">
                                        Central Builiding
                                    </td>
                                    <td class="px-6 py-4">
                                        Food
                                    </td>
                                    <td class="px-6 py-4">
                                        Kes.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </x-app-layout>