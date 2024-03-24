<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'account_no',
        'name',
        'phone_number',
        'email',
        'address',
        'password',
        'roles',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Get all record
    public function GetAllRecord()
    {
        $query = DB::table('public.users')
            ->select('*')
            ->get();

        return $query;
    }

    // Create a new user record
    public function saveRecord($data)
    {
        try {
            DB::table('public.users')->insert([
                'UUID' => $data->UUID,
                'account_no' => $data->account_no,
                'name' => $data->name,
                'phone_number' => $data->phone_number,
                'email' => $data->email,
                'address' => $data->address,
                'password' => $data->password,
                'roles' => $data->roles,
            ]);
            return;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
