<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dropzone with Bootstrap</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form id="upload-form" class="dropzone">
			<div class="fallback">
				<input type="file" name="file" />
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/dropzone@5/dist/min/dropzone.min.js"></script>
	<script type="text/javascript">
		Dropzone.autoDiscover = false;
		var dropzone = new Dropzone('#upload-form', {
			url: 'dropzone/save', // Specify your server-side upload endpoint
			maxFilesize: 1, // Maximum file size in MB
			acceptedFiles: ".jpeg,.jpg,.png,.gif",
			success: function (file, response) {
				console.log('File uploaded:', file);
			},
			error: function (file, errorMessage) {
				console.error('File upload error:', errorMessage);
			}
		});
	</script>
</body>
</html>