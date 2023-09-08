
window.addEventListener('load', (ev) => {
    const cartForms = document.querySelectorAll('#addToCart')

    cartForms.forEach((cartForm) => {
        let formData = new FormData(cartForm)
        cartForm.addEventListener('submit', (ev) => {
            ev.preventDefault()
            console.log(formData)
            fetch(cartForm.getAttribute('action'), {
                method: 'POST',
                body: formData
            }).then((res) => res.text())
            .then((response) => {
                if(response == 'success') {
                    swal({
                        title: 'Added To Cart',
                        text: `${formData.get('product_name')}`
                    })
                }
            })
        })
    })
})
