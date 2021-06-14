<x-app-layout>
    <x-slot name="header">
        <x-header title="My Teams">
            <x-form.action-button class="fa-plus" color="green" :href="route('teams.create', [])" />
        </x-header>
    </x-slot>
    <div class="overflow-x-auto">
        <table>
            <thead class="table-fixed">
                <tr>
                    <th class="w-3/8">{{__('Name')}}</th>
                    <th class="w-2/8">{{__('Description')}}</th>
                    <th class="w-1/8">{{__('Created')}}</th>
                    <th  class="w-1/8">{{__('Owner')}}</th>
                    <th class="actions w-1/4">{{__('Actions')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $i=>$team)

                @foreach($team->users as $user)
                @if($user->id == auth()->user()->id && $user->pivot->joined)
                <tr>
                    <td>
                        {{$team->name}}
                    </td>
                    <td>
                        {{$team->description}}
                    </td>
                    <td>
                        {{$team->created_at}}
                    </td>
                    <td>
                        @foreach($team->users as $user)
                        @if($user->pivot->isOwner)
                        {{$user->email}}
                        @endif
                        @endforeach
                    </td>
                    <td class="actions">
                        <x-form.action-button tooltip="Schools" color="yellow" class="fa-layer-group" :href="route('schools.teamIndex', ['team'=>$team])" />
                        <x-form.action-button tooltip="Members" color="blue" class="fa-users" :href="route('teams.members', ['team'=>$team])" />
                        <x-form.action-button tooltip="Edit" color="green" class="fa-edit" :href="route('teams.edit', ['team'=>$team])" />
                        <x-form.action-button tooltip="Delete" color="red" type="form" class="fa-trash" :href="route('teams.destroy', ['team'=>$team])" />
                    </td>
                </tr>
                @endif
                @endforeach

                @endforeach
            </tbody>

        </table>
    </div>
</x-app-layout>