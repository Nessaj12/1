<html> 

	 <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="style.css" media="all">
		<title>Задание 1</title>
	 </head>

	<body class=body>		
		<div class=form align="center">
			<p class=formtext1>Введите массив</p>
			<p class=formtext2>(0,1,-2...n)</p>
			<form action="index.php" method="post" name="form1" target="_self"> 				
				<p><input type="text" name="1"><Br></p>
				<p><input class=button type="submit" name="2"><Br></p>
			</form>
		</div>
		<div class=div1>
			<div class=div2 align="center">
			<p>Ответ</p>
			</div>
			<div class=php align="center" >			
				<?php //php 7.0.8
				include_once "bd.php";		 		
				//Отключение вывода ошибок
				ini_set('display_errors', 0);
				ini_set('display_startup_errors', 0);
				error_reporting(0);
				//Передача переменной из формы	
				$post=$_POST[1];
				$array1=array("");
				//Перевод строки из переданной переменной в массив
				$array1=explode(",",$post);	
				$array2=array_fill(0,100, 0);
				$array3=array_fill(0, 100, 0);
				$i=0;
				$size=0;
				$size2=0;
				$back=0;
				$dif=0;
				$maxsize=0;
				$count=0;
				//Счетчик количества элементов
				$count=count($array1);
				if($post!=0)
				{
					while ($i<$count)
					{
						if(gettype($array1[$i]*1)!="integer")
						{							
							echo "Вы ввели элемент неправильного типа";						
							goto end;
						}
						$i++;
					}
				}
				else
				{
					echo"Введите массив";
				}
				$i=0;
				while($i<$count-1)
				{
					//Вычисление возрастающей последовательности
					$dif=$array1[$i+1]-$array1[$i];
					if($dif>0) 
					{
						//Присвоение новых элементво последовательности второму массиву
						$array2[$size]=$array1[$i];
						$array2[$size+1]=$array1[$i+1];     
						if($size>$size2)
						{
							//Сравнение размеров максимальной и текущей последовательности
							$size2=$size;
							$back=$size+1;
							//Перезапись последовательности максимального размера
							while($back>=0)
							{
								$array3[$back]=$array2[$back];
								$back--;
							}
						   
						}
						 
						
						$size++;
					}
					else
					{
						//Обнуление размера текущей последовательности						
						$size=0;
					}
					if($size>$maxsize)
						{
							//Увеличение максимального размера последовательности
							$maxsize=$size;
						}
					$i++;
				}			
				$i=0;
				//Вывод последовательности максимального размера на экран
				if($post!=0)
				{
					while($i<$maxsize+1)
					{
						echo($array3[$i]);
						echo" ";
						$i++;
					}   
				}	
				end:				
				?>	
			</div>	
		</div>
	</body>
</html>