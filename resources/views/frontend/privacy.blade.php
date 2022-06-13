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
    <div class="col-lg-10 privecy-details mb-6">
        <h1 class="h1">Privecy & Policy</h1>
        <p class="privecy__text py-5">bottom line is it’s our aim to always take care of both of us,
            Please read this terms and stated below, goodies Byes.</p>
        <ul class="faq-list list-unstyled ml-5">
            <li class="faq-item position-relative">
                <h3 class="h3">Responsibility of Contributors</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus,
                    donec nunc eros, ullamcorper id feugiat quisque aliquam sagittis. Sem turpis sed
                    viverra massa gravida pharetra. Non dui dolor potenti eu dignissim fusce.
                    Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis in
                    tortor cursus. Molestie urna eu tortor, erat scelerisque eget. Nunc hendrerit
                    sed interdum lacus. Lorem quis viverra sed</p>
                <p>pretium, aliquam sit. Praesent elementum magna amet, tincidunt
                    eros, nibh in leo. Malesuada purus, lacus, at aliquam suspendisse tempus. Quis
                    tempus amet, velit nascetur sollicitudin. At sollicitudin eget amet in. Eu velit
                    nascetur sollicitudin erhdfvssfvrgss eget viverra nec elementum. Lacus,
                    facilisis tristique lectus in.</p>
            </li>
            <li class="faq-item position-relative">
                <h3 class="h3">Gathering of Personal Information</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus,
                    donec nunc eros, ullamcorper id feugiat quisque aliquam sagittis. Sem turpis sed
                    viverra massa gravida pharetra. Non dui dolor potenti eu dignissim fusce.
                    Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis in
                    tortor cursus. Molestie urna eu tortor, erat scelerisque eget. Nunc hendrerit
                    sed interdum lacus. Lorem quis viverra sed</p>
            </li>
            <li class="faq-item position-relative">
                <h3 class="h3">Protection of Personal- Information</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus,
                    donec nunc eros, ullamcorper id feugiat quisque aliquam sagittis. Sem turpis sed
                    viverra massa gravida pharetra. Non dui dolor potenti eu dignissim fusce.
                    Ultrices amet, in curabitur a arcu a lectus morbi id. Iaculis erat sagittis in
                    tortor cursus.</p>
                <p>Molestie urna eu tortor, erat scelerisque eget. Nunc hendrerit
                    sed interdum lacus. Lorem quis viverra sed Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Purus, donec nunc eros, ullamcorper id feugiat</p>
            </li>
            <li class="faq-item position-relative">
                <h3 class="h3">Privacy Policy Changes</h3>
                <ol class="inner-faq-list list-unstyled">
                    <li class="inner-faq-item mb-3">Sll the Themefisher items are designed to be with
                        the latest , We check all.</li>
                    <li class="inner-faq-item mb-3">comments that threaten or harm the reputation of any
                        person or organization</li>
                    <li class="inner-faq-item mb-3">personal information including, but limited to,
                        email addresses, telephone numbers</li>
                    <li class="inner-faq-item mb-3">Any Update come in The technology Customer will get
                        automatic Notification.</li>
                </ol>
            </li>
        </ul>
    </div>
</div>
@endsection
