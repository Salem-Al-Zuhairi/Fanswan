<head>
<link rel="stylesheet" type="text/css" href="css\signup.css">
</head>
@extends('main')
@section('con')
  <div class="box">
    <form method="post" action="{{ route('addItem') }}">
      @csrf
      <h1>Add Item</h1>
      <div class="name">
        <label class="label">Name:</label>
        <input class="inputs" type="text" name="name" required placeholder="Enter Item Name">
      </div>
      @if($errors->has('name'))
      <div class="alert alert-danger">{{ $errors->first('name') }}</div>
      @endif
      <div class="price">
        <label class="label">Price:</label>
        <input class="inputs" type="number" name="price" required placeholder="Enter Price">
      </div>
      @if($errors->has('price'))
      <div class="alert alert-danger">{{ $errors->first('price') }}</div>
      @endif
      <div class="brand">
        <label class="label">Brand:</label>
        <input class="inputs" type="text" name="brand" required placeholder="Enter Brand">
      </div>
      @if($errors->has('brand'))
      <div class="alert alert-danger">{{ $errors->first('brand') }}</div>
      @endif
      <div class="model">
        <label class="label">Model name:</label>
        <input class="inputs" type="text" name="model" required placeholder="Enter Model name">
      </div>
      @if($errors->has('model'))
      <div class="alert alert-danger">{{ $errors->first('model') }}</div>
      @endif
      <div class="cpu">
        <label class="label">CPU:</label>
        <input class="inputs" type="text" name="cpu" required placeholder="Enter CPU">
      </div>
      @if($errors->has('cpu'))
      <div class="alert alert-danger">{{ $errors->first('cpu') }}</div>
      @endif
      <div class="memory">
        <label class="label">Memory:</label>
        <input class="inputs" type="text" name="memory" required placeholder="Enter Memory">
      </div>
      @if($errors->has('memory'))
      <div class="alert alert-danger">{{ $errors->first('memory') }}</div>
      @endif
      <div class="screen">
        <label class="label">Screen:</label>
        <input class="inputs" type="text" name="screen" required placeholder="Enter Screen">
      </div>
      @if($errors->has('screen'))
      <div class="alert alert-danger">{{ $errors->first('screen') }}</div>
      @endif
      <div class="gpu">
        <label class="label">GPU:</label>
        <input class="inputs" type="text" name="gpu" required placeholder="Enter GPU">
      </div>
      @if($errors->has('gpu'))
      <div class="alert alert-danger">{{ $errors->first('gpu') }}</div>
      @endif
      <div class="storage">
        <label class="label">Storage:</label>
        <input class="inputs" type="text" name="storage" required placeholder="Enter Storage">
      </div>
      @if($errors->has('storage'))
      <div class="alert alert-danger">{{ $errors->first('storage') }}</div>
      @endif
      <div class="os">
        <label class="label">OS:</label>
        <input class="inputs" type="text" name="os" required placeholder="Enter OS">
      </div>
      @if($errors->has('os'))
      <div class="alert alert-danger">{{ $errors->first('os') }}</div>
      @endif
      <div class="about">
        <label class="label">About:</label>
        <textarea class="inputs" type="textarea" name="about" required rows="4" cols="50" placeholder="Enter About"></textarea>
      </div>
      @if($errors->has('about'))
      <div class="alert alert-danger">{{ $errors->first('about') }}</div>
      @endif
      <div class="images">
        <label class="label">Images:</label>
        <textarea class="inputs" type="text" name="images" rows="4" cols="50" required placeholder="Enter Images Links wth (,) between"></textarea>
      </div>
      @if($errors->has('images'))
      <div class="alert alert-danger">{{ $errors->first('images') }}</div>
      @endif
      <div class="c-submit">
        <input class="submit" type="submit" name="submit" value="Add">
      </div>
    </form>

  </div>
</body>

</html>