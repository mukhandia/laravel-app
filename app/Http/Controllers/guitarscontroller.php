<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Guitars;
use App\Models\Guitars as ModelsGuitars;

class guitarscontroller extends Controller
{
    private  static function getData(){
        return [
            ['id'=>1,'name'=> 'Felix','Brand'=>'Engineer'],
            ['id'=>2,'name'=> 'wasike','Brand'=>'Engineer'],
            ['id'=>3,'name'=> 'mukhandia','Brand'=>'Engineer'],
            ['id'=>4,'name'=> 'morgan','Brand'=>'Engineer'],
        ];

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guitars.index',
        ['guitars' => ModelsGuitars::all(),
        'useraData'=> "<script>Hello</script>"]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guitars.create',
    );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$request->validate([
    'guitar_name'=>'required',
    'brand'=> 'required',
    'year'=> ['required','int']

]);

        $guitar = new ModelsGuitars();
        $guitar->name= $request->input('guitar_name');
        $guitar->brand= $request->input('brand');
        $guitar->year_made= $request->input('year');

        $guitar->save();
        return redirect()-> route('guitars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($guitar)
    {
           $guitars=self::getData();
           $index=array_search($guitar, array_column($guitars,'id'));
           if($index===false){
            abort(404);
           }return view('guitars.show',[
            'guitars'=>$guitars[$index]
           ]);
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
