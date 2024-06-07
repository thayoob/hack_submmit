@extends('layouts.app')
@section('title', 'Persnalized Learning')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
        .card-group {
            display: flex;
            gap: 1rem;
            justify-content: space-between;
        }

        .card {
            flex: 1;
            border: 1px solid #ddd;
            border-radius: 0.25rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 1rem;
        }

        .card-title {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .image-container {
            cursor: pointer;
            width: 100%;
            height: auto;
            object-fit: cover;
        }


        .form-control {
            border: 1px solid #ccc;
            resize: vertical;
        }

        .mt-3 {
            margin-top: 1rem;
        }

        .btn {
            margin-right: 0.5rem;
        }
    </style>
    <div class="container mt-5">
        <h1 class="mb-4">Student Data Collection Form</h1>
        <form id="studentForm" action="" method="post">
            <div class="tab-content">
                <!-- Demographic Information -->
                <div class="tab-pane fade show active" id="demographic" role="tabpanel">
                    <fieldset class="border p-4 mb-4">
                        <legend class="w-auto">Demographic Information</legend>
                        <div class="form-group mb-3">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="age">Age:</label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="gender">Gender:</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                                <option value="prefer_not_to_say">Prefer not to say</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Email">Email:</label>
                            <input type="Email" class="form-control" id="Email" name="Email" required>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="nextTab('academic')">Next</button>
                    </fieldset>
                </div>

                <!-- Academic Information -->
                <div class="tab-pane fade" id="academic" role="tabpanel">
                    <fieldset class="border p-4 mb-4">
                        <legend class="w-auto">Academic Information</legend>
                        <div class="form-group mb-3">
                            <label for="current_grades">Current Grades:</label>
                            <input type="text" class="form-control" id="current_grades" name="current_grades" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="previous_records">Previous Academic Records:</label>
                            <textarea class="form-control" id="previous_records" name="previous_records" rows="3" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="standardized_tests">Standardized Test Scores:</label>
                            <input type="text" class="form-control" id="standardized_tests" name="standardized_tests"
                                required>
                        </div>
                        <button type="button" class="btn btn-secondary"
                            onclick="previousTab('demographic')">Previous</button>
                        <button type="button" class="btn btn-primary" onclick="nextTab('skills')">Next</button>
                    </fieldset>
                </div>

                <!-- Skills and Interests -->
                <div class="tab-pane fade" id="skills" role="tabpanel">
                    <fieldset class="border p-4 mb-4">
                        <legend class="w-auto">Skills and Interests</legend>
                        <div class="form-group mb-3">
                            <label for="extracurricular">Extracurricular Activities:</label>
                            <textarea class="form-control" id="extracurricular" name="extracurricular" rows="3"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="special_skills">Special Skills or Talents:</label>
                            <textarea class="form-control" id="special_skills" name="special_skills" rows="3"></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="previousTab('academic')">Previous</button>
                        <button type="button" class="btn btn-primary" onclick="nextTab('tech')">Next</button>
                    </fieldset>
                </div>

                <!-- Technological Proficiency -->
                <div class="tab-pane fade" id="tech" role="tabpanel">
                    <fieldset class="border p-4 mb-4">
                        <legend class="w-auto">Technological Proficiency</legend>
                        <div class="form-group mb-3">
                            <label for="access_technology">Access to Technology:</label>
                            <textarea class="form-control" id="access_technology" name="access_technology" rows="3"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="digital_literacy">Digital Literacy Skills:</label>
                            <textarea class="form-control" id="digital_literacy" name="digital_literacy" rows="3"></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary"
                            onclick="previousTab('skills')">Previous</button>
                        <button type="button" class="btn btn-primary" onclick="nextTab('aspirations')">Next</button>
                    </fieldset>
                </div>

                <!-- Future Aspirations -->
                <div class="tab-pane fade" id="aspirations" role="tabpanel">
                    <fieldset class="border p-4 mb-4">
                        <legend class="w-auto">Future Aspirations</legend>
                        <div class="form-group mb-3">
                            <label for="career_interests">Career Interests:</label>
                            <textarea class="form-control" id="career_interests" name="career_interests" rows="3"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="higher_education">Higher Education Plans:</label>
                            <textarea class="form-control" id="higher_education" name="higher_education" rows="3"></textarea>
                        </div>
                        <!-- New question about interests as radio buttons -->
                        <div class="form-group mb-3">
                            <label for="interests">What are your interests?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="interests" id="art"
                                    value="art">
                                <label class="form-check-label" for="art">Art</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="interests" id="medical"
                                    value="medical">
                                <label class="form-check-label" for="medical">Medical</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="interests" id="business"
                                    value="business">
                                <label class="form-check-label" for="business">Business</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="interests" id="engineering"
                                    value="engineering">
                                <label class="form-check-label" for="engineering">Engineering</label>
                            </div>
                        </div>
                        <!-- End of new question -->
                        <button type="button" class="btn btn-secondary" onclick="previousTab('tech')">Previous</button>
                        <button type="button" class="btn btn-primary" onclick="nextTab('Aptitute')">Next</button>
                    </fieldset>
                </div>
                <div class="tab-pane fade" id="Aptitute" role="tabpanel">
                    <fieldset class="border p-4 mb-4">
                        <legend class="w-auto">Mathematical Aptitude</legend>
                        <!-- Question 1 -->
                        <div class="form-group mb-3">
                            <label for="question1">Question 1: What is 2 + 2?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question1" id="q1_option1"
                                    value="4">
                                <label class="form-check-label" for="q1_option1">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question1" id="q1_option2"
                                    value="3">
                                <label class="form-check-label" for="q1_option2">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question1" id="q1_option3"
                                    value="5">
                                <label class="form-check-label" for="q1_option3">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question1" id="q1_option4"
                                    value="2">
                                <label class="form-check-label" for="q1_option4">2</label>
                            </div>
                        </div>
                        <!-- Question 2 -->
                        <div class="form-group mb-3">
                            <label for="question2">Question 2: What is 6 multiplied by 4?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question2" id="q2_option1"
                                    value="24">
                                <label class="form-check-label" for="q2_option1">24</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question2" id="q2_option2"
                                    value="30">
                                <label class="form-check-label" for="q2_option2">30</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question2" id="q2_option3"
                                    value="36">
                                <label class="form-check-label" for="q2_option3">36</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question2" id="q2_option4"
                                    value="40">
                                <label class="form-check-label" for="q2_option4">40</label>
                            </div>
                        </div>
                        <!-- Question 3 -->
                        <div class="form-group mb-3">
                            <label for="question3">Question 3: What is 10 divided by 2?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question3" id="q3_option1"
                                    value="3">
                                <label class="form-check-label" for="q3_option1">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question3" id="q3_option2"
                                    value="4">
                                <label class="form-check-label" for="q3_option2">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question3" id="q3_option3"
                                    value="5">
                                <label class="form-check-label" for="q3_option3">5</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question3" id="q3_option4"
                                    value="6">
                                <label class="form-check-label" for="q3_option4">6</label>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary"
                            onclick="previousTab('aspirations')">Previous</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </div>


            </div>

        </form>

    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        function nextTab(nextId) {
            var currentTab = document.querySelector('.tab-pane.show.active');
            currentTab.classList.remove('show', 'active');
            document.getElementById(nextId).classList.add('show', 'active');
        }

        function previousTab(prevId) {
            var currentTab = document.querySelector('.tab-pane.show.active');
            currentTab.classList.remove('show', 'active');
            document.getElementById(prevId).classList.add('show', 'active');
        }
    </script>
@endsection
