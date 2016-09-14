<?hh

require_once('vendor/autoload.php');

class HistoryPage extends BasePage {
  public function getPageTitle(): string {
    return 'History';
  }

  public function getPageContent(): :xhp {
    return
      <ui:root>
        <ui:row>
          <ui:col>
            <h1 class="ui dividing header">History of CoRE and the Dickinson Community</h1>
            <div class="ui segment">
              <p>In the Spring of 2013, the CoRE system administrator was attempting to fix a problem with our CoRE server, codenamed Ziggy. While attempting to fix the problem he stumbled upon a few interesting looking folders on the server. Upon further investigation, they turned out to be part a very old Dickinson Community webpage that CoRE had created and hosted for the Dickinson Community. On one of the pages labeled "A Brief History of Dickinson" we found this information, "Spring 1997 - Dickinson community launches the Dickinson website created by members of O'Connor Hall's CoRE module. Dickinson is the first community to have a website up and running."</p>
              <p>A truly exciting discovery, we rummaged through all of the pages and were shocked at some of the information we found had been kept. There are records of faculty masters and fellows lunch faculty members from the mid 90's, complete lists of RA Staff members in each of the residence halls, and even building descriptions written by the current building RD's from 1997. Complete records of every event held throughout the year categorized down to the building that they were held in and the RA that held them. Most of it is information that nobody else likely has access to, an awesome discovery indeed.</p>
              <p>Use the link below to visit the website as it was in its original state on the CoRE server. We have preserved everything that we could and we are currently working on fixing any and all broken links that no longer work. Please visit and we hope that you find it as awesome as we do and encourage you to share in our excitement at such crucial discovery!</p>
              <p><a href="http://core.binghamton.edu/dickinson_history">Old Dickinson Community Page</a></p>
              <p>We have begun work on a site map that will have all of the pages categorized so that you can find pages more easily. Work on that is ongoing, we plan on adding descriptions of exactly what is on each page. Use the link below to get to what we have worked on so far.</p>
              <p><a href="http://core.binghamton.edu/index.php?page=oldsitemap">Old Dickinson Community Site Map</a></p>
            </div>
            <h1 class="ui dividing header">Important Achievements</h1>
            <h2>The ResCon Program</h2>
            <div class="ui segment">
              <p>If you live on campus and you ever have problems with your laptop, desktop, phone, tablet, anything electronic, you can get help from the ResCon progrm. The ResCon program is essentially a student run IT service that was created a number of years ago to help students fix their computer problems. It is a very reputable group on campus. We did some digging on our CoRE server and we found some emails from the school webadmin to CoRE asking how to fix problems on campus. We also found that all of the original ResCon's were CoRE members, which leads us to believe that CoRE actually played a role in starting the ResCon program.</p>
            </div>
            <h2>Dickinson Community and Dickinson Town Council</h2>
            <div class="ui segment">
              <p>If you read the section above titled History of CoRE and the Dickinson Community then you will already know this information. CoRE created and hosted a website for the Dickinson Community from 1997 to 1999, making Dickinson the first community to hit the internet. We also had a portion of that website sectioned off for the Dickinson Town Council, it had links to their constitution, voting rights, and other procedural documents.</p>
            </div>
            <h2>The Longest Surviving Special Interest Housing Group</h2>
            <div class="ui segment">
              <p>CoRE is one of the few and the oldest special interest housing groups on campus, with our roots dating back to 1991. In the past, there were many different special interest housing groups until the school decided to start getting rid of all of them. CoRE fought back with all its might and won, continuing on still today. We have a very large alumni base because of our age, many of whom live in Binghamton still. They are always there to give advice and in some cases, even offer jobs! They are also how we pass on our history. Each year at the CoRE Lore dinner, the alumni are there to verbally pass on the history of CoRE to the new members. To learn more about the CoRE Lore dinner, visit the events page.</p>
            </div>
          </ui:col>
        </ui:row>
      </ui:root>;
  }
}

$page = new HistoryPage();
echo $page->getPage();
