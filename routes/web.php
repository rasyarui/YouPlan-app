<?php

use App\Models\User;
use App\Livewire\Add;

use App\Livewire\Note;
use App\Livewire\Login;
use App\Livewire\History;
use App\Livewire\Profile;
use App\Livewire\Register;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\GoogleController;
use Illuminate\Validation\Rules;



Route::middleware('auth')->group(function () {
    Route::get('/todo', function () {
        return view('home');
        
    });

    Route::get('/', function () {
        return view('home');
        
    });


    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/todo/history', History::class);

    Route::prefix('note')->controller(NoteController::class)->name('note.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('add', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('{note}/edit', 'edit')->name('edit');
        Route::patch('{note}', 'update')->name('update');

    });

    // Route::get('/note', NoteController::class)->name('index');
    // Route::get('/add', NoteController::class)->name('create');



});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');


Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => ['required', 'confirmed', Rules\Password::defaults()],

    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->with(['statusError' => [__($status)]]);
})->middleware('guest')->name('password.update');

// Route::get('/forgot-password', [ForgotPasswordController::class, 'forgot_password'])->name('forgot-password');


// Route::get('/validate-forgot-password/{token}', [ForgotPasswordController::class, 'validate-forgot_password'])->name('validate-forgot-password');
// Route::post('/validate-forgot-password-act', [ForgotPasswordController::class, 'validate-forgot_password-act'])->name('validate-forgot-password');


// Route::post('/forgot-password-act', [ForgotPasswordController::class, 'forgot_password_act'])->name('forgot-password-act');



// Route::resource('todos', TodoController::class);
// Route::post('/storeTodos', [TodoController::class, 'store']);
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');


Route::controller(GithubController::class)->group(function () {
    Route::get('/auth/github', 'redirectToGithub')->name('auth.github');
    Route::get('/auth/github/callback', 'handleGithubCallback');
});

Route::controller(GoogleController::class)->group(function () {
    Route::get('/auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('/auth/google/callback', 'handleGoogleCallback');
});
    // $user = User::updateOrCreate([
    //     'github_id' => $githubUser->id,
    // ], [
    //     'name' => $githubUser->nickname,
    //     'email' => $githubUser->email,
    //     'password' => Hash::make('rahasia'),
    //     'github_token' => $githubUser->token,
    //     'github_refresh_token' => $githubUser->refreshToken,
    // ]);
    // Auth::login($user);
 
    // return redirect('/');



// Route::get('/home', [TodoController::class, 'index']);
