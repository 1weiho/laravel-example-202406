<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            刪除顧客
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section class="space-y-6">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                刪除 {{ $customer->name }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                一旦刪除，所有資源和數據將永久刪除。
                            </p>
                        </header>

                        <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">刪除顧客</x-danger-button>

                        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                            <form method="post" action="{{ route('customer.destroy', ['id' => $customer->id]) }}" class="p-6">
                                @csrf
                                @method('delete')

                                <h2 class="text-lg font-medium text-gray-900">
                                    確定刪除 {{ $customer->name }} 嗎？
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    一旦刪除，所有資源和數據將永久刪除。
                                </p>

                                <div class="mt-6 flex justify-end">
                                    <x-secondary-button x-on:click="$dispatch('close')">
                                        取消
                                    </x-secondary-button>

                                    <x-danger-button class="ms-3">
                                        刪除
                                    </x-danger-button>
                                </div>
                            </form>
                        </x-modal>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>