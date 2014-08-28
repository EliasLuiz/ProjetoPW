function alfanumerico(texto) {
    //Letras e numeros
    var Exp = /^[0-9A-z]+$/;
    return (Exp.test(texto));
}
function alfabetico(texto) {
    //Letras
    var Exp = /^[A-z]+$/;
    return (Exp.test(texto));
}
function alfaNumericoEsp(texto) {
    //Caracteres alfanumericos e especiais
    var Exp = /^[0-9A-z\s\.\-_]+$/;
    return (Exp.test(texto));
}
function alfabeticoEsp(texto) {
    //Letras e espacos
    var Exp = /^[A-z\s]+$/;
    return (Exp.test(texto));
}
function numerico(texto) {
    //Letras e espacos
    var Exp = /^[0-9]+$/;
    return (Exp.test(texto));
}
function validaEmail(texto) {
    var Exp = /^[\w]+@[\w]+\.[\w|\.]+$/;
    return (Exp.test(texto));
}
function validaDDD(texto) {
    var Exp = /^[\d]{2}$/;
    return (Exp.test(texto));
}
function validaTelefone(texto) {
    var Exp = /^(([\d]{8,9}))$/;
    return (Exp.test(texto));
}
function validaCPF(texto) {
    var Exp = /^[\d]{11}$/;
    return (Exp.test(texto));
}
function validaRG(texto) {
    var Exp = /^([A-Z]{1,2})+([\d]{7,8})$/;
    return (Exp.test(texto));
}