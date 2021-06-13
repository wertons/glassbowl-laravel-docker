<template>

    <x-guest-layout>
        <x-auth-card>
            <slot name="logo">
                <a href="/">
                    <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </slot>

            <div class="mb-4 text-sm text-gray-600">
               Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </div>

            <!-- Session Status -->
            <AuthSessionStatus class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <AuthValidationErrors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <Label for="email" :value="Email" />

                    <Input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <Button>
                        Email Password Reset Link
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
