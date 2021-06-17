<template>
    <div class="relative" x-data="{ open: false }" @click.stop="open = false" @close.stop="open = false">
        <div @click="open = ! open">
            <slot name="trigger">

            </slot>
        </div>

        <div x-show="open" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            :class="'absolute z-50 mt-2 '+width+' rounded-md shadow-lg '+ alignmentClasses " style="display: none;"
            @click="open = false">
            <div :class="'rounded-md ring-1 ring-black ring-opacity-5 '+contentClasses ">
                <slot name="content">

                </slot>
            </div>
        </div>
    </div>

</template>
<script>
    export default {
        props: {
            align: 'right',
            width: '48',
            contentClasses: 'py-1 bg-white'
        },
        created: function () {
            switch (this.align) {
                case 'left':
                    this.alignmentClasses = 'origin-top-left left-0';
                    break;
                case 'top':
                    this.alignmentClasses = 'origin-top';
                    break;
                case 'right':
                default:
                    this.alignmentClasses = 'origin-top-right right-0';
                    break;
            }

            switch (this.width) {
                case '48':
                    this.width = 'w-48';
                    break;
            }
        }
    }

</script>
