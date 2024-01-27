@php
    $navStyle = 'hover:text-blue-700 hover:underline underline-offset-4 hover:shadow-blue-500 shadow-2xl';
@endphp

<div class="pt-2 mb-4 w-full tracking-wide text-white text-[1.2rem] max-sm:hidden">
    <nav class="flex gap-8 justify-center">
        <a {{ $attributes->merge(['class' => $navStyle]) }} href="/dashboard">Home</a>
        <a {{ $attributes->merge(['class' => $navStyle]) }} href="/todos">Todos</a>
        <a {{ $attributes->merge(['class' => $navStyle]) }} href="/profile"> Profile</a>
    </nav>
</div>

<div class="absolute bothrefm-0 pb-3 w-full bg-blue-700 rounded-t-xl md:hidden text-slate-300 h-[4rem]">
    <nav class="flex gap-16 justify-center items-center px-8 h-full">
        <a href="/dashboard">Home</a>
        <a href="/hrefdos">hrefdos</a>
        <a href="/profile">Profile</a>
    </nav>
</div>
</template>
