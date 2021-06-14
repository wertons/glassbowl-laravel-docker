<ul class="block sm:w-full mb-2">
    <li class="flex flex-col">
        <div class="block w-full px-1 text-sm font-medium leading-5 pl-5 py-2">
            <i class=" fa fa-layer-group mr-2"></i> {{ __('Schools') }}
        </div>
        <x-nav-link class="pl-9 flex flex-row items-center" :href="route('schools.index')" :active="request()->routeIs('schools.index')">
            <i class="fa fa-layer-group mr-2"></i> {{ __('My Schools') }}
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </x-nav-link>

        <x-nav-link class="pl-9 flex flex-row items-center" :href="route('schools.marketplace')" :active="request()->routeIs('schools.marketplace')">
            <i class="fa fa-store mr-2"></i> {{ __('Marketplace') }}
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </x-nav-link>

        <x-nav-link class="pl-9 flex flex-row items-center" :href="route('schools.downloadedSchools')" :active="request()->routeIs('schools.downloadedSchools')">
            <i class="fa fa-download mr-2"></i> {{ __('Downloaded Schools') }}
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </x-nav-link>

        <div class="block w-full px-1 text-sm font-medium leading-5 pl-5 py-2">
            <i class=" fa fa-users mr-2"></i> {{ __('Teams') }}
        </div>

        <x-nav-link class="pl-9 flex flex-row items-center" :href="route('teams.index')" :active="request()->routeIs('teams.index')">
            <i class="fa fa-users mr-2"></i> {{ __('My Teams') }}
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </x-nav-link>

        <x-nav-link class="pl-9 flex flex-row items-center" :href="route('teams.invitations')" :active="request()->routeIs('teams.invitations')">
            <i class="fa fa-envelope mr-2"></i> {{ __('My Invitations') }}
            <i class="fas fa-chevron-right ml-auto mr-2"></i>
        </x-nav-link>
    </li>
</ul>