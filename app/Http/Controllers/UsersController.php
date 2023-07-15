<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use  App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Passport;
use App\Models\User;


class UsersController extends Controller
{

    public function sendError($error, $errorMessages = [], $code = 404)
    {
     $response = [
            'success' => false,
            'message' => $error,
        ];if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }return response()->json($response, $code);
    }

    public function sendResponse($result, $message)
    {
     $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];return response()->json($response, 200);
    }


    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            $success['name'] =  $user->name;
   
            return $this->sendResponse($success, 'User login successfully.');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "entroiu com sucesso !";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(StoreUserRequest $request)
    {

        try {
            $userData = $request->validated();
    
            if ($request->hasFile('image')) {
                $image = $request->file('image');

                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
    
                $image->storeAs('public/images', $imageName);
    
                $userData['image'] = $imageName;
            }
    
            $userData['password'] = Hash::make($userData['password']);
    
            $user = User::create($userData);
    
            $client = $user->createToken('API Access');
    
            return response()->json([
                'message' => 'Conta de usuário criada com sucesso',
                'access_token' => $client->accessToken,
                'user' => $user
            ], 201);
        } catch (\Exception $e) {
            return response($e->getMessage(), 500);
        }
        
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
        //
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
