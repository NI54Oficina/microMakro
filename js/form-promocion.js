$(document).ready(function(){
        
            $(".numeric").numeric();

            var form = $('#form_email');
			 form.validate({
				submitHandler: function(form) {
					
                    SendForm(form);
                
                return false;
				}
			});
			
			function SendForm(){
				$.post(form.attr('action'), form.serialize(), function(data) {
                        alert('Te has registrado con éxito en nuestra base de datos para recibir las ofertas y novedades por email.');
						console.log(data);
						$("#form-container").hide();
						$("#voucher-container").append(data);
                        form[0].reset();
						ShowLoading();
                    }).fail(function() {
                        alert("Error: Tu consulta no se ha podido enviar");
						ShowLoading();
                    });
			}
           

            $("input:checkbox").click(function() {
                if ($(this).is(":checked")) {
                    var group = "input:checkbox[name='" + $(this).attr("name") + "']";
                    $(group).prop("checked", false);
                    $(this).prop("checked", true);
                } else {
                    $(this).prop("checked", false);
                }
            });
        

        /********************************/
        $('select').change(function(e) {
            console.log(e.target);
            $(e.target).blur();
        });

        $('document').ready(function() {
            $('body').css('overflow-x', 'hidden');
        });

    
});

function resetForm() {
    document.getElementById("form_email").reset();
}
