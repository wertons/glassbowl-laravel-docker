<template>
    <form class="inline"  @submit.prevent="confirm('Are you sure?') && submitForm" v-if="type == 'form'">
        <span>

            <a
                :class="`tooltip fa rounded-full p-2 my-1 bg-${{color}}-500 text-white transition-colors duration-200 transform hover:bg-${{color}}-800`">
                <span class="tooltiptext">{{tooltip}}</span>
            </a>
        </span>

    </form>
    <form class="inline" @submit.prevent="submit"
        v-else-if="type == 'post'">
        <span>

            <a
                :class="`tooltip fa rounded-full p-2 my-1 bg-${{color}}-500 text-white transition-colors duration-200 transform hover:bg-${{color}}-800`">
                <span class="tooltiptext">{{tooltip}}</span>
            </a>
        </span>
    </form>

    <span v-else>

        <a
            :class="`tooltip fa rounded-full p-2 my-1 bg-${{color}}-500 text-white transition-colors duration-200 transform hover:bg-${{color}}-800`">
            <span class="tooltiptext">{{tooltip}}</span>
        </a>
    </span>
</template>
<script>
    export default {
        props: [
            'color',
            'icon',
            'type',
            'tooltip'
        ],
          data() {
            return {
                iconClass: false
            }
        },
        created: function () {
            this.color == this.color ?? 'gray';
            this.iconClass = " fa fa-" + (this.icon ?? 'home');
            this.type = this.type ?? 'link';
            this.tooltip = this.tooltip ?? 'Blank';
        },
        methods:{
            submitForm() {
                this.$inertia.delete(this.href, {
                    email:document.querySelector("#email").value,
                    password:document.querySelector("#password").value,
                    remember:document.querySelector("#remember_me").value

                });
              
              
            },
            submit(){
                  this.$inertia.post(this.href, {
                    email:document.querySelector("#email").value,
                    password:document.querySelector("#password").value,
                    remember:document.querySelector("#remember_me").value

                });
            }
        }
    }

</script>
