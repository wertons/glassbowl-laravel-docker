<template>
        <input disabled v-if="disabled" :class="'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'"
        >
        <input v-else :class="'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'"
        >
</template>
<script>
    export default {
        props: {
            disabled: false
        }
    }

</script>
