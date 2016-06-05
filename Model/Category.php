<?php

//Postモデル
class Category extends AppModel
{
	// とりあえず中身は何もなくてよい
	public $hasMany = array('Post');
	public $recursive = 2;
}

