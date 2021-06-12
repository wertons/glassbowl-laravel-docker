<x-app-layout>
    <x-slot name="header">
        <x-header title="Update Fish">
        </x-header>
    </x-slot>

    <?php echo Form::open(['route' => ['fish.update', ['school' => $school->id, 'fish' => $fish->id]]]) ?>
    @csrf
    @method('PUT')

    <div class="flex flex-col">
        <?php echo Form::label('title', __('Title'), ['class' => '']) ?>
        <?php echo Form::text('title', $fish->title, ['class' => '']) ?>

        <?php echo Form::label('description', __('Description (Optional)'), ['class' => '']) ?>
        <?php echo Form::text('description', $fish->description, ['class' => '']) ?>

        <?php echo Form::label('url', __('URL'), ['class' => '']) ?>
        <?php echo Form::text('url', $fish->url, ['class' => '']) ?>

        <div class="flex flex-row space-x-1">
            <x-form.button href="{{route('fish.index', ['school' => $school->id]) }}" color="red" icon="arrow-left">{{__('Cancel')}}</x-form.button>
            <x-form.button color="green" icon="save" type="submit">{{__('Save')}}</x-form.button>
        </div>

        <?php echo Form::close(); ?>

    </div>

</x-app-layout>