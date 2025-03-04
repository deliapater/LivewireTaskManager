<div class="p-4">
    <h2 class="text-xl font-bold mb-4">Task Manager</h2>

    <input type="text" wire:model="task" class="border p-2" placeholder="Enter task">
    <button wire:click="addTask" class="bg-blue-500 text-white px-4 py-2 ml-2">Add Task</button>

    <ul class="mt-4">
        @foreach($tasks as $index => $task)
            <li class="flex justify-between items-center bg-gray-100 p-2 my-1">
                <button wire:click="removeTask({{ $index }})" class="bg-red-500 text-white px-2 py-1">Remove</button>
            </li>
        @endforeach
    {{ $task }}
    </ul>
</div>
