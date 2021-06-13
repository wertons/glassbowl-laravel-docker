<template>
    
<x-guest-layout>
    <AuthCard>
        <slot name="logo">
            <a href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <Label for="password" :value="Password" />

                <Input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <Button>
                    {{ __('Confirm') }}
                </Button>
            </div>
        </form>
    </AuthCard>
</x-guest-layout>
</template>
<script>
import ApplicationLogo from './../components/form/ApplicationLogo.vue';
import Label from './../components/form/Label.vue';
import Button from './../components/Button.vue';
import Input from './../components/Input.vue';
import AuthCard from './../components/AuthCard.vue';


    export default {
  components: { Header, Label },
        data() {
            return {
                school: this.school,
                fish: this.fish
            }
        },
        created() {

        },
        methods: {

        }
    };

</script>
