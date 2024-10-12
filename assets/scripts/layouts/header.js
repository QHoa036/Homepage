function toggleLanguage() {
    var languageText = document.getElementById('languageText');
    if (languageText.innerText === 'Vi') {
        languageText.innerText = 'En';
    } else {
        languageText.innerText = 'Vi';
    }
}

const searchInput = document.getElementById('search-input');
const dropdownMenu = document.getElementById('searchbar-dropdown-menu');

// Show the dropdown when typing in the search input
searchInput.addEventListener('input', function() {
    if (searchInput.value.length > 0) {
        dropdownMenu.style.display = 'block';
    } else {
        dropdownMenu.style.display = 'none';
    }
});

// Hide dropdown when clicking outside
document.addEventListener('click', function(event) {
    if (!searchInput.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.style.display = 'none';
    }
});