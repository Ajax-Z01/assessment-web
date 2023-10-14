<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of scores.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scores = Score::all();
        return view('scores.index', compact('scores'));
    }

    /**
     * Show the form for creating a new score.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scores.create');
    }

    /**
     * Store a newly created score in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation rules can be added based on your requirements

        Score::create($request->all());

        return redirect()->route('scores.index')
            ->with('success', 'Score created successfully.');
    }

    /**
     * Display the specified score.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        return view('scores.show', compact('score'));
    }

    /**
     * Show the form for editing the specified score.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        return view('scores.edit', compact('score'));
    }

    /**
     * Update the specified score in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        // Validation rules can be added based on your requirements

        $score->update($request->all());

        return redirect()->route('scores.index')
            ->with('success', 'Score updated successfully.');
    }

    /**
     * Remove the specified score from storage.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        $score->delete();

        return redirect()->route('scores.index')
            ->with('success', 'Score deleted successfully.');
    }
}
