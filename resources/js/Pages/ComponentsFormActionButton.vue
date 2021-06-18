<template>
    <form class="inline" @submit.prevent="confirmDelete('Are you sure?') " v-if="type == 'form'">

        <button :color="color" type="submit"
            :class="`tooltip fa rounded-full p-2 my-1 bg-${color}-500 text-white transition-colors duration-200 transform hover:bg-${color}-800 `">
            <i :class="'fas '+icon"></i>

            <span class="tooltiptext">{{tooltip}}</span>
        </button>

    </form>
    <form class="inline" @submit.prevent="submit" v-else-if="type == 'post'">

        <button :color="color" type="submit"
            :class="`tooltip fa rounded-full p-2 my-1 bg-${color}-500 text-white transition-colors duration-200 transform hover:bg-${color}-800 `">
            <i :class="'fas '+icon"></i>

            <span class="tooltiptext">{{tooltip}}</span>
        </button>
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

            submit() {
                this.$inertia.post(this.href, {
    
                });
            },
            confirmDelete(data) {
                if (confirm(data)) {
                    this.$inertia.delete(this.href, {
    
                    });
                }
            }
        }
    }

</script>
