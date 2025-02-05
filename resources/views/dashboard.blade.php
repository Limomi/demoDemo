<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Задание') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    {{ __("
                        Приглашаем Вас принять участие конкурсе новогодних открыток.
                        ") }}
                </div>
                <div class="text-gray-900">
                    {{ __("
                        Присылайте рисунки на заданную тему. 
                        ") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("
                        Правила участия: 
                        ") }}
                </div>
                <ol>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            1.	Ребенок может выслать на конкурс только одну работу.  
                        ") }}
                        </div>
                    </li>
                    <li>
                        <div class=" text-gray-900">
                        {{ __("
                            2.	Работы, в соответствующих категорией, должны быть выполнены детьми самостоятельно и индивидуально. 
                        ") }}
                        </div>
                    </li>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            3.	Стиль всегда остаются на усмотрение участника.  
                        ") }}
                        </div>
                    </li>
                </ol>

                <div class="p-6 text-gray-900">
                    {{ __("
                        Номинации: 
                        ") }}
                </div>
                <ul>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            •	рисунок,  
                        ") }}
                        </div>
                    </li>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            •	акварель,  
                        ") }}
                        </div>
                    </li>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            •	гуашь,   
                        ") }}
                        </div>
                    </li>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            •	другое    
                        ") }}
                        </div>
                    </li>
                </ul>

                <div class="p-6 text-gray-900">
                    {{ __("
                        К участию в конкурсе допускаются:
                        ") }}
                </div>

                <div class="p-3 text-gray-900">
                    {{ __("
                        Ученики 1-11 классов школ, лицеев, гимназий, колледжей и любых других образовательных учреждений (без предварительного отбора. 
                        ") }}
                </div>

                <div class="p-6 text-gray-900">
                    {{ __("
                        Требования к работам:
                        ") }}
                </div>

                <ul>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            •	соответствие содержания творческой работы заявленной тематике   
                        ") }}
                        </div>
                    </li>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            •	актуальность конкурсной работы
                        ") }}
                        </div>
                    </li>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            •	творческая индивидуальность
                        ") }}
                        </div>
                    </li>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            •	оригинальность идеи, новаторство, творческий подход
                        ") }}
                        </div>
                    </li>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            •	полнота и образность раскрытия темы
                        ") }}
                        </div>
                    </li>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            •	качество оформления и наглядность материала
                        ") }}
                        </div>
                    </li>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            •	соответствие творческого уровня возрасту автора
                        ") }}
                        </div>
                    </li>
                    <li>
                        <div class="text-gray-900">
                        {{ __("
                            •	степень самостоятельности выполнения
                        ") }}
                        </div>
                    </li>
                </ul>
                
                <div class="p-6 text-gray-900">
                    {{ __("
                        Требование к файлу:
                        ") }}
                </div>
                
                <div class="text-gray-900">
                    {{ __("
                        •	Объем файла с работой не должен превышать 1 Мб.
                    ") }}
                </div>

                
                @if(Auth::check())
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('work.create') }}">
                {{ __('Выслать работать') }}
                </a>
    
                @else
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Принять участи') }}
                </a>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
