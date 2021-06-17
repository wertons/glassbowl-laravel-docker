<template>

    <body id="body" x-data="{ open: false, openDrawer: null}"
        x-init="async ()=>{openDrawer = await Cookies.get('drawerOpen')}" class="font-sans antialiased box-content">

        <div class=" min-h-screen bg-gray-100">
            <div class="sm:flex sm:flex-row min-w-full min-h-screen">
                <!-- Hamburger responsive -->
                <div class="top-4 absolute right-2  -mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-secondary-400 hover:text-secondary-500 hover:bg-secondary-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!--sidebar -->

                <div class="hidden flex md:w-1/5 sm:1/3" x-bind:class="{'hidden': !openDrawer, 'block' : openDrawer}">
                    <div class="sm:min-h-screen antialiased bg-white w-full ">
                        <div class="flex flex-row px-3 bg-white py-3 h-16 items-center justify-center">
                            <div class="relative w-auto">
                                <a href="/schools"><!--macarron-->
                                    <img src="/images/logo.png" alt="main-logo"
                                        class=" rounded-lg h-full w-20 object-contain ">
                                </a>
                            </div>
                        </div>
                        <ComponentsSidebar />
                    </div>
                </div>
                <div class="w-full flex flex-col bg-gray-50 flex-grow">
                    <LayoutsNavigation />
                    <!-- Page Content -->
                    <div class="w-full flex flex-col shadow flex-grow">
                        <main>
                            <ComponentsContentContainer>
                                <slot>

                                </slot>
                            </ComponentsContentContainer>
                        </main>
                    </div>
                </div>
            </div>
        </div>
        @stack('scripts') <!--macarron-->
    </body>
</template>
<script>
    import LayoutsNavigation from './LayoutsNavigation.vue';
    import ComponentsContentContainer from './ComponentsContentContainer.vue';
    import ComponentsSidebar from './ComponentsSidebar.vue';
    export default {
        components: {
            LayoutsNavigation,
            ComponentsContentContainer
        },
        created: function () {
            window.onresize = () => {
                if (window.innerWidth < 645) {
                    document.getElementById('body').__x.$data.openDrawer = false;
                }
            }
        },

    }

</script>
