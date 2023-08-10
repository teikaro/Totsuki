function toggleLanguageDropdown() {
    const dropdown = document.getElementById('languageOptions');
    if (dropdown.classList.contains('hidden')) {
        dropdown.classList.remove('hidden');
        document.addEventListener('click', closeOnOutsideClick);
    } else {
        dropdown.classList.add('hidden');
        document.removeEventListener('click', closeOnOutsideClick);
    }
}

function closeOnOutsideClick(event) {
    const dropdown = document.getElementById('languageOptions');
    const dropdownButton = document.querySelector('#languageDropdown button');

    if (!dropdown.contains(event.target) && !dropdownButton.contains(event.target)) {
        dropdown.classList.add('hidden');
        document.removeEventListener('click', closeOnOutsideClick);
    }
}