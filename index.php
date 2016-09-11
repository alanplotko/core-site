<?hh

require_once('vendor/autoload.php');

class HomePage extends BasePage {
  public function getPageTitle(): string {
    return 'Home';
  }

  public function getPageContent(): :xhp {
    return
      <ui:root>
        <ui:row>
          <ui:col>
            <p>CoRE is a special interest housing community located in the Dickinson Community in Binghamton University. We are a collection of students that share common interests in Computers, Robotics, and Engineering (CoRE!). Together we create an awesome and diverse student body with majors ranging from English and Geology to Computer Science and Mechanical Engineering. Together we work as a group to promote technological awareness both in ourselves and in our community.</p>
            <p>You may be asking yourself, why live on CoRE? Well, for starters, you get to live with people that are just like you! We all like the same things and share commons interests, we can guarantee you will be making friends right away. Our residential floor is the most social and tight knit floor on campus, hands down. When we get visitors from other floors, they are shocked to see how social and friendly our floor really is.</p>
            <p>So if you like computers, robotics or engineering and you also like making friends and being a part of awesome events that help out your community, CoRE is the place for you. We guarantee it will take your experiences at Binghamton University to a whole new level both academically, and socially. So please, take some time and check out our awesome events, read a little about our history, or learn about joining CoRE and check out an application.</p>
          </ui:col>
        </ui:row>
      </ui:root>;
  }
}

$page = new HomePage();
echo $page->getPage();
