<x-app-layout>
    <x-slot name="header">
        <x-header title="Members">
        </x-header>
    </x-slot>
    <div class="overflow-x-auto">
        <table>
            <thead>
                <tr>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('Joined')}}</th>
                    <th class="actions">{{__('Actions')}}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
            <?php echo Form::open(['route' => ['teams.sendInvite', 'team' => $team]]) ?>
            @csrf
            @method('POST')
        
                    <td>
                    </td>
                    <td>
                        <input class="" name="email" type="text" value="" placeholder="Email to invite">
                    </td>
                    <td>
                    </td>
                    <td class="actions">
                        <div class="flex flex-row space-x-1 mt-4">
                            <x-form.button color="green" icon="plus" type="submit">Invite User</x-form.button>
                        </div>
                    </td>
                    <?php echo Form::close(); ?>

                </tr>
                @foreach ($team->users as $i=>$user)
                <tr>
                    <td>
                        {{$user->name}}
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>@if($user->pivot->joined == true)
                        <i class="rounded-full p-2 my-1 bg-green-500 text-white transition-colors duration-200 transform hover:bg-green-800 fas fa-check red"></i>
                        @else
                        <i class="rounded-full p-2 my-1 bg-red-500 text-white transition-colors duration-200 transform hover:bg-red-800 fas fa-times red"></i>
                        @endif
                    </td>
                    <td class="actions">
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</x-app-layout>