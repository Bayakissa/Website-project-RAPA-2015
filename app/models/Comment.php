<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Comment extends Eloquent {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public static function validation($input)
	{
	    $rules = array(
	        'pseudo' => 'required|Alpha|between:6,64|unique:users',
	        'email' => 'required|email|unique:users',
	        'comment' => 'required|AlphaNum'
	    );
	    $messages = array(
	        'pseudo.required' => 'Nous avons besoin de votre pseudo.',
	        'pseudo.Alpha' => 'Le pseudo doit être composé de caractères alphabétiques.',
	        'pseudo.between' => 'Le nombre de caractères du pseudo doit être compris entre :min et :max.',
	        'pseudo.unique' => 'Ce pseudo est déjà utilisé.',
	        'email.required' => 'Nous avons besoin de votre adresse mail.',
	        'email.email' => 'Le format de l\'adresse mail n\'est pas correct.',
	        'email.unique' => 'Cette adresse mail est déjà utilisée.',
	        'comment.required' => 'Nous avons besoin d\'un message à envoyer.',
	    );
    	return Validator::make($input, $rules, $messages);
	}

}
