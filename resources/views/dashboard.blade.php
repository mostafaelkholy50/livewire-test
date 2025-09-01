<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white p-8 rounded-xl shadow-lg max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- إضافة مهمة جديدة -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                    @livewire('make-tasks')
                </div>

                <!-- عرض المهام -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                    @livewire('show-tasks')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
