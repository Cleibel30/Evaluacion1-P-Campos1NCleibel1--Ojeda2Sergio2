<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Pedido - E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success bg-gradient text-white py-3">
                    <h4 class="mb-0"><i class="bi bi-cart-plus me-2"></i>Registrar Nuevo Pedido</h4>
                </div>
                
                <div class="card-body p-4">
                    <p class="text-muted mb-4 small">Complete todos los campos para añadir un nuevo registro al sistema de inventario (Enunciado 10)[cite: 50, 78].</p>

                    <form action="{{ route('pedidos.store') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="codigo_rastreo" class="form-label fw-bold">Código de Rastreo</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="bi bi-hash"></i></span>
                                    <input type="text" name="codigo_rastreo" id="codigo_rastreo" class="form-control" placeholder="Ej: PED-100" required>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="total" class="form-label fw-bold">Monto Total ($)</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="bi bi-currency-dollar"></i></span>
                                    <input type="number" step="0.01" name="total" id="total" class="form-control" placeholder="0.00" required>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="cantidad_items" class="form-label fw-bold">Cantidad de Items</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="bi bi-box-seam"></i></span>
                                    <input type="number" name="cantidad_items" id="cantidad_items" class="form-control" placeholder="Cantidad" required>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="pagado" class="form-label fw-bold">Estado del Pago</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="bi bi-credit-card"></i></span>
                                    <select name="pagado" id="pagado" class="form-select" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="1">Confirmado (Pagado)</option>
                                        <option value="0">Pendiente de Pago</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('pedidos.index') }}" class="btn btn-outline-secondary px-4">
                                <i class="bi bi-x-circle me-1"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-success px-4 shadow-sm">
                                <i class="bi bi-check-circle me-1"></i> Guardar Pedido
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-4 text-center text-muted small">
                <p>UPT Aragua "Federico Brito Figueroa" - PNf Informática [cite: 5, 7]</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>