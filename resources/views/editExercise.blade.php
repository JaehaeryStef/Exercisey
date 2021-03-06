@extends('layouts.app')

@section('content')
    @include('includes.message-block')
    <div class="container">
        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <h3>Update Your exercise</h3>
                               <form action="{{ route('edit.exercise') }}" method="post">
                    <div class="form-group">
                    <h3>Title</h3>
                        <input class="form-control" name="title" value="{{ $exercises->title }}" id="new-post" rows="1"
                              placeholder="Your Title">
                    </div>
                    <div class="form-group">
                        <h3>body</h3>
                    <textarea class="form-control" name="body" id="new-post" rows="15"
                              placeholder="Your Description">{{ $exercises->body }}</textarea>
                    </div>
                                   <h3>Muscle groups</h3>
                                   <div class="form-group">
                                       <h4>Main Muscle group</h4>
                                       <select name="musclegroups" class="form-control">
                                           <option value="Neck">Neck</option>
                                           <option value="Traps">Traps</option>
                                           <option value="Shoulders">Shoulders</option>
                                           <option value="Chest">Chest</option>
                                           <option value="Biceps">Biceps</option>
                                           <option value="Forearm">Forearm</option>
                                           <option value="Abs">Abs</option>
                                           <option value="Quads">Quads</option>
                                           <option value="Calves">Calves</option>
                                           <option value="Triceps">Triceps</option>
                                           <option value="Lats">Lats</option>
                                           <option value="Middle Back">Middle Back</option>
                                           <option value="Lower Back">Lower Back</option>
                                           <option value="Glutes">Glutes</option>
                                           <option value="Hamstring">Hamstring</option>
                                       </select>

                                       {{--<textarea class="form-control" name="musclegroups" id="new-post" rows="5"--}}
                                       {{--placeholder="Muscle Groups used in exercise"></textarea>--}}
                                   </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                                   <input type="hidden" value=" {{ $exercises->id }}" name="exercise_id">


                </form>
            </div>
        </section>
    </div>
    @endsection