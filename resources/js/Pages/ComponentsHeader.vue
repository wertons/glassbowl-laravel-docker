<template>
    <div>
        <h2 class="font-bold text-xl w-auto flex items-center unselectable">
            {{title}}

        </h2>
        <div class="float-right overflow-hidden self-end flex flex-row ml-auto">
            <slot></slot>
        </div>
    </div>
</template>
<script>
    export default {
        props:[
            'title'
        ]
    }

</script>
