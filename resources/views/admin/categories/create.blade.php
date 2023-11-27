<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex m-2 p-2">
                    <a href="{{route('admin.categories.index')}}"
                     class="px-4 py-2 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg text-white ">Category</a>
                </div>
            </div>
        </div>
     <div >
        <!-- Adding the Category Form -->
            <form method="POST" action="{{route('admin.categories.store') }}" enctype="multipart/form-data" class="max-w-sm mx-auto">
                @csrf
            <div class="mb-5">
            <label for="foodplus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">FOODPLUS</label>
            <input type="text"  name="foodplus" id="text" class="shadow-sm bg-black-50 border border-dark-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="rooftop lounge" required>
            </div>

            <div class="mb-5">
            <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">LOCATION</label>
            <input type="text" name="location" id="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="rooftop" required>
            </div>

            <div class="mb-5">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">CATEGORY</label>
            <input type="text" name="category" id="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="meals" required>
            </div>

            <div class="mb-5">
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">PRICE</label>
            <input type="text" name="price" id="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="KES-" required>
            </div>
            
            <div class="flex items-start mb-5">
            <div class="flex items-center h-5 mt-2">
                <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
            </div>
            
            <label for="terms" class="mt-2 ms-2 text-sm font-medium text-gray-900 dark:text-black-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
            </div>
            <button type="submit" name="submit" <a href="{{route('admin.categories.index')}}"
                class="py-3 px-6 mt-4 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"> Register new account</button>

            </form>
    </div>
</x-app-layout>
