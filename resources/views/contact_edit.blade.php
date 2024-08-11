<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enter Contact Information</title>
    <link rel="stylesheet" href={{asset("./assets/style.css")}}>
</head>
<body>
    
<div class="form_div">
    <form class="contact_form" method="POST" action="{{route('contact_update',$contact->id)}}">
        @csrf
        @method('PUT')
        <label for="">First Name*</label>
        <input type="text" value="{{$contact->first_name}}" name="first_name">
          <!-- Display error for first_name -->
          @error('first_name')
          <div style="color: red;">{{ $message }}</div>
      @enderror

        <label for="">Last Name*</label>
        <input type="text" value="{{$contact->last_name}}" name="last_name">
        <!-- Display error for last_name -->
        @error('last_name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="">Email*</label>
        <input type="emial" value="{{$contact->email}}" name="email">
          <!-- Display error for email -->
          @error('email')
          <div style="color: red;">{{ $message }}</div>
      @enderror
        <label for="">Telephone Number*</label>
        <input type="tel"value="{{$contact->phone}}" name="phone">
          <!-- Display error for phone -->
          @error('phone')
          <div style="color: red;">{{ $message }}</div>
      @enderror
        <label for="">Address*</label>
        <input type="text" value="{{$contact->address}}" name="address">
          <!-- Display error for address -->
          @error('address')
          <div style="color: red;">{{ $message }}</div>
      @enderror
        <input class="input_field" type="submit">
        </form>

</div>


</body>
</html>