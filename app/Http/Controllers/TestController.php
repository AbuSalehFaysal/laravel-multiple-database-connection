<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function addStudent()
    {
        $students = [
            ['name' => 'Abu', 'email' => 'abusalehfaysal222@gmail.com', 'phone' => '+8801521323452'],
            ['name' => 'Saleh', 'email' => 'abusalehfaysal222@gmail.com', 'phone' => '+8801521323452'],
            ['name' => 'Faysal', 'email' => 'abusalehfaysal222@gmail.com', 'phone' => '+8801521323452'],
        ];
        Student::insert($students);
        return "Students are added!";
    }

    public function addPost()
    {
        $posts = [
            ['title' => 'First post title', 'body'=> 'First post body'],
            ['title' => 'Second post title', 'body'=> 'Second post body'],
        ];
        Post::insert($posts);
        return "Posts are added!";
    }

    public function getStudents()
    {
        $students = Student::all();
        return $students;
    }

    public function getPosts()
    {
        $posts = Post::all();
        return $posts;
    }
}
