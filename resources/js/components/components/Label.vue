<template>
    <label class="block font-medium text-sm text-gray-700">
    {{ value ?? slot }}
</label>

</template>
<script>
    export default {
        data() {
            return {
                value: this.value,
                slot: toString(this.slot)

            }
        },
        created() {

        },
        methods: {

        }
    };

</script>
