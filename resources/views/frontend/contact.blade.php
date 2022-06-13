@extends('frontend.master')
@section('content')
<div class="row">
    <div class="col-md-5 col-sm-8 mr-md-auto mb-5">
        <form action="#" method="post" id="search-form"
            class="d-flex align-items-center bg-color position-relative">
            <input type="search" name="search" class="form-control bg-transparent h-100"
                placeholder="Search Here">
            <button type="submit"
                class="search__btn border-0 bg-transparent px-3 py-3 position-absolute"><i
                    class="fas fa-search search__icon text-white"></i></button>
        </form>
    </div>
    <div class="col-lg-11 mb-6">
        <div class="bg-color px-lg-5 py-lg-5 mb-5">
            <form class="contact-form px-5 py-5 mx-lg-5 my-lg-5">
                <h1 class="h1">Lets Contact Us</h1>
                <div class="row pt-3">
                    <div class="form-group col-md-6 mb-5">
                        <label for="inputText1" class="label-text text-white">Your First Name</label>
                        <input type="text"
                            class="form-control bg-transparent border-right-0 border-left-0 border-top-0 rounded-0 mt-3 shadow-none pt-2 pb-4 h-auto"
                            placeholder="Robert Lee" id="inputText1" required>
                    </div>
                    <div class="form-group col-md-6 mb-5">
                        <label for="inputText2" class="label-text text-white">Your Last Name</label>
                        <input type="text"
                            class="form-control bg-transparent border-right-0 border-left-0 border-top-0 rounded-0 mt-3 shadow-none pt-2 pb-4 h-auto"
                            placeholder="Anderson" id="inputText2">
                    </div>
                    <div class="form-group col-md-6 mb-5">
                        <label for="inputEmail" class="label-text text-white">E-Mail Address</label>
                        <input type="email" name="email"
                            class="form-control bg-transparent border-right-0 border-left-0 border-top-0 rounded-0 mt-3 shadow-none pt-2 pb-4 h-auto"
                            id="inputEmail" placeholder="kevin.jones@mail.com" required>
                    </div>
                    <div class="form-group col-md-6 mb-5">
                        <label for="inputGroupSelect" class="label-text text-white">What Is This
                            About?</label>
                        <div class="select-wrapper position-relative">
                            <select id="inputGroupSelect"
                                class="custom-select form-control bg-transparent border-right-0 border-left-0 border-top-0 rounded-0 mt-3 shadow-none pt-2 pb-4 h-auto">
                                <option selected>kevin.jones@mail.com</option>
                                <option>Student</option>
                                <option>Freelancer</option>
                                <option>Doctor</option>
                                <option>Worker</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-5">
                    <label for="exampleFormControlTextarea" class="label-text text-white">Your
                        message</label>
                    <textarea
                        class="form-control bg-transparent border-right-0 border-left-0 border-top-0 rounded-0 mt-3 shadow-none pt-2 pb-4 h-auto"
                        id="exampleFormControlTextarea" rows="3"
                        placeholder="Lorem Ipsum is simply dummy text of the printing and......."></textarea>
                </div>
                <button type="submit"
                    class="theme-btn hover-color transition-400ms border-0 text-white d-inline-flex align-items-center">Send
                    Now<i class="fas fa-long-arrow-alt-right ml-3 pt-1"></i></button>
            </form>
        </div>
    </div>
</div>
@endsection
