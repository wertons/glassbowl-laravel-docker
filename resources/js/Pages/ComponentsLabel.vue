<template>

    <label :class="'block font-medium text-sm text-gray-700'">
        <span v-if="value"></span>
        <slot v-else></slot>
    </label>

</template>
<script>
    export default {

        props: [
            'value'
        ]
    }

</script>
