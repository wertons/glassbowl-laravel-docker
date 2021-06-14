<x-app-layout>
    <x-slot name="header">
        <x-header title="My downloaded Schools">
        </x-header>
    </x-slot>
    <div class="overflow-x-auto">
        <table>
            <thead>
                <tr>
                    <th>{{__('Title')}}</th>
                    <th>{{__('Description')}}</th>
                    <th>{{__('Created')}}</th>
                    <th>{{__('Owner')}}</th>
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
                    <td>
                        {{$school->user->email}}
                    </td>
                    <td class="actions">
                        <x-form.action-button tooltip="Fishes" color="yellow" class="fa-fish" :href="route('fish.indexShared', ['school'=>$school])" />

                        <x-form.action-button tooltip="Remove" color="red" type="post" class="fa-download" :href="route('schools.cancelDownloadSchool', ['school'=>$school])" />
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</x-app-layout>