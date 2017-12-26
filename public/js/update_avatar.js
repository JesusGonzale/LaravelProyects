var $avatar_input,$avatar_image,$avatar_form;
var avatar_url;
$(function(){
	$avatar_input = $('#avatar_input');
	$avatar_image = $('#avatar_image');
	$avatar_form  = $('#avatar_form');
	$avatar_small = $('#avatar_small');
	$avatar_small_x2 = $('#avatar_small_x2');
	$avatar_image.on('click',function(){
		$avatar_input.click();
	});
	avatar_url = $avatar_form.attr('action');
	$avatar_input.on('change',function(){
		//peticion Ajax
		var formData = new FormData();
		formData.append('avatar',$avatar_input[0].files[0]);


		$.ajax({
			url: avatar_url+'?'+$avatar_form.serialize(),
			method: 'POST',
			data: formData,
			processData: false,
			contentType: false,
		})
		.done(function(data){
			if(data.success)
				$avatar_image.attr('src','imagenes_general/usuarios/'+data.path);
				$avatar_small.attr('src','imagenes_general/usuarios/'+data.path);
				$avatar_small_x2.attr('src','imagenes_general/usuarios/'+data.path);
		})
		.fail(function(){
			alert('La imagen subida no es correcta');
		});
	});
});