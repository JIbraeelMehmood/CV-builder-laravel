<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>    
</head> 
<body>
    <div class="wrapper mt-lg-5">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="assets/images/profile.png" alt="" />
                <h1 class="name">{{ $name }}</h1>
                <h3 class="tagline">Full Stack Developer</h3>
            </div><!--//profile-container-->
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fas fa-envelope"></i><a href="">{{ $email }}</a></li>
                    <li class="phone"><i class="fas fa-phone"></i><a href="">{{ $contact }}</a></li>
                    <li class="address"><i class="fab fa-home"></i><a href="" target="_blank">{{ $address }}</a></li>
                </ul>
            </div><!--//contact-container-->
        </div><!--//sidebar-wrapper-->
        <div class="main-wrapper">
            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span>Career Profile</h2>
                <div class="summary">
                    <p>lorem ipsum lorem ipsum lorem lorem ipsumlorem ipsumlorem 
                        ipsumipsum here lorem ipsum lorem ipsum lorem ipsum lorem ipsum,
                        consectetuer adipiscing elit. You canlorem ipsumlorem ipsumlorem
                        ipsumlorem ipsumlorem ipsum
                        lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum.
                    </p>
                </div><!--//summary-->
            </section><!--//section-->
            <section class="section experiences-section">
                <h3 class="section-title">
                    Experiences
                </h3>
                <div class="item">
                         <!--<h5 class="job-title">{{ $educations[0] }}</h5>-->
                         @php
                         for($count = 0; $count < count($experience); $count++)
                            {
                                echo' 
                                <div class="upper-row"> 
                                '.$experience[$count].'
                                </div>
                                <div class="summary">
                                    <p>'.$allexperienceDetails[$count].'..lorem ipsum lorem ipsum lorem lorem ipsumlorem ipsumlorem 
                                        ipsumipsum here lorem ipsum lorem ipsum lorem ipsum lorem ipsum,
                                        consectetuer adipiscing elit. You canlorem ipsumlorem ipsumlorem
                                        ipsumlorem ipsumlorem ipsum
                                        lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum.
                                    </p>
                                </div>';
                            }
                        @endphp
                </div><!--//item-->
            </section><!--//section-->
            <section class="section experiences-section">
                <h3 class="section-title">
                    Educations
                </h3>
                <div class="item">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Level</th>
                            <th scope="col">From</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                for($count = 0; $count < count($educations); $count++)
                                {
                                echo'<tr>
                                        <td>'.$educations[$count].'</td>
                                        <td>'.$alleducationDetails[$count].'</td>
                                        <td>'.$alleducationStatus[$count].'</td>
                                    </tr>';
                                }
                            @endphp
                        </tbody>
                      </table>
                </div><!--//item-->
            </section><!--//section-->
            <section class="section experiences-section">
                <h3 class="section-title">
                    Projects
                </h3>
                <div class="item">
                    <ol>
                        @php
                            for($count = 0; $count < count($projects); $count++)
                            {
                                echo '<li>'.$projects[$count].'</li>';
                            }
                        @endphp
                    </ol>
                </div><!--//item-->
            </section><!--//section-->
        </div><!--//main-body-->
    </div>
    <footer class="footer">
        <div class="text-center">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        </div><!--//container-->
    </footer><!--//footer-->
        
</body>
</html> 

