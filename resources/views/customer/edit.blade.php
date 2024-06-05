<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            編輯顧客
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form method="post" action="{{ route('customer.update', ['id' => $customer->id]) }}">
                        @csrf
                        @method('patch')

                        <!-- 姓名 -->
                        <div>
                            <x-input-label for="name" value="姓名" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $customer->name)" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- 身分證 -->
                        <div class="mt-4">
                            <x-input-label for="identity" value="身分證" />
                            <x-text-input id="identity" class="block mt-1 w-full" type="text" name="identity" :value="old('identity', $customer->identity)" required />
                            <x-input-error :messages="$errors->get('identity')" class="mt-2" />
                        </div>

                        <!-- 性別 -->
                        <div class="mt-4">
                            <x-input-label for="gender" value="性別" />

                            <div class="flex space-x-2 mt-2 items-center">
                                <div class="flex items-center space-x-1">
                                    <input type="radio" id="male" name="gender" value="M" checked="$customer->gender == 'M'" />
                                    <label for="male">男性</label>
                                </div>
    
                                <div class="flex items-center space-x-1">
                                    <input type="radio" id="female" name="gender" value="F" checked="$customer->gender == 'F'" />
                                    <label for="female">女性</label>
                                </div>
                            </div>

                            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                        </div>

                        <!-- 生日 -->
                        <div class="mt-4">
                            <x-input-label for="birthday" value="生日" />

                            <x-text-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" required :value="$customer->birthday" />

                            <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                更新
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>