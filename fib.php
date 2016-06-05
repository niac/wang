<?php

	class Fib implements Iterator{

	private $previous = 1;
	private $current = 0;
	private $key = 0;
	
	public function current(){
	
	    return $this->current;
	}
	
	public function key(){

	    return $this->key;
	}

	public function next(){

	$newprevious  = $this->current;
	$this->current += $this->previous;
	$this->previous = $newprevious;
	$this->key++;
	}

	public function rewind(){
	
	$this->previous =1;
	$this->current = 0;
	$this->key =0;
	}

	public function valid(){
	
	return true;
	}
	}

	$fib = new Fib;
	$i = 0;
	foreach($fib as $f){
	echo $f;echo "\n";
	if($i++ == 15) break;
	}
