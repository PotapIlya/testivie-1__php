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
		<div class="container p-5">
			<form id="formElem" method="POST" class="py-5" enctype="multipart/form-data">
				<div class="form-group">
					<input class="form-control-file" id="fileBox" name="files" type="file">
				</div>
				<button type="submit" class="btn btn-warning">Добавить</button>

			</form>

			<div class="" id="danger"></div>
			<div class="" id="success"></div>



			<div style="width: 300px" id="imgWrapper"></div>
		</div>
	</section>
</main>

<script>

	const formElem = document.getElementById('formElem');
	const fileBox = document.getElementById('fileBox');
	const imgWrapper = document.getElementById('imgWrapper');

	const success = document.getElementById('success');
	const danger = document.getElementById('danger');


    fileBox.addEventListener('change', () =>
    {
        let file = fileBox.files[0];
        let reader = new FileReader();
        reader.readAsDataURL(file);

        reader.addEventListener('load', () =>{
            imgWrapper.innerHTML = `<img style="max-width: 100%" src="${reader.result}" alt="">`
        });

        reader.addEventListener('error', () =>{
            console.log(reader.error);
        });
    })


    formElem.onsubmit = async (e) => {
        e.preventDefault();

        if (e.target[0].files[0] !== undefined)
		{
            let response = await fetch('./form.php', {
                method: 'POST',
                body: new FormData(formElem)
            });
            let result = await response.json();

            success.innerHTML = `<span class="alert alert-success">${result}</span>`
		}
        else
		{
            danger.innerHTML = '<span class="alert alert-danger">Вы не выбрали фаил!</span>'
		}


    };

</script>
</body>
</html>