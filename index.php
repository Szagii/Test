<?php
	session_start();
	include "function.php";
?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ortografia</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">

</head>
<body>

	<div class="title text-center">SYSTEM ORTOGRAFICZNY</div>
	<div class="tips text-center">Polskie znaki zapisuj w nawiasach, np. (Ż)onkil</div>
	<form class="form" method="post">
		<textarea class="form-control" rows="10" id="comment" name="text"></textarea>
		<input type="submit" class="btn btn-default btn-lg btn-block" name="send" value="Prześlij tekst">
		</br></br></br>
		<b>Przykładowy tekst: </b>
		Gł(ó)wnym punktem bo(ż)onarodzeniowego stołu w Anglii była niegdyś głowa dzika przybrana w la(u)rowy wieniec. Dziś na wigilijnym angielskim stole pojawia się, tak jak u nas, karp i śledzie, tradycyjny indyk oraz dro(ż)d(ż)owe ciasto z farszem z mięsa, s(u)szonych owoc(ó)w i korzeni. Ukoronowaniem tej świątecznej uczty jest śliwkowy p(u)dding – cię(ż)kie ciasto owocowe. Tradycyjnie pudding po (u)gotowaniu doj(rz)ewał zawinięty w pł(ó)tno przez wiele miesięcy, dopiero w dniu Bo(ż)ego Narodzenia ciasto rozwijano i wciskano w nie r(ó)(ż)ne talizmany – np. srebrną monetę wr(ó)żącą dostatek.
	</form>


</body>
</html>

<?php
	if(!empty($_POST["text"]) && !empty($_POST["send"]))
	{
		send($_POST["text"]);

	}
?>