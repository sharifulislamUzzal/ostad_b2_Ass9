@extends('welcome')

@section('contain')
<div class="container-fluid text-center"><h1>About ME</h1></div>
<hr>
<div class="containter">

    <div class="row ">
        <div class="col-1"></div>
        <div class="col-5 mt-5 text-center ">
            <h1>Md Shariful Islam</h1>
            <h4>IT Consultant</h4>
            <h6>Farhan IT</h6>
            <h6>Cell No : +88 01716385750</h6>
            <h6>Email : farhan@gmail.com</h6>
        </div>
        <div class="col-5 text-center">
            <img src="{{ asset('assets/images/uzzal.jfif') }}" alt="Girl in a jacket" width="300" height="300">
        </div>
        <div class="col-1"></div>
    </div>
    <hr>
    <div class="aboutme">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <h4>About Me</h4>
                <p >
                    As a IT Consultant, my primary focus is on creating dynamic and user-friendly applications.
                    </br>
                    My responsibilities are System Analysis & Database Design.
                    </br>
                    
                    </br>
                    
                    </br>
                    
                </p>
            </div>
            <div class="col-1"></div>
        </div>     
    </div>
    <hr>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="skills">
                <h3 class="mt-3">My Skills</h3>
                <div class="card h-100 shadow">
                    <div class="card-head"> <h6>Business Process</h6> </div>
                    <div class="card-body textarea">
                        <p>
                            Garment, Textile Mills, Hospital, Telecom.
                        </p>
                    </div>
                </div>
                <div class="card h-100 shadow">
                    <div class="card-head"> <h4>Back-end Development</h4> </div>
                    <div class="card-body textarea">
                        <p>
                            Proficient in Back-end technologies like Java,ASP.NET, PHP.
                        </p>
                    </div>
                </div>
                <div class="card h-100 shadow">
                    <div class="card-head"> <h4>Database</h4> </div>
                    <div class="card-body textarea">
                        <p>
                            Knowledgeable about Oracle, Sql Server, MySQL
                        </p>
                    </div>
                </div>
                
               
                
                
            </div>
        </div>
        <div class="col-2"></div>
    </div>

    <hr>

    <div class="container">
        <div class="row mt-3 mb-5">
           
            <div class="col-4">
                <div class="card h-100">
                    <div class="card-head bg-primary text-light"> <h4 class="text-center">Education</h4></div>
                    <div class="card-body bg-info">
                        <h6>Executive MBA from BRAC University</h6>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card h-100">
                    <div class="card-head bg-primary text-light"> <h4 class="text-center">Experience</h4></div>
                    <div class="card-body text-center bg-info ">
                        <h3>21 Years</h3>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card h-100">
                    <div class="card-head bg-primary text-light "> <h4 class="text-center">Certifications</h4></div>
                    <div class="card-body text-center bg-info ">
                        <h6>
                            <li>Oracle DBA</li>
                            <li>Microsoft SQL Server</li>
                            <li>RED Hat Linux</li>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</div>
@endsection