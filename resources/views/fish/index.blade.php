<x-app-layout>
    <x-slot name="header">
        <x-header title="My Fishes">
            <x-form.action-button class="fa-plus" color="green" :href="route('fish.create', ['school' => $school])" />
        </x-header>
    </x-slot>
    <div class="overflow-x-auto">
        <table>
            <thead>
                <tr>
                    <th>{{__('Title')}}</th>
                    <th>{{__('Description')}}</th>
                    <th>{{__('URL')}}</th>
                    <th>{{__('Created')}}</th>
                    <th class="actions">{{__('Actions')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fishs as $i=>$fish)
                <tr>
                    <td>
                        {{$fish->title}}
                    </td>
                    <td>
                        {{$fish->description}}
                    </td>
                    <td>
                        {{$fish->url}}
                    </td>
                    <td>
                        {{$fish->created_at}}
                    </td>

                    <td class="actions">
                        <x-form.action-button tooltip="Edit" color="green" class="fa-edit" :href="route('fish.edit', ['school'=>$school , 'fish' => $fish])" />
                        <x-form.action-button tooltip="Delete" color="red" type="form" class="fa-trash" :href="route('fish.destroy', ['school' => $school, 'fish' => $fish])" />
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</x-app-layout>