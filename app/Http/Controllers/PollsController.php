<?php

namespace App\Http\Controllers;

use App\Author;
use App\Content;
use App\Medio;
use App\Mediatype;
use App\Radio;
use App\Poll;
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polls = Poll::all();
        $menuSections = Section::where('level', 1)
                                ->where('topnav_back', 1)
                                ->where('active', 1)->get();

        $menuLeftSections = Section::where('level', 1)
                              ->where('active', 1)->get();

        $sections = Section::all();

        $principalSections = $sections->where('level', 1)
                                      ->where('topnav_back', 1)
                                      ->where('active', 1);//->get();

        $section = $sections->where('level', 1)->first();
        $subSections = $sections->where('level', 2);
        $subSection = $sections->where('level', 2)->first();
        $contents = Content::where('section_id', $subSection->id)->paginate(15);

        return view('backend.polls.index', compact('polls', 'section', 'subSection', 'contents', 'menuSections', 'menuLeftSections'));
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

      $sections = Section::all();
      $provinces = Province::all();

      $principalSections = $sections->where('level', 1)
                                    ->where('topnav_back', 1)
                                    ->where('active', 1);//->get();

      $section = $sections->where('level', 1)->first();
      $subSections = $sections->where('level', 2);
      $subSection = $sections->where('level', 2)->first();
      $contents = Content::where('section_id', $subSection->id)->paginate(15);

      return view('backend.polls.create', compact('polls', 'section', 'sections', 'provinces', 'subSection', 'contents', 'menuSections', 'menuLeftSections'));
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

      $sections = Section::all();
      $provinces = Province::all();

      $principalSections = $sections->where('level', 1)
                                    ->where('topnav_back', 1)
                                    ->where('active', 1);//->get();

      $section = $sections->where('level', 1)->first();
      $subSections = $sections->where('level', 2);
      $subSection = $sections->where('level', 2)->first();
      $contents = Content::where('section_id', $subSection->id)->paginate(15);

      $message = "La encuesta se envió correctamente";

      return view('backend.polls.index', compact('polls', 'message', 'section', 'sections', 'provinces', 'subSection', 'contents', 'menuSections', 'menuLeftSections'));
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
