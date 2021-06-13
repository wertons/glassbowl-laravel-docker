<template>
    <label class="block font-medium text-sm text-gray-700">
        <div v-if="value">
            {{ value }}
        </div>
        <div v-else>
            {{slot}}
        </div>
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
