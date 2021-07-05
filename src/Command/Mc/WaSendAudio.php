<?php

namespace Mocean\Command\Mc;

class WaSendAudio extends AbstractMc
{
	public function setFrom($id, $type = "bot_username")
	{
		$this->requestData["form"] = [
			"type" => $type,
			"id" => $id,
		];
		return $this;
	}
	
	public function setTo($id, $type)
	{
		$this->requestData["to"] = [
			"type" => $type,
			"id" => $id,
		];
	}
	
	public function setContent($text) {
	
	}
	
	public function action()
	{
		return "send-whatsapp";
	}
	
	protected function requiredKey()
	{
		return ["from", "to", "content"];
	}
}