document.getElementById('suggestionForm').addEventListener('submit', function(e) {
    const inputs = document.querySelectorAll('input, textarea');
    
    inputs.forEach(input => {
        if (input.value === '') {
            e.preventDefault();
            alert('All fields are required.');
        }
    });
});
