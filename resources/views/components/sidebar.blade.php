<div v-if="isSidebarVisible && route.path === '/todos'"
    class="fixed h-screen left-0 top-0 bg-blue-900/70 rounded-lg w-[8rem] xl:w-[10%]">
    <div v-if="route.path === '/todos'"
        class="fixed top-10 left-32 lg:hidden w-[3rem] text-slate-400 max-sm:top-2 max-sm:left-5 z-100">
        <Button @click="toggleSidebar">SB</Button>
    </div>
    <div class="flex flex-col gap-5 justify-center items-center pt-20 h-full text-slate-200 text-[0.9rem]">
        <div class="px-2">
            <a href="/create-todo">
                <Button> Add Todo </Button>
            </a>
        </div>
        <p :class="{
            'bg-black/60 w-full text-white py-1 px-3 rounded': todoStore.todos.currentFilter === 'all'
        }"
            @click="setFilterAndFetchTodos('all')">
            All
        </p>
        <p :class="{
            'bg-black w-full text-white py-1 px-3 rounded': todoStore.todos.currentFilter === 'true'
        }"
            @click="setFilterAndFetchTodos('true')">
            Completed
        </p>
        <p :class="{
            'bg-black w-full text-white py-1 px-3 rounded': todoStore.todos.currentFilter === 'false'
        }"
            @click="setFilterAndFetchTodos('false')">
            Not Completed
        </p>
        <p :class="{
            'bg-black w-full text-white py-1 px-3 rounded': todoStore.todos.currentFilter === 'newest'
        }"
            @click="setFilterAndFetchTodos('newest')">
            Newest
        </p>
        <p :class="{
            'bg-black w-full text-white py-1 px-3 rounded': todoStore.todos.currentFilter === 'oldest'
        }"
            @click="setFilterAndFetchTodos('oldest')">
            Oldest
        </p>
    </div>
    </aside>
