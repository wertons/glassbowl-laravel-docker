<x-app-layout>
    <x-slot name="header">
        <x-header title="Edit Team">
        </x-header>
    </x-slot>

    <?php echo Form::open(['route' => ['teams.update', $team->id]]) ?>
    @csrf
    @method('PUT')

    <div class="flex flex-col">
        <?php echo Form::label('name', __('Name'), ['class' => '']) ?>
        <?php echo Form::text('name', $team->name, ['class' => '']) ?>

        <?php echo Form::label('description', __('Description (Optional)'), ['class' => '']) ?>
        <?php echo Form::text('description', $team->description, ['class' => '']) ?>

        <div class="flex flex-row space-x-1 mt-4">
            <x-form.button href="{{route('teams.index') }}" color="red" icon="arrow-left">{{__('Cancel')}}</x-form.button>
            <x-form.button color="green" icon="save" type="submit">{{__('Save')}}</x-form.button>
        </div>

        <?php echo Form::close(); ?>

    </div>

</x-app-layout>