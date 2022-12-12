<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>
    <div class="py-12 mb-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">

                    <div class="overflow-x-auto relative">
                        <h1 class="font-semibold text-xl">Mijn gegevens</h1>
                        <p>Tj Kalau</p>
                        <p>06-12-2003</p>
                        <p>Developer</p>
                    </div>

                </div>
            </div>
            <div class="flex justify-between">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                    <div class="p-8 text-gray-900">
                        <div class="overflow-x-auto relative">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        Datum
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Gewerkte uren
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Pauze
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        activiteit
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        30-11-22
                                    </th>
                                    <td class="py-4 px-6">
                                        8
                                    </td>
                                    <td class="py-4 px-6">
                                        0.5
                                    </td>
                                    <td class="py-4 px-6">
                                        Programeren
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        01-12-22
                                    </th>
                                    <td class="py-4 px-6">
                                        7,5
                                    </td>
                                    <td class="py-4 px-6">
                                        1
                                    </td>
                                    <td class="py-4 px-6">
                                        Programeren
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        02-12-22
                                    </th>
                                    <td class="py-4 px-6">
                                        5
                                    </td>
                                    <td class="py-4 px-6">
                                        0.25
                                    </td>
                                    <td class="py-4 px-6">
                                        Service desk
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                    <div class="p-8 text-gray-900">

                        <div class="overflow-x-auto relative">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        Periode
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Gewerkte uren
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        activiteit
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        12/12/22 - 19/12/22
                                    </th>
                                    <td class="py-4 px-6">
                                        40
                                    </td>
                                    <td class="py-4 px-6">
                                        Programeren
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        20/11/22 - 27/11/22
                                    </th>
                                    <td class="py-4 px-6">
                                        40
                                    </td>
                                    <td class="py-4 px-6">
                                        Programeren
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        02/12/22 - 09/12/22
                                    </th>
                                    <td class="py-4 px-6">
                                        35
                                    </td>
                                    <td class="py-4 px-6">
                                        Service desk
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
