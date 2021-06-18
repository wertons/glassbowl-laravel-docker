<template>
    <LayoutGuest>
        <ComponentsAuthCard>
            <template v-slot:logo>
                <a href="/">
                    <ComponentsApplicationLogo  />
                </a>
            </template>

            <!-- Session Status -->
            <ComponentsAuthSessionStatus class="mb-4" :status="status" />

            <!-- Validation Errors -->
            <ComponentsAuthValidationErrors class="mb-4" :errors="errors" />

            <form @submit.prevent="submit">

                <!-- Email Address -->
                <div>
                    <ComponentsLabel for="email" :value="'Email'" />

                    <ComponentsInput id="email" class="block mt-1 w-full" type="email" name="email"
                         required autofocus v-model="form.email" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <ComponentsLabel for="password" :value="'Password'" />

                    <ComponentsInput id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" v-model="form.password" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="remember" v-model="form.remember">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>

                    <inertia-link class="underline text-sm text-gray-600 hover:text-gray-900 float-right"
                        href="/register">
                        Register
                    </inertia-link>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="" href="/login/google" type="button">
                        <ComponentsButton class="ml-3" type="button">
                            Login Google
                        </ComponentsButton>
                    </a>

                    <a class="" href="/login/github" >
                        <ComponentsButton class="ml-3" type="button">
                            Login Github
                        </ComponentsButton>
                    </a>

                    <ComponentsButton class="ml-3">
                        Log in
                    </ComponentsButton>
                </div>
            </form>
        </ComponentsAuthCard>
    </LayoutGuest>

</template>
<script>
    import LayoutGuest from './LayoutsGuest.vue';
    import ComponentsAuthCard from './ComponentsAuthCard.vue';
    import ComponentsApplicationLogo from './ComponentsApplicationLogo.vue';
    import ComponentsButton from './ComponentsButton.vue';
    import ComponentsLabel from './ComponentsLabel.vue';
    import ComponentsInput from './ComponentsInput.vue';
    import ComponentsAuthValidationErrors from './ComponentsAuthValidationErrors.vue';
    import ComponentsAuthSessionStatus from './ComponentsAuthSessionStatus.vue';

    export default {
        components: {
            LayoutGuest,
            ComponentsAuthCard,
            ComponentsApplicationLogo,
            ComponentsButton,
            ComponentsLabel,
            ComponentsInput,
            ComponentsAuthValidationErrors,
            ComponentsAuthSessionStatus
        },
        props: [
            'csrf_token',
            'status',
            'errors'
        ],
        data() {
            return {
                form: {
                    email: null,
                    password: null,
                    remember: null
                },
            }
        },
        methods: {
            submit() {
                this.$inertia.post('/login', {
                        email:document.querySelector("#email").value,
                        password:document.querySelector("#password").value,
                        remember:document.querySelector("#remember_me").value

                    })
            },
        }
    }

</script>
