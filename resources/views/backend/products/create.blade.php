@extends('backend.layouts.master')

@section('title', 'Product Create')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">Add New Product</h6>
            <a class="btn btn-primary float-right" href="{{ route('products.index') }}">List</a>
        </div>
        <div class="card-body">
            <form class="user">
     <fieldset>


         <input type="text" name="title" placeholder="Enter Product title">
        <br><br>
            <input type="number" name="price" placeholder="Enter Product price">
        <br><br>
        <textarea name="description" placeholder="Product description" rows="4" cols="50">
        </textarea>
        <br><br>
            <input type="file" name="image" placeholder="Enter Product image">
        <br><br>
        <label for="color">Color:</label>
        <select name="color">
            <option value="Red">Red</option>
            <option value="Yellow">Yellow</option>
            <option value="Blue">Blue</option>
            <option value="Black">Black</option>
            <option value="White">White</option>
        </select>
        <br><br>
        <label for="size">Size:</label>
        <select name="size">
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
        </select>
        <br><br>
            <input type="radio" id="0" name="is_available" value="0">
        <label for="0">Unavailable</label>
            <input type="radio" id="1" name="is_available" value="1">
        <label for="1">Available</label><br>
        <br><br>
        <button href="login.html" class="btn btn-primary btn-user btn-block">
            Add Product
        </button>

    </fieldset>
</form>

 </form>
     </div>
    </div>
@endsection

@push('js')
    <script>
        // alert('Creating category')
    </script>
@endpush
