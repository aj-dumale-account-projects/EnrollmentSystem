
<?php

$page_title = "Signup";
include_once "layout_head.php";
?>
<!-- sign up form here -->

<form action="" method="POST">
    <div class="container">
        <div class="box-container">
            <div class="header">
                <h1>Sign Up</h1>
                <span><p>Please Fill in this form to create an account!</p></span>
            </div>
            <table>
                <tr>
                    <td>
                        <label id="signup">First Name</label></br>
                        <input type="text" required>
                    </td>
                </tr>
                <tr>
                <td>
                    <label id="signup">Last Name</label></br>
                        <input type="text" required>
                    </td>
                </tr>
                <tr>
                <td>
                    <label id="signup">Email Address</label></br>
                        <input type="email" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="btn-signup">
                            <Button type="submit">Sign Up</Button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </div>
</form>

<?php include_once "layout_foot.php"; ?>