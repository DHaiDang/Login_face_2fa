<?php
//Hàm login sau khi mạng xã hội trả dữ liệu về
function loginFromSocialCallBack($socialUser) {
    echo"<p> User : ".$socialUser['name']."</p>";
    echo"<p> Login done</p>";
}

function validateDateTime($date) {
    //Kiểm tra định dạng ngày tháng xem đúng DD/MM/YYYY hay chưa?
    preg_match('/^[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}$/', $date, $matches);
    if (count($matches) == 0) { //Nếu ngày tháng nhập không đúng định dạng thì $match = array(); (rỗng)
        return false;
    }
    $separateDate = explode('-', $date);
    $day = (int) $separateDate[0];
    $month = (int) $separateDate[1];
    $year = (int) $separateDate[2];
    //Nếu là tháng 2
    if ($month == 2) {
        if ($year % 4 == 0) { //Nếu là năm nhuận
            if ($day > 29) {
                return false;
            }
        } else { //Không phải năm nhuận
            if ($day > 28) {
                return false;
            }
        }
    }
    switch ($month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            if ($day > 31) {
                return false;
            }
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            if ($day > 30) {
                return false;
            }
            break;
    }
    return true;
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Viettel</title>
	<meta charset="UTF-8">
	<link rel="icon" href="./img/murom.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<style>
	body {font-family: "Times New Roman", Georgia, Serif;}
	h1, h2, h3, h4, h5, h6 {
		font-family: "Playfair Display";
		letter-spacing: 5px;
	}
	</style>
</head>
<body>

<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
	<a href="" class="w3-bar-item w3-button"><img src="./images/1.png" class="w3-round w3-image w3-opacity-min" width="150" height="200"></a>
		
    <div class="w3-right w3-hide-small">
      <a href="#info" class="w3-bar-item w3-button">Info</a>
      <a href="#students" class="w3-bar-item w3-button">Students</a>
        <a href="#homework" class="w3-bar-item w3-button">HomeWork</a>
        <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
        <p class="w3-bar-item" style="margin:0;color: #768bcf;font-weight:bold;"><?php echo $_SESSION['name']; ?></p>
    </div>
  </div>
</body>
