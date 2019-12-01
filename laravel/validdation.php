<?php


public function post(Request $request){

$validatedData = $request->validate([

'name' => 'required|max:10',
'name_kana' => 'required|max:20',
'birthday' => 'required|date',
'sex' => 'boolean',
'zip' => 'string',
'prefecture' => 'string',
'address1' => 'string',
'address2' => 'string',
'phone_number' => 'required|string',
'email' => 'required|email',
'occupation' => 'required|integer',
'school' => 'required|string',
'faculty' => 'required|string',
'guraduatded_date' => 'date',
'qualification' => 'string|max1000',
'comment' => 'string|max2000',


]);

$info = $request->all();

return view('confirm',compact('info'));

}


?>
