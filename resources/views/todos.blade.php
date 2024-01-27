<x-authenticated-layout>
    <div class="ml-[10%]">
        <div class="pagination w-[80%] m-auto my-10">
            {{ $todos->links() }}
        </div>

        <x-todo-list :todos="$todos->items()" />
    </div>

    <x-sidebar />

</x-authenticated-layout>

{{-- @foreach ($todos as $todo)
{{ $todo->id }}

@endforeach --}}
