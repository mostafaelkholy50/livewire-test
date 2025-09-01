<div class="right-panel flex-2 p-6 bg-gray-50 rounded-lg border border-gray-200">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-blue-500 pb-3">قائمة المهام({{ $count }})</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow-sm">
            <thead>
                <tr>
                    <th
                        class="py-3 px-4 text-right text-sm font-medium text-gray-600 uppercase tracking-wider bg-gray-200 rounded-tr-lg">
                        ID</th>
                    <th
                        class="py-3 px-4 text-right text-sm font-medium text-gray-600 uppercase tracking-wider bg-gray-200 rounded-tl-lg">
                        اسم المهمة</th>
                    <th
                        class="py-3 px-4 text-right text-sm font-medium text-gray-600 uppercase tracking-wider bg-gray-200 rounded-tl-lg">
                        الإجراءات</th>
                </tr>
            </thead>
            <tbody id="task-list-body" class="divide-y divide-gray-200">
                @foreach($tasks as $task)
                    <tr wire:key="{{ $task->id }}">
                        <td class="py-3 px-4 text-right text-sm text-gray-700">{{$counter++}}</td>
                        <td class="py-3 px-4 text-right text-sm text-gray-700">{{ $task->name }}</td>
                        <td class="py-3 px-4 text-right text-sm text-gray-700">
                            <button wire:click="deleteTask({{ $task->id }})"
                            wire:confirm="Are you sure you want to delete this task?"
                            name="delete"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                حذف
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
