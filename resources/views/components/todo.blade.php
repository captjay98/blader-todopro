<div
    class="flex p-3 m-auto my-4 rounded-md shadow-lg min-w-[15rem] max-w-[30rem] text-slate-200 shadow-blue-700/50 bg-blue-700/50 h-[7rem]">
    <div class="h-full w-[80%] m-auto">
        <a class="flex flex-col justify-center h-full" href="'/todo/'${todo.id}">
            <h3 data-test="title" class="font-bold text-[1rem]">{{ $todo->title }}</h3>
            <p data-test="description" class="font-normal truncate text-[0.78rem]">
                {{ $todo->description }}

            </p>
        </a>
    </div>

    <div class="flex justify-center gap-3 items-center w-[20%]">
        <input data-test="completed" type="checkbox" @click="updateCompleted"
            class="w-7 h-7 text-indigo-600 rounded-md border-2 border-blue-500 transition duration-150 ease-in-out appearance-none checked:bg-blue-700 checked:border-0 bg-slate-600/90"
            :checked={{ $todo->completed }} />
        <p data-test="delete" class="text-xl font-bold cursor" @click="deleteTodo">X</p>
    </div>
</div>
