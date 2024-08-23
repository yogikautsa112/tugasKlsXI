document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault()

    const query = document.getElementById('query').value;
    const textField = document.getElementById('textField');

    if (query.trim() === '') {
        textField.textContent = 'Tidak Mencari Data'
    } else {
        textField.textContent = 'Mencari data ' + query + '....'
    }
});
