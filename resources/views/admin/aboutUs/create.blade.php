@extends('layouts.master-admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Input Sizes</h3>
    </div>
    <div class="card-body">
        <div class="row row-sm">
            <div class="col-lg">
                <form action="" method="">
                    @csrf
                <div>
                    <h5>Title</h5>
                    <input class="form-control  " type="text">
                </div>
                <div class="mb-3 mt-3">
                    <h5>Category</h5>
                    <select name="" id="" class="form-control">
                        <option>indo</option>
                        <option value="">malay</option>
                        <option value="">sing</option>
                    </select>
                </div>
                <div>
                    <h5>Description</h5>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mt-3">
                    <h5>Image</h5>
                    <input class="form-control  " type="file">
                </div>
                <div class="mt-3 float-end">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
