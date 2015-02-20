<?php
use Nette\Mail\Message;
/**
* \HomeController
*/
class HomeController extends BaseController
{
  
  public function home()
  {
     // $this->view = View::make('home')->with('article',Task::first())

     //                                ->withTitle('MFFC :-D')

     //                                ->withFuckMe('OK!')
     //                                ->display();

                                    Redis::set('key','value',5,'s');

echo Redis::get('key');
     // Mail::to(['348578429@qq.com'])

     //                ->from('John <hyl2004346@163.com>')

     //                ->title('Fuck Me!')

     //                ->content('<h1>Hello~~</h1>')->send();

  }
}