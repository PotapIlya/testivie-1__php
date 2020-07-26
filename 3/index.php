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
			<input class="border h5 p-2" required placeholder="Введите символы" id="text" name="name" type="text">
			<button class="btn btn-warning text-white">click</button>

			<div class="pt-5" id="message"></div>
		</div>
	</section>
</main>


<script>

	const text = document.getElementById('text');
	const btn = document.querySelector('button')
	const message = document.getElementById('message')

    btn.addEventListener('click', () =>
	{
	    let end = 'символов';
	    if (~~(text.value.length/10) !== 1)
	    {
           if (text.value.length === 1 || text.value.length%10 === 1)
           {
               end = 'cимвол';
           }
           else if (text.value.length%10 === 2 || text.value.length%10 === 3 || text.value.length%10 === 4 )
           {
               end = 'символа'
           }
	   }
        message.innerHTML = `<span class="alert alert-warning h5">${text.value.length} ${end}<span>`;
	})



</script>
</body>
</html>