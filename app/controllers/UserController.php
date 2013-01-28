<?php
/**
 * User: Equan Pr.
 * Date: 1/27/13
 * Time: 8:38 PM
 */

class UserController extends BaseController
{

    public function register()
    {
        $input = Input::all();
        $rules = array('name' => 'required | min:5', 'email' => 'required | email');

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            var_dump($messages);
        }
    }
}