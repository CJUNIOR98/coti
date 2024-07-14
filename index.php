<!DOCTYPE html>
<html lang="es">

<head>
    <base href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizador GoDaddy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/de5f134efd.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <div class="container-fluid py-5">
        <div class="row mb-5">
            <div class="col-xl-12">
                <h1 class="text-center text-primary">Cotizador</h1>
            </div>
        </div>
        <div class="row">
            <!--Form-->
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                    <button id="do_add_products">click</button>
                        <h4 class="card-title">Agregar productos</h4>
                        <form id="do_add_product">
                            <div class="form-group row">
                                <div class="col-xl-6">
                                    <label for="concepto">Prodcuto</label>
                                    <input type="text" class="form-control" id="producto" placeholder="Nombre del producto" required>
                                </div>
                                <div class="col-xl-3">
                                    <label for="concepto">Precio</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" id="precio" placeholder="0.00" required>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <label for="concepto">Cantidad</label>
                                    <input type="number" class="form-control" id="cantidad" value="1" min="1" max="99">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Agregar producto</button>
                                <button class="btn btn-danger" type="reset">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--Table-->
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Productos</h4>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th class="text-center">Precio</th>
                                    <th class="text-center">cantidad</th>
                                    <th class="text-right">Total</th>
                                    <th class="text-right">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Logotipo</td>
                                    <td class="text-center">$2,500.00</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$2,500.00</td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success   "><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>WPPS</td>
                                    <td class="text-center">$9,500.00</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$9,500.00</td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Website Security</td>
                                    <td class="text-center">$6,500.00</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$6,500.00</td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <!--Totals-->
                                <tr>
                                    <td colspan="3">Subtotal</td>
                                    <td colspan="1" class="text-right">$10,500.00</td>
                                </tr>
                                <tr>
                                    <td colspan="3">IVA</td>
                                    <td colspan="1" class="text-right">N/A</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Total</td>
                                    <td colspan="1" class="text-right">
                                        <h5><b>$10,500.00</b></h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <!--Main JS-->
    <script src="assets/js/main.js"></script>
</body>

</html>