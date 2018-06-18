$recepient = "filipenko.yr@gmail.com";
$sitename = "BlackANDWhite";

$name = trim($_POST["name"]);
$name = trim($_POST["email"]);
$name = trim($_POST["textarea"]);
$massage = "Имя: $name \nМейл: $email \nТекст: $textarea";

$pagetitle= "Новая заявка с \"$sitename\"";
mail($recepient, $pagetitle, $massage, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");