@extends('layouts.user')
 
@section('title', 'Home')
 
@section('contents')
<style>
    .text-3xl {
        font-bold text-gray-900;
        color: #F1EF99;
        background-color: #D37676;
        text-align: center;
        justify-content: center;
    }
    .main{
        border: 2px solid  pink;
        margin-top: 5%;
    }
    .border-4{
        border: 2px solid  pink;
        margin-top: 5px;
        height: 200px;
        width: 200px;
        display: inline;
        justify-content: start;
        align-items: centers;
    }
</style>
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            welcome to Luna Skincare 
        </h1>
    </div>
</header>
<hr />
<main class="main">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                <img src="https://www.thebeautysalon.ie/wp-content/uploads/2021/05/imagemain.jpg" alt="" width="1000px" height="800px">
            </div>
            
        </div>
    </div>
</main>
@endsection