<x-authenticated-layout>


    <div class="py-12">
        <div class="max-w-7xl flex flex-wrap justify-between mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="mt-6 p-4 sm:p-8 shadow-xl sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8  shadow-xl sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            {{-- <div class="p-4 sm:p-8  shadow-xl sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div> --}}
        </div>
    </div>
</x-authenticated-layout>
