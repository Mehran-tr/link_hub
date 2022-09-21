@extends('layouts.app')
@section('content')

    <div class="container">
        <main>


            <div class="row g-5">

                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Add new Link</h4>
                    <form class="needs-validation" method="POST" action="{{route('store')}}" novalidate>
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            </div>


                            <div class="col-12">
                                <label for="description" class="form-label">Description</label>
                                <div class="input-group has-validation">

                                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="author" class="form-label">Author</label>
                                <input type="author" name="author" class="form-control" id="author">
                                <div class="invalid-feedback">
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="resource_url" class="form-label">resource_url</label>
                                <input type="text" name="resource_url" class="form-control" id="resource_url" placeholder="Add link" required>

                            </div>

                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Save</button>
                    </form>
                </div>
            </div>

        </main>

    </div>
 @endsection
