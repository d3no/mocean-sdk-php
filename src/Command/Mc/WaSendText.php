<?php

namespace \Mocean\Command\Mc;

class WaSendText extends AbstractMc
{
	public function setFrom($id, $type = "bot_username")
	{
		$this->requestData["from"] = [
			"type" => $type,
			"id" => $id,
		];
	}
	
	public function setTo($id, $type = "phone_num")
	{
		$this->requestData["to"] = [
			"type" => $type,
			"id" => $id,
		];
		return $this;
	}
	
	public function setContent($text)
	{
		$this->requestData["content"] = [
			"type" => "text",
			"id" => $text,
		];
		return $this;
	}
	
	public function action()
	{
		return "send-whatsapp";
	}
	
	protected function requiredKey()
	{
		return ["form", "to", "content"];
	}
}