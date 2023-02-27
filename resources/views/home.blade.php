@extends('layouts.main')

@section('content')
<div class="w-full">
<div class="w-full relative h-[85vh] bg-image  btn-placement">
  @include("partials.navbar")
<button class="button grow">Get Tickets Now</button>
</div>

<div class="bg-light"></div>
</div>
@endsection

<style>
p{
  color: #ffffff;
  font-weight: 700;
  font-size: 36px;
  margin-left: 17px;
  
}

.btn-placement{
padding-top: 32%;
padding-left: 22%;
}

.bg-image {
  background-image: url('img/avatar.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
}

.bg-light {
  background-image: url('img/light-bg.png');
  height: 850px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.button {
  align-items: center;
  background-color: #FF8000;
  border: 0;
  border-radius: 100px;
  box-sizing: border-box;
  color: #ffffff;
  cursor: pointer;
  display: inline-flex;
  font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
  font-size: 26px;
  font-weight: 600;
  justify-content: center;
  line-height: 20px;
  max-width: 480px;
  min-height: 60px;
  min-width: 0px;
  overflow: hidden;
  padding: 0px;
  padding-left: 26px;
  padding-right: 26px;
  text-align: center;
  touch-action: manipulation;
  transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
}

.grow { 
transition: all .2s ease-in-out; 
}

.grow:hover { 
transform: scale(1.1); 
}




</style>



