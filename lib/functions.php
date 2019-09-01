<?php
function debug($date){
	echo "<pre>" . print_r($date, 1) . "</pre>pre>";
}

//top menu
$top_menu = [
	'Блог' => '/',
	'О авторе' => 'author.php',
	'Услуги' => 'services.php',
	'Контакты' => 'contacts.php',
];

function top_menu($arr){
	echo "<ul class=\"nav-list\">";
	foreach ($arr as $menu_name => $menu_link) {

		if ($menu_name == 'Контакты'){
			echo "<li><a class='nav-item-special' href='$menu_link'>$menu_name</a></li>";
		} else {
			echo "<li><a class='nav-item' href='$menu_link'>$menu_name</a></li>";
		}
	}
	echo "</ul>";
}

//footer services menu
$services_menu = [
	'Web Design' => '#',
	'Development' => '#',
	'Wordpress' => '#',
	'Online Marketing' => '#',
];

function services_menu($arr){
	echo "<ul class=\"foot-services-list\">";
	foreach ($arr as $menu_name => $menu_link) {

		echo "<li class='foot-services-list-item'><a href='$menu_link' class='foot-services-list-link'>$menu_name</a></li>";
	}
	echo "</ul>";
}
//footer about menu
$about_menu = [
	'About us' => '#',
	'Work Portfolio' => '#',
	'Team' => '#',
	'Plan & Pricing' => '#',
	'News' => '#',
];

function about_menu($arr){
	echo "<ul class=\"foot-about-list\">";
	foreach ($arr as $menu_name => $menu_link) {

		echo "<li class='foot-about-list-item'><a href='$menu_link' class='foot-about-list-link'>$menu_name</a></li>";
	}
	echo "</ul>";
}

//footer our-adres menu
$our_adres_menu = [
	'00 Orville Road Apt. 728' => '#',
	'California, USA' => '#',

];

function our_adres_menu($arr){
	echo "<ul class=\"foot-our-adres-list\">";
	foreach ($arr as $menu_name => $menu_link) {

		echo "<li class='foot-our-adres-list-item'><a href='$menu_link' class='foot-our-adres-list-link'>$menu_name</a></li>";
	}
	echo "</ul>";
}

//footer social menu
$social_menu = [
	'social-f' => '#',
	'social-g' => '#',
	'social-t' => '#',

];

function social_menu($arr){
	echo "<ul class=\"social-btn-list\">";
	foreach ($arr as $class_menu_name => $menu_link) {

		echo "<li class='social-list-item'><a href='$menu_link' class='social-list-link $class_menu_name'></a></li>";
	}
	echo "</ul>";
}