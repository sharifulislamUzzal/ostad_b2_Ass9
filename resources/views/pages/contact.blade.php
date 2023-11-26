@extends('welcome')

@section('contain')
<div class="container-fluid text-center"><h1>Contact Me</h1></div>
<hr>
    <div class="container">
        <div class="row">
            
            <div class="col-4 mt-5">
                <h4>Send me Message from here !</h4>
                <form action="">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">

                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">

                    <p><label for="message">Message:</label></p>
                    <textarea id="message" name="message" rows="4" cols="50"></textarea>
                    <br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
@endsection