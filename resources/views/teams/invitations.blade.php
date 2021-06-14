<x-app-layout>
    <x-slot name="header">
        <x-header title="My Invitations">
        </x-header>
    </x-slot>
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
                @foreach ($teams as $i=>$team)

                @foreach($team->users as $user)
                @if($user->id == auth()->user()->id && !$user->pivot->joined)
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
                        <x-form.action-button tooltip="Accept" color="green" type="post" class="fa-check" :href="route('teams.accept', ['team'=>$team])" />
                        <x-form.action-button tooltip="Decline" color="red" type="post" class="fa-times" :href="route('teams.decline', ['team'=>$team])" />
                    </td>
                </tr>
                @endif
                @endforeach

                @endforeach
            </tbody>

        </table>
    </div>
</x-app-layout>