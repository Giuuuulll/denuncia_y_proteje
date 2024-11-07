document.getElementById('register-button').addEventListener('click', function() {
    const form = document.getElementById('register-form');
    if (form.classList.contains('hidden')) {
        form.classList.remove('hidden');
    } else {
        form.classList.add('hidden');
    }
});
