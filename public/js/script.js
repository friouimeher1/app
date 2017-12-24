
$('#sucess').hide();
$('#form-submit').submit(function(event){
	event.preventDefault()
		var url =$(this).attr('action');
		var post =$(this).attr('method');
		var data = $(this).serialize();
		$.ajax({
			type:post,
			url:url,
			data:data,
			success:function(data){
				alert(data)
				$('#sucess').show(function(){
					$(this).html(data);
					$(this).hide(8000);
				})	
			}
		})


});


readbyajax();

function readbyajax(){

 $.ajax({
   type:"get",
   url:"{{route('post.index')}}",

   success:function(data)
   {
     $('.table-responsive').html(data);
   }
 });


}

function flashy(message, link) {
	var template = $($("#flashy-template").html());
	$(".flashy").remove();
	template.find(".flashy__body").html(message).attr("href", link || "#").end()
	 .appendTo("body").hide().fadeIn(300).delay(2800).animate({
		marginRight: "-100%"
	}, 300, "swing", function() {
		$(this).remove();
	});
}