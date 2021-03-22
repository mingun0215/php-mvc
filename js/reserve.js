

var application = function() {

}

$(function() {
	$("#number").change(function(){
		$(".hotel-view").find("td").not(".bg-primary").attr("class","");
		var num = $("#number").val();
		for(var f = 0; f < num.length; f++){
			$(".hotel-view").find("td:contains("+num[f]+")").addClass("bg-info");
		}
	});

	$(".hotel-view td").removeClass("bg-primary");

	$(".date").on("change", function() {
		var inDate = new Date($(".in_date").val()),
			outDate = new Date($(".out_date").val());

		if(inDate > outDate) {
			$(".in_date").val($(".out_date").val());
			alert("입실이 퇴실보다 클순 없습니다.")
		}
	});

})