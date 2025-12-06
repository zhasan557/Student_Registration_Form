<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Student Registration</title>

  <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            background: #fff;
            padding: 25px 30px;
            width: 350px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        label {
            font-weight: bold;
            color: #444;
        }

        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            background: #fff;
            box-sizing: border-box;
            appearance: none; 
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        /* Add dropdown arrow */
        select {
            background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg width='16' height='16' viewBox='0 0 20 20' fill='%23666'%3E%3Cpath d='M5.5 7l4.5 4 4.5-4'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 14px;
        }

        /* Focus styles same as input focus */
        input[type="text"]:focus,
        input[type="email"]:focus,
        select:focus {
            border-color: #0056d6;
            outline: none;
            box-shadow: 0 0 5px rgba(0,86,214,0.3);
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #0056d6;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #0041a8;
        }
  </style>
</head>

<body>
    <h2>Student Registration Form</h2>
    <form action="process.php" method="POST">
        
        <label>Full Name:</label>
        <input type="text" name="fullname" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Phone:</label>
        <input type="text" name="phone" required>

        <label>Department:</label>
        <select name="department" required>
            <option value="">-- Select Department --</option>
            <option value="CSE">CSE</option>
            <option value="SWE">SWE</option>
            <option value="EEE">EEE</option>
            <option value="BBA">BBA</option>
            <option value="English">English</option>
        </select>

        <label>Semester:</label>
        <select name="semester" required>
            <option value="">-- Select Semester --</option>
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
            <option value="4th">4th</option>
            <option value="5th">5th</option>
            <option value="6th">6th</option>
            <option value="7th">7th</option>
            <option value="8th">8th</option>
            <option value="9th">9th</option>
            <option value="10th">10th</option>
            <option value="11th">11th</option>
            <option value="12th">12th</option>
        </select>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>
