<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<div>
		<h1><a href='<?php echo site_url('examples/books')?>'>Каталог книг</a></h1>
<p>
<strong>Тестовое задание:</strong> Необходимо написать каталог книг. Для каждой книги есть данные: автор, название, фото, рубрика (книга может соответствовать нескольким рубрикам). Нужно реализовать страницу каталога с функционалом добавления/редактирования/удаления книги.<br /> 
У каждой книги может быть несколько авторов. Также необходимо сделать страницу с возможностью просмотра списка авторов, при клике на автора должна открываться страница со списком книг этого автора. <br /> 
Желательно использовать фреймворк CodeIgniter, а функционал добавления/редактирования на AJAX.<br /> <br /> 

ПО окончанию предоставить тестовый адрес на проверку и доступ в GIT
</p>
<a href='<?php echo site_url('examples/books')?>'>Открыть каталог книг</a> <br /> 
<a href='<?php echo site_url('examples/writers')?>'>Открыть список авторов</a> 
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
