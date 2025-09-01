<div class="left-panel flex-1 p-6 bg-gray-50 rounded-lg border border-gray-200">
    @if (session()->has('message'))
        <div class="mb-4 text-green-600">{{ session('message') }}</div>
    @endif

    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-blue-500 pb-3">إضافة مهمة جديدة</h2>

    <form wire:submit.prevent="submit">
        <input type="text"
               id="task-name"
               wire:model="name"
               placeholder="أدخل اسم المهمة"
               class="w-full p-3 mb-4 text-lg border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

        <button type="submit"
                class="w-full py-3 bg-blue-600 text-white font-semibold text-lg rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out">
            إضافة مهمة
        </button>
       <!-- <button type="submit"
                class="w-full py-3 bg-blue-600 text-white font-semibold text-lg rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out">
            إضافة مهمة
        </button> -->
    </form>
</div>
