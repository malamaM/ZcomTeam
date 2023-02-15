//checks validity of email and submits the email to company email if valid if not it creates an error
function submitEmail(event) {
    event.preventDefault();
    const email = document.getElementById("email").value;
    if (isValidEmail(email)) {
      const emailBody = `Email: ${email}`;
      const emailSubject = "New email from contact form";
      const emailRecipient = "yourdesignatedemail@example.com";
      const mailtoLink = `mailto:${emailRecipient}?subject=${emailSubject}&body=${emailBody}`;
      window.location.href = mailtoLink;
    } else {
      alert("Please enter a valid email address.");
    }
  }
  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
