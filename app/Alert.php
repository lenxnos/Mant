<?php 

namespace App;

class Alert
{
	public function message($message, $type){
		return session()->flash('alert', compact('message', 'type'));
	}

	public function render(){
		return view()->make('components/alert', session('alert'));
	}
}
?>