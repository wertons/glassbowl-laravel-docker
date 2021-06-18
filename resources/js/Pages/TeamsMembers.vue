<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader title="Members">
            </ComponentsHeader>
        </template>
        <div class="overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined</th>
                        <th class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input id="email" class="" name="email" type="text" value="" placeholder="Email to invite">
                        </td>
                        <td>
                        </td>
                        <td class="actions">
                            <div class="flex flex-row space-x-1 mt-4">
                                <ComponentsFormButton color="green" icon="plus" type="submit" @clicked="submit">
                                    Invite User
                                </ComponentsFormButton>

                            </div>
                        </td>

                    </tr>
                    <tr v-for="user in team.users" :key="user.id">
                        <td>
                            {{user.name}}
                        </td>
                        <td>
                            {{user.email}}
                        </td>
                        <td>
                            <i v-if="user.pivot.joined"
                                class="rounded-full p-2 my-1 bg-green-500 text-white transition-colors duration-200 transform hover:bg-green-800 fas fa-check red">

                            </i>
                            <i v-else
                                class="rounded-full p-2 my-1 bg-red-500 text-white transition-colors duration-200 transform hover:bg-red-800 fas fa-times red">

                            </i>
                        </td>
                        <td class="actions">
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </LayoutsApp>
</template>
<script>
    import LayoutsApp from './LayoutsApp.vue';
    import ComponentsHeader from './ComponentsHeader.vue';
    import ComponentsFormActionButton from './ComponentsFormActionButton.vue';
    import ComponentsFormButton from './ComponentsFormButton.vue';

    export default {
        data() {
            return {}
        },
        components: {
            LayoutsApp,
            ComponentsHeader,
            ComponentsFormActionButton,
            ComponentsFormButton
        },
        props: [
            'team',

        ],
        updated: function () {},
        methods: {
            submit() {
                this.$inertia.post('/teams/' + this.team.id + '/invite', {
                    email: document.querySelector("#email").value,

                })
            }
        }

    }

</script>
