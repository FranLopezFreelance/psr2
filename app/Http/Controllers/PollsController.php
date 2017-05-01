<?php

namespace App\Http\Controllers;

use App\Author;
use App\Contact;
use App\Content;
use App\Country;
use App\Medio;
use App\Mediatype;
use App\Radio;
use App\Poll;
use App\Observation;
use App\Section ;
use App\Province;
use App\Tag;
use App\Typeview;
use App\Videotype;

use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class PollsController extends Controller
{

      public function __construct()
      {
        $this->middleware('auth');
      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polls = Poll::where('country_id', 1)->where('province_id', 1);
        $pollsForeign = Poll::where('country_id', 2)->where('');
        $countries = Country::all();
        $provinces = Province::orderBy('name', 'ASC')->get();

        $menuSections = Section::where('level', 1)
                                ->where('topnav_back', 1)
                                ->where('active', 1)->get();

        $menuLeftSections = Section::where('level', 1)
                              ->where('active', 1)->get();

        $not_responded = Contact::where('contacted', 0)->get()->count();

        return view('backend.polls.index', compact('polls', 'pollsForeign', 'countries', 'provinces', 'not_responded', 'section', 'menuSections', 'menuLeftSections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $polls = Poll::all();
      $menuSections = Section::where('level', 1)
                              ->where('topnav_back', 1)
                              ->where('active', 1)->get();

      $menuLeftSections = Section::where('level', 1)
                            ->where('active', 1)->get();

      $countries = Country::orderBy('name', 'ASC')->get();
      $provinces = Province::orderBy('name', 'ASC')->get();

      $not_responded = Contact::where('contacted', 0)->get()->count();

      return view('backend.polls.create', compact('polls', 'not_responded', 'countries', 'provinces', 'menuSections', 'menuLeftSections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $poll = new Poll($request->all());
      $poll->save();

      $polls = Poll::all();

      $menuSections = Section::where('level', 1)
                              ->where('topnav_back', 1)
                              ->where('active', 1)->get();

      $menuLeftSections = Section::where('level', 1)
                            ->where('active', 1)->get();

      $provinces = Province::all();

      $message = "La encuesta se envió correctamente";

      $not_responded = Contact::where('contacted', 0)->get()->count();

      return view('backend.polls.index', compact('polls', 'not_responded', 'provinces', 'menuSections', 'menuLeftSections'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Poll $poll)
    {
      $polls = Poll::all();
      $menuSections = Section::where('level', 1)
                              ->where('topnav_back', 1)
                              ->where('active', 1)->get();

      $menuLeftSections = Section::where('level', 1)
                            ->where('active', 1)->get();

      $provinces = Province::all();

      $not_responded = Contact::where('contacted', 0)->get()->count();

      $observations = $poll->observations;

      return view('backend.polls.show', compact('polls', 'observations', 'poll', 'not_responded', 'provinces', 'menuSections', 'menuLeftSections'));
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

    public function selectCountry(Country $country){
      $pollsArray = $country->polls->toArray();
      $polls = $country->polls;
      $i = 0;
      foreach($polls as $poll){
        $pollsArray[$i]['country'] = $poll->country->name;
        $pollsArray[$i]['date'] = date("d-m-Y" , strtotime($poll->created_at));
        if($poll->contacted == 1){
          $pollsArray[$i]['contacted'] = "Si - ".date("d-m-Y" , strtotime($poll->date_contacted));
        }else{
          $pollsArray[$i]['contacted'] = "No";
        }
        $i++;
      }
      return response()->json(['polls' => $pollsArray]);
    }

    public function selectProvince(Province $province){
      $pollsArray = $province->polls->toArray();
      $polls = $province->polls;
      $i = 0;
      foreach($polls as $poll){
        $pollsArray[$i]['date'] = date("d-m-Y" , strtotime($poll->created_at));
        if($poll->contacted == 1){
          $pollsArray[$i]['contacted'] = "Si - ".date("d-m-Y" , strtotime($poll->date_contacted));
        }else{
          $pollsArray[$i]['contacted'] = "No";
        }
        $i++;
      }
      return response()->json(['polls' => $pollsArray]);
    }
}
