<x-authenticated-layout>

    <div class="flex w-screen h-screen bg-purple-200">

        <x-todo-list :todos="$todos" />


        <x-create-todo />

    </div>
</x-authenticated-layout>
