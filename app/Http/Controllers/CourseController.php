<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //


    public function index() {

        $courseArray = [
            [
                'id' => 1,
                'title' => 'Web Technology',
                'code' => '01418443',
                'lecturer' => 'Dr. Kevin Lee',
                'full' => '100',
                'midterm' => '100',
                'max' => '100',
                'min' => '67.88',
                'avg' => '89.99',
                'grade' => 'A'
            ],

            [
                'id' => 2,
                'title' => 'Computer Programming',
                'code' => '01418116',
                'lecturer' => 'Tony Stark',
                'full' => '50',
                'midterm' => '35.67',
                'max' => '49.76',
                'min' => '12',
                'avg' => '25.31',
                'grade' => 'B'
            ],

            [
                'id' => 3,
                'title' => 'Seminar',
                'code' => '01418497',
                'lecturer' => 'Dr. Kevin Lee',
                'full' => '30',
                'midterm' => '20',
                'max' => '26',
                'min' => '0',
                'avg' => '11.45',
                'grade' => 'C+'
            ],

            [
                'id' => 4,
                'title' => 'Algorithm Design and Analysis',
                'code' => '01418232',
                'lecturer' => 'Dr. Lego Eiei',
                'full' => '35',
                'midterm' => '15.34',
                'max' => '28.67',
                'min' => '4.33',
                'avg' => '12.79',
                'grade' => 'C+'
            ],

            [
                'id' => 5,
                'title' => 'Operating System',
                'code' => '01418332',
                'lecturer' => 'Professor Muk Nantiya',
                'full' => '35',
                'midterm' => '32.31',
                'max' => '34',
                'min' => '6.99',
                'avg' => '16.89',
                'grade' => 'B'
            ],

            [
                'id' => 6,
                'title' => 'Software Construction',
                'code' => '01418217',
                'lecturer' => 'Alan Turing',
                'full' => '15',
                'midterm' => '3.45',
                'max' => '15',
                'min' => '0.99',
                'avg' => '7.63',
                'grade' => 'W'
            ],

            [
                'id' => 7,
                'title' => 'Automata Theory',
                'code' => '01418333',
                'lecturer' => 'Dr. James Jatupat',
                'full' => '45',
                'midterm' => '43',
                'max' => '44.23',
                'min' => '20.34',
                'avg' => '27.22',
                'grade' => 'N'
            ]
            ];

            return view('registra.all-course')->with('courseArray',$courseArray);
    }

    public function show($id)  {

        $courseArray = [
                 [
                     'id' => 1,
                     'title' => 'Web Technology',
                     'code' => '01418443',
                     'lecturer' => 'Dr. Kevin Lee',
                     'full' => '100',
                     'midterm' => '100',
                     'max' => '100',
                     'min' => '67.88',
                     'avg' => '89.99',
                     'grade' => 'A'
                 ],
                 [

                     'id' => 2,
                     'title' => 'Computer Programming',
                     'code' => '01418116',
                     'lecturer' => 'Tony Stark',
                     'full' => '50',
                     'midterm' => '35.67',
                     'max' => '49.76',
                     'min' => '12',
                     'avg' => '25.31',
                     'grade' => 'B'
                 ],
            [
                'id' => 3,
                'title' => 'Seminar',
                'code' => '01418497',
                'lecturer' => 'Dr. Kevin Lee',
                'full' => '30',
                'midterm' => '20',
                'max' => '26',
                'min' => '0',
                'avg' => '11.45',
                'grade' => 'C+'
            ],

            [
                'id' => 4,
                'title' => 'Algorithm Design and Analysis',
                'code' => '01418232',
                'lecturer' => 'Dr. Lego Eiei',
                'full' => '35',
                'midterm' => '15.34',
                'max' => '28.67',
                'min' => '4.33',
                'avg' => '12.79',
                'grade' => 'C+'
            ],

            [
                'id' => 5,
                'title' => 'Operating System',
                'code' => '01418332',
                'lecturer' => 'Professor Muk Nantiya',
                'full' => '35',
                'midterm' => '32.31',
                'max' => '34',
                'min' => '6.99',
                'avg' => '16.89',
                'grade' => 'B'
            ],

            [
                'id' => 6,
                'title' => 'Software Construction',
                'code' => '01418217',
                'lecturer' => 'Alan Turing',
                'full' => '15',
                'midterm' => '3.45',
                'max' => '15',
                'min' => '0.99',
                'avg' => '7.63',
                'grade' => 'W'
            ],

            [
                'id' => 7,
                'title' => 'Automata Theory',
                'code' => '01418333',
                'lecturer' => 'Dr. James Jatupat',
                'full' => '45',
                'midterm' => '43',
                'max' => '44.23',
                'min' => '20.34',
                'avg' => '27.22',
                'grade' => 'N'
            ]
             ];

    return view('registra.show', ['course' => $courseArray[$id-1] ]);
    }
}
