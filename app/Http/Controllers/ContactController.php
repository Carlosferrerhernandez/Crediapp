<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

/*
 * Se añade Sweet alert 2
 *
 */
use Softon\SweetAlert\Facades\SWAL;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        return view('guest.contacto');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'homeName' => 'required|string|max:255',
            'homeMail'=> 'required|string|email|max:255|unique:users',
            'homeCell'=> 'required|numeric',
            'homeMsg'=> 'required|string|max:255'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // Register contact

        $contact = new Contact();

        $contact->homeName = $request->homeName;
        $contact->homeMail = $request->homeMail;
        $contact->homeCell = $request->homeCell;
        $contact->homeMsg = $request->homeMsg;

        $contact->save();

        alert()->success('Registro existoso', '')->autoClose(10000)->showCloseButton('aria-label');
        
        return back();
    }
}
