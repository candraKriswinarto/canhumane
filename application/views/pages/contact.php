<div class="container">
  <section id="contact">
    <h2><?= $title; ?> Me</h2>
    <div class="contact-container">
      <div class="contact-form">
        <form action="#">
          <div class="name-form">
            <div>
              <label for="fname">First Name</label>
              <input type="text" name="fname" required>
            </div>
            <div>
              <label for="lname">Last Name</label>
              <input type="text" name="lname" required>
            </div>
          </div>
          <label for="email">Email</label>
          <input type="email" name="email" required>
          <label for="message">Message</label>
          <textarea name="message" placeholder="I'am interested in learning more about..."></textarea>

          <input type="submit" value="Send Message">
        </form>
      </div>

      <div class="contact-map">

      </div>
    </div>
  </section>
</div>