$(document).ready(function(){
	$("#Cep").focusout(function(){
			var cep = $("#Cep").val();
			cep = cep.replace("-", "");

			var urlStr = "https://viacep.com.br/ws/"+ cep +"/json/";
		
			$.ajax({
				url : urlStr,
				type : "get",
				dataType : "json",
				success : function(data){
					console.log(data);
					
					$("#Cidade").val(data.localidade);
					$("#Estado").val(data.uf);
					$("#Bairro").val(data.bairro);
					$("#Rua").val(data.logradouro);
					$("#Complemento").val(data.complemento);
				},
				error : function(erro){
					console.log(erro);
				}
			});
	});
});



