@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
        <div class="content">
            <img src="/img/burg.png" alt="burger plaza logo">
                <div class="title m-b-md">
                    Order a Burger
                </div>
                <div class="wrapper create-burger">
                <form action="/burgers" method="post">
                @csrf
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name">
                <hr><br>
                <label for="type">Choose The Type</label>
                <select name="type" id="type">
                <option value="Beef">Beef</option>
                <option value="Chicken">Chicken</option>
                </select><hr>
                <label for="base">Choose The base</label>
                <select name="base" id="base">
                <option value="Cheese">Cheese</option>
                <option value="Without Cheese">Without Cheese</option>
                </select>
                <hr>
               
                <label for="">Level of Spice</label>
                <select name="level" id="level">
                <option value="Mild">Mild</option>
                <option value="Spicy">Spicy</option>
                <option value="Extra Spicy">Extra Spicy</option>
                </select>
                <hr>
                <fieldset>
                <label for="">Add-On(s):</label>
                <input type="checkbox" name="addons[]" value="Mushrooms"> Mushrooms
                <input type="checkbox" name="addons[]" value="Onions"> Onions 
                <input type="checkbox" name="addons[]" value="Extra Sauce"> Extra Sauce 
                <input type="checkbox" name="addons[]" value="Mayonnaise"> Mayonnaise 
                </fieldset>
                <hr>
                <input type="submit" value="Order Burger">
                </form>
                </div>
            </div>
        </div>
        @endsection