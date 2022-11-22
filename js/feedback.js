jQuery(document).ready(function($) {
	$("#contact").submit(function() {
		let str = $(this).serialize();
		$.ajax({
			type: "post",
			url: "../wp-content/themes/personal-css-v3/mail.php", // здесь указываем путь к второму файлу
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="ok">Сообщение отправлено</div>'; // текст, если сообщение отправлено
				}
				else {result = msg;}
				$('#note').html(result);
				 $('.input', '#contact') // выполняем очистку полей после отправки сообщения
                .not(':button, :submit, :reset, :hidden')
                .val('')			 
			}
		});
		return false;
	});
});

jQuery(document).ready(function($) {
	$("#contact2").submit(function() {
		let str2 = $(this).serialize();
		$.ajax({
			type: "post",
			url: "../wp-content/themes/personal-css-v3/mail2.php", // здесь указываем путь к второму файлу
			data: str2,
			success: function(msg2) {
				if(msg2 == 'OK2') {
					result2 = '<div class="ok">Сообщение отправлено</div>'; // текст, если сообщение отправлено
				}
				else {result2 = msg2;}
				$('#note2').html(result2);
				 $('.input2', '#contact2') // выполняем очистку полей после отправки сообщения
                .not(':button, :submit, :reset, :hidden')
                .val('')			 
			}
		});
		return false;
	});
});
