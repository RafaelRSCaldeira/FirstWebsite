function numberParaReal(numero) {
    return "R$ " + numero.toFixed(2).replace(".", ",");
}

function realParaNumber(texto) {
    var compativelComParseFloat = texto.replace("R$ ", "");
    compativelComParseFloat = compativelComParseFloat.replace(",", ".");
    var valor = parseFloat(compativelComParseFloat);
    return valor;
}