<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Form</title>
</head>
<body>
    
<div class="container-md">
    <h1>Students Grades</h1>

    <form action="/compute-grades" method="POST">
    <input type="hidden" name="student_1" value="{{ $student_1 }}">
    <input type="hidden" name="student_2" value="{{ $student_2 }}">
    <input type="hidden" name="student_3" value="{{ $student_3 }}">
    <input type="hidden" name="student_4" value="{{ $student_4 }}">
    <input type="hidden" name="student_5" value="{{ $student_5 }}">
    
    @csrf
    <div class="row">
        <label>Student: {{ $student_1 }}</label>
        <div class="col col-md-6">
            <label>Midterm Grade</label>
            <input type="number" name="student1_midterm" class="form-control">
        </div>

        <div class="col col-md-6">
            <label>Finals Grade</label>
            <input type="number" name="student1_midterm" class="form-control">
        </div>
    </div>
    
    <div class="row">
        <label>Student: {{ $student_2 }}</label>
        <div class="col col-md-6">
            <label>Midterm Grade</label>
            <input type="number" name="student1_midterm" class="form-control">
        </div>

        <div class="col col-md-6">
            <label>Finals Grade</label>
            <input type="number" name="student1_midterm" class="form-control">
        </div>
    </div>

    <div class="row">
        <label>Student: {{ $student_3 }}</label>
        <div class="col col-md-6">
            <label>Midterm Grade</label>
            <input type="number" name="student1_midterm" class="form-control">
        </div>

        <div class="col col-md-6">
            <label>Finals Grade</label>
            <input type="number" name="student1_midterm" class="form-control">
        </div>
    </div>

    <div class="row">
        <label>Student: {{ $student_4 }}</label>
        <div class="col col-md-6">
            <label>Midterm Grade</label>
            <input type="number" name="student1_midterm" class="form-control">
        </div>

        <div class="col col-md-6">
            <label>Finals Grade</label>
            <input type="number" name="student1_midterm" class="form-control">
        </div>
    </div>
    
    <div class="row">
        <label>Student: {{ $student_5 }}</label>
        <div class="col col-md-6">
            <label>Midterm Grade</label>
            <input type="number" name="student1_midterm" class="form-control">
        </div>

        <div class="col col-md-6">
            <label>Finals Grade</label>
            <input type="number" name="student1_midterm" class="form-control">
        </div>
    </div>

    <button class="btn btn-primary btn-lg" type="submit">
        Compute Grades
    </button>


    </form>
</div>

</body>
</html>