<x-app-layout>
    <x-slot name="header">
        <x-header title="My Fishes">
            <x-button class="mr-8 " color="blue" onclick="openAllFish()" >All fishes</x-button>
            <x-form.action-button class="fa-plus" color="green" :href="route('fish.create', ['school' => $school])"  />
        </x-header>
    </x-slot>
    <div class="overflow-x-auto">
        <table class="table-fixed">
            <thead>
                <tr>
                    <th class="w-1/2">{{__('Fish')}}</th>
                    <th class="w-1/4">{{__('Description')}}</th>
                    <th class="w-1/8">{{__('Created')}}</th>
                    <th class="w-1/8 actions">{{__('Actions')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fishs as $i=>$fish)
                <tr>
                    <td>

                        <a href="{{$fish->url}}" target="_blank">
                            <x-button class="bg-blue-50 text-blue-800">
                                {{$fish->title}}
                            </x-button>
                        </a>
                    </td>
                    <td>
                        {{$fish->description}}
                    </td>
                    <td>
                        {{$fish->created_at}}
                    </td>

                    <td class="actions">
                        <x-form.action-button color="green" class="fa-edit"
                            :href="route('fish.edit', ['school'=>$school , 'fish' => $fish])" />
                        <x-form.action-button color="red" type="form" class="fa-trash"
                            :href="route('fish.destroy', ['school' => $school, 'fish' => $fish])" />
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    @push('scripts')
    <script>
        function openAllFish(){
            if(confirm("Open all Fish in the school?")){
                @foreach ($fishs as $i=>$fish)
                    window.open('{{$fish->url}}','_blank');
                @endforeach

            }
        }
    </script>
    @endpush
</x-app-layout>
