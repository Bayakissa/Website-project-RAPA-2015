
<?php
 
class AuthController extends BaseController {
 
    public function __construct()
	{
        $this->beforeFilter('auth', array('only' => 'getLogout'));
        $this->beforeFilter('guest', array('except' => 'getLogout'));
        $this->beforeFilter('csrf', array('on' => 'post'));
	}
 
  /**
    * Affiche le formulaire de login
    *
    * @return View
    */
    protected function createView($name)
    {
        return View::make($name, array('users' => User::all(), 'actif' => -1)); 
    }  
 
  /**
    * Affiche le formulaire de login
    *
    * @return View
    */


    public function postLogin()
    {
        $user = array('username' => Input::get('username'), 'password' => Input::get('password'));
        if (Auth::attempt($user, Input::get('souvenir'))) {
          return Redirect::intended('/')
            ->with('flash_notice', 'Vous avez été correctement connecté avec le pseudo ' . Auth::user()->username);
        }
        return Redirect::to('login')->with('flash_error', 'Pseudo ou mot de passe non correct !')->withInput();       
    }


  /**
    * Affiche le formulaire d'inscription
    *
    * @return View
    */
    public function getInscription()
    {
        return $this->createView('auth.inscription');
    }


    public function postCreate() 
	{
        $regle = array(
      	'firstname'=>'required|alpha|min:2',
      	'lastname'=>'required|alpha|min:2',
      	'email'=>'required|email|unique:users',
      	'password'=>'required|alpha_num|between:6,12|confirmed',
      	'password_confirmation'=>'required|alpha_num|between:6,12'
     );
		$validation = Validator::make(Input::all(), $regle);
		
		if ($validation->passes()) {
			$users = new User;
			$users->username = Input::get('username');
			$users->email = Input::get('email');
			$users->password = Hash::make(Input::get('password'));
			$users->save();
 
			return Redirect::to('users/inscription')->with('message', 'Merci de vous être inscrit !');
			} else {
			return Redirect::to('users/register')->with('message', 'Il y a eu un petit soucis...')->withErrors($validation)->withInput();
			}

    }
        
 

	public function showLogin()
	{
		// show the form
		return View::make('login');
	}
 
  /**
    * Traitement du formulaire d'inscription
    *
    * @return Redirect
    */
    public function postInscription()
    {
        $v = User::validate(Input::all()); 

        if ($v->passes()) {
            $users = new User; 
            $users->username = Input::get('username'); 
            $users->email = Input::get('email'); 
            $users->password = Hash::make(Input::get('password')); 
            $users->save(); 
            return Redirect::to('login')->with('flash_notice', 'Votre compte a été créé.'); 
        }
        return Redirect::to('auth/inscription')->withErrors($v)->withInput(); 
    }


 //Affiche le formulaire de commentaires   
    public function getComment()
    {
        return $this->createView('auth.comment');
       /* $data = DB::table('comments')->select('username')->get();
        $data = DB::table('comments')->select('email')->get();
        $data = DB::table('comments')->select('comment')->get();

        $view = View::make('auth.comment')->with('username', $username)->with('email', $email)->with('comment', $comment);*/
    }
  /**
    * Traitement du formulaire de commentaire
    *
    * @return Redirect
    */
    public function postComment()
    {
        $v = Comment::validation(Input::all()); 

        if ($v->passes()) {
            $comments = new Comment; 
            $comments->username = Input::get('username'); 
            $comments->email = Input::get('email'); 
            $comments->comment = Input::get('comment'); 
            //die;
            $comments->save(); 
            return Redirect::to('auth/comment')->with('flash_notice', 'Votre commentaire à bien été ajouté. Merci!'); 
        }
        return Redirect::to('auth/comment')->withErrors($v)->withInput(); 
    }

     //Affiche les contacts de l'équipe   
    public function getContact()
    {
        return $this->createView('contact');
    }

 


}
