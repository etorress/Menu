<?php
	$error = '';
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["name"]))
		{
			$error = "<label class='text-danger'>( Ingrese el nombre del platillo. )</label>";
		}
		else if(empty($_POST["desc"]))
		{
			$error = "<label class='text-danger'>( Ingrese la descripcion. ) </label>";
		}
		else if(empty($_POST["precio"]))
		{
			$error = "<label class='text-danger'>( Ingrese el precio del platillo. ) </label>";
		}
		else
		{
			if(file_exists('desayunos.json'))
			{
				$current_data = file_get_contents('desayunos.json');
				$array_data = json_decode($current_data, true);
				$form_data = array(
					'name' => $_POST['name'],
					'desc' => $_POST['desc'],
					'prize' => $_POST['prize']
				);
				$array_data[] = $form_data;
				$data_proccesed = json_encode($array_data, JSON_PRETTY_PRINT);
				if(file_put_contents('desayunos.json', $data_proccesed))
				{
					header("Location: addBreak.php");
					exit();
				}
			}
			else
			{
				$error = "<label class='text-danger'>File not found!</label>";
			}
		}
	}
?>
