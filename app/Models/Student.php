<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'mobile', 'image'];

    protected static $student, $imageName, $image, $imgDirectory, $imgUrl;

    public static function createStudent($request){
        self::$image = $request->file('image');
        self::$imageName = time().self::$image->getClientOriginalName();
        self::$imgDirectory = 'assets/image/students/';
        self::$image->move(self::$imgDirectory, self::$imageName);
        self::$imgUrl = self::$imgDirectory.self::$imageName;

        self::$student          = new Student();
        self::$student->name    = $request->name;
        self::$student->email   = $request->email;
        self::$student->mobile  = $request->mobile;
        self::$student->image   = self::$imgUrl;
        self::$student->save();

        /*Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'image' => $request->image,
        ]);*/

//        Student::create($request->except('_token'));

    }
    public static function updateStudent($request, $id){
        self::$student          = Student::find($id);
        self::$image = $request->file('image');
        if (self::$image){
            if (file_exists(self::$image->image)){
                unlink(self::$image->image);
            }
            self::$imageName = time().self::$image->getClientOriginalName();
            self::$imgDirectory = 'assets/image/students/';
            self::$image->move(self::$imgDirectory, self::$imageName);
            self::$imgUrl = self::$imgDirectory.self::$imageName;
        }else{
            self::$imgUrl = self::$student->image;
        }
        self::$student->name    = $request->name;
        self::$student->email   = $request->email;
        self::$student->mobile  = $request->mobile;
        self::$student->image   = self::$imgUrl;
        self::$student->save();
    }
}

