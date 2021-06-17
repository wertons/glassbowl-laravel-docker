<template>
    <LayoutGuest>
        <ComponentsAuthCard>
            <template v-slot:logo>
                <a href="/">
                    <ComponentsApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </template>

            <!-- Validation Errors -->
            <ComponentsAuthValidationErrors class="mb-4" :errors="errors" />

            <form @submit.prevent="submit">

                <!-- Name -->
                <div>
                    <ComponentsLabel for="name" :value="'Name'" />

                    <ComponentsInput id="name" class="block mt-1 w-full" type="text" name="name" required autofocus
                        v-model="form.name" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <ComponentsLabel for="email" :value="'Email'" />

                    <ComponentsInput id="email" class="block mt-1 w-full" type="email" name="email" required
                        v-model="form.email" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <ComponentsLabel for="password" :value="'Password'" />

                    <ComponentsInput id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" v-model="form.password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <ComponentsLabel for="password_confirmation" :value="'Confirm Password'" />

                    <ComponentsInput id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required v-model="form.password_confirmation" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <inertia-link class="underline text-sm text-gray-600 hover:text-gray-900" href="/login">
                        Already registered?
                    </inertia-link>

                    <ComponentsButton class="ml-4">
                        Register
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
                    name: null,
                    email: null,
                    password: null,
                    password_confirmation: null
                },
            }
        },
        methods: {
            submit() {
                this.$inertia.post('/register', {
                    email: document.querySelector("#email").value,
                    password: document.querySelector("#password").value,
                    password_confirmation: document.querySelector("#password_confirmation").value,
                    name: document.querySelector("#name").value
                })
            },
        }
    }

</script>
