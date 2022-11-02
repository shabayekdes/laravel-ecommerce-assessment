<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('categories.update', $category) }}">
            @csrf
            @method('patch')
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')"/>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $category->name)" required autofocus/>
                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
            </div>
            <!-- Parent Name -->
            <div class="mt-4">
                <x-input-label for="parent_name" :value="__('Parent Name')"/>
                <x-text-input id="parent_name" class="block mt-1 w-full" type="text" name="parent_name" :value="old('parent_name', $category->parent_name)" autofocus/>
                <x-input-error :messages="$errors->get('parent_name')" class="mt-2"/>
            </div>
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Update') }}</x-primary-button>
                <a href="{{ route('categories.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
