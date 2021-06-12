<x-app-layout>
    <x-slot name="header">
        <x-header title="Create new Team">
        </x-header>
    </x-slot>

    <?php echo Form::open(['route' => 'teams.store']) ?>
    @csrf
    @method('POST')

    <div class="flex flex-col">
        <?php echo Form::label('name', __('Name'), ['class' => '']) ?>
        <?php echo Form::text('name', '', ['class' => '']) ?>

        <?php echo Form::label('description', __('Description (Optional)'), ['class' => '']) ?>
        <?php echo Form::text('description', '', ['class' => '']) ?>

        <div class="flex flex-row space-x-1">
            <x-form.button href="{{route('teams.index') }}" color="red" icon="arrow-left">{{__('Cancel')}}</x-form.button>
            <x-form.button color="green" icon="save" type="submit">{{__('Save')}}</x-form.button>
        </div>

        <?php echo Form::close(); ?>

    </div>

</x-app-layout>