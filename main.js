let colors = ["red", "blue", "green"];
let blocks = [".img-1", ".img-2", ".img-3"];
let cur = 0;

//Раздача .img разных цветов
// for (let i = 0; i < 3; ++i){
// 	$(blocks[i]).css({
// 		"background-color": colors[i]
// 	});
// }


//Выравнивание .lister-r ровно по краю .slider

function fcc() {
	//Рассчеты
	let zz = $(".slider").css("width");
	let ss = $('.lister-r').css("width");
	let a = Number(zz.slice(0, zz.length-2));
	let b = Number(ss.slice(0, ss.length-2));
	let x = a - 2*b;

	// console.log(aa+bb);
	// console.log(a+b);

	//Тестирование
	//console.log(x);

	//Сам сдвиг
	$(".lister-r").css({
		"margin-left" : String(x) + "px"
	});
}

fcc();
for (let i = 1; i < 3; i++) {
	$(blocks[i]).hide();
}

//Тестирование метода animate

let is_clicked = false;

$(".test").on ("click", function(){
	//console.log(is_clicked);
	let d = String($("body").width() - $(this).width());
	if (is_clicked == false){
		$(".t1").animate ({
			marginLeft : d
		} , "fast");
		$(".t2").animate ({
			marginLeft : d
		} , "fast");
		is_clicked = true;
	} else {
		$(".t1").animate({
			marginLeft: "0px"
		} , "slow");
		$(".t2").animate({
			marginLeft: "0px"
		} , "slow");
		is_clicked = false;
	}
});


function get_i (i) {
	if (i < 0) {
		return 3 + i;
	} else if (i >= 3) {
		return i % 3;
	} else {
		return i;
	}
}

// Функционал слайдера

$(".lister-r").on("click", function() {
	$(blocks[cur]).fadeOut(700);
	cur = get_i(cur+1);
	$(blocks[cur]).fadeIn(700);
});

$(".lister-l").on("click", function() {
	$(blocks[cur]).fadeOut(700);
	cur = get_i(cur-1);
	$(blocks[cur]).fadeIn(700);
});
