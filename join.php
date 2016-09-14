<?hh

require_once('vendor/autoload.php');

class JoinPage extends BasePage {

    public function getPageTitle(): string {
        return 'Join';
    }

    public function getPageContent(): :xhp {
        return
          <ui:root>
            <ui:row>
              <ui:col>
                <h1 class="ui dividing header">Join CoRE</h1>
                <div class="ui segment">
                  <p>Interested in joining CoRE? Great! CoRE is always looking for new students to join.</p>
                  <p>The 2016-2017 application is closed! Applicants have been contacted.</p>
                  <p>If you're interested in joining CoRE, feel free to apply! You'll be placed on a waitlist for this academic year and future academic years. We'll contact you if a spot opens up. Please follow the link below to the google form and fill it out as best as you can!</p>
                  <p class="centering"><a href="https://docs.google.com/forms/d/1AmQKmXJFtsr5p6vlU1bDeuY578AQKr6PI6gJppyEfBI/viewform?c=0&w=1">2016-2017 Application</a></p>
                  <p>We look forward to meeting all of you!</p>
                </div>
              </ui:col>
            </ui:row>
          </ui:root>;
    }
}

$page = new JoinPage();
echo $page->getPage();
