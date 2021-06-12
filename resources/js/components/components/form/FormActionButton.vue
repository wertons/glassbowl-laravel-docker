<template>

    <form class="inline" method="DELETE" action="{{ href }}"
        onclick="event.preventDefault(); confirm('Are you sure?') && this.submit();">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>

        <form class="inline" method="POST" action="{{ href }}" onclick="event.preventDefault(); this.submit();">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
            <span>
                <a
                    class="fa rounded-full p-2 my-1 bg-{{ color }}-500 text-white 
                    transition-colors duration-200 transform hover:bg-{{ color }}-800">

                    <span class="text-xs font-light" v-if="label">
                        {{label}}
                    </span>
                </a>
            </span>
        </form>
</template>
<script>
    export default {
        data() {
            return {
                color: this.color ?? 'gray',
                iconClass: " fa fa-" + (this.icon ?? 'home'),
                type: this.type ?? 'link',
                label: this.label,
                color: this.color,
                href: this.href
            }
        },
        created() {

        },
        methods: {

        }
    };

</script>
