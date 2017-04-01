<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2017/4/1
 * Time: 09:25
 */

namespace utils;


class dique
{
	private $data=[];

	public function lpush($item) {
		if(empty($item)||$item==null){
			return false;
		}
		array_unshift($this->data,$item);
		return true;
	}

	public function rpush($item) {
		if(empty($item)||$item==null){
			return false;
		}
		array_push($this->data,$item);
		return true;
	}

	public function lpop() {
		return array_shift($this->data);
	}

	public function rpop() {
		return array_pop($this->data);
	}

	public function getAll(){
		return $this->data;
	}
}