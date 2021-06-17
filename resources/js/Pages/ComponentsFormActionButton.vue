<template>
    <form class="inline" @submit.prevent="confirm('Are you sure?') && submitForm" v-if="type == 'form'">

        <a :color="color"
            :class="`tooltip fa rounded-full p-2 my-1 bg-${color}-500 text-white transition-colors duration-200 transform hover:bg-${color}-800  ${icon}`">
            <i :class="'fas '+icon"></i>

            <span class="tooltiptext">{{tooltip}}</span>
        </a>

    </form>
    <form class="inline" @submit.prevent="submit" v-else-if="type == 'post'">

        <a :color="color"
            :class="`tooltip fa rounded-full p-2 my-1 bg-${color}-500 text-white transition-colors duration-200 transform hover:bg-${color}-800  ${icon}`">
            <i :class="'fas '+icon"></i>

            <span class="tooltiptext">{{tooltip}}</span>
        </a>
    </form>


    <inertia-link :color="color" v-else :href="href"
        :class="`tooltip fa rounded-full p-2 my-1 bg-${color}-500 text-white transition-colors duration-200 transform hover:bg-${color}-800`">
        <i :class="'fas '+icon"></i>
        <span class="tooltiptext">{{tooltip}}</span>
    </inertia-link>
</template>
<script>
    export default {
        props: [
            'color',
            'icon',
            'type',
            'tooltip',
            'href'
        ],
        data() {
            return {}
        },
        created: function () {},
        methods: {
            submitForm() {
                this.$inertia.delete(this.href, {
                    email: document.querySelector("#email").value,
                    password: document.querySelector("#password").value,
                    remember: document.querySelector("#remember_me").value

                });


            },
            submit() {
                this.$inertia.post(this.href, {
                    email: document.querySelector("#email").value,
                    password: document.querySelector("#password").value,
                    remember: document.querySelector("#remember_me").value

                });
            }
        }
    }

</script>
