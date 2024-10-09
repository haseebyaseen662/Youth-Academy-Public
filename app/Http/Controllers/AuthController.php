<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('authentication.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard'); 
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }

    public function showRegister()
    {
        return view('authentication.register'); 
    }
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        Auth::login($user);

        return redirect()->intended('/dashboard'); 
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('showlogin');
    }

        public function showforget()
        {
            return view('authentication.forget');
        }
        public function sendOtp(Request $request)
        {
            // Step 1: Prepare the phone number (assuming it's already prefixed with the +92 code)
            $phone = '+92' . $request->input('phone'); // Just concatenate 92 without a plus sign
    
            // Step 2: Generate a random 4-digit OTP
            $otp = rand(1000, 9999);
    
            // Step 3: Store the OTP in the session for later verification
            session(['otp' => $otp, 'otp_phone' => $phone]);
    
            // Step 4: Prepare the SMS message
            $message = "Your OTP is {{otp}}. It is valid for 5 minutes.";
            $message = str_replace('{{otp}}', $otp, $message); // Replace {{otp}} with the actual OTP
    
            // Step 5: Set up the SMS API client
            $client = new Client();
            $apiSecret = env('SMS_API_SECRET'); // Get your SMS API secret from the .env file
            $expire = 300; // OTP expiration time (5 minutes)
    
            // Step 6: Send the OTP via SMS using the API
            try {
                $response = $client->post('https://smstide.com/api/send/otp', [
                    'json' => [
                        'secret' => 'f39f84fdae1e270069305750812fc6f349648e47',
                        'type' => 'whatsapp',
                        'message' => 'This is test message', // Use the prepared message with OTP
                        'phone' => '+923423216201', // Send the OTP to the user's phone
                        'expire' => '300', // Set expiration time for OTP
                    ],
                ]);
    
                // Step 7: Decode the response from the API
                $responseBody = json_decode($response->getBody(), true);
    
                // Step 8: Handle the API response and return a JSON response accordingly
                if (isset($responseBody['success'])) {
                    return response()->json(['success' => 'OTP sent successfully to ' . $phone]);
                } else {
                    return response()->json([
                        'error' => 'Failed to send OTP.',
                        'details' => $responseBody
                    ], 400);
                }
            } catch (\Exception $e) {
                // Step 9: Handle any exceptions that occur during the request
                return response()->json([
                    'error' => 'An error occurred while sending OTP.',
                    'message' => $e->getMessage(),
                    'trace' => $e->getTraceAsString()
                ], 500);
            }
        }
}
