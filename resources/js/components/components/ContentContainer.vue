<template>
    <div class="p-3">
    {{slot}}
</div>
</template>
<script>
    export default {
        data() {
            return {
                slot: toString(this.slot)
            }
        },
        created() {

        },
        methods: {

        }
    };

</script>
