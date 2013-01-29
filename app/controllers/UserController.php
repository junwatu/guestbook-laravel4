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
           return Redirect::to('/')->withErrors($validator);
        }else{
            // save guest data
            $guest = new Guest();

            $guest->name = Input::get('name');
            $guest->email = Input::get('email');

            $guest->save();

            $guests = Guest::all();
            return Redirect::to('guests');
        }
    }

    public function show_guests(){
        $guests = Guest::all();
        return View::make('guestslist',array('data' => $guests));
    }
}