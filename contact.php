<div class="col-10 col-md-7 Touch1">
  <div class="card p-4 w-100 ms-0 ms-md-5">
    <h4 class="p-3">Get In Touch</h4>
    <p class="p-3 mr-ms-5">Our dedicated customer support team is available around the clock to help you with any questions or concerns.</p>

    <form action="contact.php" method="POST">
      <div class="row">
        <div class="col-6">
          <input type="text" name="name" placeholder="Your Name" class="form-control text-center" required>
        </div>
        <div class="col-6">
          <input type="email" name="email" placeholder="Your Email" class="form-control text-center" required>
        </div>
      </div>

      <div class="col-12 mt-3">
        <input type="text" name="subject" placeholder="Subject" class="form-control text-center" required>
      </div>

      <div class="col-12 mt-3">
        <textarea name="message" placeholder="Message" class="form-control" required></textarea>
      </div>

      <div class="col-12 button_class">
        <button type="submit" class="rounded-pill mt-5">Send Message</button>
      </div>
    </form>
  </div>
</div>
