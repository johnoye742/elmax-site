
window.addEventListener('load', (ev) => {
    console.log('bro I exist')
    const form = document.getElementById('sign')
    form.addEventListener('submit', (ev) => {
        ev.preventDefault()
        ev.stopPropagation()
        let data = new FormData(form);
        if(data.get('pwd') == data.get('pwd2')) {
            form.submit();
        } else {
            swal({
                title: 'Passwords do not match!',
                text: 'Please make sure the passwords match',
                icon: 'error'
            })
        }
    })
})

