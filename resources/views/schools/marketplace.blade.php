<x-app-layout>
    <x-slot name="header">
        <x-header title="Marketplace">
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
                <tr>
                    <td>
                        <input type="text" class="marketplace-searcher" name="title"> </td>
                    <td>
                        <input type="text" class="marketplace-searcher" name="description"> </td>
                    <td>
                        <input type="text" class="marketplace-searcher" name="created"> </td>
                    <td>
                        <input type="text" class="marketplace-searcher" name="email"> </td>
                    <td class="actions">
                    </td>
                </tr>
                @foreach ($schools as $i=>$school)
                <tr>
                    <td class="searchable-title">
                        {{$school->title}}
                    </td>
                    <td class="searchable-description">
                        {{$school->description}}
                    </td>
                    <td class="searchable-created">
                        {{$school->created_at}}
                    </td>
                    <td class="searchable-email">
                        {{$school->user->email}}
                    </td>
                    <td class="actions">
                        <x-form.action-button tooltip="Download" color="green" type="post" class="fa-download"
                            :href="route('schools.getSchool', ['school'=>$school])" />
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    @push('scripts')
    <script>
 document.querySelectorAll(".marketplace-searcher").forEach(input => {
            input.addEventListener("change", (ev) => {
            
                let text = ev.target.value; 
                document.querySelectorAll(".searchable-" + ev.target.name).forEach(row => {
                    if (!row.innerHTML.includes(text.trim())) {
                        row.parentElement.classList.add("hidden");
                    } else{
                        row.parentElement.classList.remove("hidden");

                    }
                });
            });
        });
    </script>
    @endpush
</x-app-layout>
