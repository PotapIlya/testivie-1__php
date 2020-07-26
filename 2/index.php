<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>

<main>

	<section>
		<div class="container py-5">
			<form id="formElem" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<input class="form-control-file" required accept=".txt" id="fileBox" name="files" type="file">
				</div>
				<div class="form-group">
					<input class="form-control" required  placeholder="Выберите символ, который хотите заменить" name="first" type="text">
				</div>
				<div class="form-group">
					<input class="form-control" required placeholder="Выберите символ, НА который хотите заменить" name="second" type="text">
				</div>

				<button type="submit" class="btn btn-warning">Добавить</button>
			</form>



			<div class="py-4" id="message"></div>
		</div>
	</section>
</main>


<script>

    const formElem = document.getElementById('formElem');
    const message = document.getElementById('message');


    formElem.onsubmit = async (e) => {
        e.preventDefault();

            let response = await fetch('./form.php', {
                method: 'POST',
                body: new FormData(formElem)
            });
            let result = await response.json();

            message.innerHTML = `<p class="h4 p-3 border border-secondary">${result}</p>`
    };

</script>
</body>
</html>