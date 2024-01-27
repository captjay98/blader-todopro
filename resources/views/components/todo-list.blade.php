<div class="overflow-y-auto gap-2 p-2 m-auto w-full md:grid md:grid-cols-2 min-h-[25rem] max-h-[70rem]">


    @foreach ($todos as $todo)
        <div>
            <x-todo :todo="$todo" />
        </div>
    @endforeach
</div>
