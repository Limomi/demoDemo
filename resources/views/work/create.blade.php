<x-app-layout>

@if($workUser.empty())
    <form method="post" action="{{ route('work.store') }}">
    @csrf
        <div>
            <x-input-label for="title" :value="__('Название')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="path_img" :value="__('Ссылка на рисунок')" />
            <x-text-input id="path_img" class="block mt-1 w-full" type="text" name="path_img" :value="old('path_img')" required autofocus autocomplete="path_img" />
            <x-input-error :messages="$errors->get('path_img')" class="mt-2" />
        </div>
        
        <p>тип работы:</p>
        <input type="radio" name="category_id" value="0"><p>рисунок</p>
        <input type="radio" name="category_id" value="1"><p>Акварель</p>
        <input type="radio" name="category_id" value="2"><p>Гуашь</p>
        <input type="radio" name="category_id" value="3"><p>другое</p>
    </form>
@else
    <p>
        Вы уже отправили работу желаем вам удачи!
    </p>
@endif
</x-app-layout>