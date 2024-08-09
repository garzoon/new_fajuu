var categoriaSelect = document.getElementById("prod_categoria");
var subcategoriaSelect = document.getElementById("prod_subcategoria");

var newCategorias = {
    Refrigerado: ['Materia Prima', 'Comidas', 'Panificados', 'Lacteos', 'Frutas y Verduras'],
    Congelado: ['Materia Prima', 'Comidas', 'Panificados', 'Lacteos'],
    Seco: ['Materia Prima', 'Comidas', 'Abarrotes', 'Panificados', 'Lacteos', 'Bebidas', 'Envases y Desechables', 'Papel'],
};

function updateSubcategorias(){
    var categoriaSeleccionada = categoriaSelect.value;

    var subcategorias = newCategorias[categoriaSeleccionada] || [];

    subcategoriaSelect.innerHTML = "";

    subcategorias.forEach(function(subcategorias) {
        var option = document.createElement("option");
        option.value = subcategorias;
        option.text = subcategorias;
        subcategoriaSelect.appendChild(option);
    });
}
categoriaSelect.addEventListener("change", updateSubcategorias);
updateSubcategorias();