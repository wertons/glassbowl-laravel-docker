<template>
<Layout>
    <div>
        this is test
        <inertia-link :href="test_url">team link?</inertia-link>
    </div>
    <div>
        this is second slot
    </div>
</Layout>
</template>
<script>
import LayoutApp from './LayoutsApp.vue';
export default {
    components: {
      Layout,
    },
    props:[
        'test_url'
    ]
}
</script>