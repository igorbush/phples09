<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body style="width: 700px; margin: 100px auto;">
	<h1>ИНКАПСУЛЯЦИЯ</h1>
	<h3>1) Распишите своё понимание инкапсуляции. Представьте, что вас спрашивают на собеседовании.</h3>
	<p>Инкапсуляция (англ. encapsulation, от лат. in capsula) — в информатике упаковка данных и функций в единый компонент. В PHP реализуется посредсвом введения классов со свойствами и методами, и обьектов. Инкапсуляцией называется включение различных мелких элементов в более крупный объект. Это свойство объекта/класса регулировать доступ к определенным своим компонентам извне самого объекта/класса. Например, на мониторе есть кнопки регулировки яркости - они в прямом доступе для пользователя. А есть микросхемы внутри - к ним доступ ограничен. Это и есть некий пример инкапсуляции. Объект монитор регулирует доступ к своим компонентам.</p>
	<h3>2) Сформулируйте своими словами в чём плюсы объектов, а в чём минусы?</h3>
	<p>ПЛЮСЫ</p>
	<ul>
		<li>Более полный контроль над входящими и исходящими данными.</li>
		<li>Можно без боязни сломать все остальное приложение, править реализацию  методов компонентов. Так как во всем остальном приложении фигурирует только интерфейс, а Вы меняете только реализацию логики.</li>
	</ul>
		<p>МИНУСЫ</p>
	<ul>
		<li>Некритичная, но все же пониженая скорость работы приложения.</li>
		<li>Если обьектов должно быть очень много, то и код будет не маленький.</li>
	</ul>
	<br>
	<hr>
</body>
</html>
<?php 
class Car {
	public $color;
	public $transmission;
	public $model;
	public function GetParameters() {
		echo 'Это ' . $this->color . ' ' . $this->model . ' с ' . $this->transmission . ' коробкой передач</br>';
	}
}

class Tv {
	public $display;
	public $screensize;
	public $model;
	public function GetParameters() {
		echo 'Это телевизор ' . $this->model . ' с ' . $this->display . ' матрицей и разрешением ' . $this->screensize . '</br>';
	}
}
class BallpointPen {
	public $color;
	public $type;
	public function GetParameters() {
		echo 'Это ' . $this->type . ' ручка с ' . $this->color . ' чернилами </br>';
	}

}
class Duck {
	public $color;
	public $beak;
	public function GetParameters() {
		echo 'Это ' . $this->color . ' утка с ' . $this->beak . ' клювом </br>';
	}

}
class Product {
	public $price;
	public $name;
	public $description;
	public $article;
	public function GetParameters() {
		echo '</br>Товар: ' . $this->name . '</br>Описание: ' . $this->description . '</br>Цена: ' . $this->price . ' RUB</br>Артикул №: ' . $this->article . '</br>';
	}
}

$car1 = new Car();
$car1->color = 'крассная';
$car1->transmission = 'автоматической';
$car1->model = 'AUDI';
$car1->GetParameters();

$car2 = new Car();
$car2->color = 'зеленая';
$car2->transmission = 'ручной';
$car2->model = 'BMW';
$car2->GetParameters();

$Tv1 = new Tv();
$Tv1->model = 'SONY';
$Tv1->display = 'IPS';
$Tv1->screensize = '1920 X 1080';
$Tv1->GetParameters();

$Tv2 = new Tv();
$Tv2->model = 'SAMSUNG';
$Tv2->display = 'AMOLED';
$Tv2->screensize = '1280 X 720';
$Tv2->GetParameters();

$BallpointPen1 = new BallpointPen();
$BallpointPen1->type = 'атоматическая';
$BallpointPen1->color = 'черными';
$BallpointPen1->GetParameters();

$BallpointPen2 = new BallpointPen();
$BallpointPen2->type = 'полу-атоматическая';
$BallpointPen2->color = 'синими';
$BallpointPen2->GetParameters();

$Duck1 = new Duck();
$Duck1->beak = 'длинным';
$Duck1->color = 'белая';
$Duck1->GetParameters();

$Duck2 = new Duck();
$Duck2->beak = 'коротким';
$Duck2->color = 'серая';
$Duck2->GetParameters();

$Product1 = new Product();
$Product1->name = 'Аккумулятор';
$Product1->description = 'портативный на 10000 mAh';
$Product1->price = 1200;
$Product1->article = 797865;
$Product1->GetParameters();

$Product2 = new Product();
$Product2->name = 'Зарядное устройство';
$Product2->description = 'длиннй кабель, подстветка, USB 3.0';
$Product2->price = 700;
$Product2->article = 796115;
$Product2->GetParameters();

echo "<br><hr><br>";

class News {
	public $title;
	public $date;
	public $description;
	public function __construct ($title, $date, $description) {
		$this->title = $title;
		$this->date = $date;
		$this->description = $description;
	}
	public function GetNews() {
		echo '<h3>' .$this->title. '</h3><p><strong>' .$this->date. '</strong></p><p><em>' .$this->description. '</em></p>';
	}
}

class Comments {
	public $autor;
	public $comment;
	public function __construct ($autor, $comment) {
		$this->autor = $autor;
		$this->comment = $comment;
	}
	public function GetComments() {
		echo '<p><strong>АВТОР:</strong> ' .$this->autor. ' <strong>Комментарий:</strong> ' .$this->comment. '</p><br><br>';
	}
}

$News1 = new News('Новость1', '12.12.17', 'Сегодня 12 декабря, и это свежая новость');
$News2 = new News('Новость2', '13.12.17', 'Сегодня 13 декабря, и это более свежая новость');
$News3 = new News('Новость3', '14.12.17', 'Сегодня 14 декабря, и это совсем совсем свежая новость');

$Comment1 = new Comments('Дуня', 'крутая новость');
$Comment2 = new Comments('Петя', 'эта новость покруче');
$Comment3 = new Comments('Вася', 'это самая крутая новость');

$News1->GetNews();
$Comment1->GetComments();
$News2->GetNews();
$Comment2->GetComments();
$News3->GetNews();
$Comment3->GetComments();