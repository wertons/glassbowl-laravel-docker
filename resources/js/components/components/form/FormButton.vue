<template>
    <div>
        <button :type="'button'"
        :class="` bg-${ color }-500 focus:bg-${ color }-500 shadow flex items-center px-2 py-1 font-medium tracking-wide text-white capitalize transition-colors 
            duration-200 transform  rounded dark:bg-gray-800 hover:bg-{{ color }}-600 dark:hover:bg-gray-700 
            focus:outline-none  dark:focus:bg-gray-700`"
  v-if="type == 'submit'">
            <i :class="`fa fa-${ icon }`" v-if="icon"></i>
            <span class="mx-1">{{ slot }}</span>
        </button>

        <a @click="$router.go(-1)" v-else>
            <button :type=" type "
             :class="` bg-${ color }-500 focus:bg-${ color }-500 shadow flex items-center px-2 py-1 font-medium tracking-wide text-white capitalize transition-colors 
                duration-200 transform  rounded dark:bg-gray-800 hover:bg-{{ color }}-600 dark:hover:bg-gray-700 
                focus:outline-none  dark:focus:bg-gray-700`"
         >
            <i :class="`fa fa-${ icon }`" v-if="icon"></i>
                <span class="mx-1">{{ slot }}</span>
            </button>
        </a>
    </div>

</template>
<script>
    export default {
        name: 'FormButton',
        data() {
            return {
                color: this.color ?? 'blue',
                icon: this.icon ?? null,
                type: this.type ?? 'button',
                label: this.label,
                color: this.color,
                href: this.href,
                slot: toString(this.slot)
            }
        },
        created() {

        },
        methods: {

        }
    };

</script>
