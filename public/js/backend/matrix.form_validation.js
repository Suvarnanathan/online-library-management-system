
$(document).ready(function(){
	$('#newpwd').click(function(){
		var currentpw=$('#conpwd').val();
			//alert(currentpw);
			$.ajax({
					type:'get',
					url:'/check-pwd',
					data:{currentpw:currentpw},
					success:function(resp){
						alert(resp);
					},
					error:function(){
						alert('error');
					}

			});
	});
	
	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
	
	// Form Validation
    $("#basic_validate").validate({
	});
		$("#add_category").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			date:{
				required:true,
				date: true
			},
			url:{
				required:true,
				url: true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	
	$("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	$("#password_validate").validate({
		rules:{
			conpwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			newpwd:{
				required:true,
				minlength:6,
				maxlength:20,
				
			},
			confirmpwd:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#newpwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	$('#del').click(function(){
		
		if(confirm('r u sure u want to delete this category?')){
			return true;
		}
			return false;
			
	});
	
});
