<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Analytics</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

    <div class="container mt-5">
        <h1 class="mb-4">Student Analytics</h1>

        <!-- Demographic Information -->
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Demographic Information</h5>
                <p class="card-text">Name: {{ $student->name }}</p>
                <p class="card-text">Age: {{ $student->age }}</p>
                <p class="card-text">Gender: {{ ucfirst($student->gender) }}</p>
                <p class="card-text">Email: {{ $student->email }}</p>
            </div>
        </div>

        <!-- Academic Information -->
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Academic Information</h5>
                <p class="card-text">Current Grades: {{ $student->current_grades }}</p>
                <p class="card-text">Previous Records: {{ $student->previous_records }}</p>
                <p class="card-text">Standardized Test Scores: {{ $student->standardized_tests }}</p>
            </div>
        </div>

        <!-- Skills and Interests -->
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Skills and Interests</h5>
                <p class="card-text">Extracurricular Activities: {{ $student->extracurricular_activities }}</p>
                <p class="card-text">Special Skills: {{ $student->special_skills }}</p>
                <p class="card-text">Access to Technology: {{ $student->access_to_technology }}</p>
                <p class="card-text">Digital Literacy: {{ $student->digital_literacy }}</p>
            </div>
        </div>

        <!-- Future Aspirations -->
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Future Aspirations</h5>
                <p class="card-text">Career Interests: {{ $student->career_interests }}</p>
                <p class="card-text">Higher Education Plans: {{ $student->higher_education_plans }}</p>
                <p class="card-text">Interests: {{ ucfirst($student->interests) }}</p>
            </div>
        </div>

        <!-- Mathematical Aptitude -->
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Mathematical Aptitude</h5>
                <p class="card-text">Question 1: What is 2 + 2? -
                    <span
                        class="text-warning">{{ $student->aptitude_question_1 == '4' ? $student->aptitude_question_1 . ' Your answer is correct' : $student->aptitude_question_1 . ' Your answer is wrong' }}</span>
                </p>
                <p class="card-text">Question 2: What is 6 multiplied by 4? -
                    <span
                        class="text-warning">{{ $student->aptitude_question_2 == '24' ? $student->aptitude_question_2 . ' Your answer is correct' : $student->aptitude_question_2 . ' Your answer is wrong' }}</span>
                </p>
                <p class="card-text">Question 3: What is 10 divided by 2? -
                    <span
                        class="text-warning">{{ $student->aptitude_question_3 == '5' ? $student->aptitude_question_3 . ' Your answer is correct' : $student->aptitude_question_3 . ' Your answer is wrong' }}</span>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Academic Performance</h5>
                        <canvas id="academicChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Skills and Interests</h5>
                        <canvas id="skillsChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Future Aspirations</h5>
                        <canvas id="aspirationsChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Mathematical Aptitude</h5>
                        <canvas id="aptitudeChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <a href="{{ url('/course') }}" class="btn btn-primary">Find course</a>
            </div>
        </div>

    </div>
    <script>
        // Dummy data for charts
        var randomData = function() {
            return Math.floor(Math.random() * 100) + 1;
        };

        var randomColor = function() {
            return '#' + Math.floor(Math.random() * 16777215).toString(16);
        };

        // Academic data with dummy values
        var academicData = {
            labels: ['Current Grades', 'Previous Records', 'Standardized Test Scores'],
            datasets: [{
                label: 'Academic Performance',
                data: [randomData(), randomData(), randomData()],
                backgroundColor: [randomColor(), randomColor(), randomColor()]
            }]
        };

        // Skills data with dummy values
        var skillsData = {
            labels: ['Extracurricular Activities', 'Special Skills', 'Access to Technology', 'Digital Literacy'],
            datasets: [{
                label: 'Skills and Interests',
                data: [randomData(), randomData(), randomData(), randomData()],
                backgroundColor: [randomColor(), randomColor(), randomColor(), randomColor()]
            }]
        };

        // Aspirations data with dummy values
        var aspirationsData = {
            labels: ['Career Interests', 'Higher Education Plans', 'Interests'],
            datasets: [{
                label: 'Future Aspirations',
                data: [randomData(), randomData(), randomData()],
                backgroundColor: [randomColor(), randomColor(), randomColor()]
            }]
        };

        // Aptitude data with dummy values
        var aptitudeData = {
            labels: ['Correct Answers', 'Incorrect Answers'],
            datasets: [{
                label: 'Mathematical Aptitude',
                data: [randomData(), randomData()],
                backgroundColor: [randomColor(), randomColor()]
            }]
        };

        // Create charts
        var academicChart = new Chart(document.getElementById('academicChart'), {
            type: 'bar',
            data: academicData,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var skillsChart = new Chart(document.getElementById('skillsChart'), {
            type: 'doughnut',
            data: skillsData
        });

        var aspirationsChart = new Chart(document.getElementById('aspirationsChart'), {
            type: 'bar',
            data: aspirationsData,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var aptitudeChart = new Chart(document.getElementById('aptitudeChart'), {
            type: 'pie',
            data: aptitudeData
        });
    </script>

</body>

</html>
