setTimeout(function(){
	$("#1li1").fadeIn();
	$("#1info_li1").toggle();
	$("#next_1").click(function() {
		if (($("#1li1").attr("class")).indexOf("active") > -1) {
			$("#1li1").fadeOut();
			$("#1info_li1").hide();
			$("#1li1").removeClass("active");
			$("#1li2").fadeIn();
			$("#1li2").addClass("active");
			$("#prev_1").children().removeClass("is-disabled");
			$("#num_1").text("2 / 3");
			$("#1info_li2").fadeIn();
			$("#1info_li1").removeClass("active");
			$("#1info_li2").addClass("active");
		} else if (($("#1li2").attr("class")).indexOf("active") > -1) {
			$("#1li2").fadeOut();
			$("#1info_li2").hide();
			$("#1li2").removeClass("active");
			$("#1li3").fadeIn();
			$("#1li3").addClass("active");
			$(this).children().addClass("is-disabled");
			$("#num_1").text("3 / 3");
			$("#1info_li3").fadeIn();
			$("#1info_li2").removeClass("active");
			$("#1info_li3").addClass("active");
		}
	});
	$("#prev_1").click(function() {
		if (($("#1li2").attr("class")).indexOf("active") > -1) {
			$("#1li2").fadeOut();
			$("#1info_li2").hide();
			$("#1li2").removeClass("active");
			$("#1li1").fadeIn();
			$("#1li1").addClass("active");
			$(this).children().addClass("is-disabled");
			$("#num_1").text("1 / 3");
			$("#1info_li1").fadeIn();
			$("#1info_li2").removeClass("active");
			$("#1info_li1").addClass("active");
		} else if (($("#1li3").attr("class")).indexOf("active") > -1) {
			$("#1li3").fadeOut();
			$("#1info_li3").hide();
			$("#1li3").removeClass("active");
			$("#1li2").fadeIn();
			$("#1li2").addClass("active");
			$("#next_1").children().removeClass("is-disabled");
			$("#num_1").text("2 / 3");
			$("#1info_li2").fadeIn();
			$("#1info_li3").removeClass("active");
			$("#1info_li2").addClass("active");
		}
	});
	$("#2li1").fadeIn();
	$("#2info_li1").toggle();
	$("#next_2").click(function() {
		if (($("#2li1").attr("class")).indexOf("active") > -1) {
			$("#2li1").fadeOut();
			$("#2info_li1").hide();
			$("#2li1").removeClass("active");
			$("#2li2").fadeIn();
			$("#2li2").addClass("active");
			$("#prev_2").children().removeClass("is-disabled");
			$("#num_2").text("2 / 3");
			$("#2info_li2").fadeIn();
			$("#2info_li1").removeClass("active");
			$("#2info_li2").addClass("active");
		} else if (($("#2li2").attr("class")).indexOf("active") > -1) {
			$("21li2").fadeOut();
			$("#2info_li2").hide();
			$("#2li2").removeClass("active");
			$("#2li3").fadeIn();
			$("#2li3").addClass("active");
			$(this).children().addClass("is-disabled");
			$("#num_2").text("3 / 3");
			$("#2info_li3").fadeIn();
			$("#2info_li2").removeClass("active");
			$("#2info_li3").addClass("active");
		}
	});
	$("#prev_2").click(function() {
		if (($("#2li2").attr("class")).indexOf("active") > -1) {
			$("#2li2").fadeOut();
			$("#2info_li2").hide();
			$("#2li2").removeClass("active");
			$("#2li1").fadeIn();
			$("#2li1").addClass("active");
			$(this).children().addClass("is-disabled");
			$("#num_2").text("1 / 3");
			$("#2info_li1").fadeIn();
			$("#2info_li2").removeClass("active");
			$("#2info_li1").addClass("active");
		} else if (($("#2li3").attr("class")).indexOf("active") > -1) {
			$("#2li3").fadeOut();
			$("#2info_li3").hide();
			$("#2li3").removeClass("active");
			$("#2li2").fadeIn();
			$("#2li2").addClass("active");
			$("#next_2").children().removeClass("is-disabled");
			$("#num_2").text("2 / 3");
			$("#2info_li2").fadeIn();
			$("#2info_li3").removeClass("active");
			$("#2info_li2").addClass("active");
		}
	});
	$("#videoPlay_btn").click();
}, 1000);
