<?php

namespace App\Http\Controllers;

use Validator;
use App\Business;
use App\BusinessOwner;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class SMEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created Business
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (User::where('email', '=', Input::get('business_email'))->exists()) {
            // user found
            return redirect()->back()->with('errorM', "User already exists")->withInput();
        }

        //Error messages for New Business Form
        $messages =  [
            'digits_between' => 'Incorrect phone number entered. Check',
            'required' => 'Image is required',
        ];

        //Validate New Business Form Data
        Validator::make($request->all(),[
            'business_owner_last_name' => 'required|regex:/^[a-zA-Z. -]+$/u',
            'business_owner_given_names' => 'string',
            'business_name' => 'string',
            'email' => 'email',
            'region' => 'string',
            'id_number' => 'string',
            'address' => 'string',
            'area' => 'string',
            'phone_number' => 'digits_between:10,10',
            'business_number' => 'digits_between:10,10',
        ], $messages)->validate();


        $business_owner = new BusinessOwner();
        $business = new Business();
        $user = new User();

        //Create new business owner
        $business_owner->business_owner_last_name = $request->business_owner_last_name;
        $business_owner->business_owner_given_names = $request->business_owner_given_names;
        $business_owner->business_owner_dob = $request->date_of_birth;
        $business_owner->business_owner_nationality = $request->nationality;
        $business_owner->business_owner_id_type = $request->id_type;
        $business_owner->business_owner_id_number = $request->id_number;
        $business_owner->business_owner_phone = $request->phone_number;
        $business_owner->business_owner_phone_2 = $request->phone_number_2;
        $business_owner->save();

        //Get Business 'Foreign Key' ID
        //$get_business = BusinessOwner::where('business_owner_phone',$request->email)->first();
        //$addedShelf = Shelf::find($shelf->id);

        $BO_ID = $business_owner->id;
        //return $BO_ID;

        //Create new business
        $business->business_name = $request->business_name;
        $business->id = $BO_ID;
        $business->business_slug = $request->business_slug;
        $business->business_description = $request->business_description;
        $business->business_tagline = $request->business_tagline;
        $business->business_country = $request->country;
        $business->business_region = $request->region;
        $business->business_area = $request->area;
        $business->business_email = $request->business_email;
        $business->business_address = $request->address;
        $business->business_number = $request->business_number;
        $business->business_number_2 = $request->business_number_2;
        $business->business_category = $request->business_category;
        $business_images_path = "storage/sme/" . $request->business_slug;
        $business->business_images = $business_images_path;
        $business->save();

        //Create new user
        $random_password = str_random(8);
        $user->id = $BO_ID;
        $user->username = $request->business_slug;
        $user->email = $request->business_email;
        $user->password = bcrypt($random_password);
        $user->active = "no";
        $user->save();

        //Persist SME logo
        $request->file('business_logo')->storeAs(
            str_replace("storage","public",$business_images_path),'logo.jpg'
        );

        //Persist SME Cover Image
        $request->file('cover_image')->storeAs(
            str_replace("storage","public",$business_images_path),'cover_image.jpg'
        );

        //Persist SME Cover Images
        /*$cover_image_no = 0;
        foreach($request->cover_images as $cover_image){
            $cover_image_no++;
            $cover_image_lbl = "cover_image_" . strval($cover_image_no) . ".jpg"; //create dynamic labels (1-3) for cover images
            $cover_image->storeAs(
                $business_images_path,$cover_image_lbl
            );
        }*/

        //!!!SEND USER VERIFICATION EMAIL FUNCTION HERE !!!

        return view('messages.success');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Business  $businesses
     * @return \Illuminate\Http\Response
     */
    public function show(Business $businesses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Business  $businesses
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $businesses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Business  $businesses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $businesses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Business  $businesses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $businesses)
    {
        //
    }
}
