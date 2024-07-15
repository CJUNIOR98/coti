$(document).ready(function () {
    //Agregar producto
    $('#do_add_product').on('submit', function (e) {
        e.preventDefault()
        var producto, precio, cantidad

        producto = $('#producto').val()
        precio = $('#precio').val()
        cantidad = $('#cantidad').val()
        action = 'add_producto'

        $.ajax({
            url: 'app/ajax.php',
            type: 'POST',
            dataType: 'JSON',
            data: {
                producto,
                precio,
                cantidad,
                action
            },
            beforeSend: function () {
                alert('Before sending...')
            },
        })
            .done(function (res) {
                if(res.status === 200){
                    alert(res.msg)
                }else{
                    alert(res.msg)
                }
            })
            .always(function () {})
            .fail(function (err) {
                alert('Entrando el falla...')
            })
    })

    //Cargar prducto

    //Borrar producto

    //Editar producto

    //Cargar producto individual
})
