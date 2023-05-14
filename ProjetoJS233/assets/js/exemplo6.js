$(document).ready(function () {
    $("#verificar").click(function () {
        var valor = $("input[name='campo1'").val();
        $("input[name='campo2'").val(valor);
        $("input[name='campo1'").val("");
        var valor2 = $('#campo1').val();

        var inteiro = parseFloat(valor2);

        var quebrado = parseFloat(valor2);
    });
});
