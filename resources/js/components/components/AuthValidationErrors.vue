<template>
    <div {{ attributes }} v-if="errors.length > 0">
        <div class="font-medium text-red-600">
            Whoops! Something went wrong.
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">

            <li v-for="error in errors" :key="error">
                {{ error }}
            </li>

        </ul>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                errors: this.errors,
                attributes: this.attributes
            }
        },
        created() {

        },
        methods: {

        }
    };

</script>
