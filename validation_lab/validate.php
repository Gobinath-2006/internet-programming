<?php

$errors = array();

$fullname = trim($_POST['fullname'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$ccnumber = trim($_POST['ccnumber'] ?? '');
$phone = trim($_POST['phone'] ?? '');


if ($fullname == '') {
    $errors[] = "Full Name is required.";
} elseif (!preg_match("/^[A-Za-z ]{3,50}$/", $fullname)) {
    $errors[] = "Full Name must contain only letters and spaces.";
}


if ($email == '') {
    $errors[] = "Email is required.";
} elseif (!preg_match("/^[\w\.-]+@[\w\.-]+\.\w{2,4}$/", $email)) {
    $errors[] = "Invalid email format.";
}


if ($password == '') {
    $errors[] = "Password is required.";
} elseif (strlen($password) < 8) {
    $errors[] = "Password must contain at least 8 characters.";
}


if ($ccnumber == '') {
    $errors[] = "Credit Card Number is required.";
} elseif (!preg_match("/^[0-9]{16}$/", $ccnumber)) {
    $errors[] = "Credit Card Number must contain exactly 16 digits.";
}


if ($phone == '') {
    $errors[] = "Phone Number is required.";
} elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
    $errors[] = "Phone Number must contain exactly 10 digits.";
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Registration Result</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #eef2ff, #dbeafe);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .card {
            width: 100%;
            max-width: 550px;
            background: white;
            padding: 40px;
            border-radius: 18px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }

        .success-icon {
            width: 65px;
            height: 65px;
            background: #dcfce7;
            color: #16a34a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 32px;
        }

        .title {
            text-align: center;
            color: #166534;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #64748b;
            margin-bottom: 30px;
        }

        .details {
            background: #f8fafc;
            border-radius: 12px;
            padding: 20px;
        }

        .detail {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 14px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .detail:last-child {
            border-bottom: none;
        }

        .label {
            font-weight: bold;
            color: #475569;
        }

        .value {
            color: #1e293b;
            text-align: right;
            word-break: break-word;
        }

        .back-btn {
            display: block;
            text-align: center;
            text-decoration: none;
            margin-top: 25px;
            padding: 13px;
            background: #4f46e5;
            color: white;
            border-radius: 8px;
            font-weight: bold;
        }

        .back-btn:hover {
            background: #4338ca;
        }

        .error-title {
            text-align: center;
            color: #b91c1c;
            margin-bottom: 20px;
        }

        .error {
            background: #fef2f2;
            color: #b91c1c;
            padding: 12px;
            margin-bottom: 10px;
            border-radius: 8px;
        }

    </style>

</head>

<body>

<div class="card">

<?php if (!empty($errors)) { ?>

    <h1 class="error-title">Registration Failed</h1>

    <?php foreach ($errors as $error) { ?>

        <div class="error">
            <?php echo htmlspecialchars($error); ?>
        </div>

    <?php } ?>

    <a href="index.html" class="back-btn">
        Go Back to Registration
    </a>

<?php } else { ?>

    <div class="success-icon">✓</div>

    <h1 class="title">Registration Successful!</h1>

    <p class="subtitle">
        Your details have been successfully validated.
    </p>

    <div class="details">

        <div class="detail">
            <span class="label">Full Name</span>
            <span class="value">
                <?php echo htmlspecialchars($fullname); ?>
            </span>
        </div>

        <div class="detail">
            <span class="label">Email</span>
            <span class="value">
                <?php echo htmlspecialchars($email); ?>
            </span>
        </div>

        <div class="detail">
            <span class="label">Password</span>
            <span class="value">
                <?php echo htmlspecialchars($password); ?>
            </span>
        </div>

        <div class="detail">
            <span class="label">Credit Card</span>
            <span class="value">
                <?php echo htmlspecialchars($ccnumber); ?>
            </span>
        </div>

        <div class="detail">
            <span class="label">Phone Number</span>
            <span class="value">
                <?php echo htmlspecialchars($phone); ?>
            </span>
        </div>

    </div>

    <a href="index.html" class="back-btn">
        Register Another User
    </a>

<?php } ?>

</div>

</body>
</html>