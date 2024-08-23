document.addEventListener('DOMContentLoaded', function() {
    const statusRadios = document.querySelectorAll('input[name="status"]')
    const detailSection = document.getElementById('detail')
    const deksKerjaLabel = document.querySelector('#deskPekerjaan label')
    function updateForm() {
        const selectedStatus = document.querySelector('input[name="status"]:checked').value
        
        if (selectedStatus === 'alive') {
            detailSection.style.display = 'block'
            pekerjaanLabel.textContent = 'Pekerjaan Ayah'
            deskripsiLabel.textContent = 'Deskripsi Pekerjaan Ayah'
        } else if (selectedStatus === 'dead') {
            detailSection.style.display = 'block'
            deksKerjaLabel.textContent = 'Detail Pekerjaan Ayah Semasa Hidup'
        } else if (selectedStatus === 'unknown') {
            detailSection.style.display = 'none'
        }
    }

    statusRadios.forEach(radio => {
        radio.addEventListener('change', updateForm)
    })
    updateForm()
})
