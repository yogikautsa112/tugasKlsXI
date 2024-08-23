document.getElementById('myBtn').addEventListener('click', function() {
    let count = 5;
    document.getElementById('message').style.display = 'inline'
    document.getElementById('count').style.display = 'inline'
    document.getElementById('count').textContent = count

    let timer = setInterval(function() {
        count--
        document.getElementById('count').textContent = count
        if (count <= 0) {
            clearInterval(timer);
            document.getElementById('message').style.display = 'none'
            document.getElementById('count').style.display = 'none'
        }
    }, 1000)
})
