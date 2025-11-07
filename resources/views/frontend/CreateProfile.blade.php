<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skill Sewa</title>
    <script src="https://cdn.tailwindcss.com"></script>


    <link href="frontend/style.css" rel="stylesheet">
    <link href="frontend/chooseYourPath.css" rel="stylesheet">
    <link href="frontend/hero.css" rel="stylesheet">
    <link href="frontend/footer.css" rel="stylesheet">
    <link href="frontend/createProfile.css" rel="stylesheet">







    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>


<body>

<x-frontend-navbar/>
 <section class="create-profile">
      <div class="create-profile__welcome">
        <h1>Welcome to Skill Sewa</h1>
        <p>
          Let’s build your professional identity. Showcase your skills,
          experience, and achievements to connect with top companies and unlock
          new opportunities.
        </p>
      </div>

      <form class="create-profile__form" action="{{route('frontend.professionalRequest')}}" method="post">
        @csrf
        {{-- {/* Basic Info */} --}}
        <div class="form-card">
          <h2>Basic Information</h2>
          <div class="form-group">
            <label>Name</label>
            <input type="text" placeholder="e.g., Sakil Shrestha" name="name"  />
          </div>
          <div class="form-group">
            <label>Contact</label>
            <input type="text" placeholder="e.g., 9829055529" name="contact"  />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" placeholder="e.g., example@gmail.com" name="email"  />
          </div>

           <div class="form-group">
            <label>Address</label>
            <input type="text" placeholder="e.g., Kathmandu, Nepal" name="address"/>
          </div>

        </div>

        {{-- {/* Job info */}
        <div class="form-card">
          <h2>Job Informations</h2>
          <div class="form-group">
            <label>Professional Title</label>
            <input type="text" placeholder="e.g., Full Stack Developer" name="job_title"  />
          </div>
          <div class="form-group">
            <label>Hourly Rate (Npr)</label>
            <input type="number" placeholder="e.g., 25" name="hourly_rate"/>
          </div>
          <div class="form-group">
            <label>Professional Bio</label>
            <textarea placeholder="Brief description of your skills, experience, and goals" name="description"></textarea>

          </div>
          <div class="form-group">
            <label>Availability</label>
            <select>
              <option value="">Select availability</option>
              <option value="full-time">Full-time</option>
              <option value="part-time">Part-time</option>
              <option value="freelance">Freelance</option>
            </select>
          </div>

        </div>
        {/* Skills */}
        <div class="form-card">
          <h2>Skills & Expertise</h2>
          <div class="form-group">
            <label>Skills</label>
            <input
              type="text"
              placeholder="e.g., React, Laravel, UI/UX Design"
            />
          </div>
        </div>

        {/* Experience */}
        <div class="form-card">
          <h2>Experience & Education</h2>
          <div class="form-group">
            <label>Years of Experience</label>
            <input type="number" placeholder="e.g., 3" />
          </div>
          <div class="form-group">
            <label>Education</label>
            <input
              type="text"
              placeholder="School, certification, or relevant education"
            />
          </div>
          <div class="form-group">
            <label>Certifications</label>
            <input type="text" placeholder="e.g., AWS Certified Developer" />
          </div>
        </div>

        {/* Portfolio */}
        <div class="form-card">
          <h2>Portfolio & Work Samples</h2>
          <div class="form-group">
            <label>Portfolio URL</label>
            <input type="url" placeholder="https://yourportfolio.com" />
          </div>
          <div class="form-group">
            <label>Upload Work Samples</label>
            <input type="file" multiple />
          </div>
        </div> --}}

        <button type="submit" class="btn btn--blue btn-widht">
          Send Request
        </button>
      </form>
    </section>

    </body>
</html>
