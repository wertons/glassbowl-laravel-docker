<template>


    <nav class="bg-white">
        <!-- Primary Navigation Menu -->
        <div class="px-3">
            <div class="sm:flex justify-between h-16">
                <div class="flex w-full ">
                    <!-- Navigation Links -->
                    <div class="sm:flex items-center w-full">
                        <header class="flex w-full">
                            <!-- hamubrger conventional -->
                            <div class="hidden mr-2 mt-1.5 sm:block">
                                <button @click="openDrawer=toggleDrawer(openDrawer)"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-secondary-400 hover:text-secondary-500 hover:bg-secondary-100 focus:outline-none focus:bg-secondary-100 focus:text-secondary-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{'hidden': 'open', 'inline-flex': ! 'open' }" class="inline-flex"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{'hidden': ! 'open', 'inline-flex': 'open' }" class="hidden"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <!-- Page Heading -->
                            <div class="mt-5 sm:mt-2 w-full sm:mr-0 mr-8 flex flex-row">
                                <Header></Header>
                            </div>
                        </header>

                    </div>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <Dropdown align="right" width="48">
                        <slot name="trigger">
                            <button id="logout-dropdown"
                                class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div class="w-auto">{{ uname }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </slot>

                        <slot name="content">
                            <!-- Authentication -->
                     
                                <a id="logout-button" class="ml-3" @click="logOut()">
                                    Logout
                                </a>
                        </slot>
                    </Dropdown>
                </div>


            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': 'open', 'hidden': !'open'}" class="sm:hidden">
            <!-- Navigation Menu -->
            <Sidebar :role="null" />


            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200 flex">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>

                    <div class="ml-3">
                        <div class="font-medium text-base text-gray-800">{{ uname }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ email }}</div>
                    </div>
                </div>
                <div class="w-full flex items-center justify-end mr-3">
                    <!-- Authentication -->
                 

                        <Button class="bg-red-50 text-red-800">
                            <a @click="logOut()">
                                Logout</a>
                        </Button>
                </div>
            </div>
        </div>

    </nav>
</template>
<script>
    import NavLink from './../components/NavLink.vue';
    import Button from './../components/Button.vue';
    import Dropdown from './../components/Dropdown.vue';
    import Sidebar from './../components/Sidebar.vue';

      
    import axios from 'axios';
    import Header from '../components/Header.vue';

    export default {
        name: 'Navigation',
        components:{
            NavLink,
            Button,
            Dropdown,
            Sidebar,
            Header
        },
        data() {
            return {
                csrf_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                uname:"",
                email:""
            }
        },
        created() {

        },
        methods: {
            logOut: function (ev) {
                axios
                    .post(`/logout`, {
                        _token: csrf_token,
                        _method: 'POST',
                    }, {
                        "Content-Type": "application/x-www-form-urlencoded"
                    }).then((ev) => {
                        uname = ev.data.name;
                        email = ev.data.email;

                    });
            }
        }
    };

</script>
