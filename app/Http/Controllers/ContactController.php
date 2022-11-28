<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'contacts' => Contact::where('user_id', '=', Auth::user()->id)->latest()->filter(request(['search']))->paginate(10)
        ];

        return view('contacts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => 'required|max:255',
            'mobile' => 'required|unique:contacts|numeric',
            'email' => 'nullable',
            'group' => 'nullable',
        ], [
            'name.required' => "Name is required",
            'mobile.required' => "Mobile number is required",
            'mobile.unique' => "Mobile number already exists",
        ]);

        $formData['user_id'] = auth()->id();

        if (Contact::create($formData)) {
            return redirect('/contacts')->with('message', 'Contact created Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function search(Request $request)
    {
        if ($request->search) {
            $searchContacts = Contact::where('mobile', 'LIKE', '%' . $request->search . '%')->latest()->paginate(10);
            return view('contacts.index', compact('searchContacts'));
        } else {
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}