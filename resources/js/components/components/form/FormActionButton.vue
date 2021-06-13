<template>
    <div>
        <span @click="submitForm()" v-if="type == form">
            <a :class="`bg-${color}-500 hover:bg-${ color }-800`" class="fa rounded-full p-2 my-1 text-white 
                    transition-colors duration-200 transform ">

                <span class="text-xs font-light" v-if="label">
                    {{label}}
                </span>
            </a>
        </span>
        <span @click="submitPost()" v-else-if="type == post">
            <a :class="`bg-${color}-500 hover:bg-${ color }-800`" class="fa rounded-full p-2 my-1 text-white 
                    transition-colors duration-200 transform ">

                <span class="text-xs font-light" v-if="label">
                    {{label}}
                </span>
            </a>
        </span>
        <span v-else>
            <router-link :to="href">
                <a :class="`bg-${color}-500 hover:bg-${ color }-800`" class="fa rounded-full p-2 my-1 text-white 
                    transition-colors duration-200 transform ">

                    <span class="text-xs font-light" v-if="label">
                        {{label}}
                    </span>
                </a>
            </router-link>
        </span>
    </div>
</template>
<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                color: this.color ?? 'gray',
                iconClass: " fa fa-" + (this.icon ?? 'home'),
                type: this.type,
                label: this.label,
                color: this.color,
                href: this.href,
                csrf_token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),

            }
        },
        created() {

        },
        methods: {
            sumbmitForm: function (ev) {
                axios
                    .post(`api/${href}`, {
                        _token: csrf_token,
                        _method: 'DELETE'
                    }, {
                        "Content-Type": "application/x-www-form-urlencoded"
                    }).then(

                    );
            },
            sumbmitPost: function (ev) {
                axios
                    .post(`api/${href}`, {
                        _token: csrf_token,
                        _method: 'POST'
                    }, {
                        "Content-Type": "application/x-www-form-urlencoded"
                    }).then(

                    );
            },
        }
    };

</script>
