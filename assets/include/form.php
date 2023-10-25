<form id="myForms" class="mt-5 mb-5" method="post" action= "mail.php">
    <h2 class="text-center">Contact us</h2>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
        <span id="nameError" class="error text-danger"></span>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
        <span id="emailError" class="error text-danger"></span>
    </div>
    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" class="form-control" id="phone" placeholder="Your Phone Number" name="number">
        <span id="phoneError" class="error text-danger"></span>
    </div>
    <input type="hidden" id="currentUrl" name="currentUrl" value="">
    <input value="submit" type="submit" class="btn btn-primary my-btn" name="submit">
</form>

<?php 
    include "js.php"
?>



<script>
    $(document).ready(function() {
    // Populate the hidden field with the current page's URL
    $("#currentUrl").val(window.location.href);

    // Handle form submission
    $("#myForm").submit(function(e) {
        e.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();

        $.ajax({
            type: "POST",
            url: "mail.php",
            data: {
                name: name,
                email: email,
                phone: phone,
                currentUrl: $("#currentUrl").val() // Include the current URL
            },
            success: function(response) {
                alert(response); // Show a success message
                // Redirect the user back to the current page
                window.location.href = $("#currentUrl").val();
            },
            error: function(xhr, status, error) {
                alert("Error: " + error);
            }
        });
    });
});

</script>

<?php
if(isset($_POST['currentUrl'])) {
    header("Location: " . $_POST['currentUrl']);
    exit;
}
?>