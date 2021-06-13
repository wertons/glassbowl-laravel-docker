<template>
    

<x-guest-layout>
    <x-auth-card>
        <slot name="logo">
            <a href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </slot>

        <!-- Session Status -->
        <AuthSessionStatus class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <AuthValidationErrors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <Label for="email" :value="Email" />

                <Input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <Label for="password" :value="Password" />

                <Input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                       Forgot your password?
                    </a>
                @endif

                <Button class="ml-3">
                    Log in
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
