function toggleLanguage() {
    var languageText = document.getElementById('languageText');
    if (languageText.innerText === 'Vi') {
        languageText.innerText = 'En';
    } else {
        languageText.innerText = 'Vi';
    }
}