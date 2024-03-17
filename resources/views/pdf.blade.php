<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            text-align: center;

        }
        .footer {
            text-align: center;

        }
        .photo {

        }
        .photo img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            width: 200px;
        }

        .test1 {
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .test {
            margin: 0px;
        }

    </style>
</head>
<body>
    <div class="test1">
        <div class="test">
            <h1>User Profile</h1>
            <p>Name: {{ $name }}</p>
            <p>Email: {{ $email }}</p>
        </div>

        <div class="test">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla debitis praesentium necessitatibus tenetur impedit nam, in neque quisquam error earum porro odio voluptatibus itaque omnis saepe dolorem inventore sequi incidunt.</p>
        </div>
    </div>

     <div class="photo">
        <img src="data:image/jpeg;base64,{{ $photo }}" alt="User Photo">
    </div>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores hic ratione eveniet id sapiente ad temporibus officia, placeat reiciendis accusantium eius nulla totam non nam repudiandae nihil iure dolores odio.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores hic ratione eveniet id sapiente ad temporibus officia, placeat reiciendis accusantium eius nulla totam non nam repudiandae nihil iure dolores odio.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores hic ratione eveniet id sapiente ad temporibus officia, placeat reiciendis accusantium eius nulla totam non nam repudiandae nihil iure dolores odio.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores hic ratione eveniet id sapiente ad temporibus officia, placeat reiciendis accusantium eius nulla totam non nam repudiandae nihil iure dolores odio.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores hic ratione eveniet id sapiente ad temporibus officia, placeat reiciendis accusantium eius nulla totam non nam repudiandae nihil iure dolores odio.</p>




</body>
</html>
