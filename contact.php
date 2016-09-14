<?hh

require_once('vendor/autoload.php');

class ContactPage extends BasePage {
  public function getPageTitle(): string {
    return 'Contact';
  }

  public function getPageContent(): :xhp {
    return
    <ui:root>
      <ui:row>
        <ui:col>
          <h1 class="ui dividing header">Contact Us</h1>
          <div class="ui segment">
          </div>
        </ui:col>
      </ui:row>
    </ui:root>;
  }
}

$page = new ContactPage();
echo $page->getPage();
