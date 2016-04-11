<?php

class FaqControllerCore extends FrontController {
  public function init() {
    parent::init();

    $questions = [
      ["question"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit ?",
        "answer"=> "Illum maxime enim repellendus eaque quibusdam corporis molestiae at reprehenderit eum dolorem dolorum, magnam blanditiis doloremque quia obcaecati quo repellat. Excepturi, iure."],
      ["question"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit ?",
        "answer"=> "Illum maxime enim repellendus eaque quibusdam corporis molestiae at reprehenderit eum dolorem dolorum, magnam blanditiis doloremque quia obcaecati quo repellat. Excepturi, iure."],
      ["question"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit ?",
        "answer"=> "Illum maxime enim repellendus eaque quibusdam corporis molestiae at reprehenderit eum dolorem dolorum, magnam blanditiis doloremque quia obcaecati quo repellat. Excepturi, iure."],
      ["question"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit ?",
        "answer"=> "Illum maxime enim repellendus eaque quibusdam corporis molestiae at reprehenderit eum dolorem dolorum, magnam blanditiis doloremque quia obcaecati quo repellat. Excepturi, iure."],
      ["question"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit ?",
        "answer"=> "Illum maxime enim repellendus eaque quibusdam corporis molestiae at reprehenderit eum dolorem dolorum, magnam blanditiis doloremque quia obcaecati quo repellat. Excepturi, iure."],
      ["question"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit ?",
        "answer"=> "Illum maxime enim repellendus eaque quibusdam corporis molestiae at reprehenderit eum dolorem dolorum, magnam blanditiis doloremque quia obcaecati quo repellat. Excepturi, iure."],
      ["question"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit ?",
        "answer"=> "Illum maxime enim repellendus eaque quibusdam corporis molestiae at reprehenderit eum dolorem dolorum, magnam blanditiis doloremque quia obcaecati quo repellat. Excepturi, iure."]
    ];
    $this->context->smarty->assign(array('questions'=> $questions));
  }

  public function initContent() {
    parent::initContent();

    $this->setTemplate(_PS_THEME_DIR_.'faq.tpl');
  }

}