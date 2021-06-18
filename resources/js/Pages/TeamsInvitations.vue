<template>
    <LayoutsApp>
        <template v-slot:header>
            <ComponentsHeader title="My Invitations">
            </ComponentsHeader>
        </template>
        <div class="overflow-x-auto">
            <table>
                <thead>
                    <tr>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Description')}}</th>
                        <th>{{__('Created')}}</th>
                        <th>{{__('Owner')}}</th>
                        <th class="actions">{{__('Actions')}}</th>
                    </tr>
                </thead>
                <tbody>

                    <tr v-for="team in teams" :key="team.id">
                        <td>
                            {{team.name}}
                        </td>
                        <td>
                            {{team.description}}
                        </td>
                        <td>
                            {{team.created_at}}
                        </td>
                        <td>
                            <div v-for="user in team.users" :key="user.id">
                                <span v-if="user.pivot.isOwner">
                                    {{user.email}}
                                </span>
                            </div>
                        </td>
                        <td class="actions">
                            <x-form.action-button tooltip="Accept" color="green" type="post" class="fa-check"
                                :href="route('teams.accept', ['team'=>$team])" />
                            <x-form.action-button tooltip="Decline" color="red" type="post" class="fa-times"
                                :href="route('teams.decline', ['team'=>$team])" />
                        </td>
                    </tr>
                    @endif
                    @endforeach

                    @endforeach
                </tbody>

            </table>
        </div>
    </LayoutsApp>
</template>
<script>
    import LayoutsApp from './LayoutsApp.vue';
    import ComponentsHeader from './ComponentsHeader.vue';
    import ComponentsFormActionButton from './ComponentsFormActionButton.vue';

    export default {
        data() {
            return {}
        },
        components: {
            LayoutsApp,
            ComponentsHeader,
            ComponentsFormActionButton
        },
        props: [
            'teams',

        ],
        updated: function () {

        },

    }

</script>
