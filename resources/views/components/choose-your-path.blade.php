 <section class="choose-path">
      <h2 class="choose-path__title">
        Choose Your <span class="highlight">Path</span>
      </h2>
      <p class="choose-path__subtitle">
        Whether you're a skilled professional looking for opportunities or a
        company <br /> seeking talent, we have the perfect solution for you.
      </p>

      <div class="choose-path__cards">
         {{-- Professional Card --}}
        <div class="path-card">
          <div class="path-card__icon path-card__icon-professional">
            <img
              src="frontend/image/professional-icon.svg"
              alt="Professional Icon"
            />
          </div>

          <h3>I'm a Professional</h3>
          <p>Showcase your IT skills and get discovered by hrefp companies.</p>
          <ul>
            <li>Create detailed skill portfolio</li>
            <li>Showcase projects and achievements</li>
            <li>Get hired based on skills</li>
            <li>Professional profile verification</li>
          </ul>
          <a href="{{route('CreateProfile')}}" class="btn btn--blue">
            <span>Create Professional Profile</span>
            <img src="frontend/image/arrow-right.svg" alt="Hiring Icon" />
          </a>
        </div>

     {{-- Hiring Card  --}}
        <div class="path-card">
          <div class="path-card__icon path-card__icon-hirer">
            <img src="frontend/image/hiring-icon.svg" alt="Hiring Icon" />
          </div>

          <h3>I'm Hiring</h3>
          <p>Find and hire the best IT talent for your projects.</p>
          <ul>
            <li>Post job requirements easily</li>
            <li>Browse skilled professionals</li>
            <li>Direct candidate communication</li>
            <li>Skill-based filtering</li>

          </ul>
          <a href="/start-hiring" class="btn btn--green btn-width">
            <span>Start Hiring today</span>
            <img src="frontend/image/arrow-right.svg" alt="Hiring Icon" />
          </a>
        </div>
      </div>
    </section>




