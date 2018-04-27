'use strict';

$(document).ready(function() {
	// Verifica Modulo
	$(document).on("click", "#regButton", function(e){
		var send = true;
		var txt = "";
		var finalMessage = "";
		var lang_choise = $("#lang_choise").val();
		var color_success = "#dddddd";
		var color_warning = "#a94442";

		var nome            = $("#nome");
		var cognome         = $("#cognome");
		var ragione_sociale = $("#ragione_sociale");
		var indirizzo       = $("#indirizzo");
		var citta           = $("#citta");
		var cap             = $("#cap");
		var telefono        = $("#telefono");
		var cellulare       = $("#cellulare");
		var email           = $("#email");
		var password        = $("#password");
		var r_password      = $("#r_password");

		// Nome
		if(nome.val() == "") {
			nome.css("border-color",color_warning);
			send = false;
			txt += "<li>" + nome.attr("data-error") + "</li>";
		} else nome.css("border-color",color_success);

		// Cognome
		if(cognome.val() == "") {
			cognome.css("border-color",color_warning);
			send = false;
			txt += "<li>" + cognome.attr("data-error") + "</li>";
		} else cognome.css("border-color",color_success);

		// Ragione Sociale
		if(ragione_sociale.val() == "") {
			ragione_sociale.css("border-color",color_warning);
			send = false;
			txt += "<li>" + ragione_sociale.attr("data-error") + "</li>";
		} else ragione_sociale.css("border-color",color_success);

		// Indirizzo
		if(indirizzo.val() == "") {
			indirizzo.css("border-color",color_warning);
			send = false;
			txt += "<li>" + indirizzo.attr("data-error") + "</li>";
		} else indirizzo.css("border-color",color_success);

		// Citta
		if(citta.val() == "") {
			citta.css("border-color",color_warning);
			send = false;
			txt += "<li>" + citta.attr("data-error") + "</li>";
		} else citta.css("border-color",color_success);

		// CAP
		if(cap.val() == "") {
			cap.css("border-color",color_warning);
			send = false;
			txt += "<li>" + cap.attr("data-error") + "</li>";
		} else cap.css("border-color",color_success);

		// Telefono
		if(telefono.val() == "") {
			telefono.css("border-color",color_warning);
			send = false;
			txt += "<li>" + telefono.attr("data-error") + "</li>";
		} else telefono.css("border-color",color_success);

		// Cellulare
		if(cellulare.val() == "") {
			cellulare.css("border-color",color_warning);
			send = false;
			txt += "<li>" + cellulare.attr("data-error") + "</li>";
		} else cellulare.css("border-color",color_success);

		// Email
		if(email.val() == "") {
			email.css("border-color",color_warning);
			send = false;
			txt += "<li>" + email.attr("data-error-1") + "</li>";
		}
		// Email valida
		else if(!validateEmail(email.val())) {
			email.css("border-color",color_warning);
			send = false;
			txt += "<li>" + email.attr("data-error-2") + "</li>";
		} else email.css("border-color",color_success);

		// Password
        if(password.val() == "") {
            // colore bordo rosso
            password.css("border-color",color_warning);
            send = false;
            txt += "<li>" + password.attr("data-error") + "</li>";
        } 
        else {
            // ripristino colore bordo grigio
            password.css("border-color",color_success);

            // Ripeti Password
            if(r_password.val() == "") {
                // colore bordo rosso
                r_password.css("border-color",color_warning);
                send = false;
            	txt += "<li>" + r_password.attr("data-error-1") + "</li>";
            } 
            else {
                // ripristino colore bordo grigio
                r_password.css("border-color",color_success);

                // Password == Confirm Password
                if(password.val() != r_password.val())
                {
                    password.css("border-color",color_warning);
                    r_password.css("border-color",color_warning);
                    send = false;
                    txt += "<li>" + r_password.attr("data-error-2") + "</li>";
                } 
                else {
                    // ripristino colore bordo grigio
                    password.css("border-color",color_success);
                    r_password.css("border-color",color_success);
                }
            }
        }

		if(send) {
			$("#registrationForm").submit();
		} else {
			finalMessage = "<div class='alert alert-danger' role='alert'>";
			finalMessage += $("#regButton").attr("data-error") + "<br /><ul>" + txt + "</ul>";
			finalMessage += "</div>";
			$("#statusMessage").html(finalMessage);
			$("#statusMessage").fadeIn("fast");
			$('html, body').animate({scrollTop: 0}, 500);
		}
	});
});

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}