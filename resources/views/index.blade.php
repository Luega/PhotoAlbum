<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>MyPhotos</title>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ==" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js" integrity="sha512-S5PZ9GxJZO16tT9r3WJp/Safn31eu8uWrzglMahDT4dsmgqWonRY9grk3j+3tfuPr9WJNsfooOR7Gi7HL5W2jw==" crossorigin="anonymous"></script>

		<link href="{{ asset('css/site.css') }}" rel="stylesheet">

		<script type="text/javascript">
			$(document).ready(function() {

				$.ajax({
					url : '/api/photos',
					method : 'get',
					success : function(data) {
						
						$('.container_imgs').html("");
						
						for(var i = data.length - 1; i >= 0; i--) {
							
							$('.container_imgs').append('<div class="container_img pointer"><img src="' + data[i].url + '" alt="" srcset=""></div>');
						}                            

					}
				});

			});
		</script>
	</head>
	<body>

		<header>

			<div>MyPhotos</div>
			<div>
				<a href="{{route('photos.index')}}">ADMIN</a>
			</div>

		</header>

		<main>

			<div class="container_imgs">
			</div>

		</main>


	</body>
</html>