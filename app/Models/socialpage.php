<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socialpage extends Model
{
    use HasFactory;

    public static function socialLink() {
    	$socialLink = socialpage::get();
    	return $socialLink;
    }

     public static function socialLinkFacebook() {
    	$socialLinkFacebook = socialpage::where('status', 1)->where('name','Facebook')->first();
    	return $socialLinkFacebook;
    }
    public static function socialLinkGooglePlus() {
    	$socialLinkGooglePlus = socialpage::where('status', 1)->where('name','Google Plus')->first();
    	return $socialLinkGooglePlus;
    }
    public static function socialLinkTwitter() {
    	$socialLinkTwitter = socialpage::where('status', 1)->where('name','Twitter')->first();
    	return $socialLinkTwitter;
    }
    public static function socialLinkLinkedin() {
    	$socialLinkLinkedin = socialpage::where('status', 1)->where('name','Linkedin')->first();
    	return $socialLinkLinkedin;
    }
    public static function socialLinkDribble() {
    	$socialLinkDribble = socialpage::where('status', 1)->where('name','Dribble')->first();
    	return $socialLinkDribble;
    }
}
