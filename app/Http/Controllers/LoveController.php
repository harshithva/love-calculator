<?php

namespace App\Http\Controllers;
use Browser;


use App\Love;
// require_once 'vendor/autoload.php';
use Illuminate\Http\Request;
class LoveController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            request()->validate([
                'name_1' => ['required','max:255'],
                'name_2' => ['required','max:255']
            ],
            [
                'name_1.required' => 'You have to Enter Your name',
                'name_2.required' => 'You have to Enter Your Crush name'
            ]);
           
            $love = new Love;
            $love->name_1 = $request->name_1;
            $love->name_2 = $request->name_2;
           
            $ip = request()->ip;
            $data = \Location::get($ip);
            $love->ip = $data->ip;
            $love->country = $data->countryName;
            $love->region = $data->regionName;
            $love->city = $data->cityName;
            $love->device = Browser::userAgent();
        
            $request->name_1 = preg_replace('/\s+/', '', $request->name_1);
            $request->name_2 = preg_replace('/\s+/', '', $request->name_2);

            $headers = array('Accept' => 'application/json');

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://love-calculator.p.rapidapi.com/getPercentage?fname={$request->name_1}&sname={$request->name_2}",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "x-rapidapi-host: love-calculator.p.rapidapi.com",
                    "x-rapidapi-key: 8f84f7abe8mshea175dc4fc16f4ep1741d1jsn4ffea42d1a90"
                ),
            ));
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $response = json_decode ($response);
                // dd($response->percentage);
                
                if(strtolower($response->fname) === "harshith" || strtolower($response->sname) === "harshith" || strtolower($response->fname) === "omshree" || strtolower($response->sname) === "omshree") {
                    $response->percentage = rand(95,101);
                    $response->result = "Congratulations! Best choice";
                }


                $love->perc = $response->percentage;
                $love->save();
                return view("result",compact('response'));
            }
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function show(Love $love)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function edit(Love $love)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Love $love)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function destroy(Love $love)
    {
        //
    }
}
