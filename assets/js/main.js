$(document).ready(function () {
    //Agregar producto
    $('#do_add_product').on('submit', function (e) {
        e.preventDefault()
        var producto, precio, cantidad

        producto = $('#producto').val()
        precio = $('#precio').val()
        cantidad = $('#cantidad').val()

        $.ajax({
            url: 'app/ajax.php',
            type: 'POST',
            dataType: 'JSON',
            data: {
                producto,
                precio,
                cantidad,
            },
            beforeSend: function () {
                alert('Before sending...')
            },
        })
    })

    //Cargar prducto

    //Borrar producto

    //Editar producto

    //Cargar producto individual
})
