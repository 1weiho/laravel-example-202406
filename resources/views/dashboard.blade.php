<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between">
                        <h3 class="text-xl">客人資料</h3>
                        <a href="/customer/create">
                            <x-primary-button>
                                創建客人
                            </x-primary-button>
                        </a>
                    </div>
                    <div class="relative overflow-x-auto mt-8">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        名稱
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        身分證字號
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        性別
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        生日
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        操作
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ mb_substr($customer->name, 0, 1) . 'O' . mb_substr($customer->name, 2) }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ mb_substr($customer->identity, 0, 3) . '******' . mb_substr($customer->identity, -1) }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $customer->gender == 'M' ? '男性' : '女性' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $customer->birthday }}
                                    </td>
                                    <td class="px-6 py-4 flex space-x-4">
                                        <a href="/customer/{{ $customer->id }}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">編輯</a>
                                        <a href="/customer/{{ $customer->id }}/delete" class="font-medium text-red-600 dark:text-red-500 hover:underline">刪除</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>