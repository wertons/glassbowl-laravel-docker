<x-app-layout>
    <x-slot name="header">
        <x-header title="Edit School">
        </x-header>
    </x-slot>

    <?php echo Form::open(['route' => ['schools.update', $school->id]]) ?>
    @csrf
    @method('PUT')

    <div class="flex flex-col">
        <?php echo Form::label('title', __('Title'), ['class' => '']) ?>
        <?php echo Form::text('title', $school->title, ['class' => '']) ?>

        <?php echo Form::label('description', __('Description (Optional)'), ['class' => '']) ?>
        <?php echo Form::text('description', $school->description, ['class' => '']) ?>

        <div class="flex flex-row space-x-1 mt-4">
            <x-form.button href="{{route('schools.index') }}" color="red" icon="arrow-left">{{__('Cancel')}}</x-form.button>
            <x-form.button color="green" icon="save" type="submit">{{__('Save')}}</x-form.button>
        </div>

        <?php echo Form::close(); ?>

    </div>

</x-app-layout>