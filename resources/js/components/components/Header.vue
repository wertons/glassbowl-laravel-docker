<template>
    <div>
        <h2 class="font-bold text-xl w-auto flex items-center ">
            {{ title}}

        </h2>
        <div class="float-right overflow-hidden self-end flex flex-row ml-auto">
            {{ slot }}
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            title: this.title,
            slot: this.slot
        }
    },
    created(){
        
    },
    methods:{

    }
};
</script>