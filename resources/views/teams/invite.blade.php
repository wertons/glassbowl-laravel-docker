<x-app-layout>
    <x-slot name="header">
        <x-header title="Invite new member">
        </x-header>
    </x-slot>

    <?php echo Form::open(['route' => ['teams.sendInvite', 'team' => $team]]) ?>
    @csrf
    @method('POST')

    <div class="flex flex-col">
        <?php echo Form::label('email', __('Email'), ['class' => '']) ?>
        <?php echo Form::text('email', '', ['class' => '']) ?>

        <div class="flex flex-row space-x-1">
            <x-form.button href="{{route('teams.members', ['team' => $team]) }}" color="red" icon="arrow-left">{{__('Cancel')}}</x-form.button>
            <x-form.button color="green" icon="save" type="submit">{{__('Save')}}</x-form.button>
        </div>

        <?php echo Form::close(); ?>

    </div>

</x-app-layout>