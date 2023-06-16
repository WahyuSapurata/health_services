<x-dynamic.panel>
    <x-dynamic.panel.layout>
        @template('modern')
            <x-slot:head>
                @vite('resources/js/components/common/error-boundary.js')

                @vite('resources/js/components/modern/dashboard/sidebar.js')
                @vite('resources/js/components/modern/dashboard/topbar.js')
                @vite('resources/js/components/modern/dashboard/customizer.js')

                @vite('resources/js/components/modern/data/form/regular.js')
            </x-slot:head>
        @endtemplate
        <x-slot:topbar>
            <x-dynamic.panel.topbar>

            </x-dynamic.panel.topbar>
        </x-slot:topbar>
        <x-slot:sidebar>
            <x-dynamic.panel.sidebar>

            </x-dynamic.panel.sidebar>
        </x-slot:sidebar>
        <x-slot:main>
            <x-dynamic.panel.main>
                {{-- @dd(url()->full(), route('web.administrator.users.administrator.create'), route('web.administrator.users.administrator.list'), str()->startsWith(url()->full(), route('web.administrator.users.administrator.list'))) --}}
                <x-dynamic.resource.form :resource="$resource">

                </x-dynamic.resource.form>
            </x-dynamic.panel.main>
        </x-slot:main>
        <x-slot:bottombar>
            <x-dynamic.panel.bottombar>
                footer
            </x-dynamic.panel.bottombar>
        </x-slot:bottombar>
        @template('modern')
            <x-modern.dashboard.customizer>

            </x-modern.dashboard.customizer>
        @endtemplate
    </x-dynamic.panel.layout>
</x-dynamic.panel>
