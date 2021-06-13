<template>
    

<x-guest-layout>
    <x-auth-card>
        <slot name="logo">
            <a href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </slot>

        <!-- Validation Errors -->
        <AuthValidationErrors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <Label for="name" :value="Name" />

                <Input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <Label for="email" :value="Email" />

                <Input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <Label for="password" :value="Password" />

                <Input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <Label for="password_confirmation" :value="__('Confirm Password')" />

                <Input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    Already registered?
                </a>

                <Button class="ml-4">
                    Register
                </Button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
</template>
<script>
    import Header from './../components/Header.vue';
    import FormActionButton from './../components/form/FormActionButton.vue';
    import ApplicationLogo from './../components/ApplicationLogo.vue';
    import AuthSessionStatus from './../components/AuthSessionStatus.vue';
    import AuthValidationErrors from './../components/AuthValidationErrors.vue';
    import Button from './../components/Button.vue';
    import Input from './../components/Input.vue';
    import Label from './../components/Label.vue';





    export default {
        data() {
            return {
                schools: this.schools,
                team: this.team
            }
        },
        created() {

        },
        methods: {

        }
    };

</script>
