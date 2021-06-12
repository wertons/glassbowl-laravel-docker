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

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</x-app-layout>