<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerification;
use App\Notifications\ConfirmEmail;
use Illuminate\Support\Facades\URL;



    class User extends Authenticatable implements MustVerifyEmail
    {
        use HasApiTokens, Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'name', 'email', 'password','email_verified_at','remember_token','status','token'
        ];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'password', 'remember_token','token'
        ];

        /**
         * The attributes that should be cast to native types.
         *
         * @var array
         */
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];
        protected $table = 'users';
        protected $primaryKey = 'id';
        protected $rememberTokenName = 'remember_token';
        public function verificationUrl()
        {
            return URL::temporarySignedRoute(
                'verification.verify',
                now()->addMinutes($this->expiration),
                [
                    'id' => $this->getKey(),
                    'hash' => sha1($this->getEmailForVerification()),
                ]
            );

        }
        public function sendEmailVerificationNotification()
        {
            $verificationUrl = $this->verificationUrl();
            if (strpos($this->email, 'gmail.com') !== false) {
                Mail::to($this->email)->send(new EmailVerification($verificationUrl));
            } else {
                $this->notify(new ConfirmEmail($verificationUrl));
            }
        }
    }
