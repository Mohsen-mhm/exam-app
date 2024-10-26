<div class="relative" x-data="{ toggleThemeDropDown: false }" @click.outside="toggleThemeDropDown = false" @close.stop="toggleThemeDropDown = false">
    <button id="toggleTheme" @click="toggleThemeDropDown = ! toggleThemeDropDown"
            class="relative me-3 inline-flex transition items-center text-sm font-medium text-center text-yellow-600 hover:text-yellow-700 focus:outline-none dark:hover:text-yellow-600 dark:text-yellow-400"
            type="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M9.173 14.83a4 4 0 1 1 5.657 -5.657"/>
            <path d="M11.294 12.707l.174 .247a7.5 7.5 0 0 0 8.845 2.492a9 9 0 0 1 -14.671 2.914"/>
            <path d="M3 12h1"/>
            <path d="M12 3v1"/>
            <path d="M5.6 5.6l.7 .7"/>
            <path d="M3 21l18 -18"/>
        </svg>
    </button>

    <div id="toggle-theme" x-show="toggleThemeDropDown"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         @click="toggleThemeDropDown = false"
         class="z-20 absolute w-auto max-w-sm bg-gray-200 divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-700">
        <ul class="py-2 text-base text-gray-800 dark:text-gray-100">
            <li onclick="Livewire.dispatch('change-theme', {theme: 'system'})" id="system-theme-option"
                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white cursor-pointer transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" class="me-2 text-purple-500">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path
                        d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z"/>
                    <path
                        d="M15.5 9.422c.312 .18 .503 .515 .5 .876v3.277c0 .364 -.197 .7 -.515 .877l-3 1.922a1 1 0 0 1 -.97 0l-3 -1.922a1 1 0 0 1 -.515 -.876v-3.278c0 -.364 .197 -.7 .514 -.877l3 -1.79c.311 -.174 .69 -.174 1 0l3 1.79h-.014z"/>
                </svg>
                System
            </li>
            <li onclick="Livewire.dispatch('change-theme', {theme: 'dark'})" id="dark-theme-option"
                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white cursor-pointer transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" class="me-2 text-sky-500">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path
                        d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"/>
                </svg>
                Dark
            </li>
            <li onclick="Livewire.dispatch('change-theme', {theme: 'light'})" id="light-theme-option"
                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white cursor-pointer transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" class="me-2 text-yellow-500">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M14.828 14.828a4 4 0 1 0 -5.656 -5.656a4 4 0 0 0 5.656 5.656z"/>
                    <path d="M6.343 17.657l-1.414 1.414"/>
                    <path d="M6.343 6.343l-1.414 -1.414"/>
                    <path d="M17.657 6.343l1.414 -1.414"/>
                    <path d="M17.657 17.657l1.414 1.414"/>
                    <path d="M4 12h-2"/>
                    <path d="M12 4v-2"/>
                    <path d="M20 12h2"/>
                    <path d="M12 20v2"/>
                </svg>
                Light
            </li>
        </ul>
    </div>
</div>
