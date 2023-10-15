const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
const themeToggleBtn = document.getElementById('theme-toggle');

function toggleIcons() {
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');
}

function toggleColorTheme() {
    const isDarkMode = document.documentElement.classList.contains('dark');
    const newColorTheme = isDarkMode ? 'light' : 'dark';
    document.documentElement.classList.toggle('dark');
    localStorage.setItem('color-theme', newColorTheme);
}

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

themeToggleBtn.addEventListener('click', () => {
    toggleIcons();
    toggleColorTheme();
});
