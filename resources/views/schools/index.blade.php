<x-app-layout>
    <x-slot name="header">
        <x-header title="My Schools">
            @if($team == null)
            <x-form.action-button class="fa-plus" color="green" :href="route('schools.create', [])" />
            @else
            <x-form.action-button class="fa-plus" color="green" :href="route('schools.teamCreate', ['team' => $team])" />
            @endif
        </x-header>
    </x-slot>
    <div class="overflow-x-auto">
        <table>
            <thead>
                <tr>
                    <th>{{__('Title')}}</th>
                    <th>{{__('Description')}}</th>
                    <th>{{__('Created')}}</th>
                    <th class="actions">{{__('Actions')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schools as $i=>$school)
                <tr>
                    <td>
                        {{$school->title}}
                    </td>
                    <td>
                        {{$school->description}}
                    </td>
                    <td>
                        {{$school->created_at}}
                    </td>
                    <td class="actions">
                        @if($school->user_id != null)
                        @if($school->shared == false)
                        <x-form.action-button tooltip="Share" color="green" type="post" class="fa-share" :href="route('schools.share', ['school'=>$school])" />
                        @else
                        <x-form.action-button tooltip="Unshare" color="red" type="post" class="fa-share" :href="route('schools.unshare', ['school'=>$school])" />
                        @endif
                        @endif
                        <x-form.action-button tooltip="Edit" color="green" class="fa-edit" :href="route('schools.edit', ['school'=>$school])" />
                        <x-form.action-button tooltip="Fishes" color="yellow" class="fa-fish" :href="route('fish.index', ['school'=>$school])" />
                        <x-form.action-button tooltip="Delete" color="red" type="form" class="fa-trash" :href="route('schools.destroy', ['school'=>$school])" />
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</x-app-layout>