<template>

    <body id="body" class="font-sans antialiased box-content">

        <div class=" min-h-screen bg-gray-100">
            <div class="sm:flex sm:flex-row min-w-full min-h-screen">
                <!-- Hamburger responsive -->

                <!--sidebar -->
                <div class=" flex md:w-1/5 sm:1/3">
                    <div class="sm:min-h-screen antialiased bg-white w-full ">
                        <div class="flex flex-row px-3 bg-white py-3 h-16 items-center justify-center">
                            <div class="relative w-auto">
                                <inertia-link href="/schools">
                                    <img src="/images/logo.png" alt="main-logo"
                                        class=" rounded-lg h-full w-20 object-contain ">
                                </inertia-link>
                            </div>
                        </div>
                        <ComponentsSidebar />
                    </div>
                </div>
                <div class="w-full flex flex-col bg-gray-50 flex-grow">

                    <nav class="bg-white">
                        <!-- Primary Navigation Menu -->
                        <div class="px-3">
                            <div class="sm:flex justify-between h-16">
                                <div class="flex w-full ">
                                    <!-- Navigation Links -->
                                    <div class="sm:flex items-center w-full">
                                        <header class="flex w-full">

                                            <!-- Page Heading -->
                                            <div class="mt-5 sm:mt-2 w-full sm:mr-0 mr-8 flex flex-row">
                                                <slot name="header">

                                                </slot>
                                            </div>
                                        </header>

                                    </div>
                                </div>

                                <!-- Settings Dropdown -->
                                <div class="hidden sm:flex sm:items-center sm:ml-6">
                                    <div class="w-auto">{{ user.name }}</div>

                                    <inertia-link method="post" id="logout-button" class="ml-3" href="/logout" >
                                        Logout
                                    </inertia-link>
                                </div>


                            </div>
                        </div>

                        <!-- Responsive Navigation Menu -->
                        <div class="sm:hidden">
                            <!-- Navigation Menu -->


                            <!-- Responsive Settings Options -->
                            <div class="pt-4 pb-1 border-t border-gray-200 flex">
                                <div class="flex items-center px-4">
                                    <div class="flex-shrink-0">
                                        <svg class="h-10 w-10 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>

                                    <div class="ml-3">
                                        <div class="font-medium text-base text-gray-800">{{ user.email }}</div>
                                        <div class="font-medium text-sm text-gray-500">{{ user.email }}</div>
                                    </div>
                                </div>
                                <div class="w-full flex items-center justify-end mr-3">
                                    <!-- Authentication -->


                                    <ComponentsButton class="bg-red-50 text-red-800">
                                        <inertia-link method="post" href="/logout" >
                                            Logout
                                        </inertia-link>
                                    </ComponentsButton>
                                </div>
                            </div>
                        </div>

                    </nav>

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
    </body>
</template>
<script>
    import ComponentsContentContainer from './ComponentsContentContainer.vue';
    import ComponentsSidebar from './ComponentsSidebar.vue';
    import ComponentsButton from './ComponentsButton.vue';
    export default {
        data() {
            return {
                open: false
            }
        },
        computed: {
            user() {
                return this.$page.props.auth.user
            }
        },
        components: {
            ComponentsContentContainer,
            ComponentsSidebar,
            ComponentsButton
        },
        created: function () {

        },

    }

</script>
