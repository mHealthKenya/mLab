@extends('layouts.master')
@section('before-css')


@endsection

@section('main-content')
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Add Unit</div>
                            <form role="form" method="post"action="{{route('addunit')}}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="firstName1">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Unit name">
                                    </div> 

                                    <div class="col-md-12 form-group mb-3">
                                        <label for="picker1">Affiliation</label>

                                        <select class="form-control" class="col-md-12 form-group mb-3" id="program" name="program_id">
                                            <option value="">Select program</option>
                                                @if (count($programs) > 0)
                                                    @foreach($programs as $program)
                                                    <option value="{{$program->id }}">{{ ucwords($program->name) }}</option>
                                                        @endforeach
                                                @endif
                                        </select>
                                    </div> 

                                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                      
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('page-js')




@endsection

@section('bottom-js')

@endsection
