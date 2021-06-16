<template>
    <div>
        this is test
        <inertia-link :href="test_url">team link?</inertia-link>
    </div>
</template>
<script>
export default {
    props:[
        'test_url'
    ]
}
</script>