// $(document).ready(function() {
//     $('#myForm').submit(function(e) {
//         e.preventDefault(); // Prevent the form from being submitted

//         // Clear previous error messages
//         $('.error').text('');

//         // Basic validation
//         var name = $('#name').val();
//         var email = $('#email').val();
//         var phone = $('#phone').val();

//         if (name === '') {
//             $('#nameError').text('Please enter your name');
//         }

//         // Check for a valid email pattern
//         var emailPattern = /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/;
//         if (email === '') {
//             $('#emailError').text('Please enter your email');
//         } else if (!emailPattern.test(email)) {
//             $('#emailError').text('Please enter a valid email address');
//         }

//         const phone = $('#phone').val().replace(/[^0-9]/g, ''); // Remove non-numeric characters
//         if (phone.length !== 10) {
//             alert('Phone number must be a 10-digit mobile number.');
//             e.preventDefault(); // Prevent form submission
//             return;
//         }

//         // If there are no errors, you can submit the form
//         if (name !== '' && email !== '' && emailPattern.test(email) && phone !== '') {
//             alert('Form submitted successfully!');
//             // You can add code here to submit the form data to the server
//         }
//     });
// });

$(document).ready(function() {
    $('#myForm').submit(function(e) {
        // Reset error messages
        $('#nameError, #emailError, #phoneError').text('');

        // Custom validation: Check if the "Name" field is not empty and matches the specified format
        const name = $('#name').val().trim();
        if (name === '' || !/^[A-Za-z\s]+$/.test(name)) {
            $('#nameError').text('Name must contain only letters.');
            e.preventDefault(); // Prevent form submission
        }

        // Custom validation: Check if the "Email" field is a valid email address
        const email = $('#email').val().trim();
        const emailPattern = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
        if (!emailPattern.test(email)) {
            $('#emailError').text('Please enter a valid email address.');
            e.preventDefault(); // Prevent form submission
        }

        // Custom validation: Check if the "Phone Number" is a 10-digit integer
        const phone = $('#phone').val().replace(/[^0-9]/g, ''); // Remove non-numeric characters
        if (phone.length !== 10 || !/^\d{10}$/.test(phone)) {
            $('#phoneError').text('Phone number must be a 10-digit mobile number.');
            e.preventDefault(); // Prevent form submission
        }
    });
    
    // this section is for read more
    $('#moreText').hide(); // Hide the content by default
    $('#readMoreBtn').click(function() {
      $('#moreText').slideToggle();
      $(this).text(function(i, text) {
        return text === "Read More" ? "Read Less" : "Read More";
      });
    });


    // 1
    $('#moreText1').hide(); // Hide the content by default
    $('#readMoreBtn1').click(function() {
      $('#moreText1').slideToggle();
      $(this).text(function(i, text) {
        return text === "Read More" ? "Read Less" : "Read More";
      });
    });

    // 2
    $('#moreText2').hide(); // Hide the content by default
    $('#readMoreBtn2').click(function() {
      $('#moreText2').slideToggle();
      $(this).text(function(i, text) {
        return text === "Read More" ? "Read Less" : "Read More";
      });
    });

    // 3
    $('#moreText3').hide(); // Hide the content by default
    $('#readMoreBtn3').click(function() {
      $('#moreText3').slideToggle();
      $(this).text(function(i, text) {
        return text === "Read More" ? "Read Less" : "Read More";
      });
    });
    // 4
    $('#moreText4').hide(); // Hide the content by default
    $('#readMoreBtn4').click(function() {
      $('#moreText4').slideToggle();
      $(this).text(function(i, text) {
        return text === "Read More" ? "Read Less" : "Read More";
      });
    });
    // 5
    $('#moreText5').hide(); // Hide the content by default
    $('#readMoreBtn5').click(function() {
      $('#moreText5').slideToggle();
      $(this).text(function(i, text) {
        return text === "Read More" ? "Read Less" : "Read More";
      });
    });
    // 6
    $('#moreText6').hide(); // Hide the content by default
    $('#readMoreBtn6').click(function() {
      $('#moreText6').slideToggle();
      $(this).text(function(i, text) {
        return text === "Read More" ? "Read Less" : "Read More";
      });
    });


    // scroll to top bar
    $('.scroll-to-top').hide();

    // Show the button when scrolling down
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.scroll-to-top').fadeIn();
      } else {
        $('.scroll-to-top').fadeOut();
      }
    });
  
    // Smooth scroll to the top
    $('.scroll-to-top').click(function() {
      $('html, body').animate({ scrollTop: 0 }, 'slow');
      return false;
    });

    $(".get-price-offer").click(function() {
        $("#form-popup").css("display", "block");
    });

    // Close the form popup when the close button is clicked
    $("#close-button").click(function() {
        $("#form-popup").css("display", "none");
    });



    
 

});
