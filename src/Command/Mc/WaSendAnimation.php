<?php

namespace Mocean\Command\Mc;

class WaSendAnimation extends AbstractMc
{
	
	public function setFrom($id, $type = "bot_username")
	{
		$this->requestData["from"] = [
			"type" => $type,
			"id" => $id,
		];
		return $this;
	}
	
	public function setTo($id, $type = "phone_num")
	{
		$this->requestData["to"] = [
			"type" => $type,
			"id" => $id,
		];
		return $this;
	}
	
	public function setContent($url, $text = "")
	{
		$this->requestData["content"] = [
			"type" => "animation",
			"rich_media_url" => $url,
			"text" => $text,
		];
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