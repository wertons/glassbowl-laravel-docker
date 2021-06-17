<template>

<button :type="type" :class="`shadow flex items-center px-2 py-1 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-${{color}}-500 rounded dark:bg-gray-800 hover:bg-${{color}}-600 dark:hover:bg-gray-700 focus:outline-none focus:bg-${{color}}-500 dark:focus:bg-gray-700`"
v-if="type == submit">
    <i class="fa fa-<?= $icon ?>" v-if="icon"></i>
  <span class="mx-1">
            <slot></slot>
        </span></button>

<inertia-link :href="href" v-else>
    <button :type="type" :class="`shadow flex items-center px-2 py-1 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-${{color}}-500 rounded dark:bg-gray-800 hover:bg-${{color}}-600 dark:hover:bg-gray-700 focus:outline-none focus:bg-${{color}}-500 dark:focus:bg-gray-700`">
        <i class="fa fa-<?= $icon ?>" v-if="icon"></i>
        <span class="mx-1">
            <slot></slot>
        </span>
    </button>
</inertia-link>
</template>
<script>
  export default {
        props: [
            'color',
            'icon',
            'type',
            'tooltip'
        ],
          data() {
            return {
                iconClass: false
            }
        },
        created: function () {
 
            this.icon = this.icon ?? null;
            this.color = this.color ?? 'blue';
            this.href = this.href ?? '';
            this.type = this.type ?? 'button';
        },
        methods:{
          
        }
    }

</script>