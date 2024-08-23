let timeout;

function timer() {
    timeout = setTimeout(() => {
        alert("Waktu Anda habis!");
    }, 10000);
}

document.getElementById("btnSubmit").addEventListener("click", function(e) {
    e.preventDefault();
    clearTimeout(timeout);

    let nama = document.getElementById("nama").value;
    let umur = document.getElementById("umur").value;
    let gender = document.querySelector('input[name="gender"]:checked').value;

    let resultDiv = document.getElementById("result");
    resultDiv.innerHTML = `Nama kamu: ${nama}, Umur kamu: ${umur}, Jenis Kelamin: ${gender}`;
});
