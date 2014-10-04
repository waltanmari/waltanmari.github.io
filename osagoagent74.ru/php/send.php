<?
# получаем данные и отсекаем пробельные символы в начале и конце:
$name = @ trim ($_POST['name']);
$phone = @ trim ($_POST['phone']);
$email = @ trim ($_POST['email']);



if (($name != "") or ($surname != "") or ($email != "") or ($message != ""))
// Если существуют проверяем... 
{
   
	# отправка данных на мыло админу
	mail ("froz174@ya.ru", 
		  "$subject // ЗАЯВКА - СТРАХОВАНИЕ //",
	      "$message \n 
	      \n Имя: \n $name 
	      \n Телефон: \n $phone
	      \n E-Mail: \n $email");


}
// Если не существуют выводим сообщение... 
else
{
	echo "Error ";
	echo ":(";
}

   if (($name) and ($phone) and ($email))
{
	header ("Location: /osagoagent74.ru/success.html");
} 


?>