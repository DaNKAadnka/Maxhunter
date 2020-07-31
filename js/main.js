// Main jsd

let is_l = false;
let name = "";
let password = "";

$.ajax({
	url: 'php/now_log.php',
	type: 'post',
	dataType: 'html',
	data: {},
	success: function(data) {
		if (data != "false") {
			is_l = false;
			name = data;
			$("#a_bx").attr("hidden", "true");
			let bb = $(".form_log");
			bb.append("<a href='person.php' class='nav-link mr-2 d-inline-block' id='timedtext'>" + String(name) + "</a>");
			$(".ff1").removeAttr('hidden');
		}
	}
});

$("#log_b-1").click(function() {
	let nm = $("#staticEmail").val();
	let ps = $("#inputPassword").val();
	
	$.ajax({
		url : "php/log.php",
		type: "get",
		data: {"name" : nm, "pass" : ps},
		dataType: 'html',
		success: function(data) {
			let Allert = $("#is_loged");
			Allert.removeAttr('hidden');
			// console.log(Allert.text());
			if (data == "true") {
				is_l = true;
				name = nm;
				password = ps;
				Allert.addClass("alert-success");
				Allert.removeClass('alert-danger');
				Allert.text("Здравствуйте, " + String(nm));
			} else {
				Allert.addClass("alert-danger");
				Allert.removeClass("alert-success");
				Allert.text("Неверный логин или пароль");
			}
			// console.log(Allert.attr("hidden"));
		}
	});
});

$("#log_b-2").click(function() {
	let nm = $("#staticEmail").val();
	let ps = $("#inputPassword").val();
	
	$.ajax({
		url : "php/set.php",
		type: "get",
		data: {"name" : nm, "pass" : ps},
		dataType: 'html',
		success: function(data) {
			let Allert = $("#is_loged");
			Allert.removeAttr('hidden');
			if (data == "true") {
				is_l = true;
				name = nm;
				password = ps;
				Allert.addClass("alert-success");
				Allert.removeClass("alert-danger");
				Allert.text("Здравствуйте, " + String(nm));
			} else {
				Allert.removeClass("alert-success");
				Allert.addClass("alert-danger");
				Allert.text(data);
			}
		}
	});
});

$(".close, #ch_i").click(function() {
	let Alert = $("#is_loged");
	Alert.attr("hidden", "true");
	// console.log("close");
	if (is_l) {
		$("#a_bx").attr("hidden", "true");
		let bb = $(".form_log");
		bb.append("<a href='person.php' class='nav-link mr-2 d-inline-block' id='timedtext'>" + String(name) + "</a>");
		$(".ff1").removeAttr('hidden');
	}
	$(".dropdown-toggle").text("Your Gender");

});

$("#logout").click(function() {
	$('#logform')[0].reset();
	is_l = false;
	name = "";
	password = "";
	$("#timedtext").remove();
	$(".ff1").attr('hidden', "true");
	$("#a_bx").removeAttr('hidden');
	$.ajax({
		url: 'php/logout.php',
		type: 'post',
		data: {},
		success : function(data) {
			// console.log("Bye");
		}
	});
});