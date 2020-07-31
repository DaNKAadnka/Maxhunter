// Personal js

$.ajax({
	url: 'php/now_log.php',
	dataType: 'html',
	data: {},
	success: function(data) {
		$("#persNM-1").text(data);
	},
	complete: function() {
		$.ajax({
			url: 'php/get_inf.php',
			type: 'get',
			dataType: 'json',
			data: {"login" : $("#persNM-1").text()},
			success: function(data) {
				let cols = ["login", "email", "name", "surname", "city", "country", "job", "gender"];
				for (let i = 0; i < 8; ++i) {
					str = "#persNM-" + String(i+1);
					$(str).text(data[cols[i]]);
				}
			}
		});
		$.ajax({
			url: 'php/get_img.php',
			type: 'get',
			dataType: 'html',
			data: {"login" : $("#persNM-1").text()},
			success: function(data) {
				console.log(data);
				$("#per_i").attr("src", data);
			}
		});
	}
});

let female = "";

$(".dropdown-menu a").click(function() {
	female = ($(this).text());
	$(".dropdown-toggle").text(female);
});

$("#ch_i").click(function() {
	let dbinf = {
		"login": $("#persNM-1").text(),
		"email": $("#Email").val(),
		"name": $("#Name").val(),
		"surname": $("#Surname").val(),
		"city": $("#City").val(),
		"country": $("#Country").val(),
		"job": $("#Job").val(),
		"gender": female
	};
	$.ajax({
		url: 'php/set_inf.php',
		type: 'post',
		dataType: 'html',
		data: dbinf,
		success: function (data) {},
		complete: function() {
			$.ajax({
				url: 'php/get_inf.php',
				type: 'get',
				dataType: 'json',
				data: {"login" : $("#persNM-1").text()},
				success: function(data) {
					let cols = ["login", "email", "name", "surname", "city", "country", "job", "gender"];
					for (let i = 0; i < 8; ++i) {
						str = "#persNM-" + String(i+1);
						$(str).text(data[cols[i]]);
					}
				}
			});
		}
	})
});

$("#load_img").click(function() {
	let url = $("#url_img").val();
	if (url != "") {
		$.ajax({
		url: 'php/set_img.php',
		type: 'post',
		dataType: 'html',
		data: {"login": $("#persNM-1").text(), "url" : url}
	});
	}
});

$("#del_img").click(function() {
	$("#per_i").attr("src", "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScdHD-KQQkMQdJcXTSALcRVFp7chjRbA0e-w&usqp=CAU");
});