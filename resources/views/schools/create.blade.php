<x-app-layout>
    <x-slot name="header">
        <x-header title="Create new School">
        </x-header>
    </x-slot>

    @if($team == null)
    <?php echo Form::open(['route' => 'schools.store']) ?>
    @csrf
    @method('POST')

    <div class="flex flex-col">
        <?php echo Form::label('title', __('Title'), ['class' => '']) ?>
        <?php echo Form::text('title', '', ['class' => '']) ?>

        <?php echo Form::label('description', __('Description (Optional)'), ['class' => '']) ?>
        <?php echo Form::text('description', '', ['class' => '']) ?>

        <div class="flex flex-row space-x-1 mt-4">
            <x-form.button href="{{route('schools.index') }}" color="red" icon="arrow-left">{{__('Cancel')}}</x-form.button>
            <x-form.button color="green" icon="save" type="submit">{{__('Save')}}</x-form.button>
        </div>

        <?php echo Form::close(); ?>

    </div>
    @else
    <?php echo Form::open(['route' => ['schools.teamStore', ['team' => $team]]]) ?>

    @csrf
    @method('POST')

    <div class="flex flex-col">
        <?php echo Form::label('title', __('Title'), ['class' => '']) ?>
        <?php echo Form::text('title', '', ['class' => '']) ?>

        <?php echo Form::label('description', __('Description (Optional)'), ['class' => '']) ?>
        <?php echo Form::text('description', '', ['class' => '']) ?>

        <div class="flex flex-row space-x-1 mt-4">
            <x-form.button href="{{route('schools.teamIndex', ['team' => $team]) }}" color="red" icon="arrow-left">{{__('Cancel')}}</x-form.button>
            <x-form.button color="green" icon="save" type="submit">{{__('Save')}}</x-form.button>
        </div>

        <?php echo Form::close(); ?>

    </div>
    @endif

</x-app-layout>