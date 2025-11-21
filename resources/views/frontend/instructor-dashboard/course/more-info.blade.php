@extends('frontend.instructor-dashboard.course.course-app')

@section('course_content')
<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
    <div class="add_course_basic_info">
        <form action="" class="more_info_form course-form" > 
            @csrf
            <input type="hidden" name="id" value="{{ request()?->id }}">
            <input type="hidden" name="current_step" value="2">
            <input type="hidden" name="next_step" value="3">

            <div class="row">
                <div class="col-xl-6">
                    <div class="add_course_more_info_input">
                        <label for="#">Capacity</label>
                        <input type="text" placeholder="Capacity" name="capacity" value="{{ $course?->capacity }}">
                        <p>leave blank for unlimited</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add_course_more_info_input">
                        <label for="#">Course Duration (Minutes)*</label>
                        <input type="text" placeholder="300" name="duration" value="{{ $course->duration }}">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add_course_more_info_checkbox">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="qna" @checked($course?->qna === 1) value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Q&A</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" @checked($course?->certificate === 1) name="certificate" value="1" id="flexCheckDefault2">
                            <label class="form-check-label" for="flexCheckDefault2">Completion Certificate</label>
                        </div>
                        
                    </div>
                </div>
               
                <div class="col-xl-12">
                    <button type="submit" class="common_btn">Save</button>
                </div>
            </div>
        </form> 
    </div>
</div>
@endsection