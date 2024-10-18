<?php 
session_start();
include("header.php");

$username = "";
$userFullName = "";
$email = "";
$firstName = "";
$lastName = "";
$phoneNumber = "";
$bio = "";
$profilePic = "";

if (isset($_GET['profile_username'])) {
    $username = $_GET['profile_username'];
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");

    if (!$user_details_query) {
        die("Database query failed: " . mysqli_error($con));
    }

    if (mysqli_num_rows($user_details_query) > 0) {
        $user_array = mysqli_fetch_array($user_details_query);
        $userFullName = $user_array['first_name'] . " " . $user_array['last_name'];
        $email = $user_array['email'];
        $firstName = $user_array['first_name'];
        $lastName = $user_array['last_name'];
        $phoneNumber = $user_array['phoneNumber'];
        $bio = $user_array['bio'];
        $profilePic = $user_array['profilePic'];
    } else {
        echo "User not found.";
    }
}

if (isset($_POST['profile-updateBtn'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $bio = $_POST['bio'];

    $update_query = "UPDATE users SET first_name=?, last_name=?, phoneNumber=?, bio=? WHERE username=?";
    $stmt = $con->prepare($update_query);
    $stmt->bind_param("sssss", $firstName, $lastName, $phoneNumber, $bio, $username);

    if ($stmt->execute()) {
        header("Location: $username");
        exit();
    } else {
        echo "Error updating profile: " . mysqli_error($con);
    }
}

$editBtn = "";
if (isset($_SESSION['username'])) {
    $userLoggedIn = $_SESSION['username'];
    if ($userLoggedIn == $username) {
        $editBtn = '<div class="edit-btn" onclick="openEdit()"><i class="fas fa-edit"></i>Edit</div>';
    }
}
?>

<main class="profile-body">
    <div class="backdrop"></div>
    <div class="modal">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?profile_username=' . urlencode($username); ?>" method="POST">
            <label for="firstName">First name:</label>
            <input type="text" name="firstName" value="<?php echo htmlspecialchars($firstName); ?>" autocomplete="off">
            <label for="lastName">Last name:</label>
            <input type="text" name="lastName" value="<?php echo htmlspecialchars($lastName); ?>" autocomplete="off">
            <label for="email">Email:</label>
            <input type="email" name="email" disabled value="<?php echo htmlspecialchars($email); ?>">
            <label for="phoneNumber">Phone:</label>
            <input type="text" name="phoneNumber" value="<?php echo htmlspecialchars($phoneNumber); ?>" autocomplete="off">
            <label for="bio">Bio:</label>
            <textarea name="bio" cols="30" rows="10" class="bio"><?php echo htmlspecialchars($bio); ?></textarea>
            <div>
                <div class="closeBtn" onclick="closeModal()">Cancel</div>
                <input type="submit" value="Update" class="profile-updateBtn" name="profile-updateBtn">
            </div>
        </form>
    </div>
    <section class="side-bar">
        <div class="profile__image">
            <a href="upload.php"><img src="<?php echo htmlspecialchars($profilePic); ?>" alt="Profile Picture"></a>
        </div>
        <a href="upload.php">Add a new profile picture</a>
        <p>Username: <?php echo htmlspecialchars($username); ?></p>
    </section>
    <section class="profile">
        <span class="titles">Name:</span>
        <p><?php echo htmlspecialchars($userFullName); ?></p>
        <span class="titles">Email:</span>
        <p><?php echo htmlspecialchars($email); ?></p>
        <span class="titles">Phone:</span>
        <p><?php echo htmlspecialchars($phoneNumber); ?></p>
        <span class="titles">Bio:</span>
        <p class="bio"><?php echo htmlspecialchars($bio); ?></p>
        <?php echo $editBtn; ?>
    </section>
    <div class="clear"></div>
</main>

<script>
    function openEdit() {
        document.querySelector('.profile-body .modal').style.display = 'block';
        document.querySelector('.backdrop').style.display = 'block';
    }

    function closeModal() {
        document.querySelector('.profile-body .modal').style.display = 'none';
        document.querySelector('.backdrop').style.display = 'none';
    }
</script>
</body>
</html>
