function deletar() {
    if (confirmado("Deseja Deletar esse Registro ?")) {
        document.forms[0].submit();
    } else {
        return false;
    }
}
