<link href="<?php echo url('/'); ?>/css/counter.css" rel="stylesheet">

<div class="">
        <div class="heading">
            Counting Upto the Limit
        </div>
        <div class="counter-container">
            <div class="counter">
                <img src="{{ asset('img/img-user.png'); }}" alt="users" srcset="" class="icon">
                <h3 data-target="15000" class="count">0</h3>
                <h6>Player</h6>
            </div>
            <div class="counter">
                <img src="{{ asset('img/img-course.png'); }}" alt="Courses" srcset="" class="icon">
                <h3 data-target="1200" class="count">0</h3>
                <h6>Course</h6>
            </div>
            <div class="counter">
                <img src="{{ asset('img/img-challenges.png'); }}" alt="night" srcset="" class="icon">
                <h3 data-target="500" class="count">0</h3>
                <h6>Challenge</h6>
            </div>
        </div>
    </div>
    <script src="<?php echo url('/'); ?>/js/counter.js"></script>