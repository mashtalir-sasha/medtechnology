<?
if(isset ($_POST['title'])) {$title=$_POST['title'];}
if(isset ($_POST['name'])) {$name=$_POST['name'];}
if(isset ($_POST['phone'])) {$phonenum=$_POST['phone'];}

if(isset ($_POST['device'])) {$device=$_POST['device'];}
if(isset ($_POST['price-from'])) {$priceFrom=$_POST['price-from'];}
if(isset ($_POST['price-to'])) {$priceTo=$_POST['price-to'];}
if(isset ($_POST['size'])) {$size=$_POST['size'];}
if(isset ($_POST['amount'])) {$amount=$_POST['amount'];}

if(isset ($_POST['question'])) {$question=$_POST['question'];}


$to = "medtechnology@i.ua";

$utm_source=$_COOKIE['utm_source'];
$utm_medium=$_COOKIE['utm_medium'];
$utm_term=$_COOKIE['utm_term'];
$utm_content=$_COOKIE['utm_content'];
$utm_campaign=$_COOKIE['utm_campaign'];


$message = "Форма: $title <br><br>";
if ( $name || $phonenum || $device || $priceFrom || $priceTo || $size || $amount || $question || $utm_source || $utm_medium || $utm_term || $utm_content || $utm_campaign ) {
	$message .= ""
		. ( $name ?" І'мя:  $name <br>" : "")
		. ( $phonenum ?" Телефон:  $phonenum <br>" : "")

		. ( $device ?" Назва апарата:  $device <br>" : "")
		. ( $priceFrom ?" Ціна від:  $priceFrom <br>" : "")
		. ( $priceTo ?" Ціна до:  $priceTo <br>" : "")
		. ( $size ?" Розміри:  $size <br>" : "")
		. ( $amount ?" Кількість:  $amount <br>" : "")

		. ( $question ?" Питання:  $question <br>" : "")
		
		. ( $utm_source  ? "<hr> utm source: $utm_source <br>" : "")
		. ( $utm_medium  ? " utm medium: $utm_medium <br>" : "")
		. ( $utm_term  ? " utm term: $utm_term <br>" : "")
		. ( $utm_content  ? " utm content: $utm_content <br>" : "")
		. ( $utm_campaign  ? " utm campaign: $utm_campaign <br>" : "");
}

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= 'From: "Заявки з сайту" <no-reply@medtechnology.com.ua>';

if (!$title || !$phonenum) {
} else {
	mail($to,"New lead(lp.medtechnology.com.ua)",$message,$headers);
}

?>