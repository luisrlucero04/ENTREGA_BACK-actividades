document.addEventListener('DOMContentLoaded', function () {
    // Agregamos un evento de escucha al campo de entrada de texto
    var filterInput = document.getElementById('filterInput');
    filterInput.addEventListener('input', function () {
        var filterValue = filterInput.value.toLowerCase();
        var table = document.getElementById('myTable');
        var rows = table.getElementsByTagName('tr');
        
        // Iteramos sobre las filas de la tabla
        for (var i = 1; i < rows.length; i++) { // Comenzamos desde 1 para omitir la fila de encabezado
            var row = rows[i];
            var cells = row.getElementsByTagName('td');
            var rowVisible = false;
            
            // Iteramos sobre las celdas de la fila
            for (var j = 0; j < cells.length; j++) {
                var cell = cells[j];
                if (cell.innerHTML.toLowerCase().indexOf(filterValue) > -1) {
                    rowVisible = true;
                    break;
                }
            }
            
            // Mostramos u ocultamos la fila según si es visible o no
            if (rowVisible) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    });
});