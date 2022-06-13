<title>Buscar CEP com Javascript</title>
<meta charset="utf-8">
<style>
    * {
        font-family: segoe ui;
    }

    label {
        display: table;
        padding: 10px;
    }

    input {
        padding: 5px;
    }

    input[type="text"] {
        max-width: 400px;
        width: 100%;
    }
</style>


<div>
    <p>Informe o CEP para que possamos processar de forma automática as demais informações.</p>
    <label>CEP: <input type="text" id="txtCep"></label>
    <label>Cidade: <input type="text" id="txtCidade"></label>
    <label>Estado: <input type="text" id="txtEstado"></label>
    <label>Bairro: <input type="text" id="txtBairro"></label>
    <label>Rua: <input type="text" id="txtRua"></label>
    <label>Complemento: <input type="text" id="txtComplemento"></label>


    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="cep">CEP</label>
            <input type="text" name="cep" class="form-control" id="cep" aria-describedby="cep" placeholder="Digite um CEP" required>
        </div>
        <div class="form-group col-md-7">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" class="form-control" id="endereco" aria-describedby="endereco" placeholder="Rua da Felicidade, Nº 45" required>
        </div>
        <div class="form-group col-md-1">
            <label for="numero">Numero</label>
            <input type="text" name="numero" class="form-control" id="numero" aria-describedby="numero" placeholder="Nº" required>
        </div>
        <div class="form-group col-md-2">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" class="form-control" id="complemento" aria-describedby="complemento" placeholder="Complemento" required>
        </div>
        <div class="form-group col-md-4">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class="form-control" id="bairro" aria-describedby="bairro" placeholder="Bairro" required>
        </div><br>
        <div class="form-group col-md-4">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" class="form-control" id="cidade" aria-describedby="cidade" placeholder="Cidade" required>
        </div>
        <div class="form-group col-md-2">
            <label for="estado">Estado</label>
            <input type="text" name="estado" class="form-control" id="estado" aria-describedby="estado" placeholder="Estado" required>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/cep.js"></script>