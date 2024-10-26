import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const pageLoader = document.getElementById('pageLoader')
    pageLoader.classList.remove('hidden');

    setTimeout(function () {
        pageLoader.classList.add('hidden');
    }, 500);

})
document.addEventListener('livewire:init', () => {
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const systemThemeOption = document.getElementById('system-theme-option');
    const darkThemeOption = document.getElementById('dark-theme-option');
    const lightThemeOption = document.getElementById('light-theme-option');
    const applyTheme = (theme) => {
        removeActiveThemeClass();
        document.querySelector('html').classList.remove('dark');
        if (theme === 'system') {
            systemThemeOption.classList.add('bg-gray-500')
            if (systemPrefersDark) {
                document.querySelector('html').classList.add('dark');
            }
        } else if (theme === 'dark') {
            darkThemeOption.classList.add('bg-gray-500')
            document.querySelector('html').classList.add('dark');
        } else if (theme === 'light') {
            document.querySelector('html').classList.add('light');
            lightThemeOption.classList.add('bg-gray-50')
        }
    };

    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        applyTheme(savedTheme);
    } else {
        applyTheme('system');
    }

    Livewire.on('change-theme', (e) => {
        const selectedTheme = e.theme;
        localStorage.setItem('theme', selectedTheme);
        applyTheme(selectedTheme);
    });

    function removeActiveThemeClass() {
        if (systemThemeOption.classList.contains('bg-gray-500')) {
            systemThemeOption.classList.remove('bg-gray-500')
        }
        if (darkThemeOption.classList.contains('bg-gray-500')) {
            darkThemeOption.classList.remove('bg-gray-500')
        }
        if (lightThemeOption.classList.contains('bg-gray-50')) {
            lightThemeOption.classList.remove('bg-gray-50')
        }
    }
})
