<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Manga;
use App\Models\Bookmark;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function profile(){
        return view('pages.user.profile');
    }

    public function continueReading(){
        return view('pages.user.continue-reading');
    }

    public function bookmark_list()
    {
        $bookmark = Manga::with('chapters')->whereHas('bookmarks', function($query) { 
            $query->where('user_id', auth()->user()->id);
        })->get();
        return view('pages.user.reading-list', compact('bookmark'));
    }

    public function notifications()
    {
        $notifications = Notification::where('user_id', auth()->user()->id)->orderBy('id','desc')->paginate(10);
        return view('pages.user.notifications', compact('notifications'));
    }

    public function readAllNotifications(Request $request){
        Notification::where('user_id', $request->user_id)->update(['is_read' => 1]);
        return redirect()->back();
    }

    public function ganti_password()
    {
        return view('pages.user.change-password');
    }

    public function change_password(Request $request){
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required|min:8',
            'confirm_new_password' => 'same:new_password',
        ],
        [
            'current_password.required' => 'Password saat ini harus diisi.',
            'new_password.required' => 'Password baru harus diisi.',
            'new_password.min' => 'Password minimal 8 karakter.',
            'confirm_new_password.same' => 'Konfirmasi password tidak sesuai dengan password baru.',
        ]);

        User::where('id', $request->user_id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('sign-in')->with('info', 'Silakan login kembali dengan password baru.');
    }

    public function change_avatar(Request $request){
        $this->validate($request, [
            'avatar' => 'mimes:jpeg,jpg,png|max:1024',
        ],
        [
            'mimes' => 'Format file harus berupa jpeg, jpg, png',
            'max' => 'Maksimum ukuran file adalah 1 Mb'
        ]);

        $avatar = $request->file('avatar');
        $nama_avatar = $request->user_id . "_" . time() . "_" . $avatar->getClientOriginalName();
        $tujuan_upload = 'avatar';
        if ($request->old_avatar) {
            $filePathName = 'avatar/' . $request->old_avatar;
            if (file_exists($filePathName)) {
                unlink($filePathName);
            }
        }
        $avatar->move($tujuan_upload, $nama_avatar);

        User::where('id', $request->user_id)->update([
            'avatar' => $nama_avatar
        ]);

        return redirect()->back();
    }
    
    public function bookmark(Request $request){
        Bookmark::create([
            'manga_id' => $request->manga_id,
            'user_id' => $request->user_id,
            'is_marked' => 1
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Berhasil ditambahkan ke daftar bookmark',
        ]);
    }

    public function unbookmark(Request $request)
    {
        Bookmark::where(['manga_id' => $request->manga_id, 'user_id' => $request->user_id])->delete();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil dihapus dari daftar bookmark',
        ]);
    }
}
